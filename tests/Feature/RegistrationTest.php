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
                    'wilayah' => 'semarang',
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

    public function test_registration_resolves_province_package_when_city_has_none(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [[
                    'id' => $this->packageId,
                    'kecepatan' => '20',
                    'harga' => '150000.00',
                    'wilayah' => 'jateng',
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

    public function test_packages_endpoint_prefers_city_packages_over_province_packages(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    ['id' => 'city-pkg', 'kecepatan' => 20, 'harga' => '150000.00', 'wilayah' => 'magelang'],
                    ['id' => 'province-pkg', 'kecepatan' => 10, 'harga' => '120000.00', 'wilayah' => 'jateng'],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Jawa Tengah',
            'city' => 'Kota Magelang',
        ]));

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.id', 'city-pkg');
    }

    public function test_packages_endpoint_prefers_village_packages_over_other_levels(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    ['id' => 'village-pkg', 'kecepatan' => 20, 'harga' => '100000.00', 'wilayah' => 'Jurangombo'],
                    ['id' => 'district-pkg', 'kecepatan' => 30, 'harga' => '150000.00', 'wilayah' => 'Magelang Tengah'],
                    ['id' => 'city-pkg', 'kecepatan' => 40, 'harga' => '200000.00', 'wilayah' => 'magelang'],
                    ['id' => 'province-pkg', 'kecepatan' => 50, 'harga' => '250000.00', 'wilayah' => 'jateng'],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Jawa Tengah',
            'city' => 'Kota Magelang',
            'district' => 'Magelang Tengah',
            'village' => 'Jurangombo',
        ]));

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.id', 'village-pkg');
    }

    public function test_packages_endpoint_uses_district_packages_when_village_has_none(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    ['id' => 'district-pkg', 'kecepatan' => 30, 'harga' => '150000.00', 'wilayah' => 'Magelang Tengah'],
                    ['id' => 'city-pkg', 'kecepatan' => 40, 'harga' => '200000.00', 'wilayah' => 'magelang'],
                    ['id' => 'province-pkg', 'kecepatan' => 50, 'harga' => '250000.00', 'wilayah' => 'jateng'],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Jawa Tengah',
            'city' => 'Kota Magelang',
            'district' => 'Magelang Tengah',
            'village' => 'Jurangombo',
        ]));

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.id', 'district-pkg');
    }

    public function test_packages_endpoint_accepts_indonesian_region_parameter_names(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    ['id' => 'village-pkg', 'kecepatan' => 20, 'harga' => '100000.00', 'wilayah' => 'Jurangombo'],
                    ['id' => 'district-pkg', 'kecepatan' => 30, 'harga' => '150000.00', 'wilayah' => 'Magelang Tengah'],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'provinsi' => 'Jawa Tengah',
            'kabupaten' => 'Kota Magelang',
            'kecamatan' => 'Magelang Tengah',
            'desa' => 'Jurangombo',
        ]));

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.id', 'village-pkg');
    }

    public function test_packages_endpoint_matches_explicit_region_fields(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    [
                        'id' => 'village-pkg',
                        'kecepatan' => 20,
                        'harga' => '100000.00',
                        'desa' => 'Jurangombo',
                        'kecamatan' => 'Magelang Tengah',
                        'kabupaten' => 'Kota Magelang',
                        'provinsi' => 'Jawa Tengah',
                    ],
                    [
                        'id' => 'city-pkg',
                        'kecepatan' => 40,
                        'harga' => '200000.00',
                        'kabupaten' => 'Kota Magelang',
                        'provinsi' => 'Jawa Tengah',
                    ],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Jawa Tengah',
            'city' => 'Kota Magelang',
            'district' => 'Magelang Tengah',
            'village' => 'Jurangombo',
        ]));

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.id', 'village-pkg');
    }

    public function test_registration_resolves_village_package_before_city_package(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    ['id' => $this->packageId, 'kecepatan' => 20, 'harga' => '100000.00', 'wilayah' => 'Jurangombo'],
                    ['id' => 'city-pkg', 'kecepatan' => 50, 'harga' => '200000.00', 'wilayah' => 'magelang'],
                ],
            ]),
            '*' => Http::response(),
        ]);

        $data = $this->formData();
        $data['package'] = $this->packageId;
        $data['village'] = 'Jurangombo';
        $data['district'] = 'Magelang Tengah';
        $data['city'] = 'Kota Magelang';
        $data['province'] = 'Jawa Tengah';

        $response = $this->post(route('registration.store'), $data);

        $response->assertRedirect(route('registration.success'));
        $response->assertSessionHas('registration', function (array $registration) {
            return $registration['package_name'] === 'Paket 20 Mbps'
                && $registration['package_price'] === 'Rp 100.000';
        });
    }

    public function test_packages_endpoint_falls_back_to_province_packages(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    ['id' => 'province-pkg', 'kecepatan' => 10, 'harga' => '120000.00', 'wilayah' => 'jateng'],
                    ['id' => 'other-pkg', 'kecepatan' => 20, 'harga' => '200000.00', 'wilayah' => 'sukoharjo'],
                    ['id' => 'global-pkg', 'kecepatan' => 15, 'harga' => '100000.00', 'wilayah' => null],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Jawa Tengah',
            'city' => 'Semarang',
        ]));

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.id', 'province-pkg');
    }

    public function test_packages_endpoint_includes_promo_label_for_card(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    [
                        'id' => 'promo-pkg',
                        'nama_paket' => 'Promo gratis 1 bulan 20mbps',
                        'kecepatan' => 20,
                        'harga' => '120000.00',
                        'wilayah' => 'Jawa Tengah',
                    ],
                    [
                        'id' => 'regular-pkg',
                        'nama_paket' => 'Paket reguler 20mbps',
                        'kecepatan' => 20,
                        'harga' => '150000.00',
                        'wilayah' => 'Jawa Tengah',
                    ],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Jawa Tengah',
        ]));

        $response->assertOk();
        $response->assertJsonCount(2, 'data');
        $response->assertJsonPath('data.0.promo', 'gratis 1 bulan');
        $response->assertJsonPath('data.1.promo', null);
    }

    public function test_packages_endpoint_uses_api_promo_field_verbatim(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    [
                        'id' => 'promo-pkg',
                        'nama_paket' => 'Promo langganan 1 bulan 50mbps',
                        'kecepatan' => 50,
                        'harga' => '180000.00',
                        'wilayah' => 'Jawa Tengah',
                        'promo' => 'GRATIS LANGGANAN 1 BULAN',
                    ],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Jawa Tengah',
        ]));

        $response->assertOk();
        $response->assertJsonPath('data.0.promo', 'GRATIS LANGGANAN 1 BULAN');
    }

    public function test_packages_endpoint_hides_promo_when_api_promo_is_null(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    [
                        'id' => 'promo-pkg',
                        'nama_paket' => 'Promo langganan 1 bulan 50mbps',
                        'kecepatan' => 50,
                        'harga' => '180000.00',
                        'wilayah' => 'Jawa Tengah',
                        'promo' => null,
                    ],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Jawa Tengah',
        ]));

        $response->assertOk();
        $response->assertJsonPath('data.0.promo', null);
    }

    public function test_packages_endpoint_can_filter_by_province_only(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    ['id' => 'province-pkg', 'kecepatan' => 10, 'harga' => '120000.00', 'wilayah' => 'jateng'],
                    ['id' => 'other-pkg', 'kecepatan' => 20, 'harga' => '200000.00', 'wilayah' => 'sukoharjo'],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'provinsi' => 'Jawa Tengah',
        ]));

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.id', 'province-pkg');
    }

    public function test_packages_endpoint_matches_province_alias(): void
    {
        Http::fake([
            '*paket-online*' => Http::response([
                'data' => [
                    ['id' => 'diy-pkg', 'kecepatan' => 20, 'harga' => '150000.00', 'wilayah' => 'diy'],
                ],
            ]),
        ]);

        $response = $this->getJson(route('registration.packages', [
            'province' => 'Daerah Istimewa Yogyakarta',
            'city' => 'Sleman',
        ]));

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.id', 'diy-pkg');
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
