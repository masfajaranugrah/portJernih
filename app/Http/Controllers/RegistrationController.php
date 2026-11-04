<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('pages.registration');
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
            'package'     => ['required', 'string', 'uuid'],
            'terms'       => ['accepted'],
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

        $registration = array_merge($validated, [
            'package_name'        => 'Paket Internet',
            'package_price'       => '-',
            'registration_number' => 'JMK-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6)),
        ]);

        $payload = [
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
