<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    private const PACKAGES = [
        '20' => ['name' => '20 Mbps', 'price' => 'Rp 150.000'],
        '30' => ['name' => '30 Mbps', 'price' => 'Rp 180.000'],
        '40' => ['name' => '40 Mbps', 'price' => 'Rp 220.000'],
        '50' => ['name' => '50 Mbps', 'price' => 'Rp 250.000'],
    ];

    private const MAGELANG_PRICES = [
        '20' => 'Rp 120.000',
        '30' => 'Rp 140.000',
        '40' => 'Rp 150.000',
        '50' => 'Rp 180.000',
    ];

    private const SUKOHARJO_PRICES = [
        '20' => 'Rp 120.000',
        '30' => 'Rp 140.000',
    ];

    public function create()
    {
        return view('pages.registration', ['packages' => self::PACKAGES]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'nik' => ['required', 'digits:16'],
            'phone' => ['required', 'string', 'max:20', 'regex:/^[0-9+\-\s()]+$/'],
            'email' => ['nullable', 'email', 'max:100'],
            'province' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:100'],
            'district' => ['required', 'string', 'max:100'],
            'village' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:1000'],
            'landmark' => ['required', 'string', 'max:500'],
            'latitude' => ['nullable', 'required_with:longitude', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'required_with:latitude', 'numeric', 'between:-180,180'],
            'package' => ['required', 'in:' . implode(',', array_keys(self::PACKAGES))],
            'terms' => ['accepted'],
        ], [], [
            'name' => 'nama lengkap', 'nik' => 'Nomor KTP / NIK', 'phone' => 'Nomor WhatsApp',
            'province' => 'provinsi', 'city' => 'kabupaten / kota', 'district' => 'kecamatan',
            'village' => 'desa / kelurahan', 'address' => 'alamat lengkap', 'landmark' => 'patokan lokasi',
            'package' => 'paket internet', 'terms' => 'ketentuan dan kebijakan',
        ]);

        if (str_contains(mb_strtolower($validated['city']), 'sukoharjo') && ! in_array($validated['package'], ['20', '30'], true)) {
            return back()->withInput()->withErrors([
                'package' => 'Untuk wilayah Sukoharjo, paket yang tersedia adalah 20 Mbps dan 30 Mbps.',
            ]);
        }

        $package = self::PACKAGES[$validated['package']];

        if (str_contains(mb_strtolower($validated['city']), 'magelang')) {
            $package['price'] = self::MAGELANG_PRICES[$validated['package']];
        }

        if (str_contains(mb_strtolower($validated['city']), 'sukoharjo')) {
            $package['price'] = self::SUKOHARJO_PRICES[$validated['package']];
        }
        $registration = array_merge($validated, [
            'package_name' => $package['name'],
            'package_price' => $package['price'],
            'registration_number' => 'JMK-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6)),
        ]);

        $request->session()->flash('registration', $registration);

        return redirect()->route('registration.success');
    }

    public function success(Request $request)
    {
        abort_unless($registration = $request->session()->get('registration'), 404);

        return view('pages.registration-success', compact('registration'));
    }
}
