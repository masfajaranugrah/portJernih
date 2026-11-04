<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    private const PACKAGES = [
        'b0f299ef-5a5a-4b4c-a3a7-8708740f5f65' => ['name' => '10 Mbps', 'price' => 'Rp 100.000'],
        'c37583e2-744e-4f3e-84b2-d3824b38f8f4' => ['name' => '30 Mbps', 'price' => 'Rp 250.000'],
    ];

    public function create()
    {
        return view('pages.registration', ['packages' => self::PACKAGES]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:100'],
            'nik'         => ['required', 'digits:16'],
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
            'package'     => ['required', 'string', 'max:100'],
            'terms'       => ['accepted'],
            'package_name' => ['nullable', 'string', 'max:100'],
            'package_price' => ['nullable', 'string', 'max:50'],
        ], [], [
            'name'        => 'nama lengkap',
            'nik'         => 'Nomor KTP / NIK',
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

        $packageName = $validated['package_name'] ?? 'Paket Internet';
        $packagePrice = $validated['package_price'] ?? '-';

        $registrationNumber = 'JMK-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6));

        $registration = array_merge($validated, [
            'package_name'        => $packageName,
            'package_price'       => $packagePrice,
            'registration_number' => $registrationNumber,
        ]);

        $payload = [
            'nama_lengkap'     => $validated['name'],
            'no_whatsapp'      => $validated['phone'],
            'no_telp'          => $validated['phone'],
            'status'           => 'pending',
            'nomer_id'         => $registrationNumber,
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
        ];

        try {
            $response = Http::withHeaders(['X-API-KEY' => config('services.jernih.key')])
                ->acceptJson()
                ->asJson()
                ->timeout(config('services.jernih.timeout', 15))
                ->post(config('services.jernih.url'), $payload);
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
