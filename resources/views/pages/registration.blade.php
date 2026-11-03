@extends('layouts.app')

@section('title', 'Registrasi Internet - JernihNet')

@section('content')
<main class="registration-page bg-neutral-50">
    <style>
        .registration-page { padding: clamp(105px, 13vw, 145px) 0 80px; }
        .registration-hero { background-position: center; isolation: isolate; }
        .registration-hero::after { content: ''; position: absolute; inset: 0; background: linear-gradient(115deg, rgba(8,15,28,.93), rgba(12,25,43,.67)); z-index: -1; }
        .registration-form { background: var(--at-common-white, #fff); box-shadow: 0 25px 60px rgba(21, 29, 42, .11); }
        .registration-section { border-top: 1px solid rgba(20, 29, 43, .12); padding-top: 30px; margin-top: 34px; }
        .registration-page .form-label { font-size: 12px; font-weight: 700; letter-spacing: .06em; margin-bottom: 9px; }
        .registration-page .form-control, .registration-page .form-select { border: 1px solid rgba(20, 29, 43, .25); border-radius: 2px; min-height: 52px; padding: .75rem 1rem; background: transparent; color: inherit; }
        .registration-page textarea.form-control { min-height: 110px; }
        .registration-page .form-control:focus, .registration-page .form-select:focus { border-color: #101c2d; box-shadow: 0 0 0 .18rem rgba(16, 28, 45, .1); }
        .package-option { cursor: pointer; display: block; height: 100%; }
        .package-option input { position: absolute; opacity: 0; }
        .package-option__body { border: 1px solid rgba(20,29,43,.18); border-radius: 5px; display: flex; flex-direction: column; height: 100%; min-height: 154px; padding: 18px; position: relative; transition: .25s ease; }
        .package-option__check { align-items: center; border: 1px solid currentColor; border-radius: 50%; display: flex; height: 19px; justify-content: center; opacity: .38; position: absolute; right: 16px; top: 16px; width: 19px; }
        .package-option__check svg { width: 12px; }
        .package-option input:checked + .package-option__body { background: #101c2d; border-color: #101c2d; color: #fff; transform: translateY(-4px); box-shadow: 0 14px 28px rgba(16,28,45,.2); }
        .package-option input:checked + .package-option__body .package-option__check { opacity: 1; }
        .package-option input:focus-visible + .package-option__body { outline: 3px solid rgba(16,28,45,.3); outline-offset: 3px; }
        .package-option__speed { font-size: 1.4rem; font-weight: 700; letter-spacing: -.04em; }
        .package-option__price { margin-top: auto; padding-top: 18px; }
        .package-option__price small { font-size: .75rem; opacity: .7; }
        .package-section { display: none; }
        .package-section.is-ready { animation: package-reveal .35s ease both; display: block; }
        .package-card.is-unavailable { display: none; }
        .package-address-note { align-items: center; background: rgba(20,29,43,.05); border-radius: 4px; display: flex; font-size: .9rem; gap: 10px; padding: 14px 16px; }
        .package-address-note svg { flex: 0 0 18px; width: 18px; }
        .location-tracker { background: rgba(20,29,43,.04); border: 1px solid rgba(20,29,43,.13); border-radius: 5px; padding: 22px; }
        .location-map-wrap { display: none; margin-top: 18px; position: relative; }
        .location-map-wrap.is-visible { display: block; }
        .location-map { background: #e9edf0; border: 0; display: block; height: 290px; width: 100%; z-index: 0; }
        .location-status { font-size: .86rem; margin: 12px 0 0; }
        .location-status.is-success { color: #24703a; }
        @keyframes package-reveal { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }
        [data-bs-theme="dark"] .registration-form { background: var(--at-neutral-900, #18212d); box-shadow: 0 25px 60px rgba(0,0,0,.25); }
        [data-bs-theme="dark"] .registration-section { border-color: rgba(255,255,255,.2); }
        [data-bs-theme="dark"] .registration-page .form-control, [data-bs-theme="dark"] .registration-page .form-select { border-color: rgba(255,255,255,.72); color: #fff; }
        [data-bs-theme="dark"] .registration-page .form-control:focus, [data-bs-theme="dark"] .registration-page .form-select:focus { border-color: #fff; box-shadow: 0 0 0 .18rem rgba(255,255,255,.12); }
        [data-bs-theme="dark"] .registration-page .form-control::placeholder { color: rgba(255,255,255,.6); }
        [data-bs-theme="dark"] .package-option__body { border-color: rgba(255,255,255,.55); }
        [data-bs-theme="dark"] .package-address-note { background: rgba(255,255,255,.1); }
        [data-bs-theme="dark"] .location-tracker { background: rgba(255,255,255,.06); border-color: rgba(255,255,255,.3); }
        [data-bs-theme="dark"] .package-option input:checked + .package-option__body { background: #fff; border-color: #fff; color: #101c2d; box-shadow: 0 14px 28px rgba(0,0,0,.28); }
        [data-bs-theme="dark"] .package-option input:focus-visible + .package-option__body { outline-color: rgba(255,255,255,.7); }
        .registration-submit { border: 0; width: 100%; justify-content: center; }
        .registration-page .invalid-feedback { font-size: .8rem; }
        @media (max-width: 575px) { .registration-form { padding: 25px !important; } }
    </style>

    <div class="container-2200 px-lg-3 px-2">
        <section class="registration-hero p-relative bg-cover rounded-5 overflow-hidden" data-background="{{ asset('assets/imgs/pages/hero.png') }}">
            <div class="container py-5 py-lg-6">
                <div class="row py-lg-5">
                    <div class="col-lg-8">
                        <span class="sec-1-home-4__tagline d-inline-block mb-20">[ JERNIHNET REGISTRATION ]</span>
                        <h1 class="text-white lh-1 mb-3 reveal-text" style="font-size:clamp(2.3rem,5vw,4.7rem)">Daftarkan koneksi<br>untuk rumah Anda.</h1>
                        <p class="text-white opacity-75 fz-font-lg mb-0">Lengkapi data di bawah. Tim JernihNet akan menghubungi Anda untuk proses survei dan pemasangan.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="container-2200 px-lg-3 px-2 pt-4 pt-lg-5">
        <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data" class="registration-form rounded-4 p-lg-5 p-4 at_fade_anim" novalidate>
                    @csrf
                    <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
                        <div>
                            <span class="fz-font-label text-uppercase neutral-500">Formulir Pendaftaran</span>
                            <h2 class="h2 mb-0 mt-2">Data Pemohon</h2>
                        </div>
                        <span class="fz-font-label neutral-500">* Wajib diisi</span>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger rounded-0 mb-4">Mohon periksa kembali data yang ditandai.</div>
                    @endif

                    <div class="row g-4">
                        <div class="col-md-6"><label class="form-label" for="name">NAMA LENGKAP PEMOHON *</label><input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>@error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                        <div class="col-md-6"><label class="form-label" for="nik">NOMOR KTP / NIK (16 DIGIT) *</label><input class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}" inputmode="numeric" pattern="[0-9]{16}" maxlength="16" required>@error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                        <div class="col-md-6"><label class="form-label" for="phone">NOMOR TELEPON / WHATSAPP *</label><input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" inputmode="tel" required>@error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                        <div class="col-md-6"><label class="form-label" for="email">EMAIL <span class="fw-normal text-lowercase">(opsional)</span></label><input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">@error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                    </div>

                    <div class="registration-section">
                        <h3 class="h4 mb-4">Alamat Pemasangan</h3>
                        <div class="row g-4">
                            <div class="col-md-6"><label class="form-label" for="province">PROVINSI *</label><input class="form-control @error('province') is-invalid @enderror" id="province" name="province" value="{{ old('province') }}" required>@error('province')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            <div class="col-md-6"><label class="form-label" for="city">KABUPATEN / KOTA *</label><input class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') }}" required>@error('city')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            <div class="col-md-6"><label class="form-label" for="district">KECAMATAN *</label><input class="form-control @error('district') is-invalid @enderror" id="district" name="district" value="{{ old('district') }}" required>@error('district')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            <div class="col-md-6"><label class="form-label" for="village">DESA / KELURAHAN *</label><input class="form-control @error('village') is-invalid @enderror" id="village" name="village" value="{{ old('village') }}" required>@error('village')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            <div class="col-md-6"><label class="form-label" for="address">ALAMAT LENGKAP *</label><textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" required>{{ old('address') }}</textarea>@error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            <div class="col-md-6"><label class="form-label" for="landmark">PATOKAN LOKASI RUMAH *</label><textarea class="form-control @error('landmark') is-invalid @enderror" id="landmark" name="landmark" placeholder="Contoh: dekat masjid, pagar warna putih" required>{{ old('landmark') }}</textarea>@error('landmark')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            <div class="col-12">
                                <div class="location-tracker">
                                    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                                        <div><span class="form-label d-block mb-1">LOKASI PEMASANGAN</span><h4 class="h5 mb-1">Cek apakah JernihNet sudah mencakup lokasi Kamu</h4><p class="neutral-500 small mb-0">Titik lokasi akan dideteksi otomatis. Geser pin atau klik peta untuk menandai posisi rumah dengan lebih tepat.</p></div>
                                        <button class="at-btn" type="button" id="get-location"><span><span class="text-1">PERBARUI TITIK LOKASI</span><span class="text-2">PERBARUI TITIK LOKASI</span></span></button>
                                    </div>
                                    <p class="location-status neutral-500" id="location-status">Titik lokasi belum ditandai.</p>
                                    <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude') }}"><input type="hidden" name="longitude" id="longitude" value="{{ old('longitude') }}">
                                    <div class="location-map-wrap" id="location-map-wrap"><div class="location-map" id="location-map" aria-label="Peta lokasi pemasangan"></div></div>
                                    @error('latitude')<div class="text-danger small mt-2">{{ $message }}</div>@enderror
                                    @error('longitude')<div class="text-danger small mt-2">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="registration-section package-section" id="package-section">
                        <h3 class="h4 mb-2">Pilih Paket Internet</h3><p class="neutral-500 mb-4">Harga berlangganan per bulan.</p>
                        <div class="row g-3">
                            @foreach($packages as $key => $package)
                                <div class="col-xl col-lg-4 col-md-4 col-6 package-card" data-package-card="{{ $key }}">
                                    <label class="package-option">
                                        <input type="radio" name="package" value="{{ $key }}" {{ old('package') === $key ? 'checked' : '' }} required>
                                        <span class="package-option__body">
                                            <span class="package-option__check"><svg viewBox="0 0 12 12" fill="none"><path d="M2 6.2 4.6 9 10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            <span class="d-block fz-font-label neutral-500 mb-2">PAKET FIBER</span>
                                            <span class="package-option__speed d-block">{{ $package['name'] }}</span>
                                            <span class="package-option__price d-block fw-600" data-default-price="{{ $package['price'] }}" data-magelang-price="{{ ['20' => 'Rp 120.000', '30' => 'Rp 140.000', '40' => 'Rp 150.000', '50' => 'Rp 180.000'][$key] }}">{{ $package['price'] }} <small>/bulan</small></span>
                                        </span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @error('package')<div class="text-danger small mt-2">{{ $message }}</div>@enderror
                    </div>

                    <div class="registration-section package-address-note" id="package-address-note">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 21s7-5.3 7-12A7 7 0 0 0 5 9c0 6.7 7 12 7 12Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="9" r="2.4" stroke="currentColor" stroke-width="1.7"/></svg>
                        <span>Lengkapi alamat pemasangan terlebih dahulu untuk melihat paket dan harga yang tersedia di wilayah Anda.</span>
                    </div>

                    <div class="registration-section" id="ketentuan">
                        <div class="form-check"><input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" id="terms" name="terms" value="1" {{ old('terms') ? 'checked' : '' }} required><label class="form-check-label ms-2" for="terms">Saya menyetujui,  pendaftaran JernihNet.</label>@error('terms')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                        <p id="ketentuan-detail" class="small neutral-500 mt-3 mb-0">Saya menyetujui seluruh persyaratan dan ketentuan berlangganan layanan JernihNet PT. Jernih Multi Komunikasi (JMK), termasuk ketentuan pembayaran, jatuh tempo, penanganan gangguan teknis, masa kontrak minimal 12 bulan, perpanjangan berlangganan, serta ketentuan denda apabila berhenti berlangganan sebelum masa kontrak berakhir. Saya memahami bahwa data yang diberikan digunakan untuk keperluan administrasi, verifikasi, dan proses pemasangan layanan. Dengan mengajukan pendaftaran, saya menyatakan telah membaca, memahami, dan bersedia mematuhi seluruh ketentuan yang berlaku.</p>
                    </div>
                    <div class="mt-4"><button class="at-btn registration-submit" type="submit"><span><span class="text-1">KIRIM PENDAFTARAN</span><span class="text-2">KIRIM PENDAFTARAN</span></span></button></div>
        </form>
    </section>
</main>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addressFields = ['province', 'city', 'district', 'village', 'address', 'landmark'].map(id => document.getElementById(id));
        const packageSection = document.getElementById('package-section');
        const addressNote = document.getElementById('package-address-note');
        const city = document.getElementById('city');
            const prices = document.querySelectorAll('[data-default-price]');
            const packageCards = document.querySelectorAll('[data-package-card]');

        function updatePackages() {
            const addressComplete = addressFields.every(field => field && field.value.trim());
            packageSection.classList.toggle('is-ready', addressComplete);
            addressNote.style.display = addressComplete ? 'none' : 'flex';

            const isMagelang = city.value.toLowerCase().includes('magelang');
            const isSukoharjo = city.value.toLowerCase().includes('sukoharjo');
            prices.forEach(price => {
                price.firstChild.nodeValue = ((isMagelang || isSukoharjo) ? price.dataset.magelangPrice : price.dataset.defaultPrice) + ' ';
            });
            packageCards.forEach(card => {
                const unavailable = isSukoharjo && !['20', '30'].includes(card.dataset.packageCard);
                card.classList.toggle('is-unavailable', unavailable);
                if (unavailable) card.querySelector('input').checked = false;
            });
        }

        addressFields.forEach(field => field.addEventListener('input', updatePackages));
        updatePackages();

        const locationButton = document.getElementById('get-location');
        const locationStatus = document.getElementById('location-status');
        const locationMap = document.getElementById('location-map');
        const locationMapWrap = document.getElementById('location-map-wrap');
        const latitude = document.getElementById('latitude');
        const longitude = document.getElementById('longitude');

        let map;
        let marker;

        function showMap(lat, lng) {
            const coordinates = [Number(lat), Number(lng)];
            locationMapWrap.classList.add('is-visible');
            if (!map) {
                map = L.map(locationMap, { scrollWheelZoom: false }).setView(coordinates, 15);
                map.attributionControl.setPrefix('JernihNet Maps');
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener">OpenStreetMap contributors</a>'
                }).addTo(map);
                marker = L.marker(coordinates, { draggable: true }).addTo(map);
                map.on('click', event => setLocation(event.latlng.lat, event.latlng.lng));
                marker.on('dragend', event => {
                    const point = event.target.getLatLng();
                    setLocation(point.lat, point.lng);
                });
            } else {
                marker.setLatLng(coordinates);
                map.setView(coordinates, 15);
            }
            setTimeout(() => map.invalidateSize(), 100);
            locationStatus.classList.add('is-success');
        }

        function setLocation(lat, lng) {
            const preciseLat = Number(lat).toFixed(6);
            const preciseLng = Number(lng).toFixed(6);
            latitude.value = preciseLat;
            longitude.value = preciseLng;
            showMap(preciseLat, preciseLng);
        }

        if (latitude.value && longitude.value) showMap(latitude.value, longitude.value);

        function captureCurrentLocation() {
            if (!navigator.geolocation) { locationStatus.textContent = 'Browser ini belum mendukung pelacakan lokasi.'; return; }
            locationStatus.classList.remove('is-success');
            locationStatus.textContent = 'Mengambil titik lokasi saat ini dengan akurasi tinggi...';
            navigator.geolocation.getCurrentPosition(function (position) {
                const lat = position.coords.latitude.toFixed(6);
                const lng = position.coords.longitude.toFixed(6);
                const accuracy = Math.round(position.coords.accuracy);
                setLocation(lat, lng);
                locationStatus.textContent = `Titik lokasi saat ini berhasil ditandai (akurasi sekitar ${accuracy} meter).`;
            }, function () {
                locationStatus.textContent = 'Lokasi belum dapat diambil. Izinkan akses lokasi pada browser lalu coba kembali.';
            }, { enableHighAccuracy: true, timeout: 20000, maximumAge: 0 });
        }

        locationButton.addEventListener('click', captureCurrentLocation);
        captureCurrentLocation();
    });
</script>
@endpush
