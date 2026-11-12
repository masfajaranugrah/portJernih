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
     * Field API paket yang menyatakan wilayah pada tiap tingkat.
     *
     * API paket lama hanya mengirim satu field "wilayah". Field per tingkat
     * dipakai lebih dulu bila tersedia agar tingkat desa/kecamatan/kabupaten
     * tidak ambigu. "wilayah" menjadi fallback untuk data API lama.
     *
     * @var array<string, array<int, string>>
     */
    private const REGION_FIELDS = [
        'village'  => ['desa', 'kelurahan', 'village'],
        'district' => ['kecamatan', 'district'],
        'city'     => ['kabupaten', 'kota', 'city'],
        'province' => ['provinsi', 'province'],
    ];

    /**
     * Normalisasi nama wilayah: huruf kecil, tanpa gelar wilayah, tanpa tanda baca.
     */
    private function normalizeRegionName(?string $value): string
    {
        $value = Str::lower(trim((string) $value));
        $value = preg_replace('/\b(provinsi|kabupaten|kota|kecamatan|desa|kelurahan|daerah istimewa)\b/u', ' ', $value);
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
     * Cocokkan satu nilai wilayah (bisa berisi beberapa nama) dengan kandidat.
     *
     * @param  array<int, string>  $candidates
     */
    private function regionValueMatches(?string $value, array $candidates): bool
    {
        $value = trim((string) $value);

        if ($candidates === [] || $value === '') {
            return false;
        }

        foreach (preg_split('/\s*[,;\/|]\s*/', $value) ?: [$value] as $part) {
            if (in_array($this->normalizeRegionName($part), $candidates, true)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Cocokkan nilai "wilayah" pada paket dengan daftar kandidat wilayah.
     *
     * @param  array<string, mixed>  $package
     * @param  array<int, string>    $candidates
     */
    private function packageWilayahMatches(array $package, array $candidates): bool
    {
        return $this->regionValueMatches($package['wilayah'] ?? null, $candidates);
    }

    /**
     * Apakah paket sudah memakai field wilayah per tingkat (bukan hanya "wilayah").
     *
     * @param  array<string, mixed>  $package
     */
    private function packageHasExplicitRegion(array $package): bool
    {
        foreach (self::REGION_FIELDS as $fields) {
            foreach ($fields as $field) {
                if (trim((string) ($package[$field] ?? '')) !== '') {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Cocokkan paket pada satu tingkat wilayah (desa/kecamatan/kabupaten/provinsi).
     *
     * @param  array<string, mixed>  $package
     * @param  array<int, string>    $candidates
     */
    private function packageMatchesRegionLevel(array $package, string $level, array $candidates): bool
    {
        if ($candidates === []) {
            return false;
        }

        /* Data API lama hanya punya "wilayah", jadi dicocokkan per tingkat. */
        if (! $this->packageHasExplicitRegion($package)) {
            return $this->packageWilayahMatches($package, $candidates);
        }

        foreach (self::REGION_FIELDS[$level] ?? [] as $field) {
            if ($this->regionValueMatches($package[$field] ?? null, $candidates)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Tentukan teks promo dari data paket API.
     *
     * Jika API mengirim field "promo" (walau nilainya null), field itu yang
     * jadi acuan: null berarti promo disembunyikan. Deteksi dari nama paket
     * hanya dipakai untuk API lama yang belum punya field "promo".
     *
     * @param  array<string, mixed>  $package
     */
    private function packagePromoLabel(array $package): ?string
    {
        if (array_key_exists('promo', $package)) {
            $promo = $package['promo'];

            return is_string($promo) && trim($promo) !== '' ? trim($promo) : null;
        }

        $name = trim((string) ($package['nama_paket'] ?? ''));

        if ($name === '' || ! preg_match('/\b(promo|gratis|free|diskon|bonus|cashback)\b/i', $name)) {
            return null;
        }

        $label = $this->cleanPromoLabel($name);

        return $label !== '' ? $label : null;
    }

    private function cleanPromoLabel(string $label): string
    {
        /* Buang keterangan kecepatan karena sudah tampil sebagai judul card. */
        $label = preg_replace('/\b\d+\s*mbps\b/i', ' ', $label);
        $label = trim(preg_replace('/\s+/', ' ', (string) $label));

        /* Hindari "PROMO · Promo ..." yang berulang. */
        $label = preg_replace('/^\s*promo\s+/i', '', $label);

        return trim((string) $label);
    }

    /**
     * Ambil paket dari API publik lalu pilih sesuai wilayah.
     *
     * Urutan prioritas: desa/kelurahan, kecamatan, kabupaten/kota, lalu provinsi.
     * Tingkat pertama yang punya paket dipakai; tingkat di bawahnya tidak
     * dicampur agar paket desa tidak tercampur paket kecamatan/kabupaten.
     *
     * @return array<int, array<string, mixed>>
     */
    private function fetchPackages(?string $province, ?string $city, ?string $district = null, ?string $village = null): array
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

        $packages = array_map(
            fn ($package): mixed => is_array($package)
                ? array_merge($package, ['promo' => $this->packagePromoLabel($package)])
                : $package,
            (array) $response->json('data', [])
        );

        $levels = [
            'village'  => $this->regionCandidates($village, false),
            'district' => $this->regionCandidates($district, false),
            'city'     => $this->regionCandidates($city, false),
            'province' => $this->regionCandidates($province),
        ];

        foreach ($levels as $level => $candidates) {
            if ($candidates === []) {
                continue;
            }

            $matched = array_values(array_filter(
                $packages,
                fn ($package): bool => is_array($package)
                    && $this->packageMatchesRegionLevel($package, $level, $candidates)
            ));

            if ($matched !== []) {
                return $matched;
            }
        }

        return [];
    }

    /**
     * Ambil nama dan harga paket agar rincian pendaftaran menampilkan harga
     * sebenarnya, bukan "-".
     *
     * @return array{name: string, price: string}
     */
    private function resolvePackageDetails(
        string $packageId,
        ?string $province,
        string $city,
        ?string $district = null,
        ?string $village = null
    ): array {
        $fallback = ['name' => 'Paket Internet', 'price' => '-'];

        foreach ($this->fetchPackages($province, $city, $district, $village) as $package) {
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
            'district'  => ['nullable', 'string', 'max:100'],
            'kecamatan' => ['nullable', 'string', 'max:100'],
            'village'   => ['nullable', 'string', 'max:100'],
            'desa'      => ['nullable', 'string', 'max:100'],
            'kelurahan' => ['nullable', 'string', 'max:100'],
        ]);

        $province = $validated['province'] ?? $validated['provinsi'] ?? null;
        $city = $validated['city'] ?? $validated['kabupaten'] ?? $validated['kota'] ?? null;
        $district = $validated['district'] ?? $validated['kecamatan'] ?? null;
        $village = $validated['village'] ?? $validated['desa'] ?? $validated['kelurahan'] ?? null;

        return response()->json([
            'data' => $this->fetchPackages($province, $city, $district, $village),
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
            $validated['city'],
            $validated['district'],
            $validated['village']
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
