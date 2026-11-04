<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    private function formData(): array
    {
        return [
            'name' => 'Budi Santoso',
            'nik' => '1234567890123456',
            'phone' => '081234567890',
            'email' => 'budi@example.com',
            'address' => 'Jl. Melati No. 12',
            'rt' => '001',
            'rw' => '002',
            'village' => 'Semarang',
            'district' => 'Semarang Tengah',
            'city' => 'Semarang',
            'province' => 'Jawa Tengah',
            'postal_code' => '50123',
            'package' => '20',
            'terms' => '1',
        ];
    }

    public function test_registration_page_renders_custom_marker_with_logo(): void
    {
        $response = $this->get(route('registration.create'));

        $response->assertOk();
        $response->assertSee('registration-marker__badge', false);
        $response->assertSee('assets/imgs/pages/logo/logo-jmk.png', false);
    }

    public function test_registration_is_submitted_to_customer_api(): void
    {
        Http::fake();
        config(['services.jernih.package_ids.20' => 'package-uuid-20']);

        $response = $this->post(route('registration.store'), $this->formData());

        $response->assertRedirect(route('registration.success'));
        $response->assertSessionHas('registration');

        Http::assertSent(function ($request) {
            return $request->url() === config('services.jernih.url')
                && $request->hasHeader('X-API-KEY', config('services.jernih.key'))
                && $request['nama_lengkap'] === 'Budi Santoso'
                && $request['no_whatsapp'] === '081234567890'
                && $request['no_telp'] === '081234567890'
                && $request['status'] === 'pending'
                && $request['nomer_id'] === '1234567890123456'
                && $request['paket_id'] === 'package-uuid-20'
                && $request['rt'] === '001'
                && $request['rw'] === '002'
                && $request['alamat_jalan'] === 'Jl. Melati No. 12'
                && $request['desa'] === 'Semarang'
                && $request['kecamatan'] === 'Semarang Tengah'
                && $request['kabupaten'] === 'Semarang'
                && $request['provinsi'] === 'Jawa Tengah'
                && $request['kode_pos'] === '50123'
                && $request['tanggal_mulai'] === now()->toDateString()
                && $request['tanggal_berakhir'] === now()->addMonthNoOverflow()->toDateString();
        });
    }

    public function test_registration_stops_when_package_id_is_not_configured(): void
    {
        Http::fake();
        config(['services.jernih.package_ids.20' => null]);

        $response = $this->from(route('registration.create'))
            ->post(route('registration.store'), $this->formData());

        $response->assertRedirect(route('registration.create'));
        $response->assertSessionHasErrors('registration');
        Http::assertNothingSent();
    }

    public function test_registration_shows_error_when_api_rejects_request(): void
    {
        Http::fake([
            '*' => Http::response([
                'status' => 'error',
                'message' => 'Validasi gagal. Periksa kembali data yang dikirim.',
            ], 422),
        ]);
        config(['services.jernih.package_ids.20' => 'package-uuid-20']);

        $response = $this->from(route('registration.create'))
            ->post(route('registration.store'), $this->formData());

        $response->assertRedirect(route('registration.create'));
        $response->assertSessionHasErrors('registration');
        $response->assertSessionMissing('registration');
    }

    public function test_registration_shows_error_when_api_is_unreachable(): void
    {
        Http::fake(function () {
            throw new \Illuminate\Http\Client\ConnectionException('Connection timed out');
        });
        config(['services.jernih.package_ids.20' => 'package-uuid-20']);

        $response = $this->from(route('registration.create'))
            ->post(route('registration.store'), $this->formData());

        $response->assertRedirect(route('registration.create'));
        $response->assertSessionHasErrors('registration');
    }
}
