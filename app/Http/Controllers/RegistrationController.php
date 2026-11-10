<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    /**
     * Batas ukuran foto KTP (dalam KB) yang benar-benar diterima PHP.
     *
     * Nilai 5 MB adalah batas aplikasi, tetapi PHP dapat menolak file yang
     * lebih kecil dari itu (upload_max_filesize). Jika file melebihi batas
     * PHP, Laravel melaporkan "failed to upload" tanpa penjelasan. Karena
     * itu batas validasi diselaraskan dengan konfigurasi server.
     */
    private function maxUploadKb(): int
    {
        $maxKb = 5 * 1024;

        $uploadMax = (int) ini_parse_quantity((string) ini_get('upload_max_filesize'));

        if ($uploadMax > 0) {
            $maxKb = min($maxKb, intdiv($uploadMax, 1024));
        }

        return max(256, $maxKb);
    }

    /**
     * Alias nama provinsi agar nilai "wilayah" pada API paket tetap cocok
     * meskipun ditulis singkat (mis. "Jawa Tengah" vs "jateng").
     *
     * @var array<string, array<int, string>>
     */
    private const REGION_ALIASES = [
        'jawa tengah' => ['jateng'],
        'yogyakarta'  => ['diy', 'jogja', 'jogjakarta', 'di yogyakarta'],
        'jawa timur'  => ['jatim'],
        'jawa barat'  => ['jabar'],
        'dki jakarta' => ['jakarta', 'jakarta raya'],
    ];

    /**
     * Normalisasi nama wilayah: huruf kecil, tanpa gelar wilayah, tanpa tanda baca.
     */
    private function normalizeRegionName(?string $value): string
    {
        $value = Str::lower(trim((string) $value));
        $value = preg_replace('/\b(provinsi|kabupaten|kota|daerah istimewa)\b/u', ' ', $value);
        $value = preg_replace('/[^a-z0-9]+/u', ' ', (string) $value);

        return trim(preg_replace('/\s+/u', ' ', (string) $value));
    }

    /**
     * Daftar nama yang dianggap sama dengan wilayah yang dipilih.
     *
     * @return array<int, string>
     */
    private function regionCandidates(?string $name, bool $withAliases = true): array
    {
        $normalized = $this->normalizeRegionName($name);

        if ($normalized === '') {
            return [];
        }

        if (! $withAliases) {
            return [$normalized];
        }

        $candidates = [$normalized];

        foreach (self::REGION_ALIASES as $canonical => $aliases) {
            $knownNames = array_map(
                fn (string $alias): string => $this->normalizeRegionName($alias),
                array_merge([$canonical], $aliases)
            );

            if (in_array($normalized, $knownNames, true)) {
                $candidates = array_merge($candidates, $knownNames);
            }
        }

        return array_values(array_unique(array_filter($candidates)));
    }

    /**
     * Cocokkan nilai "wilayah" pada paket dengan daftar kandidat wilayah.
     *
     * @param  array<string, mixed>  $package
     * @param  array<int, string>    $candidates
     */
    private function packageWilayahMatches(array $package, array $candidates): bool
    {
        $wilayah = trim((string) ($package['wilayah'] ?? ''));

        if ($candidates === [] || $wilayah === '') {
            return false;
        }

        foreach (preg_split('/\s*[,;\/|]\s*/', $wilayah) ?: [$wilayah] as $part) {
            if (in_array($this->normalizeRegionName($part), $candidates, true)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Ambil paket dari API publik lalu pilih sesuai wilayah.
     *
     * Paket kabupaten/kota diutamakan. Jika tidak ada paket khusus kabupaten/kota,
     * paket provinsi dipakai sebagai fallback.
     *
     * @return array<int, array<string, mixed>>
     */
    private function fetchPackages(?string $province, ?string $city): array
    {
        try {
            $response = Http::acceptJson()
                ->timeout(config('services.jernih.timeout', 15))
                ->get(config('services.jernih.package_url'));
        } catch (ConnectionException $exception) {
            report($exception);

            return [];
        }

        if ($response->failed()) {
            return [];
        }

        $packages = (array) $response->json('data', []);
        $cityCandidates = $this->regionCandidates($city, false);
        $provinceCandidates = $this->regionCandidates($province);

        $byCity = array_values(array_filter(
            $packages,
            fn ($package): bool => is_array($package)
                && $this->packageWilayahMatches($package, $cityCandidates)
        ));

        if ($byCity !== []) {
            return $byCity;
        }

        return array_values(array_filter(
            $packages,
            fn ($package): bool => is_array($package)
                && $this->packageWilayahMatches($package, $provinceCandidates)
        ));
    }

    /**
     * Ambil nama dan harga paket agar rincian pendaftaran menampilkan harga
     * sebenarnya, bukan "-".
     *
     * @return array{name: string, price: string}
     */
    private function resolvePackageDetails(string $packageId, ?string $province, string $city): array
    {
        $fallback = ['name' => 'Paket Internet', 'price' => '-'];

        foreach ($this->fetchPackages($province, $city) as $package) {
            if ((string) ($package['id'] ?? '') !== $packageId) {
                continue;
            }

            $speed = $package['kecepatan'] ?? null;
            $price = $package['harga'] ?? null;

            return [
                'name'  => $speed !== null ? 'Paket ' . $speed . ' Mbps' : 'Paket Internet',
                'price' => $price !== null
                    ? 'Rp ' . number_format((float) $price, 0, ',', '.')
                    : '-',
            ];
        }

        return $fallback;
    }

    /**
     * Daftar paket untuk wilayah yang dipilih (dipakai halaman registrasi).
     */
    public function packages(Request $request)
    {
        $validated = $request->validate([
            'province'  => ['nullable', 'string', 'max:100'],
            'provinsi'  => ['nullable', 'string', 'max:100'],
            'city'      => ['nullable', 'string', 'max:100'],
            'kabupaten' => ['nullable', 'string', 'max:100'],
            'kota'      => ['nullable', 'string', 'max:100'],
        ]);

        $province = $validated['province'] ?? $validated['provinsi'] ?? null;
        $city = $validated['city'] ?? $validated['kabupaten'] ?? $validated['kota'] ?? null;

        return response()->json([
            'data' => $this->fetchPackages($province, $city),
        ]);
    }

    public function create()
    {
        return view('pages.registration');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:100'],
            'nik'         => ['required', 'digits:16'],
            'ktp_photo'   => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:' . $this->maxUploadKb()],
            'phone'       => ['required', 'string', 'max:20', 'regex:/^[0-9+\-\s()]+$/'],
            'email'       => ['nullable', 'email', 'max:100'],
            'province'    => ['required', 'string', 'max:100'],
            'city'        => ['required', 'string', 'max:100'],
            'district'    => ['required', 'string', 'max:100'],
            'village'     => ['required', 'string', 'max:100'],
            'address'     => ['required', 'string', 'max:1000'],
            'rt'          => ['required', 'string', 'max:10'],
            'rw'          => ['required', 'string', 'max:10'],
            'postal_code' => ['nullable', 'digits_between:4,6'],
            'latitude'    => ['nullable', 'required_with:longitude', 'numeric', 'between:-90,90'],
            'longitude'   => ['nullable', 'required_with:latitude', 'numeric', 'between:-180,180'],
            'package'     => ['required', 'string', 'uuid'],
            'terms'       => ['accepted'],
        ], [
            'nik.required'       => 'NIK wajib diisi.',
            'nik.digits'         => 'NIK harus terdiri dari 16 digit angka.',
            'ktp_photo.required' => 'Foto KTP wajib diunggah.',
            'ktp_photo.uploaded' => 'Foto KTP gagal diunggah. Pastikan ukuran file tidak melebihi batas server, lalu coba unggah kembali.',
            'ktp_photo.max'      => 'Ukuran foto KTP terlalu besar (maksimal :max KB).',
            'ktp_photo.image'    => 'Foto KTP harus berupa gambar JPG atau PNG.',
            'ktp_photo.mimes'    => 'Foto KTP harus berformat JPG atau PNG.',
        ], [
            'name'        => 'nama lengkap',
            'nik'         => 'NIK',
            'ktp_photo'   => 'foto KTP',
            'phone'       => 'Nomor WhatsApp',
            'province'    => 'provinsi',
            'city'        => 'kabupaten / kota',
            'district'    => 'kecamatan',
            'village'     => 'desa / kelurahan',
            'address'     => 'alamat jalan',
            'rt'          => 'RT',
            'rw'          => 'RW',
            'postal_code' => 'kode pos',
            'package'     => 'paket internet',
            'terms'       => 'ketentuan dan kebijakan',
        ]);

        // File upload tidak boleh ikut disimpan ke session (tidak bisa diserialisasi).
        unset($validated['ktp_photo']);

        $package = $this->resolvePackageDetails(
            $validated['package'],
            $validated['province'],
            $validated['city']
        );

        $registration = array_merge($validated, [
            'package_name'        => $package['name'],
            'package_price'       => $package['price'],
            'registration_number' => 'JMK-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6)),
        ]);

        try {
            $response = Http::withHeaders(['X-API-KEY' => config('services.jernih.key')])
                ->acceptJson()
                ->timeout(config('services.jernih.timeout', 15))
                ->attach('foto_ktp', file_get_contents($request->file('ktp_photo')->getRealPath()), $request->file('ktp_photo')->getClientOriginalName())
                ->post(config('services.jernih.url'), [
                    'nama_lengkap'     => $validated['name'],
                    'no_whatsapp'      => $validated['phone'],
                    'no_telp'          => $validated['phone'],
                    'status'           => 'pending',
                    'nomer_id'         => $validated['nik'],
                    'tanggal_mulai'    => now()->toDateString(),
                    'tanggal_berakhir' => now()->addMonthNoOverflow()->toDateString(),
                    'paket_id'         => $validated['package'],
                    'rt'               => $validated['rt'],
                    'rw'               => $validated['rw'],
                    'alamat_jalan'     => $validated['address'],
                    'desa'             => $validated['village'],
                    'kecamatan'        => $validated['district'],
                    'kabupaten'        => $validated['city'],
                    'provinsi'         => $validated['province'],
                    'kode_pos'         => $validated['postal_code'] ?? null,
                    'latitude'         => isset($validated['latitude']) ? (float) $validated['latitude'] : null,
                    'longitude'        => isset($validated['longitude']) ? (float) $validated['longitude'] : null,
                ]);
        } catch (ConnectionException $exception) {
            report($exception);

            return back()->withInput()->withErrors([
                'registration' => 'Layanan pendaftaran sedang tidak dapat dihubungi. Silakan coba beberapa saat lagi.',
            ]);
        }

        if ($response->failed()) {
            Log::warning('JernihNet customer API failed', [
                'status'  => $response->status(),
                'body'    => $response->json() ?? $response->body(),
                'package' => $validated['package'],
            ]);

            if ($response->status() === 422) {
                $body    = $response->json();
                $message = $body['message'] ?? 'Data pendaftaran belum sesuai. Mohon periksa kembali.';

                $errors = [];
                if (! empty($body['errors']) && is_array($body['errors'])) {
                    foreach ($body['errors'] as $field => $messages) {
                        $errors['api_' . $field] = is_array($messages) ? implode(' ', $messages) : $messages;
                    }
                }

                return back()->withInput()->withErrors(
                    array_merge(['registration' => $message], $errors)
                );
            }

            return back()->withInput()->withErrors([
                'registration' => 'Pendaftaran gagal diproses. Silakan coba lagi atau hubungi admin JernihNet.',
            ]);
        }

        $request->session()->flash('registration', $registration);

        return redirect()->route('registration.success');
    }

    public function success(Request $request)
    {
        abort_unless($registration = $request->session()->get('registration'), 404);

        return view('pages.registration-success', compact('registration'));
    }
}
