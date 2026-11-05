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
        .registration-marker { background: transparent; border: 0; }
        .registration-marker__badge { align-items: center; background: #fff; border: 2px solid #101c2d; border-radius: 14px; box-shadow: 0 10px 24px rgba(16, 28, 45, .22); display: flex; height: 42px; justify-content: center; position: relative; width: 68px; }
        .registration-marker__badge::after { border-left: 8px solid transparent; border-right: 8px solid transparent; border-top: 10px solid #101c2d; bottom: -10px; content: ''; left: 50%; position: absolute; transform: translateX(-50%); }
        .registration-marker__badge img { display: block; max-height: 24px; max-width: 50px; width: auto; }
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

        /* ── Wilayah Dropdown ─────────────────────────────────────────── */
        .wilayah-wrap { position: relative; }
        .wilayah-search {
            border: 1px solid rgba(20,29,43,.25);
            border-radius: 2px;
            min-height: 52px;
            padding: .75rem 2.6rem .75rem 1rem;
            background: transparent;
            color: inherit;
            width: 100%;
            cursor: pointer;
            text-align: left;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: border-color .15s, box-shadow .15s;
            white-space: nowrap;
            overflow: hidden;
        }
        .wilayah-search:focus-visible { outline: none; }
        .wilayah-search.is-open,
        .wilayah-search:focus { border-color: #101c2d; box-shadow: 0 0 0 .18rem rgba(16,28,45,.1); }
        .wilayah-search.is-invalid { border-color: #dc3545; }
        .wilayah-search.is-invalid:focus { box-shadow: 0 0 0 .18rem rgba(220,53,69,.25); }
        .wilayah-search__text { flex: 1; min-width: 0; overflow: hidden; text-overflow: ellipsis; }
        .wilayah-search__placeholder { color: rgba(20,29,43,.45); }
        .wilayah-search__arrow {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            opacity: .55;
            transition: transform .2s;
            flex-shrink: 0;
        }
        .wilayah-search.is-open .wilayah-search__arrow { transform: translateY(-50%) rotate(180deg); }
        .wilayah-search.is-disabled { opacity: .45; cursor: not-allowed; background: rgba(20,29,43,.04); }

        .wilayah-dropdown {
            display: none;
            position: absolute;
            top: calc(100% + 4px);
            left: 0; right: 0;
            background: #fff;
            border: 1px solid rgba(20,29,43,.18);
            border-radius: 4px;
            box-shadow: 0 12px 36px rgba(16,28,45,.14);
            z-index: 1050;
            max-height: 0;
            overflow: hidden;
            transition: max-height .22s ease;
        }
        .wilayah-dropdown.is-open { display: block; max-height: 320px; }
        .wilayah-dropdown__input-wrap { padding: 10px 10px 8px; border-bottom: 1px solid rgba(20,29,43,.1); position: sticky; top: 0; background: #fff; z-index: 1; }
        .wilayah-dropdown__input {
            width: 100%;
            border: 1px solid rgba(20,29,43,.22);
            border-radius: 3px;
            padding: 7px 10px;
            font-size: .88rem;
            outline: none;
        }
        .wilayah-dropdown__input:focus { border-color: #101c2d; }
        .wilayah-dropdown__list {
            list-style: none;
            margin: 0;
            padding: 6px 0;
            overflow-y: auto;
            max-height: 240px;
        }
        .wilayah-dropdown__list li {
            padding: 9px 14px;
            cursor: pointer;
            font-size: .9rem;
            transition: background .12s;
        }
        .wilayah-dropdown__list li:hover,
        .wilayah-dropdown__list li.is-focused { background: rgba(16,28,45,.06); }
        .wilayah-dropdown__list li.is-selected { font-weight: 600; background: rgba(16,28,45,.09); }
        .wilayah-dropdown__empty { padding: 16px 14px; font-size: .88rem; color: rgba(20,29,43,.55); text-align: center; }
        .wilayah-loading { padding: 14px; text-align: center; font-size: .85rem; color: rgba(20,29,43,.5); }

        [data-bs-theme="dark"] .wilayah-search { border-color: rgba(255,255,255,.72); color: #fff; }
        [data-bs-theme="dark"] .wilayah-search.is-open,
        [data-bs-theme="dark"] .wilayah-search:focus { border-color: #fff; box-shadow: 0 0 0 .18rem rgba(255,255,255,.12); }
        [data-bs-theme="dark"] .wilayah-search__placeholder { color: rgba(255,255,255,.5); }
        [data-bs-theme="dark"] .wilayah-search.is-disabled { background: rgba(255,255,255,.06); }
        [data-bs-theme="dark"] .wilayah-dropdown { background: #1e2a3a; border-color: rgba(255,255,255,.2); }
        [data-bs-theme="dark"] .wilayah-dropdown__input-wrap { background: #1e2a3a; border-color: rgba(255,255,255,.15); }
        [data-bs-theme="dark"] .wilayah-dropdown__input { background: #253347; border-color: rgba(255,255,255,.3); color: #fff; }
        [data-bs-theme="dark"] .wilayah-dropdown__list li:hover,
        [data-bs-theme="dark"] .wilayah-dropdown__list li.is-focused { background: rgba(255,255,255,.1); }
        [data-bs-theme="dark"] .wilayah-dropdown__list li.is-selected { background: rgba(255,255,255,.14); }
        [data-bs-theme="dark"] .wilayah-dropdown__empty,
        [data-bs-theme="dark"] .wilayah-loading { color: rgba(255,255,255,.55); }
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
                        <div class="alert alert-danger rounded-0 mb-4">
                            <strong>{{ $errors->first('registration') ?: 'Mohon periksa kembali data yang ditandai.' }}</strong>
                            @php
                                $apiErrors = $errors->messages();
                                unset($apiErrors['registration']);
                            @endphp
                            @if(count($apiErrors))
                                <ul class="mb-0 mt-2 ps-3" style="font-size:.875rem">
                                    @foreach($apiErrors as $field => $messages)
                                        @foreach($messages as $msg)
                                            <li>{{ str_replace(['registration_', 'api_'], '', $field) }}: {{ $msg }}</li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @endif

                    <div class="row g-4">
                        <div class="col-md-6"><label class="form-label" for="name">NAMA LENGKAP PEMOHON *</label><input class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>@error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                        <div class="col-md-6"><label class="form-label" for="nik">NIK / NOMOR KTP (16 DIGIT) *</label><input class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}" inputmode="numeric" pattern="[0-9]{16}" maxlength="16" autocomplete="off" required>@error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                        <div class="col-md-6">
                            <label class="form-label">FOTO KTP *</label>
                            {{-- hidden file input (diisi dari file picker atau capture kamera) --}}
                            <input type="file" id="ktp_file_input" name="ktp_photo" accept="image/*" style="display:none">
                            {{-- preview --}}
                            <div id="ktp-preview-wrap" style="display:none;margin-bottom:10px;position:relative">
                                <img id="ktp-preview-img" src="" alt="Preview KTP"
                                     style="width:100%;max-height:180px;object-fit:cover;border-radius:4px;border:1px solid rgba(20,29,43,.2)">
                                <button type="button" id="ktp-remove" title="Hapus foto"
                                        style="position:absolute;top:6px;right:6px;background:rgba(220,53,69,.85);border:0;border-radius:50%;width:26px;height:26px;color:#fff;font-size:1rem;line-height:1;cursor:pointer">&times;</button>
                            </div>
                            {{-- tombol aksi --}}
                            <div id="ktp-buttons" class="d-flex gap-2">
                                <button type="button" id="ktp-pick-file"
                                        class="at-btn at-btn--border flex-fill" style="min-height:52px;font-size:.8rem">
                                    <span><span class="text-1">📁 PILIH FILE</span><span class="text-2">📁 PILIH FILE</span></span>
                                </button>
                                <button type="button" id="ktp-open-camera"
                                        class="at-btn at-btn--border flex-fill" style="min-height:52px;font-size:.8rem">
                                    <span><span class="text-1">📷 KAMERA</span><span class="text-2">📷 KAMERA</span></span>
                                </button>
                            </div>
                            <div class="form-text" style="font-size:.75rem">JPG/PNG, maks. 5 MB — foto akan dikompres otomatis.</div>
                            @error('ktp_photo')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                        </div>

                        <div class="col-md-6"><label class="form-label" for="phone">NOMOR TELEPON / WHATSAPP *</label><input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" inputmode="tel" required>@error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                        <div class="col-md-6"><label class="form-label" for="email">EMAIL <span class="fw-normal text-lowercase">(opsional)</span></label><input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">@error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                    </div>

                    <div class="registration-section">
                        <h3 class="h4 mb-2">Alamat Pemasangan</h3>
                        <p class="neutral-500 mb-4">Isi mulai dari alamat jalan, lalu RT/RW, desa/kelurahan, kecamatan, hingga kabupaten/kota dan provinsi.</p>
                        <div class="row g-4">
                            <div class="col-12"><label class="form-label" for="address">ALAMAT JALAN *<span class="fw-normal text-lowercase ms-1">(nama jalan / gang / blok / nomor rumah)</span></label><input class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Contoh: Jl. Melati No. 12, Gang Mawar" required>@error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            <div class="col-md-3 col-6"><label class="form-label" for="rt">RT *</label><input class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{ old('rt') }}" inputmode="numeric" placeholder="001" maxlength="10" required>@error('rt')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            <div class="col-md-3 col-6"><label class="form-label" for="rw">RW *</label><input class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" value="{{ old('rw') }}" inputmode="numeric" placeholder="002" maxlength="10" required>@error('rw')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                            {{-- ── Provinsi ── --}}
                            <div class="col-md-6">
                                <label class="form-label" for="province-btn">PROVINSI *</label>
                                <div class="wilayah-wrap" id="wrap-province">
                                    <button type="button" class="wilayah-search @error('province') is-invalid @enderror" id="province-btn" aria-haspopup="listbox" aria-expanded="false" aria-label="Pilih provinsi">
                                        <span class="wilayah-search__text">
                                            <span class="wilayah-search__placeholder">Pilih provinsi…</span>
                                        </span>
                                        <svg class="wilayah-search__arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2.5 5l4.5 4.5L11.5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <input type="hidden" name="province" id="province" value="{{ old('province') }}">
                                    <div class="wilayah-dropdown" role="listbox" aria-label="Daftar provinsi">
                                        <div class="wilayah-dropdown__input-wrap">
                                            <input type="text" class="wilayah-dropdown__input" placeholder="Cari provinsi…" autocomplete="off" aria-label="Cari provinsi">
                                        </div>
                                        <ul class="wilayah-dropdown__list"></ul>
                                    </div>
                                </div>
                                @error('province')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>

                            {{-- ── Kabupaten / Kota ── --}}
                            <div class="col-md-6">
                                <label class="form-label" for="city-btn">KABUPATEN / KOTA *</label>
                                <div class="wilayah-wrap" id="wrap-city">
                                    <button type="button" class="wilayah-search is-disabled @error('city') is-invalid @enderror" id="city-btn" aria-haspopup="listbox" aria-expanded="false" aria-label="Pilih kabupaten/kota" disabled>
                                        <span class="wilayah-search__text">
                                            <span class="wilayah-search__placeholder">Pilih kabupaten / kota…</span>
                                        </span>
                                        <svg class="wilayah-search__arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2.5 5l4.5 4.5L11.5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <input type="hidden" name="city" id="city" value="{{ old('city') }}">
                                    <div class="wilayah-dropdown" role="listbox" aria-label="Daftar kabupaten/kota">
                                        <div class="wilayah-dropdown__input-wrap">
                                            <input type="text" class="wilayah-dropdown__input" placeholder="Cari kabupaten / kota…" autocomplete="off" aria-label="Cari kabupaten/kota">
                                        </div>
                                        <ul class="wilayah-dropdown__list"></ul>
                                    </div>
                                </div>
                                @error('city')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>

                            {{-- ── Kecamatan ── --}}
                            <div class="col-md-6">
                                <label class="form-label" for="district-btn">KECAMATAN *</label>
                                <div class="wilayah-wrap" id="wrap-district">
                                    <button type="button" class="wilayah-search is-disabled @error('district') is-invalid @enderror" id="district-btn" aria-haspopup="listbox" aria-expanded="false" aria-label="Pilih kecamatan" disabled>
                                        <span class="wilayah-search__text">
                                            <span class="wilayah-search__placeholder">Pilih kecamatan…</span>
                                        </span>
                                        <svg class="wilayah-search__arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2.5 5l4.5 4.5L11.5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <input type="hidden" name="district" id="district" value="{{ old('district') }}">
                                    <div class="wilayah-dropdown" role="listbox" aria-label="Daftar kecamatan">
                                        <div class="wilayah-dropdown__input-wrap">
                                            <input type="text" class="wilayah-dropdown__input" placeholder="Cari kecamatan…" autocomplete="off" aria-label="Cari kecamatan">
                                        </div>
                                        <ul class="wilayah-dropdown__list"></ul>
                                    </div>
                                </div>
                                @error('district')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>

                            {{-- ── Desa / Kelurahan ── --}}
                            <div class="col-md-6">
                                <label class="form-label" for="village-btn">DESA / KELURAHAN *</label>
                                <div class="wilayah-wrap" id="wrap-village">
                                    <button type="button" class="wilayah-search is-disabled @error('village') is-invalid @enderror" id="village-btn" aria-haspopup="listbox" aria-expanded="false" aria-label="Pilih desa/kelurahan" disabled>
                                        <span class="wilayah-search__text">
                                            <span class="wilayah-search__placeholder">Pilih desa / kelurahan…</span>
                                        </span>
                                        <svg class="wilayah-search__arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2.5 5l4.5 4.5L11.5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <input type="hidden" name="village" id="village" value="{{ old('village') }}">
                                    <div class="wilayah-dropdown" role="listbox" aria-label="Daftar desa/kelurahan">
                                        <div class="wilayah-dropdown__input-wrap">
                                            <input type="text" class="wilayah-dropdown__input" placeholder="Cari desa / kelurahan…" autocomplete="off" aria-label="Cari desa/kelurahan">
                                        </div>
                                        <ul class="wilayah-dropdown__list"></ul>
                                    </div>
                                </div>
                                @error('village')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>

                            {{-- ── Kode Pos ── --}}
                            <div class="col-md-6">
                                <label class="form-label" for="postal_code-btn">KODE POS <span class="fw-normal text-lowercase">(opsional, otomatis dari desa)</span></label>
                                <div class="wilayah-wrap" id="wrap-postal_code">
                                    <button type="button" class="wilayah-search is-disabled @error('postal_code') is-invalid @enderror" id="postal_code-btn" aria-haspopup="listbox" aria-expanded="false" aria-label="Pilih kode pos" disabled>
                                        <span class="wilayah-search__text">
                                            <span class="wilayah-search__placeholder">Otomatis dari desa…</span>
                                        </span>
                                        <svg class="wilayah-search__arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2.5 5l4.5 4.5L11.5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <input type="hidden" name="postal_code" id="postal_code" value="{{ old('postal_code') }}">
                                    <div class="wilayah-dropdown" role="listbox" aria-label="Daftar kode pos">
                                        <div class="wilayah-dropdown__input-wrap">
                                            <input type="text" class="wilayah-dropdown__input" placeholder="Cari kode pos…" autocomplete="off" inputmode="numeric" aria-label="Cari kode pos">
                                        </div>
                                        <ul class="wilayah-dropdown__list"></ul>
                                    </div>
                                </div>
                                @error('postal_code')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>

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
                        <h3 class="h4 mb-2">Pilih Paket Internet</h3>
                        <p class="neutral-500 mb-4">Harga berlangganan per bulan.</p>
                        <div class="row g-3" id="package-list"></div>
                        <div id="package-loading" class="text-center py-4" style="display:none;">
                            <p class="neutral-500 mb-0">Memuat paket…</p>
                        </div>
                        <div id="package-empty" class="text-center py-4" style="display:none;">
                            <p class="neutral-500 mb-0">Tidak ada paket tersedia di wilayah Anda.</p>
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

    {{-- ── Modal Kamera KTP — di luar form agar tidak ikut scroll ── --}}
    <div id="ktp-camera-modal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,.75);z-index:9999;align-items:center;justify-content:center">
        <div style="background:#fff;border-radius:12px;width:min(94vw,440px);overflow:hidden;box-shadow:0 24px 60px rgba(0,0,0,.4)">
            {{-- header --}}
            <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 18px;border-bottom:1px solid rgba(20,29,43,.1)">
                <span style="font-weight:700;font-size:.9rem;letter-spacing:.04em">📷 FOTO KTP</span>
                <button type="button" id="ktp-camera-close" style="background:none;border:none;font-size:1.4rem;line-height:1;cursor:pointer;color:#666;padding:0">&times;</button>
            </div>
            {{-- video --}}
            <div style="position:relative;background:#000;aspect-ratio:4/3;overflow:hidden">
                <video id="ktp-video" autoplay playsinline muted style="width:100%;height:100%;object-fit:cover;display:block"></video>
                <p id="ktp-camera-error" style="display:none;position:absolute;inset:0;margin:0;color:#f87171;font-size:.85rem;text-align:center;padding:20px;display:flex;align-items:center;justify-content:center;background:rgba(0,0,0,.7)"></p>
            </div>
            {{-- footer --}}
            <div style="padding:16px 18px;text-align:center">
                <button type="button" id="ktp-capture-btn" class="at-btn" style="width:100%">
                    <span><span class="text-1">📸 AMBIL FOTO</span><span class="text-2">📸 AMBIL FOTO</span></span>
                </button>
            </div>
        </div>
        <canvas id="ktp-canvas" style="display:none"></canvas>
    </div>
</main>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ════════════════════════════════════════════════════════════════
       WILAYAH — Searchable Cascading Dropdown
       API: https://www.emsifa.com/api-wilayah-indonesia/v2
    ════════════════════════════════════════════════════════════════ */
    const API = 'https://www.emsifa.com/api-wilayah-indonesia/v2';

    /* ── helpers ── */
    const norm = s => s.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    function escHtml(s) {
        if (s == null) return '';
        return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;').replace(/'/g,'&#039;');
    }
    let _cache = {};
    async function apiFetch(path) {
        if (_cache[path]) return _cache[path];
        const res = await fetch(API + path);
        if (!res.ok) throw new Error('API error ' + res.status);
        const json = await res.json();
        /* API v2 wraps arrays in { data: [...] } and items use "id" as key */
        const raw = json.data ?? json;
        const data = Array.isArray(raw)
            ? raw.map(item => ({ code: item.id, name: item.name, postal_code: item.postal_code ?? null, lat: item.lat ?? null, lng: item.lng ?? null }))
            : raw;
        _cache[path] = data;
        return data;
    }

    /* ── WilayahSelect factory ── */
    function WilayahSelect({ wrapId, btnId, hiddenId, searchPlaceholder, onSelect, onClear }) {
        const wrap   = document.getElementById(wrapId);
        const btn    = document.getElementById(btnId);
        const hidden = document.getElementById(hiddenId);
        const drop   = wrap.querySelector('.wilayah-dropdown');
        const input  = drop.querySelector('.wilayah-dropdown__input');
        const list   = drop.querySelector('.wilayah-dropdown__list');
        const text   = btn.querySelector('.wilayah-search__text');

        let items = [];   // { code, name } from API
        let focusedIdx = -1;
        let isOpen = false;
        let selectedCode = null;   // track selected code separately (hidden stores name text)

        function open() {
            if (btn.disabled) return;
            isOpen = true;
            drop.classList.add('is-open');
            btn.classList.add('is-open');
            btn.setAttribute('aria-expanded', 'true');
            input.value = '';
            render(items);
            setTimeout(() => input.focus(), 40);
        }

        function close() {
            isOpen = false;
            drop.classList.remove('is-open');
            btn.classList.remove('is-open');
            btn.setAttribute('aria-expanded', 'false');
            focusedIdx = -1;
        }

        function setLabel(name) {
            text.innerHTML = name
                ? `<span style="color:inherit">${escHtml(name)}</span>`
                : `<span class="wilayah-search__placeholder">${escHtml(searchPlaceholder)}</span>`;
        }

        function render(filtered) {
            if (!filtered.length) {
                list.innerHTML = `<li class="wilayah-dropdown__empty">Tidak ditemukan</li>`;
                return;
            }
            list.innerHTML = filtered.map((it, i) =>
                `<li role="option" data-code="${escHtml(it.code)}" data-name="${escHtml(it.name)}"
                     class="${it.code === selectedCode ? 'is-selected' : ''}"
                     tabindex="-1">${escHtml(it.name)}</li>`
            ).join('');
            focusedIdx = -1;
        }

        function moveFocus(dir) {
            const lis = [...list.querySelectorAll('li[data-code]')];
            if (!lis.length) return;
            lis.forEach(li => li.classList.remove('is-focused'));
            focusedIdx = Math.max(0, Math.min(lis.length - 1, focusedIdx + dir));
            lis[focusedIdx].classList.add('is-focused');
            lis[focusedIdx].scrollIntoView({ block: 'nearest' });
        }

        function selectItem(code, name) {
            selectedCode = code;
            hidden.value = name;       // nilai yang dikirim ke controller = nama teks
            setLabel(name);
            drop.querySelectorAll('li').forEach(li =>
                li.classList.toggle('is-selected', li.dataset.code === code));
            close();
            btn.classList.remove('is-invalid');
            if (onSelect) onSelect(code, name);
            hidden.dispatchEvent(new Event('change', { bubbles: true }));
        }

        function clear() {
            selectedCode = null;
            hidden.value = '';
            setLabel('');
            items = [];
            list.innerHTML = '';
            if (onClear) onClear();
        }

        function enable(newItems) {
            items = newItems;
            btn.disabled = false;
            btn.classList.remove('is-disabled');
        }

        function disable() {
            btn.disabled = true;
            btn.classList.add('is-disabled');
            clear();
        }

        function showLoading() {
            list.innerHTML = `<li class="wilayah-loading">Memuat data…</li>`;
        }

        /* ── events ── */
        btn.addEventListener('click', () => isOpen ? close() : open());

        input.addEventListener('input', () => {
            const q = norm(input.value.trim());
            render(q ? items.filter(it => norm(it.name).includes(q)) : items);
        });

        input.addEventListener('keydown', e => {
            if (e.key === 'ArrowDown') { e.preventDefault(); moveFocus(1); }
            else if (e.key === 'ArrowUp') { e.preventDefault(); moveFocus(-1); }
            else if (e.key === 'Enter') {
                e.preventDefault();
                const focused = list.querySelector('.is-focused');
                if (focused) selectItem(focused.dataset.code, focused.dataset.name);
            }
            else if (e.key === 'Escape') close();
        });

        list.addEventListener('click', e => {
            const li = e.target.closest('li[data-code]');
            if (li) selectItem(li.dataset.code, li.dataset.name);
        });

        document.addEventListener('click', e => {
            if (isOpen && !wrap.contains(e.target)) close();
        });

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape' && isOpen) close();
        });

        /* ── restore label text from server old() value (name is already in hidden) ── */
        function restoreLabel() {
            if (hidden.value) {
                text.innerHTML = `<span style="color:inherit">${escHtml(hidden.value)}</span>`;
            }
        }

        return { enable, disable, selectItem, clear, showLoading, restoreLabel, getHidden: () => hidden, getSelectedCode: () => selectedCode };
    }

    /* ── Build the four selects ── */
    /* track the last district code so village autofill can look up from cache */
    let _lastDistrictCode = null;

    const selProvince = WilayahSelect({
        wrapId: 'wrap-province', btnId: 'province-btn', hiddenId: 'province',
        searchPlaceholder: 'Pilih provinsi…',
        onSelect: async (code, name) => {
            selCity.disable();
            selDistrict.disable();
            selVillage.disable();
            try {
                const data = await apiFetch(`/regencies/${code}.json`);
                selCity.enable(Array.isArray(data) ? data : []);
            } catch(e) {
                selCity.disable();
            }
        },
        onClear: () => { selCity.disable(); selDistrict.disable(); selVillage.disable(); },
    });

    const selCity = WilayahSelect({
        wrapId: 'wrap-city', btnId: 'city-btn', hiddenId: 'city',
        searchPlaceholder: 'Pilih kabupaten / kota…',
        onSelect: async (code, name) => {
            selDistrict.disable();
            selVillage.disable();
            try {
                const data = await apiFetch(`/districts/${code}.json`);
                selDistrict.enable(Array.isArray(data) ? data : []);
            } catch(e) {
                selDistrict.disable();
            }
        },
        onClear: () => { selDistrict.disable(); selVillage.disable(); },
    });

    const selDistrict = WilayahSelect({
        wrapId: 'wrap-district', btnId: 'district-btn', hiddenId: 'district',
        searchPlaceholder: 'Pilih kecamatan…',
        onSelect: async (code, name) => {
            _lastDistrictCode = code;
            selVillage.disable();
            try {
                const data = await apiFetch(`/villages/${code}.json`);
                selVillage.enable(Array.isArray(data) ? data : []);
            } catch(e) {
                selVillage.disable();
            }
        },
        onClear: () => { selVillage.disable(); _lastDistrictCode = null; },
    });

    const selVillage = WilayahSelect({
        wrapId: 'wrap-village', btnId: 'village-btn', hiddenId: 'village',
        searchPlaceholder: 'Pilih desa / kelurahan…',
        onSelect: (code, name) => {
            /* kumpulkan kode pos unik dari semua desa di kecamatan yang dipilih */
            if (_lastDistrictCode) {
                const villageList = _cache[`/villages/${_lastDistrictCode}.json`] || [];
                const found = villageList.find(v => v.code === code);

                /* kumpulkan semua kode pos unik dari kecamatan ini untuk opsi dropdown */
                const postalCodes = [...new Set(
                    villageList.filter(v => v.postal_code).map(v => v.postal_code)
                )].sort().map(pc => ({ code: pc, name: pc, postal_code: pc }));

                selPostalCode.enable(postalCodes);

                /* langsung pilih kode pos desa ini jika ada */
                if (found && found.postal_code) {
                    selPostalCode.selectItem(found.postal_code, found.postal_code);
                }
            }
        },
        onClear: () => selPostalCode.disable(),
    });

    const selPostalCode = WilayahSelect({
        wrapId: 'wrap-postal_code', btnId: 'postal_code-btn', hiddenId: 'postal_code',
        searchPlaceholder: 'Otomatis dari desa…',
    });

    /* ── Load provinces on page load ── */
    (async () => {
        try {
            const data = await apiFetch('/provinces.json');
            selProvince.enable(Array.isArray(data) ? data : []);
        } catch(e) {
            console.error('Gagal memuat daftar provinsi:', e);
        }
    })();

    /* ── Restore labels for old() repopulation ── */
    selProvince.restoreLabel();
    selCity.restoreLabel();
    selDistrict.restoreLabel();
    selVillage.restoreLabel();
    selPostalCode.restoreLabel();

    /* ════════════════════════════════════════════════════════════════
       PACKAGE BY WILAYAH — fetch dari API berdasarkan kabupaten
    ════════════════════════════════════════════════════════════════ */
    const packageListEl    = document.getElementById('package-list');
    const packageEmptyEl   = document.getElementById('package-empty');
    const packageLoadingEl = document.getElementById('package-loading');

    function formatRupiah(angka) {
        if (angka == null) return 'Rp 0';
        /* parseFloat baca "100000.00" sebagai 100000, bukan strip titik jadi 10000000 */
        const num = parseFloat(angka);
        if (isNaN(num)) return 'Rp ' + angka;
        return 'Rp ' + Math.round(num).toLocaleString('id-ID');
    }

    async function fetchPackagesByWilayah(kabupaten) {
        if (!kabupaten || !packageListEl) return;
        packageLoadingEl.style.display = 'block';
        packageEmptyEl.style.display   = 'none';
        packageListEl.innerHTML        = '';

        const cleanWilayah = kabupaten.replace(/\b(kabupaten|kota)\b/gi, '').replace(/\s+/g, ' ').trim();

        try {
            let url  = 'https://layanan.jernih.net.id/api/paket-online?wilayah=' + encodeURIComponent(cleanWilayah || kabupaten);
            let res  = await fetch(url);
            let json = await res.json();
            let data = json.data || [];

            /* fallback: coba nama kabupaten asli jika hasil kosong */
            if (!data.length && cleanWilayah && cleanWilayah.toLowerCase() !== kabupaten.toLowerCase()) {
                url  = 'https://layanan.jernih.net.id/api/paket-online?wilayah=' + encodeURIComponent(kabupaten);
                res  = await fetch(url);
                json = await res.json();
                data = json.data || [];
            }

            if (!data.length) {
                packageEmptyEl.style.display = 'block';
                return;
            }

            const oldPackage = '{{ old('package') }}';
            packageListEl.innerHTML = data.map(pkg => {
                const price = formatRupiah(pkg.harga);
                const speed = (pkg.kecepatan ?? '') + ' Mbps';
                const checked = oldPackage === pkg.id ? 'checked' : '';
                return `<div class="col-xl col-lg-4 col-md-4 col-6 package-card">
                    <label class="package-option">
                        <input type="radio" name="package" value="${escHtml(pkg.id)}" ${checked} required>
                        <span class="package-option__body">
                            <span class="package-option__check">
                                <svg viewBox="0 0 12 12" fill="none"><path d="M2 6.2 4.6 9 10 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <span class="d-block fz-font-label neutral-500 mb-2">PAKET FIBER</span>
                            <span class="package-option__speed d-block">${escHtml(speed)}</span>
                            <span class="package-option__price d-block fw-600">${escHtml(price)} <small>/bulan</small></span>
                        </span>
                    </label>
                </div>`;
            }).join('');
        } catch (e) {
            console.error('Gagal memuat paket:', e);
            packageEmptyEl.style.display = 'block';
        } finally {
            packageLoadingEl.style.display = 'none';
        }
    }

    /* ════════════════════════════════════════════════════════════════
       PACKAGE VISIBILITY — tampil setelah alamat lengkap + fetch by kabupaten
    ════════════════════════════════════════════════════════════════ */
    const addressFieldIds = ['address', 'rt', 'rw', 'village', 'district', 'city', 'province'];
    const addressFields   = addressFieldIds.map(id => document.getElementById(id));
    const packageSection  = document.getElementById('package-section');
    const addressNote     = document.getElementById('package-address-note');
    const cityHidden      = document.getElementById('city');

    let _lastFetchedCity = null;

    function updatePackages() {
        const addressComplete = addressFields.every(f => f && f.value.trim());
        if (packageSection) packageSection.classList.toggle('is-ready', addressComplete);
        if (addressNote) addressNote.style.display = addressComplete ? 'none' : 'flex';

        if (addressComplete && cityHidden.value) {
            /* hanya fetch ulang jika kota berubah */
            if (cityHidden.value !== _lastFetchedCity) {
                _lastFetchedCity = cityHidden.value;
                fetchPackagesByWilayah(cityHidden.value);
            }
        } else if (!addressComplete) {
            packageListEl.innerHTML        = '';
            packageEmptyEl.style.display   = 'none';
            packageLoadingEl.style.display = 'none';
            _lastFetchedCity = null;
        }
    }

    addressFields.forEach(f => f && f.addEventListener('change', updatePackages));
    document.getElementById('address').addEventListener('input', updatePackages);
    document.getElementById('rt').addEventListener('input', updatePackages);
    document.getElementById('rw').addEventListener('input', updatePackages);
    updatePackages();
    const locationButton  = document.getElementById('get-location');
    const locationStatus  = document.getElementById('location-status');
    const locationMap     = document.getElementById('location-map');
    const locationMapWrap = document.getElementById('location-map-wrap');
    const latitude        = document.getElementById('latitude');
    const longitude       = document.getElementById('longitude');
    const markerIcon = new L.Icon.Default();

    let map, marker;

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
            marker = L.marker(coordinates, { draggable: true, icon: markerIcon }).addTo(map);
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
        latitude.value  = preciseLat;
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

    /* ════════════════════════════════════════════════════════════════
       KTP PHOTO — file picker + kamera getUserMedia
    ════════════════════════════════════════════════════════════════ */
    (function () {
        const fileInput     = document.getElementById('ktp_file_input');
        const previewWrap   = document.getElementById('ktp-preview-wrap');
        const previewImg    = document.getElementById('ktp-preview-img');
        const removeBtn     = document.getElementById('ktp-remove');
        const btnsWrap      = document.getElementById('ktp-buttons');
        const pickFileBtn   = document.getElementById('ktp-pick-file');
        const openCamBtn    = document.getElementById('ktp-open-camera');
        const modal         = document.getElementById('ktp-camera-modal');
        const video         = document.getElementById('ktp-video');
        const canvas        = document.getElementById('ktp-canvas');
        const captureBtn    = document.getElementById('ktp-capture-btn');
        const closeCamBtn   = document.getElementById('ktp-camera-close');
        const camError      = document.getElementById('ktp-camera-error');
        let stream          = null;

        function showPreview(src) {
            previewImg.src      = src;
            previewWrap.style.display = 'block';
            btnsWrap.style.display    = 'none';
        }

        function clearPreview() {
            previewImg.src            = '';
            previewWrap.style.display = 'none';
            btnsWrap.style.display    = 'flex';
            fileInput.value           = '';
        }

        /* ── file picker ── */
        pickFileBtn.addEventListener('click', () => fileInput.click());

        fileInput.addEventListener('change', () => {
            const file = fileInput.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = e => showPreview(e.target.result);
            reader.readAsDataURL(file);
        });

        removeBtn.addEventListener('click', clearPreview);

        /* ── kamera ── */
        function stopStream() {
            if (stream) { stream.getTracks().forEach(t => t.stop()); stream = null; }
        }

        function closeCamera() {
            stopStream();
            modal.style.display    = 'none';
            camError.style.display = 'none';
            document.body.style.overflow = '';
        }

        openCamBtn.addEventListener('click', async () => {
            /* pindah modal ke body agar position:fixed benar-benar relatif viewport */
            if (modal.parentElement !== document.body) {
                document.body.appendChild(modal);
            }
            document.body.style.overflow = 'hidden';   // lock scroll
            modal.style.display = 'flex';
            camError.style.display = 'none';
            camError.textContent   = '';
            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: { facingMode: { ideal: 'environment' }, width: { ideal: 1280 }, height: { ideal: 720 } },
                    audio: false,
                });
                video.srcObject = stream;
            } catch (err) {
                camError.textContent   = 'Kamera tidak dapat diakses. Pastikan izin kamera sudah diberikan.';
                camError.style.display = 'flex';
            }
        });

        captureBtn.addEventListener('click', () => {
            if (!stream) return;
            canvas.width  = video.videoWidth  || 1280;
            canvas.height = video.videoHeight || 720;
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

            canvas.toBlob(blob => {
                /* masukkan blob ke FileList via DataTransfer */
                const dt   = new DataTransfer();
                const file = new File([blob], 'ktp-kamera.jpg', { type: 'image/jpeg' });
                dt.items.add(file);
                fileInput.files = dt.files;

                showPreview(canvas.toDataURL('image/jpeg', 0.92));
                closeCamera();
            }, 'image/jpeg', 0.92);
        });

        closeCamBtn.addEventListener('click', closeCamera);

        /* tutup modal kalau klik backdrop */
        modal.addEventListener('click', e => { if (e.target === modal) closeCamera(); });

        /* ── kompres gambar sebelum dikirim ──
           Foto dari kamera/HP sering berukuran 3–8 MB, sedangkan PHP di
           server hanya menerima ~2 MB. Gambar diperkecil dan diubah ke JPEG
           agar tidak gagal upload karena melebihi batas server. */
        const form      = fileInput.closest('form');
        const submitBtn = form ? form.querySelector('button[type="submit"]') : null;
        const MAX_EDGE  = 1600;   // px sisi terpanjang
        const QUALITY   = 0.85;
        const SKIP_BELOW = 1.5 * 1024 * 1024; // file kecil & sudah JPG/PNG tidak perlu diproses
        let preparing = false;

        function compressToJpeg(file) {
            return new Promise((resolve, reject) => {
                const url = URL.createObjectURL(file);
                const img = new Image();

                img.onload = () => {
                    URL.revokeObjectURL(url);

                    const scale = Math.min(1, MAX_EDGE / Math.max(img.width, img.height));
                    const width  = Math.max(1, Math.round(img.width  * scale));
                    const height = Math.max(1, Math.round(img.height * scale));

                    const canvas = document.createElement('canvas');
                    canvas.width  = width;
                    canvas.height = height;
                    canvas.getContext('2d').drawImage(img, 0, 0, width, height);

                    canvas.toBlob(blob => {
                        if (!blob) { reject(new Error('compress-failed')); return; }
                        const name = (file.name || 'ktp').replace(/\.[^.]+$/, '') + '.jpg';
                        resolve(new File([blob], name, { type: 'image/jpeg' }));
                    }, 'image/jpeg', QUALITY);
                };

                img.onerror = () => { URL.revokeObjectURL(url); reject(new Error('decode-failed')); };
                img.src = url;
            });
        }

        if (form) {
            form.addEventListener('submit', event => {
                if (preparing) return; // sudah diproses, izinkan submit berjalan

                const file = fileInput.files[0];
                if (!file) return; // biarkan validasi server menangani

                const isJpegOrPng = /^image\/(jpeg|png)$/i.test(file.type);
                if (file.size <= SKIP_BELOW && isJpegOrPng) return; // sudah cukup kecil

                event.preventDefault();
                preparing = true;
                if (submitBtn) submitBtn.disabled = true;

                compressToJpeg(file)
                    .then(compressed => {
                        const dt = new DataTransfer();
                        dt.items.add(compressed);
                        fileInput.files = dt.files;
                    })
                    .catch(() => { /* gagal kompres: kirim file asli, server akan memberi pesan */ })
                    .finally(() => {
                        if (submitBtn) submitBtn.disabled = false;
                        if (typeof form.requestSubmit === 'function') {
                            form.requestSubmit();
                        } else {
                            form.submit();
                        }
                    });
            });
        }
    })();
});
</script>
@endpush
