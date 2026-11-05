@extends('layouts.app')

@section('title', 'Panduan Pelanggan - Kendala Teknis - JernihNet')

@section('content')
<main class="panduan-page bg-neutral-0">
    <style>
        .panduan-page { padding-top: clamp(85px, 12vw, 120px); }
        .panduan-hero { background: #101c2d; border-radius: 24px; color: #fff; margin: 0 clamp(8px, 1.2vw, 16px); padding: clamp(40px, 7vw, 80px) 0; }
        .panduan-hero__label { color: rgba(255, 255, 255, .65); font-size: 12px; font-weight: 700; letter-spacing: .14em; margin-bottom: 14px; text-transform: uppercase; }
        .panduan-hero h1 { color: #fff; font-size: clamp(2rem, 4.5vw, 3.5rem); font-weight: 700; letter-spacing: -.03em; line-height: 1.1; margin-bottom: 18px; }
        .panduan-hero p { color: rgba(255, 255, 255, .78); font-size: 1.05rem; margin-bottom: 0; max-width: 780px; }
        .panduan-hero__art { display: flex; justify-content: center; }
        .panduan-hero__art img { display: block; height: auto; max-width: 460px; width: 100%; filter: drop-shadow(0 24px 55px rgba(0, 0, 0, .35)); animation: panduan-float 7s ease-in-out infinite; }
        @keyframes panduan-float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }
        @media (max-width: 991px) { .panduan-hero__art { margin-top: 26px; } .panduan-hero__art img { max-width: 360px; } }
        @media (prefers-reduced-motion: reduce) { .panduan-hero__art img { animation: none; } }
        .panduan-body { padding: clamp(45px, 7vw, 90px) 0; }
        .panduan-card { background: var(--at-common-white, #fff); border: 1px solid rgba(20, 29, 43, .1); border-radius: 14px; padding: clamp(24px, 4vw, 42px); }
        .panduan-card + .panduan-card { margin-top: 22px; }
        .panduan-card__eyebrow { align-items: center; color: #6b7280; display: flex; font-size: 11px; font-weight: 700; gap: 10px; letter-spacing: .12em; margin-bottom: 12px; text-transform: uppercase; }
        .panduan-card__eyebrow::before { background: #101c2d; border-radius: 50%; content: ''; height: 8px; width: 8px; }
        .panduan-card h2 { font-size: clamp(1.35rem, 2.4vw, 1.9rem); font-weight: 700; letter-spacing: -.02em; margin-bottom: 14px; }
        .panduan-card p { color: #4b5563; line-height: 1.7; }
        .panduan-card p:last-child { margin-bottom: 0; }
        .panduan-list { counter-reset: panduan; display: grid; gap: 12px; list-style: none; margin: 18px 0 0; padding: 0; }
        .panduan-list li { counter-increment: panduan; color: #374151; font-size: .95rem; line-height: 1.6; overflow-wrap: anywhere; padding-left: 36px; position: relative; }
        .panduan-list li::before { align-items: center; background: #101c2d; border-radius: 50%; color: #fff; content: counter(panduan); display: flex; font-size: 12px; font-weight: 700; height: 24px; justify-content: center; left: 0; line-height: 1; position: absolute; top: 1px; width: 24px; }
        .panduan-note { background: rgba(20, 29, 43, .05); border-left: 3px solid #101c2d; border-radius: 8px; color: #374151; font-size: .92rem; line-height: 1.65; margin-top: 22px; padding: 16px 18px; }
        .panduan-note strong { color: #101c2d; }
        .panduan-bank { display: grid; gap: 10px; list-style: none; margin: 18px 0 22px; padding: 0; }
        .panduan-bank li { align-items: center; background: rgba(20, 29, 43, .04); border-radius: 8px; display: flex; flex-wrap: wrap; gap: 8px 16px; justify-content: space-between; padding: 13px 16px; }
        .panduan-bank__name { color: #374151; font-size: .9rem; font-weight: 600; }
        .panduan-bank__number { color: #101c2d; font-size: 1rem; font-weight: 700; letter-spacing: .04em; }
        .panduan-contact { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 22px; }
        .panduan-contact a { align-items: center; background: #101c2d; border-radius: 50px; color: #fff; display: inline-flex; font-size: .9rem; font-weight: 600; gap: 9px; padding: 14px 22px; text-decoration: none; transition: opacity .2s ease; }
        .panduan-contact a:hover { color: #fff; opacity: .86; }
        .panduan-contact svg { flex: 0 0 16px; }
        [data-bs-theme="dark"] .panduan-card { background: #18212d; border-color: rgba(255, 255, 255, .18); }
        [data-bs-theme="dark"] .panduan-card h2 { color: #fff; }
        [data-bs-theme="dark"] .panduan-card p { color: rgba(255, 255, 255, .72); }
        [data-bs-theme="dark"] .panduan-card__eyebrow { color: rgba(255, 255, 255, .6); }
        [data-bs-theme="dark"] .panduan-card__eyebrow::before { background: #fff; }
        [data-bs-theme="dark"] .panduan-list li { color: rgba(255, 255, 255, .8); }
        [data-bs-theme="dark"] .panduan-list li::before { background: #fff; color: #101c2d; }
        [data-bs-theme="dark"] .panduan-note { background: rgba(255, 255, 255, .08); border-left-color: #fff; color: rgba(255, 255, 255, .8); }
        [data-bs-theme="dark"] .panduan-note strong { color: #fff; }
        [data-bs-theme="dark"] .panduan-bank li { background: rgba(255, 255, 255, .06); }
        [data-bs-theme="dark"] .panduan-bank__name { color: rgba(255, 255, 255, .75); }
        [data-bs-theme="dark"] .panduan-bank__number { color: #fff; }
        [data-bs-theme="dark"] .panduan-contact a { background: #fff; color: #101c2d; }
    </style>

    <section class="panduan-hero">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <p class="panduan-hero__label">Panduan Pelanggan &bull; Kendala Teknis</p>
                    <h1>Gangguan Koneksi</h1>
                    <p>Panduan singkat penanganan gangguan koneksi internet JernihNet, mulai dari reboot perangkat WiFi hingga konfirmasi pembayaran dan ketentuan berlangganan.</p>
                </div>
                <div class="col-lg-5">
                    <div class="panduan-hero__art">
                        <img src="{{ asset('assets/imgs/pages/panduan-hero.svg') }}" alt="Ilustrasi router WiFi JernihNet memancarkan sinyal ke perangkat di sekitarnya" width="600" height="480" loading="eager">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panduan-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="panduan-card">
                        <p class="panduan-card__eyebrow">Langkah Awal</p>
                        <h2>Reboot Perangkat WiFi Terlebih Dahulu</h2>
                        <p>Kepada pelanggan <strong>JERNIH MULTI KOMUNIKASI</strong> yang mengalami masalah teknis, silakan coba <em>reboot</em> perangkat WiFi terlebih dahulu.</p>

                        <h3 class="h6 fw-700 mt-4 mb-0">Tata Cara Reboot WiFi</h3>
                        <ol class="panduan-list">
                            <li>Cabut kabel listrik dari router WiFi.</li>
                            <li>Biarkan perangkat mati selama 30 detik.</li>
                            <li>Sambungkan kembali kabel listrik ke router WiFi.</li>
                            <li>Tunggu hingga perangkat menyala kembali sepenuhnya.</li>
                            <li>Mohon coba kembali koneksi internet Anda.</li>
                        </ol>

                        <div class="panduan-note">
                            Apabila belum bisa terkoneksi dengan internet, dimohon untuk mengirimkan foto dan video perangkat WiFi ke nomor IT Support PT. JMK <strong>0857-4147-5779</strong> dengan menyertakan <strong>nama</strong>, <strong>nomor ID</strong>, dan <strong>share lokasi</strong>.
                        </div>

                        <div class="panduan-contact">
                            <a href="https://wa.me/6285741475779" target="_blank" rel="noopener">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2Zm0 18.15h-.01a8.2 8.2 0 0 1-4.19-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.2 8.2 0 0 1-1.26-4.38c0-4.54 3.7-8.23 8.25-8.23 2.2 0 4.27.86 5.83 2.42a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.69 8.23-8.24 8.23Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.16.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.43.06-.66.31-.22.25-.86.85-.86 2.07 0 1.22.89 2.39 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.14-1.18-.06-.11-.22-.17-.47-.29Z"/></svg>
                                Hubungi IT Support
                            </a>
                        </div>
                    </div>

                    <div class="panduan-card">
                        <p class="panduan-card__eyebrow">Administrasi Pembayaran</p>
                        <h2>Pembayaran Biaya Langganan</h2>
                        <p>Pembayaran dapat dilakukan secara transfer ke nomor rekening atas nama <strong>PT. Jernih Multi Komunikasi</strong>:</p>

                        <ul class="panduan-bank">
                            <li><span class="panduan-bank__name">Bank Mandiri</span><span class="panduan-bank__number">13800-1801-8023</span></li>
                            <li><span class="panduan-bank__name">Bank BRI</span><span class="panduan-bank__number">00350-1001-548-569</span></li>
                            <li><span class="panduan-bank__name">Bank Jateng</span><span class="panduan-bank__number">1009009490</span></li>
                        </ul>

                        <p>Jika sudah melakukan pembayaran, <strong>WAJIB</strong> konfirmasi dengan mengirimkan bukti atau struk pembayaran transfer ke sistem Smart Billing JMK melalui <a href="https://layanan.jernih.net.id/" target="_blank" rel="noopener">https://layanan.jernih.net.id/</a> atau menghubungi nomor Admin Finance PT. JMK <strong>+62 878 4210 7264</strong>.</p>

                        <div class="panduan-note">
                            Jatuh tempo pembayaran setiap bulannya jatuh pada setiap <strong>akhir bulan</strong>. Apabila terlambat melakukan pembayaran, akan dikenakan limitasi atau dikurangi kapasitas koneksi internet, namun biaya berlangganan tetap dikenakan tarif normal walaupun dilimitasi.
                        </div>

                        <div class="panduan-contact">
                            <a href="https://layanan.jernih.net.id/" target="_blank" rel="noopener">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 5h16v14H4z"/><path d="M4 7l8 6 8-6"/></svg>
                                Smart Billing JMK
                            </a>
                            <a href="https://wa.me/6287842107264" target="_blank" rel="noopener">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2Zm0 18.15h-.01a8.2 8.2 0 0 1-4.19-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.2 8.2 0 0 1-1.26-4.38c0-4.54 3.7-8.23 8.25-8.23 2.2 0 4.27.86 5.83 2.42a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.69 8.23-8.24 8.23Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.16.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.43.06-.66.31-.22.25-.86.85-.86 2.07 0 1.22.89 2.39 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.14-1.18-.06-.11-.22-.17-.47-.29Z"/></svg>
                                Admin Finance
                            </a>
                        </div>
                    </div>

                    <div class="panduan-card">
                        <p class="panduan-card__eyebrow">Ketentuan Berlangganan</p>
                        <h2>Masa Kontrak dan Perpanjangan</h2>
                        <p>Kontrak berlangganan minimal <strong>12 bulan (1 tahun)</strong>. Apabila pada bulan ke-11 pelanggan tidak mengajukan berhenti berlangganan, maka dianggap lanjut perpanjangan sampai dengan <strong>24 bulan (2 tahun)</strong>.</p>
                        <p>Apabila berhenti berlangganan sepihak sebelum kontrak habis dengan alasan apa pun, pelanggan dikenakan penalti membayar denda <strong>50% dari biaya berlangganan</strong> dan perangkat diambil oleh pihak PT. JMK.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
