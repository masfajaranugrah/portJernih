<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    private string $packageId;

    protected function setUp(): void
    {
        parent::setUp();

        $this->packageId = (string) Str::uuid();
    }

    private function formData(): array
    {
        return [
            'name' => 'Budi Santoso',
            'nik' => '1234567890123456',
            'ktp_photo' => UploadedFile::fake()->image('ktp.jpg', 800, 600),
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
            'package' => $this->packageId,
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

        $response = $this->post(route('registration.store'), $this->formData());

        $response->assertRedirect(route('registration.success'));
        $response->assertSessionHas('registration');

        Http::assertSent(function ($request) {
            $body = $request->body();

            $field = function (string $name) use ($body): ?string {
                return preg_match(
                    '/name="' . preg_quote($name, '/') . '"\r\n(?:[^\r]*\r\n)*?\r\n([^\r]*)\r\n/',
                    $body,
                    $matches
                ) ? $matches[1] : null;
            };

            return $request->url() === config('services.jernih.url')
                && $request->hasHeader('X-API-KEY', config('services.jernih.key'))
                && $request->isMultipart()
                && str_contains($body, 'name="foto_ktp"; filename="ktp.jpg"')
                && $field('nama_lengkap') === 'Budi Santoso'
                && $field('no_whatsapp') === '081234567890'
                && $field('no_telp') === '081234567890'
                && $field('status') === 'pending'
                && $field('nomer_id') === '1234567890123456'
                && $field('paket_id') === $this->packageId
                && $field('rt') === '001'
                && $field('rw') === '002'
                && $field('alamat_jalan') === 'Jl. Melati No. 12'
                && $field('desa') === 'Semarang'
                && $field('kecamatan') === 'Semarang Tengah'
                && $field('kabupaten') === 'Semarang'
                && $field('provinsi') === 'Jawa Tengah'
                && $field('kode_pos') === '50123'
                && $field('tanggal_mulai') === now()->toDateString()
                && $field('tanggal_berakhir') === now()->addMonthNoOverflow()->toDateString();
        });
    }

    public function test_registration_shows_actual_package_name_and_price(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [[
                    'id' => $this->packageId,
                    'kecepatan' => '20',
                    'harga' => '150000.00',
                ]],
            ]),
            '*' => Http::response(),
        ]);

        $response = $this->post(route('registration.store'), $this->formData());

        $response->assertRedirect(route('registration.success'));
        $response->assertSessionHas('registration', function (array $registration) {
            return $registration['package_name'] === 'Paket 20 Mbps'
                && $registration['package_price'] === 'Rp 150.000';
        });
    }

    public function test_registration_requires_nik_and_ktp_photo(): void
    {
        Http::fake();

        $data = $this->formData();
        unset($data['nik'], $data['ktp_photo']);

        $response = $this->from(route('registration.create'))
            ->post(route('registration.store'), $data);

        $response->assertRedirect(route('registration.create'));
        $response->assertSessionHasErrors(['nik', 'ktp_photo']);
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

        $response = $this->from(route('registration.create'))
            ->post(route('registration.store'), $this->formData());

        $response->assertRedirect(route('registration.create'));
        $response->assertSessionHasErrors('registration');
    }
}
