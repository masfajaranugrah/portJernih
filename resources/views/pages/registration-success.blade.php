@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil - JernihNet')

@section('content')
<main class="registration-page bg-neutral-50">
    <style>
        .registration-page { padding: clamp(105px, 13vw, 145px) 0 80px; }
        .success-card { box-shadow: 0 25px 60px rgba(21,29,42,.11); }
        .success-icon { width: 112px; height: 112px; border-radius: 50%; background: #101c2d; color: #fff; display: grid; place-items: center; margin: 0 auto 28px; animation: success-pop .7s cubic-bezier(.2,.8,.2,1) both; }
        .success-icon svg { width: 55px; height: 55px; }
        .summary-row { border-bottom: 1px solid rgba(20,29,43,.1); padding: 14px 0; }
        .success-back { background: transparent; border: 1px solid #101c2d; color: #101c2d; }
        .success-back:hover { background: #101c2d; color: #fff; }
        @keyframes success-pop { from { opacity: 0; transform: scale(.45) rotate(-16deg); } to { opacity: 1; transform: scale(1) rotate(0); } }
    </style>
    <section class="container"><div class="row justify-content-center"><div class="col-lg-9 col-xl-8">
        <div class="success-card bg-neutral-0 rounded-4 p-lg-5 p-4 text-center at_fade_anim">
            <div class="success-icon"><svg viewBox="0 0 52 52" fill="none" aria-hidden="true"><path d="M14 27.5l8 8L39 17" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <h1 class="h1 mt-3 mb-2">PENDAFTARAN BERHASIL!</h1>
            <p class="fz-font-lg neutral-500 mx-auto mb-2" style="max-width:620px">Terima kasih telah mendaftar. Permohonan pemasangan internet Anda telah kami terima.</p>
            <p class="h4 fw-bold mb-5">Nomor Registrasi: {{ $registration['registration_number'] }}</p>
            <div class="text-start bg-neutral-50 p-lg-4 p-3 mb-5"><h2 class="h4 mb-3">Ringkasan Data Pemohon</h2>
                <div class="summary-row d-flex justify-content-between gap-4"><span>Nama Pemohon</span><strong class="text-end">{{ $registration['name'] }}</strong></div>
                <div class="summary-row d-flex justify-content-between gap-4"><span>Nomor WhatsApp</span><strong class="text-end">{{ $registration['phone'] }}</strong></div>
                <div class="summary-row d-flex justify-content-between gap-4"><span>Alamat pemasangan</span><strong class="text-end">{{ $registration['address'] }}, RT {{ $registration['rt'] }}/RW {{ $registration['rw'] }}, {{ $registration['village'] }}, {{ $registration['district'] }}, {{ $registration['city'] }}{{ $registration['postal_code'] ? ', ' . $registration['postal_code'] : '' }}</strong></div>
                <div class="summary-row d-flex justify-content-between gap-4"><span>Paket internet</span><strong class="text-end">{{ $registration['package_name'] }}</strong></div>
                <div class="summary-row d-flex justify-content-between gap-4"><span>Harga per bulan</span><strong class="text-end">{{ $registration['package_price'] }}</strong></div>
            </div>
            @php($whatsappText = rawurlencode("Halo Admin JernihNet, saya {$registration['name']} ingin menindaklanjuti pendaftaran {$registration['registration_number']}."))
            <p class="neutral-500 mb-3">Silakan masuk ke dashboard Anda menggunakan nomor telepon yang didaftarkan.</p>
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                <a class="at-btn justify-content-center" href="https://layanan.jernih.net.id" target="_blank" rel="noopener"><span><span class="text-1">MASUK KE DASHBOARD</span><span class="text-2">MASUK KE DASHBOARD</span></span></a>
                <a class="at-btn justify-content-center" href="https://wa.me/6281818461122?text={{ $whatsappText }}" target="_blank" rel="noopener"><span><span class="text-1">HUBUNGI SALES VIA WHATSAPP</span><span class="text-2">HUBUNGI SALES VIA WHATSAPP</span></span></a>
                <a class="at-btn success-back justify-content-center" href="{{ route('home') }}"><span><span class="text-1">KEMBALI KE BERANDA</span><span class="text-2">KEMBALI KE BERANDA</span></span></a>
            </div>
        </div>
    </div></div></section>
</main>
@endsection
