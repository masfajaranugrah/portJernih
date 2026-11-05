@extends('layouts.app')

@section('title', 'JernihNet')

@section('content')
            <main>
                <!--Home 4 Section 1-->
                <div class="container-2200 sec-1-home-4-wrap p-relative z-0" style="padding-top: clamp(85px, 12vw, 120px);">
                    <div class="sec-1-home-4 bg-linear-opacity p-relative bg-cover mt-3 rounded-5 mx-lg-3 mx-2" style="padding: clamp(40px, 6vw, 80px) 0 clamp(60px, 8vw, 110px);" data-background="{{ asset('assets/imgs/pages/hero.png') }}">
                        <div class="container p-relative z-index-1">
                            <div class="row align-items-start">
                                <!-- Left: Tagline, Headline -->
                                <div class="col-12">
                                    <span class="sec-1-home-4__tagline d-inline-block mb-30">[ Internet Service Provider ]</span>
                                </div>
                                 <div class="col-xxl-4 col-lg-5 mb-5 mb-lg-0">
                                     <h4 class="sec-1-home-4__headline text-white mb-4 mb-md-5 lh-1">
                                         Cepat. Stabil. Selalu terhubung. Internet fiber optik untuk rumah & bisnis Anda, mulai Rp 120.000/bulan dengan support 24/7.
                                     </h4>
                                 </div>
                                <!-- Right: Image Cards + Tags -->
                                <div class="col-xxl-4 col-lg-6 col-md-10 ms-lg-auto mt-lg-0 mt-4">
                                    <div class="sec-1-home-4__cards d-flex gap-3 mb-4">
                                        <div class="sec-1-home-4__card rounded-3 overflow-hidden">
                                            <img class="img-cover" src="{{ asset('assets/imgs/pages/1.png') }}" alt="jernihnet">
                                        </div>
                                        <div class="sec-1-home-4__card rounded-3 overflow-hidden">
                                            <img class="img-cover" src="{{ asset('assets/imgs/pages/2.png') }}" alt="jernihnet">
                                        </div>
                                        <div class="sec-1-home-4__card rounded-3 overflow-hidden">
                                            <img class="img-cover" src="{{ asset('assets/imgs/pages/3.png') }}" alt="jernihnet">
                                        </div>
                                    </div>
                                    <div class="sec-1-home-4__tags d-flex flex-wrap gap-3 mt-40">
                                        <a href="#" class="sec-1-home-4__tag">Programming
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10" fill="none">
                                                <path d="M5.62494 9.99994L0.562517 10L0.5625 8.75003L4.49994 8.74996L4.5 2.39273L2.27828 4.86124L1.48278 3.97739L5.0625 0L8.64225 3.97739L7.84676 4.86124L5.625 2.3927L5.62494 9.99994Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a href="#" class="sec-1-home-4__tag">Networking
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10" fill="none">
                                                <path d="M5.62494 9.99994L0.562517 10L0.5625 8.75003L4.49994 8.74996L4.5 2.39273L2.27828 4.86124L1.48278 3.97739L5.0625 0L8.64225 3.97739L7.84676 4.86124L5.625 2.3927L5.62494 9.99994Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a href="#" class="sec-1-home-4__tag">Infrastruktur
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10" fill="none">
                                                <path d="M5.62494 9.99994L0.562517 10L0.5625 8.75003L4.49994 8.74996L4.5 2.39273L2.27828 4.86124L1.48278 3.97739L5.0625 0L8.64225 3.97739L7.84676 4.86124L5.625 2.3927L5.62494 9.99994Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a href="#" class="sec-1-home-4__tag">Maintenance
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10" fill="none">
                                                <path d="M5.62494 9.99994L0.562517 10L0.5625 8.75003L4.49994 8.74996L4.5 2.39273L2.27828 4.86124L1.48278 3.97739L5.0625 0L8.64225 3.97739L7.84676 4.86124L5.625 2.3927L5.62494 9.99994Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- Bottom: Brand Title + Navigation -->
                            <div class="sec-1-home-4__footer pt-60 pt-lg-8 mt-5 mt-lg-8">
                                <h2 class="sec-1-home-4__brand text-white mb-4">
                                    PT. Jernih Multi Komunikasi<span class="sec-1-home-4__brand-suffix"><sup>®</sup></span>
                                </h2>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Alur Registrasi -->
                <div class="container-2200 pt-60">
                    <div class="bg-neutral-0 rounded-5 mx-lg-3 mx-2 p-4 p-lg-5">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-4">
                                <span class="at-btn common-black bg-transparent mb-10 rounded-0 p-0">
                                    <span class="text-uppercase">
                                        <span class="text-1">REGISTRASI MUDAH</span>
                                        <span class="text-2">REGISTRASI MUDAH</span>
                                    </span>
                                </span>
                                <h2 class="h3 mb-3">Pasang internet baru hanya dalam 3 langkah</h2>
                                <p class="neutral-500 mb-4">Mulai dari formulir registrasi. Tim JernihNet akan memproses permohonan dan menghubungi Anda.</p>
                                <a class="at-btn" href="{{ route('registration.create') }}">
                                    <span>
                                        <span class="text-1">DAFTAR SEKARANG</span>
                                        <span class="text-2">DAFTAR SEKARANG</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="h-100 p-4 rounded-4 bg-neutral-50">
                                            <span class="h3 fw-700 d-block mb-3">01</span>
                                            <h3 class="h6 mb-2">Isi data pemohon</h3>
                                            <p class="small neutral-500 mb-0">Lengkapi nama, NIK, WhatsApp, dan alamat pemasangan.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="h-100 p-4 rounded-4 bg-neutral-50">
                                            <span class="h3 fw-700 d-block mb-3">02</span>
                                            <h3 class="h6 mb-2">Tandai lokasi & pilih paket</h3>
                                            <p class="small neutral-500 mb-0">Tentukan titik rumah dan pilih paket internet yang sesuai.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="h-100 p-4 rounded-4 bg-neutral-50">
                                            <span class="h3 fw-700 d-block mb-3">03</span>
                                            <h3 class="h6 mb-2">Kami hubungi Anda</h3>
                                            <p class="small neutral-500 mb-0">Tim kami memeriksa jangkauan jaringan dan menjadwalkan pemasangan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Home 4 Section 2-->
                <div class="sec-2-home-4 portfolio-area pt-80 pb-80 fix">
                    <div class="container">
                        <div class="row pb-60">
                            <div class="col-lg-2 col-md-3">
                                <span class="at-btn common-black bg-transparent mb-10 rounded-0 p-0">
                                    <span class="text-uppercase">
                                        <span class="text-1">yang kami tawarkan</span>
                                        <span class="text-2">yang kami tawarkan</span>
                                    </span>
                                    <i>
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path>
                                        </svg>
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path>
                                        </svg>
                                    </i>
                                </span>
                                <div class="pt-40 ps-5 d-none d-md-block">
                                    <img class="portfolio-text" src="assets/imgs/pages/wifiku.png" alt="jernihnet">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-9">
                                <h3 class="reveal-text lh-1">Koneksi internet cepat dan stabil, siap menunjang produktivitas rumah dan bisnis Anda di Klaten.</h3>
                            </div>
                            <div class="col-lg-3 col-md-6 ms-auto mt-md-0 mt-4">
                                <ul class="list-unstyled navigation-section-10">
                                    <li>
                                        <div class="icon-shape size-60 rounded-2 fix">
                                            <img class="img-cover" src="assets/imgs/pages/gambar/teknisi-1.jpeg" alt="Teknisi JernihNet memasang jaringan" loading="lazy">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-shape size-60 rounded-2 fix">
                                            <img class="img-cover" src="assets/imgs/pages/gambar/teknisi-2.jpeg" alt="Teknisi JernihNet melakukan perawatan jaringan" loading="lazy">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-shape size-60 rounded-2 fix">
                                            <img class="img-cover" src="assets/imgs/pages/gambar/teknisi-3.jpeg" alt="Teknisi JernihNet mengatur perangkat jaringan" loading="lazy">
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-flex gap-3 pt-30">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27 13.5V0H13.5H0V13.5V27H13.5L27 13.5ZM27 13.5H13.5V27L0 13.5L13.5 0L27 13.5Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <span class="neutral-900">Kami membangun jaringan fiber optik terbaik  stabil, cepat, dan siap mendukung setiap aktivitas digital Anda.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-3 col-md-6">
                                <div class="at-service-card card-1 rounded-4 overflow-hidden p-relative bg-cover" data-background="assets/imgs/pages/img-76.webp">
                                    <a href="#" class="p-absolute top-0 left-0 w-100 h-100"></a>
                                    <div class="at-service-card-content text-white p-absolute bottom-0 start-0 end-0 m-xxl-5 m-4">
                                        <div class="at-service-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M7.5 15C11.6421 15 15 11.6421 15 7.5C15 11.6412 18.3563 14.9984 22.4971 15C18.3563 15.0016 15 18.3588 15 22.5C15 18.3579 11.6421 15 7.5 15C3.35786 15 5.08894e-07 18.3579 3.27835e-07 22.5L0 30L7.5 30C11.6421 30 15 26.6421 15 22.5C15 26.6421 18.3579 30 22.5 30L30 30L30 22.5C30 18.3588 26.6437 15.0016 22.5029 15C26.6437 14.9984 30 11.6412 30 7.5L30 6.31805e-06L22.5 6.64589e-06C18.3579 6.82695e-06 15 3.35787 15 7.5C15 3.35787 11.6421 5.21315e-06 7.5 5.39421e-06L2.62268e-06 3.8147e-06L1.63918e-06 7.5C1.096e-06 11.6421 3.35786 15 7.5 15Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h4 class="h6 text-white mt-3"><a href="#">Survei & Konsultasi</a></h4>
                                        <div class="at-service-card-description">
                                            <p class="text-white mb-0">Tim kami meninjau kebutuhan dan kondisi lokasi untuk memberi solusi internet paling tepat bagi rumah atau bisnis Anda.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="at-service-card card-2 rounded-4 overflow-hidden p-relative bg-neutral-0">
                                    <a href="#" class="p-absolute bottom-0 start-0 end-0 d-flex justify-content-end align-items-end p-4">
                                        <img src="assets/imgs/pages/wifi.png" alt="jernihnet" class="rounded-2" style="max-width: 100%; max-height: 343px; object-fit: contain; opacity: .85;">
                                    </a>
                                    <div class="at-service-card-content p-absolute top-0 left-0 m-xxl-5 m-4">
                                        <div class="at-service-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M15 0H30V15L15 0Z" fill="currentColor" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 15V0H7.5L0 7.5V15V30H15H22.5L30 22.5V15H15ZM15 15V30L0 15H15Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h4 class="h6 mt-3"><a href="#">Konfigurasi Jaringan</a></h4>
                                        <div class="at-service-card-description">
                                            <p class="mb-0">Pengaturan jaringan yang rapi dan presisi agar semua perangkat terhubung dengan kecepatan terbaik.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="at-service-card card-3 rounded-4 overflow-hidden p-relative">
                                    <a href="#" class="p-absolute top-0 left-0">
                                        <img class="img-cover" src="assets/imgs/pages/img-78.webp" alt="jernihnet">
                                    </a>
                                    <a href="#" class="p-absolute bottom-0 start-0 end-0">
                                        <img class="img-cover" src="assets/imgs/pages/img-79.webp" alt="jernihnet">
                                    </a>
                                    <div class="at-service-card-content text-white p-absolute top-50 left-0 mx-xxl-5 mx-4 translate-middle-y">
                                        <div class="at-service-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0L20 10L10 0L0 10V30L10 20L20 30L30 20V0ZM10 20V10H20V20H10Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h4 class="h6 text-white mt-3"><a href="#">Fiber Optik & Infrastruktur</a></h4>
                                        <div class="at-service-card-description">
                                            <p class="mb-0 text-white">Diperkuat teknologi fiber optik untuk kecepatan tinggi, minim gangguan, dan performa stabil sepanjang waktu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="at-service-card card-2 rounded-4 overflow-hidden p-relative bg-neutral-0">
                                    <a href="#" class="p-absolute bottom-0 start-0 end-0">
                                        <img class="img-cover" src="assets/imgs/pages/server.png" alt="jernihnet">
                                    </a>
                                    <div class="at-service-card-content p-absolute top-0 left-0 m-xxl-5 m-4">
                                        <div class="at-service-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M10 10L20 0H30V10L20 20V10H10Z" fill="currentColor" />
                                                <path d="M20 20H30V30H20V20Z" fill="currentColor" />
                                                <path d="M10 10L0 20V30H10L20 20H10V10Z" fill="currentColor" />
                                                <path d="M10 10H0V0H10V10Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h4 class="h6 mt-3"><a href="#">Support & Monitoring 24/7</a></h4>
                                        <div class="at-service-card-description">
                                            <p class="mb-0">Tim teknis siaga sepanjang waktu memastikan koneksi Anda selalu hidup, cepat, dan bebas gangguan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Home 4 Section 2-->
                <div class="container-2200">
                    <div class="sec-3-home-4 pt-130 rounded-5 mx-lg-3 mx-2 fix p-relative bg-neutral-0">
                        <div class="position-absolute w-100 h-100 d-grid top-0 md:grid-cols-7 gap-0 z-0 opacity-10">
                            <div class="position-relative h-100 overflow-hidden d-md-block border-dark/01">
                                <div class="absolute bottom-0 left-0 right-0 border-white/10"></div>
                            </div>
                            <div class="position-relative h-100 overflow-hidden d-md-block border-dark/01">
                                <div class="absolute bottom-0 left-0 right-0 border-white/10"></div>
                            </div>
                            <div class="position-relative h-100 overflow-hidden d-md-block border-dark/01">
                                <div class="absolute bottom-0 left-0 right-0 border-white/10"></div>
                            </div>
                            <div class="position-relative h-100 border-r border-dark/01 md:border-none">
                                <div class="absolute bottom-0 left-0 right-0 border-white/10"></div>
                                <div class="absolute top-[20%] left-0 right-0 h-[30%] bg-gradient-to-b from-white/5 to-transparent pointer-events-none"></div>
                            </div>
                            <div class="position-relative h-100 overflow-hidden d-md-block border-dark/01">
                                <div class="absolute bottom-0 left-0 right-0 border-white/10"></div>
                            </div>
                            <div class="position-relative h-100 overflow-hidden d-md-block border-dark/01">
                                <div class="absolute bottom-0 left-0 right-0 border-white/10"></div>
                            </div>
                            <div class="position-relative h-100 overflow-hidden d-md-block border-dark/01">
                                <div class="absolute bottom-0 left-0 right-0 border-white/10"></div>
                            </div>
                        </div>
                        <div class="container p-relative z-1">
                            <div class="row align-items-end g-4">
                                <div class="col-lg-6 col-md-10">
                                    <span class="at-btn common-black text-uppercase bg-transparent mb-10 rounded-0 p-0">
                                        <span class="text-uppercase">
                                            <span class="text-1">cara kerja kami</span>
                                            <span class="text-2">cara kerja kami</span>
                                        </span>
                                        <i>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                            </svg>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                            </svg>
                                        </i>
                                    </span>
                                    <h3 class="reveal-text mb-0">Proses kerja yang terstruktur
                                        untuk hasil koneksi yang maksimal</h3>
                                </div>
                                <div class="col-lg-3 ms-auto d-flex justify-content-lg-end">
                                    <div class="at-btn-group at_fade_anim" data-delay=".4" data-fade-from="bottom" data-ease="bounce">
                                        <a class="at-btn-circle" href="{{ route('contact') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a class="at-btn z-index-1" href="{{ route('contact') }}">Minta Penawaran</a>
                                        <a class="at-btn-circle" href="{{ route('contact') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 pt-60">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card__process-card card-1 at_fade_anim" data-delay=".4">
                                        <div class="card__process-visual">
                                            <div class="card__process-pill card__process-pill--1"></div>
                                            <span class="card__process-num">01</span>
                                        </div>
                                        <div class="card__process-content">
                                            <h4 class="h6 card__process-title">Survei & Analisis</h4>
                                            <p class="card__process-desc">Kami survei lokasi dan kebutuhan Anda untuk menentukan solusi internet yang paling tepat, baik untuk rumah maupun bisnis.</p>
                                            <div class="card__process-divider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card__process-card card-2 at_fade_anim" data-delay=".4">
                                        <div class="card__process-visual">
                                            <div class="card__process-pill card__process-pill--2"></div>
                                            <span class="card__process-num">02</span>
                                        </div>
                                        <div class="card__process-content">
                                            <h4 class="h6 card__process-title">Perencanaan Jaringan</h4>
                                            <p class="card__process-desc">Kami merancang topologi dan desain jaringan sesuai kebutuhan Anda serta siap untuk pengembangan ke depan.</p>
                                            <div class="card__process-divider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card__process-card card-3 at_fade_anim" data-delay=".4">
                                        <div class="card__process-visual">
                                            <div class="card__process-pill card__process-pill--3"></div>
                                            <span class="card__process-num">03</span>
                                        </div>
                                        <div class="card__process-content">
                                            <h4 class="h6 card__process-title">Instalasi & Optimalisasi</h4>
                                            <p class="card__process-desc">Instalasi oleh teknisi berpengalaman dengan pengaturan optimal agar kecepatan maksimal sejak hari pertama.</p>
                                            <div class="card__process-divider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card__process-card card-4 at_fade_anim" data-delay=".4">
                                        <div class="card__process-visual">
                                            <div class="card__process-pill card__process-pill--4"></div>
                                            <span class="card__process-num">04</span>
                                        </div>
                                        <div class="card__process-content">
                                            <h4 class="h6 card__process-title">Monitoring & Perawatan</h4>
                                            <p class="card__process-desc">Kami pantau 24/7 dan rawat berkala agar koneksi Anda tetap stabil dan andal dalam jangka panjang.</p>
                                            <div class="card__process-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center g-md-5 g-4 mt-lg-0 mt-20">
                                <div class="col-lg-3 order-lg-1 order-2">
                                    <div class="at_fade_anim" data-delay=".4" data-fade-from="bottom" data-ease="bounce">
                                        <img src="assets/imgs/pages/jmk.png" alt="jernihnet">
                                    </div>
                                </div>
                                <div class="col-lg-4 order-lg-2 order-1">
                                    <div class="mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="48" viewBox="0 0 42 48" fill="none">
                                            <path d="M21 16L14 12V4L21 0L28 4V12L21 16Z" fill="currentColor" />
                                            <path d="M35 24L28 20V12L35 8L42 12V20L35 24Z" fill="currentColor" />
                                            <path d="M28 36V28L35 24L42 28V36L35 40L28 36Z" fill="currentColor" />
                                            <path d="M14 36L21 32L28 36V44L21 48L14 44V36Z" fill="currentColor" />
                                            <path d="M7 24L14 28V36L7 40L0 36V28L7 24Z" fill="currentColor" />
                                            <path d="M7 24L14 20V12L7 8L0 12V20L7 24Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <span class="fz-font-3xl neutral-900 reveal-text">“Penyedia layanan teknologi informasi dan sistem integrator jaringan terpercaya di Indonesia sejak 2005.”</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Home 2 Section 3-->
                  <!--Home 4 Section 6-->
                <div class="sec-6-home-4 pt-120 pb-120">
                    <div class="container">
                        <div class="at-banner-thumb fix w-100 scale-up-img p-relative changeless d-none d-lg-block">
                            <img data-speed="0.4" class="img-cover scale-up" src="{{ asset('assets/imgs/pages/paralax.jpg') }}" alt="jernihnet">
                            <div class="position-absolute top-0 bottom-0 start-0 end-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between pt-100">
                                                <div class="at-header-logo">
                                                 
                                                </div>
                                                <a class="bg-transparent border px-3 py-1 rounded-pill common-white fz-font-lg" href="#">Local time: 12:30</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-250 align-items-end">
                                        <div class="col-lg-5 col-md-6">
                                            <h2 class="common-white">Koneksi Jernih, <br> Komunikasi Terpercaya</h2>
                                            <div class="d-flex gap-4 align-items-center pt-30">
                                                <a class="at-btn at-btn-border-white common-white rounded-0" href="{{ route('contact') }}">
                                                    <span>
                                                        <span class="text-1">Hubungi Kami</span>
                                                        <span class="text-2">Hubungi Kami</span>
                                                    </span>
                                                    <i>
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" /></svg>
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" /></svg>
                                                    </i>
                                                </a>
                                                <span class="common-white fz-font-sm">[ Senin–Sabtu 08.00–16.30 ]</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 ms-auto text-end">
                                            <span class="common-white fz-font-lg">[ Penyedia layanan teknologi informasi &amp; sistem integrator jaringan terpercaya di Indonesia sejak 2005. Koneksi stabil dan dukungan responsif untuk rumah, usaha, hingga enterprise. ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Home 4 Section 4 -->
                <div class="container-2200">
                    <div class="rounded-5 mx-lg-3 mx-2 bg-neutral-50 overflow-hidden pb-lg-5">
                        <div class="section-fix pt-120 pb-100">
                            <div class="container">
                                <div class="row g-5">
                                    <div class="col-lg-5 h-100">
                                        <div class="section-title-pin h-100">
                                            <span class="at-btn common-black bg-transparent mb-10 rounded-0 p-0">
                                                <span class="text-uppercase">
                                                    <span class="text-1">TESTIMONIALS</span>
                                                    <span class="text-2">TESTIMONIALS</span>
                                                </span>
                                                <i>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                </i>
                                            </span>
                                            <h2 class="h1 section-title fw-500 fz-ds-1 lh-1 mb-30 reveal-text">Apa kata<br> para klien<br> kami</h2>
                                            <div class="at-btn-group at_fade_anim" data-delay=".4" data-fade-from="bottom" data-ease="bounce">
                                                <a class="at-btn-circle" href="portfolio-1.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                        <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                                    </svg>
                                                </a>
                                                <a class="at-btn z-index-1" href="portfolio-1.html">View latest projects</a>
                                                <a class="at-btn-circle" href="portfolio-1.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                        <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-lg-7 ms-auto position-relative">
                                        <div class="scroll-section vertical-section section scroll-active-item">
                                            <div class="wrapper">
                                                <div role="list" class="list">
                                                    <div class="item">
                                                        <div class="testimonial-cart-wrap style-2 p-md-5 p-4">
                                                            <div class="rectangular"></div>
                                                            <div class="testimonial-content-rating mb-3">
                                                                <div class="testimonial-content-rating-stars">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="101" height="16" viewBox="0 0 101 16" fill="none">
                                                                        <path d="M14.9062 6.87488L11.8019 9.91088L12.535 14.1989C12.5507 14.2908 12.5405 14.3853 12.5054 14.4717C12.4704 14.5581 12.4119 14.633 12.3367 14.6879C12.2615 14.7427 12.1725 14.7753 12.0797 14.782C11.987 14.7887 11.8942 14.7693 11.8119 14.7259L7.97358 12.7013L4.13575 14.7253C4.05345 14.7688 3.96068 14.7882 3.86794 14.7815C3.7752 14.7748 3.68618 14.7421 3.61095 14.6873C3.53572 14.6325 3.47728 14.5577 3.44223 14.4713C3.40718 14.3849 3.39693 14.2903 3.41264 14.1983L4.14572 9.91035L1.04096 6.87488C0.974323 6.80974 0.927186 6.72714 0.904899 6.63654C0.882606 6.54591 0.886041 6.45083 0.914826 6.36206C0.943611 6.27329 0.99659 6.19438 1.06776 6.13426C1.13893 6.07414 1.22546 6.0352 1.31755 6.02187L5.60789 5.39687L7.52653 1.49587C7.6945 1.15437 8.25266 1.15437 8.42058 1.49587L10.3392 5.39687L14.6296 6.02187C14.7215 6.03556 14.8078 6.07468 14.8787 6.13484C14.9496 6.19501 15.0024 6.27383 15.0312 6.36245C15.0599 6.45107 15.0634 6.54598 15.0413 6.6365C15.0193 6.72701 14.9725 6.80954 14.9062 6.87488Z" fill="#FFB618" />
                                                                        <path d="M36.1694 6.87488L33.0651 9.91088L33.7982 14.1989C33.8139 14.2908 33.8037 14.3853 33.7686 14.4717C33.7336 14.5581 33.6751 14.633 33.5999 14.6879C33.5247 14.7427 33.4357 14.7753 33.3429 14.782C33.2502 14.7887 33.1574 14.7693 33.0751 14.7259L29.2368 12.7013L25.3989 14.7253C25.3166 14.7688 25.2239 14.7882 25.1311 14.7815C25.0384 14.7748 24.9494 14.7421 24.8741 14.6873C24.7989 14.6325 24.7405 14.5577 24.7054 14.4713C24.6704 14.3849 24.6601 14.2903 24.6758 14.1983L25.4089 9.91035L22.3041 6.87488C22.2375 6.80974 22.1904 6.72714 22.1681 6.63654C22.1458 6.54591 22.1492 6.45083 22.178 6.36206C22.2068 6.27329 22.2598 6.19438 22.331 6.13426C22.4021 6.07414 22.4886 6.0352 22.5807 6.02187L26.871 5.39687L28.7897 1.49587C28.9577 1.15437 29.5159 1.15437 29.6838 1.49587L31.6024 5.39687L35.8928 6.02187C35.9847 6.03556 36.071 6.07468 36.1419 6.13484C36.2128 6.19501 36.2656 6.27383 36.2943 6.36245C36.3231 6.45107 36.3266 6.54598 36.3045 6.6365C36.2825 6.72701 36.2357 6.80954 36.1694 6.87488Z" fill="#FFB618" />
                                                                        <path d="M57.4325 6.87488L54.3283 9.91088L55.0614 14.1989C55.0771 14.2908 55.0669 14.3853 55.0318 14.4717C54.9968 14.5581 54.9383 14.633 54.8631 14.6879C54.7879 14.7427 54.6988 14.7753 54.6061 14.782C54.5134 14.7887 54.4206 14.7693 54.3383 14.7259L50.5 12.7013L46.6621 14.7253C46.5798 14.7688 46.4871 14.7882 46.3943 14.7815C46.3015 14.7748 46.2126 14.7421 46.1373 14.6873C46.0621 14.6325 46.0037 14.5577 45.9686 14.4713C45.9336 14.3849 45.9233 14.2903 45.939 14.1983L46.6721 9.91035L43.5673 6.87488C43.5007 6.80974 43.4535 6.72714 43.4313 6.63654C43.409 6.54591 43.4124 6.45083 43.4412 6.36206C43.47 6.27329 43.523 6.19438 43.5942 6.13426C43.6653 6.07414 43.7518 6.0352 43.8439 6.02187L48.1342 5.39687L50.0529 1.49587C50.2209 1.15437 50.779 1.15437 50.9469 1.49587L52.8656 5.39687L57.156 6.02187C57.2479 6.03556 57.3341 6.07468 57.405 6.13484C57.476 6.19501 57.5288 6.27383 57.5575 6.36245C57.5862 6.45107 57.5898 6.54598 57.5677 6.6365C57.5456 6.72701 57.4989 6.80954 57.4325 6.87488Z" fill="#FFB618" />
                                                                        <path d="M78.6956 6.87488L75.5918 9.91088L76.3248 14.1989C76.34 14.2908 76.3301 14.3853 76.2949 14.4717C76.2596 14.5581 76.2018 14.633 76.1261 14.6879C76.051 14.7427 75.962 14.7753 75.8696 14.782C75.7766 14.7887 75.6835 14.7693 75.6018 14.7259L71.7631 12.7013L67.9251 14.7253C67.8427 14.7688 67.7504 14.7882 67.6574 14.7815C67.565 14.7748 67.476 14.7421 67.4002 14.6873C67.3251 14.6325 67.2666 14.5577 67.2321 14.4713C67.1969 14.3849 67.1862 14.2903 67.2022 14.1983L67.9351 9.91035L64.8306 6.87488C64.7639 6.80974 64.7167 6.72714 64.6945 6.63654C64.6721 6.54591 64.6756 6.45083 64.7044 6.36206C64.7331 6.27329 64.7862 6.19438 64.8573 6.13426C64.9285 6.07414 65.015 6.0352 65.1071 6.02187L69.3976 5.39687L71.316 1.49587C71.4841 1.15437 72.0422 1.15437 72.2103 1.49587L74.1287 5.39687L78.4192 6.02187C78.5109 6.03556 78.5973 6.07468 78.6684 6.13484C78.7394 6.19501 78.7919 6.27383 78.8205 6.36245C78.8498 6.45107 78.8531 6.54598 78.8311 6.6365C78.8086 6.72701 78.762 6.80954 78.6956 6.87488Z" fill="#FFB618" />
                                                                        <path d="M99.9588 6.87488L96.855 9.91088L97.588 14.1989C97.6032 14.2908 97.5933 14.3853 97.5581 14.4717C97.5228 14.5581 97.465 14.633 97.3893 14.6879C97.3142 14.7427 97.2252 14.7753 97.1328 14.782C97.0398 14.7887 96.9467 14.7693 96.865 14.7259L93.0263 12.7013L89.1883 14.7253C89.106 14.7688 89.0136 14.7882 88.9206 14.7815C88.8282 14.7748 88.7392 14.7421 88.6634 14.6873C88.5883 14.6325 88.5299 14.5577 88.4953 14.4713C88.4601 14.3849 88.4495 14.2903 88.4654 14.1983L89.1983 9.91035L86.0939 6.87488C86.0268 6.80974 85.9803 6.72714 85.9577 6.63654C85.9351 6.54591 85.9391 6.45083 85.9676 6.36206C85.9962 6.27329 86.0494 6.19438 86.1205 6.13426C86.1916 6.07414 86.278 6.0352 86.3703 6.02187L90.6608 5.39687L92.5792 1.49587C92.7473 1.15437 93.3054 1.15437 93.4735 1.49587L95.3919 5.39687L99.6824 6.02187C99.7741 6.03556 99.8605 6.07468 99.9316 6.13484C100.003 6.19501 100.055 6.27383 100.084 6.36245C100.113 6.45107 100.116 6.54598 100.094 6.6365C100.072 6.72701 100.025 6.80954 99.9588 6.87488Z" fill="#FFB618" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-bottom-wrap">
                                                                <div class="testimonial-content">
                                                                    <p class="testimonial-content-text fz-font-3xl fw-400 lh-sm text-truncate-4 neutral-900">“Sejak beralih ke JMK, produktivitas tim kami meningkat drastis. Koneksi stabil 24/7 tanpa gangguan. Highly recommended!”</p>

                                                                    <div class="testimonial-author d-flex mb-0">
                                                                        <div class="testimonial-content">
                                                                            <h3 class="h6 testimonial-content-author-name fw-600 mb-0">Ahmad Hidayat</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="testimonial-cart-wrap style-2 p-md-5 p-4">
                                                            <div class="rectangular"></div>
                                                            <div class="testimonial-content-rating mb-3">
                                                                <div class="testimonial-content-rating-stars">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="101" height="16" viewBox="0 0 101 16" fill="none">
                                                                        <path d="M14.9062 6.87488L11.8019 9.91088L12.535 14.1989C12.5507 14.2908 12.5405 14.3853 12.5054 14.4717C12.4704 14.5581 12.4119 14.633 12.3367 14.6879C12.2615 14.7427 12.1725 14.7753 12.0797 14.782C11.987 14.7887 11.8942 14.7693 11.8119 14.7259L7.97358 12.7013L4.13575 14.7253C4.05345 14.7688 3.96068 14.7882 3.86794 14.7815C3.7752 14.7748 3.68618 14.7421 3.61095 14.6873C3.53572 14.6325 3.47728 14.5577 3.44223 14.4713C3.40718 14.3849 3.39693 14.2903 3.41264 14.1983L4.14572 9.91035L1.04096 6.87488C0.974323 6.80974 0.927186 6.72714 0.904899 6.63654C0.882606 6.54591 0.886041 6.45083 0.914826 6.36206C0.943611 6.27329 0.99659 6.19438 1.06776 6.13426C1.13893 6.07414 1.22546 6.0352 1.31755 6.02187L5.60789 5.39687L7.52653 1.49587C7.6945 1.15437 8.25266 1.15437 8.42058 1.49587L10.3392 5.39687L14.6296 6.02187C14.7215 6.03556 14.8078 6.07468 14.8787 6.13484C14.9496 6.19501 15.0024 6.27383 15.0312 6.36245C15.0599 6.45107 15.0634 6.54598 15.0413 6.6365C15.0193 6.72701 14.9725 6.80954 14.9062 6.87488Z" fill="#FFB618" />
                                                                        <path d="M36.1694 6.87488L33.0651 9.91088L33.7982 14.1989C33.8139 14.2908 33.8037 14.3853 33.7686 14.4717C33.7336 14.5581 33.6751 14.633 33.5999 14.6879C33.5247 14.7427 33.4357 14.7753 33.3429 14.782C33.2502 14.7887 33.1574 14.7693 33.0751 14.7259L29.2368 12.7013L25.3989 14.7253C25.3166 14.7688 25.2239 14.7882 25.1311 14.7815C25.0384 14.7748 24.9494 14.7421 24.8741 14.6873C24.7989 14.6325 24.7405 14.5577 24.7054 14.4713C24.6704 14.3849 24.6601 14.2903 24.6758 14.1983L25.4089 9.91035L22.3041 6.87488C22.2375 6.80974 22.1904 6.72714 22.1681 6.63654C22.1458 6.54591 22.1492 6.45083 22.178 6.36206C22.2068 6.27329 22.2598 6.19438 22.331 6.13426C22.4021 6.07414 22.4886 6.0352 22.5807 6.02187L26.871 5.39687L28.7897 1.49587C28.9577 1.15437 29.5159 1.15437 29.6838 1.49587L31.6024 5.39687L35.8928 6.02187C35.9847 6.03556 36.071 6.07468 36.1419 6.13484C36.2128 6.19501 36.2656 6.27383 36.2943 6.36245C36.3231 6.45107 36.3266 6.54598 36.3045 6.6365C36.2825 6.72701 36.2357 6.80954 36.1694 6.87488Z" fill="#FFB618" />
                                                                        <path d="M57.4325 6.87488L54.3283 9.91088L55.0614 14.1989C55.0771 14.2908 55.0669 14.3853 55.0318 14.4717C54.9968 14.5581 54.9383 14.633 54.8631 14.6879C54.7879 14.7427 54.6988 14.7753 54.6061 14.782C54.5134 14.7887 54.4206 14.7693 54.3383 14.7259L50.5 12.7013L46.6621 14.7253C46.5798 14.7688 46.4871 14.7882 46.3943 14.7815C46.3015 14.7748 46.2126 14.7421 46.1373 14.6873C46.0621 14.6325 46.0037 14.5577 45.9686 14.4713C45.9336 14.3849 45.9233 14.2903 45.939 14.1983L46.6721 9.91035L43.5673 6.87488C43.5007 6.80974 43.4535 6.72714 43.4313 6.63654C43.409 6.54591 43.4124 6.45083 43.4412 6.36206C43.47 6.27329 43.523 6.19438 43.5942 6.13426C43.6653 6.07414 43.7518 6.0352 43.8439 6.02187L48.1342 5.39687L50.0529 1.49587C50.2209 1.15437 50.779 1.15437 50.9469 1.49587L52.8656 5.39687L57.156 6.02187C57.2479 6.03556 57.3341 6.07468 57.405 6.13484C57.476 6.19501 57.5288 6.27383 57.5575 6.36245C57.5862 6.45107 57.5898 6.54598 57.5677 6.6365C57.5456 6.72701 57.4989 6.80954 57.4325 6.87488Z" fill="#FFB618" />
                                                                        <path d="M78.6956 6.87488L75.5918 9.91088L76.3248 14.1989C76.34 14.2908 76.3301 14.3853 76.2949 14.4717C76.2596 14.5581 76.2018 14.633 76.1261 14.6879C76.051 14.7427 75.962 14.7753 75.8696 14.782C75.7766 14.7887 75.6835 14.7693 75.6018 14.7259L71.7631 12.7013L67.9251 14.7253C67.8427 14.7688 67.7504 14.7882 67.6574 14.7815C67.565 14.7748 67.476 14.7421 67.4002 14.6873C67.3251 14.6325 67.2666 14.5577 67.2321 14.4713C67.1969 14.3849 67.1862 14.2903 67.2022 14.1983L67.9351 9.91035L64.8306 6.87488C64.7639 6.80974 64.7167 6.72714 64.6945 6.63654C64.6721 6.54591 64.6756 6.45083 64.7044 6.36206C64.7331 6.27329 64.7862 6.19438 64.8573 6.13426C64.9285 6.07414 65.015 6.0352 65.1071 6.02187L69.3976 5.39687L71.316 1.49587C71.4841 1.15437 72.0422 1.15437 72.2103 1.49587L74.1287 5.39687L78.4192 6.02187C78.5109 6.03556 78.5973 6.07468 78.6684 6.13484C78.7394 6.19501 78.7919 6.27383 78.8205 6.36245C78.8498 6.45107 78.8531 6.54598 78.8311 6.6365C78.8086 6.72701 78.762 6.80954 78.6956 6.87488Z" fill="#FFB618" />
                                                                        <path d="M99.9588 6.87488L96.855 9.91088L97.588 14.1989C97.6032 14.2908 97.5933 14.3853 97.5581 14.4717C97.5228 14.5581 97.465 14.633 97.3893 14.6879C97.3142 14.7427 97.2252 14.7753 97.1328 14.782C97.0398 14.7887 96.9467 14.7693 96.865 14.7259L93.0263 12.7013L89.1883 14.7253C89.106 14.7688 89.0136 14.7882 88.9206 14.7815C88.8282 14.7748 88.7392 14.7421 88.6634 14.6873C88.5883 14.6325 88.5299 14.5577 88.4953 14.4713C88.4601 14.3849 88.4495 14.2903 88.4654 14.1983L89.1983 9.91035L86.0939 6.87488C86.0268 6.80974 85.9803 6.72714 85.9577 6.63654C85.9351 6.54591 85.9391 6.45083 85.9676 6.36206C85.9962 6.27329 86.0494 6.19438 86.1205 6.13426C86.1916 6.07414 86.278 6.0352 86.3703 6.02187L90.6608 5.39687L92.5792 1.49587C92.7473 1.15437 93.3054 1.15437 93.4735 1.49587L95.3919 5.39687L99.6824 6.02187C99.7741 6.03556 99.8605 6.07468 99.9316 6.13484C100.003 6.19501 100.055 6.27383 100.084 6.36245C100.113 6.45107 100.116 6.54598 100.094 6.6365C100.072 6.72701 100.025 6.80954 99.9588 6.87488Z" fill="#FFB618" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-bottom-wrap">
                                                                <div class="testimonial-content">
                                                                    <p class="testimonial-content-text fz-font-3xl fw-400 lh-sm text-truncate-4 neutral-900">“Pelanggan kafe saya sangat puas dengan WiFi yang cepat dan stabil. Support team JMK juga sangat responsif saat ada kendala.”</p>

                                                                    <div class="testimonial-author d-flex mb-0">
                                                                        <div class="testimonial-content">
                                                                            <h3 class="h6 testimonial-content-author-name fw-600 mb-0">Sari Dewi</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="testimonial-cart-wrap style-2 p-md-5 p-4">
                                                            <div class="rectangular"></div>
                                                            <div class="testimonial-content-rating mb-3">
                                                                <div class="testimonial-content-rating-stars">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="101" height="16" viewBox="0 0 101 16" fill="none">
                                                                        <path d="M14.9062 6.87488L11.8019 9.91088L12.535 14.1989C12.5507 14.2908 12.5405 14.3853 12.5054 14.4717C12.4704 14.5581 12.4119 14.633 12.3367 14.6879C12.2615 14.7427 12.1725 14.7753 12.0797 14.782C11.987 14.7887 11.8942 14.7693 11.8119 14.7259L7.97358 12.7013L4.13575 14.7253C4.05345 14.7688 3.96068 14.7882 3.86794 14.7815C3.7752 14.7748 3.68618 14.7421 3.61095 14.6873C3.53572 14.6325 3.47728 14.5577 3.44223 14.4713C3.40718 14.3849 3.39693 14.2903 3.41264 14.1983L4.14572 9.91035L1.04096 6.87488C0.974323 6.80974 0.927186 6.72714 0.904899 6.63654C0.882606 6.54591 0.886041 6.45083 0.914826 6.36206C0.943611 6.27329 0.99659 6.19438 1.06776 6.13426C1.13893 6.07414 1.22546 6.0352 1.31755 6.02187L5.60789 5.39687L7.52653 1.49587C7.6945 1.15437 8.25266 1.15437 8.42058 1.49587L10.3392 5.39687L14.6296 6.02187C14.7215 6.03556 14.8078 6.07468 14.8787 6.13484C14.9496 6.19501 15.0024 6.27383 15.0312 6.36245C15.0599 6.45107 15.0634 6.54598 15.0413 6.6365C15.0193 6.72701 14.9725 6.80954 14.9062 6.87488Z" fill="#FFB618" />
                                                                        <path d="M36.1694 6.87488L33.0651 9.91088L33.7982 14.1989C33.8139 14.2908 33.8037 14.3853 33.7686 14.4717C33.7336 14.5581 33.6751 14.633 33.5999 14.6879C33.5247 14.7427 33.4357 14.7753 33.3429 14.782C33.2502 14.7887 33.1574 14.7693 33.0751 14.7259L29.2368 12.7013L25.3989 14.7253C25.3166 14.7688 25.2239 14.7882 25.1311 14.7815C25.0384 14.7748 24.9494 14.7421 24.8741 14.6873C24.7989 14.6325 24.7405 14.5577 24.7054 14.4713C24.6704 14.3849 24.6601 14.2903 24.6758 14.1983L25.4089 9.91035L22.3041 6.87488C22.2375 6.80974 22.1904 6.72714 22.1681 6.63654C22.1458 6.54591 22.1492 6.45083 22.178 6.36206C22.2068 6.27329 22.2598 6.19438 22.331 6.13426C22.4021 6.07414 22.4886 6.0352 22.5807 6.02187L26.871 5.39687L28.7897 1.49587C28.9577 1.15437 29.5159 1.15437 29.6838 1.49587L31.6024 5.39687L35.8928 6.02187C35.9847 6.03556 36.071 6.07468 36.1419 6.13484C36.2128 6.19501 36.2656 6.27383 36.2943 6.36245C36.3231 6.45107 36.3266 6.54598 36.3045 6.6365C36.2825 6.72701 36.2357 6.80954 36.1694 6.87488Z" fill="#FFB618" />
                                                                        <path d="M57.4325 6.87488L54.3283 9.91088L55.0614 14.1989C55.0771 14.2908 55.0669 14.3853 55.0318 14.4717C54.9968 14.5581 54.9383 14.633 54.8631 14.6879C54.7879 14.7427 54.6988 14.7753 54.6061 14.782C54.5134 14.7887 54.4206 14.7693 54.3383 14.7259L50.5 12.7013L46.6621 14.7253C46.5798 14.7688 46.4871 14.7882 46.3943 14.7815C46.3015 14.7748 46.2126 14.7421 46.1373 14.6873C46.0621 14.6325 46.0037 14.5577 45.9686 14.4713C45.9336 14.3849 45.9233 14.2903 45.939 14.1983L46.6721 9.91035L43.5673 6.87488C43.5007 6.80974 43.4535 6.72714 43.4313 6.63654C43.409 6.54591 43.4124 6.45083 43.4412 6.36206C43.47 6.27329 43.523 6.19438 43.5942 6.13426C43.6653 6.07414 43.7518 6.0352 43.8439 6.02187L48.1342 5.39687L50.0529 1.49587C50.2209 1.15437 50.779 1.15437 50.9469 1.49587L52.8656 5.39687L57.156 6.02187C57.2479 6.03556 57.3341 6.07468 57.405 6.13484C57.476 6.19501 57.5288 6.27383 57.5575 6.36245C57.5862 6.45107 57.5898 6.54598 57.5677 6.6365C57.5456 6.72701 57.4989 6.80954 57.4325 6.87488Z" fill="#FFB618" />
                                                                        <path d="M78.6956 6.87488L75.5918 9.91088L76.3248 14.1989C76.34 14.2908 76.3301 14.3853 76.2949 14.4717C76.2596 14.5581 76.2018 14.633 76.1261 14.6879C76.051 14.7427 75.962 14.7753 75.8696 14.782C75.7766 14.7887 75.6835 14.7693 75.6018 14.7259L71.7631 12.7013L67.9251 14.7253C67.8427 14.7688 67.7504 14.7882 67.6574 14.7815C67.565 14.7748 67.476 14.7421 67.4002 14.6873C67.3251 14.6325 67.2666 14.5577 67.2321 14.4713C67.1969 14.3849 67.1862 14.2903 67.2022 14.1983L67.9351 9.91035L64.8306 6.87488C64.7639 6.80974 64.7167 6.72714 64.6945 6.63654C64.6721 6.54591 64.6756 6.45083 64.7044 6.36206C64.7331 6.27329 64.7862 6.19438 64.8573 6.13426C64.9285 6.07414 65.015 6.0352 65.1071 6.02187L69.3976 5.39687L71.316 1.49587C71.4841 1.15437 72.0422 1.15437 72.2103 1.49587L74.1287 5.39687L78.4192 6.02187C78.5109 6.03556 78.5973 6.07468 78.6684 6.13484C78.7394 6.19501 78.7919 6.27383 78.8205 6.36245C78.8498 6.45107 78.8531 6.54598 78.8311 6.6365C78.8086 6.72701 78.762 6.80954 78.6956 6.87488Z" fill="#FFB618" />
                                                                        <path d="M99.9588 6.87488L96.855 9.91088L97.588 14.1989C97.6032 14.2908 97.5933 14.3853 97.5581 14.4717C97.5228 14.5581 97.465 14.633 97.3893 14.6879C97.3142 14.7427 97.2252 14.7753 97.1328 14.782C97.0398 14.7887 96.9467 14.7693 96.865 14.7259L93.0263 12.7013L89.1883 14.7253C89.106 14.7688 89.0136 14.7882 88.9206 14.7815C88.8282 14.7748 88.7392 14.7421 88.6634 14.6873C88.5883 14.6325 88.5299 14.5577 88.4953 14.4713C88.4601 14.3849 88.4495 14.2903 88.4654 14.1983L89.1983 9.91035L86.0939 6.87488C86.0268 6.80974 85.9803 6.72714 85.9577 6.63654C85.9351 6.54591 85.9391 6.45083 85.9676 6.36206C85.9962 6.27329 86.0494 6.19438 86.1205 6.13426C86.1916 6.07414 86.278 6.0352 86.3703 6.02187L90.6608 5.39687L92.5792 1.49587C92.7473 1.15437 93.3054 1.15437 93.4735 1.49587L95.3919 5.39687L99.6824 6.02187C99.7741 6.03556 99.8605 6.07468 99.9316 6.13484C100.003 6.19501 100.055 6.27383 100.084 6.36245C100.113 6.45107 100.116 6.54598 100.094 6.6365C100.072 6.72701 100.025 6.80954 99.9588 6.87488Z" fill="#FFB618" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-bottom-wrap">
                                                                <div class="testimonial-content">
                                                                    <p class="testimonial-content-text fz-font-3xl fw-400 lh-sm text-truncate-4 neutral-900">“Untuk kebutuhan enterprise, JMK memberikan SLA yang sangat memuaskan. Dedicated support mereka luar biasa.”</p>

                                                                    <div class="testimonial-author d-flex mb-0">
                                                                        <div class="testimonial-content">
                                                                            <h3 class="h6 testimonial-content-author-name fw-600 mb-0">Budi Santoso</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Home 4 Section 4 End -->
                <!--Home 2 Section 11-->
                <div class="container-2200">
                    <div class="home-2-section-11 postbox-scroll-zoom mx-lg-3 mx-2 mt-50 align-items-center justify-content-center">
                        <div class="postbox-item-wrap">
                            <div class="postbox-item">
                                <div class="postbox-thumb p-relative rounded-5">
                                    <div class="postbox-scroll-zoom-marquee" aria-hidden="true">
                                        <div class="postbox-scroll-zoom-marquee-row dir-left">
                                            <div class="postbox-scroll-zoom-marquee-track">
                                                <span>INTERNET CEPAT</span><span>&bull;</span><span>FIBER OPTIK</span><span>&bull;</span><span>JARINGAN STABIL</span><span>&bull;</span><span>KONEKSI 24/7</span><span>&bull;</span>
                                                <span>INTERNET CEPAT</span><span>&bull;</span><span>FIBER OPTIK</span><span>&bull;</span><span>JARINGAN STABIL</span><span>&bull;</span><span>KONEKSI 24/7</span><span>&bull;</span>
                                            </div>
                                        </div>
                                        <div class="postbox-scroll-zoom-marquee-row dir-right">
                                            <div class="postbox-scroll-zoom-marquee-track">
                                                <span>JERNIH MULTI KOMUNIKASI</span><span>&bull;</span><span>JMK</span><span>&bull;</span><span>SISTEM INTEGRATOR JARINGAN</span><span>&bull;</span><span>SEJAK 2005</span><span>&bull;</span>
                                                <span>JERNIH MULTI KOMUNIKASI</span><span>&bull;</span><span>JMK</span><span>&bull;</span><span>SISTEM INTEGRATOR JARINGAN</span><span>&bull;</span><span>SEJAK 2005</span><span>&bull;</span>
                                            </div>
                                        </div>
                                        <div class="postbox-scroll-zoom-marquee-row dir-left">
                                            <div class="postbox-scroll-zoom-marquee-track">
                                                <span>KONEKSI ANDAL</span><span>&bull;</span><span>INTERNET UNGGUL</span><span>&bull;</span><span>LAYANAN PRIMA</span><span>&bull;</span><span>DUKUNGAN 24/7</span><span>&bull;</span>
                                                <span>KONEKSI ANDAL</span><span>&bull;</span><span>INTERNET UNGGUL</span><span>&bull;</span><span>LAYANAN PRIMA</span><span>&bull;</span><span>DUKUNGAN 24/7</span><span>&bull;</span>
                                            </div>
                                        </div>
                                        <div class="postbox-scroll-zoom-marquee-row dir-right">
                                            <div class="postbox-scroll-zoom-marquee-track">
                                                <span>SINYAL KUAT</span><span>&bull;</span><span>INTERNET TANPA PUTUS</span><span>&bull;</span><span>FIBER &amp; STABIL</span><span>&bull;</span><span>KOMITMEN PRIMA</span><span>&bull;</span>
                                                <span>SINYAL KUAT</span><span>&bull;</span><span>INTERNET TANPA PUTUS</span><span>&bull;</span><span>FIBER &amp; STABIL</span><span>&bull;</span><span>KOMITMEN PRIMA</span><span>&bull;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <img class="postbox-scroll-zoom-img img-cover" src="assets/imgs/pages/bg-img-2.webp" alt="jernihnet">
                                    </a>
                                    <div class="postbox-play-btn postbox-scroll-zoom-play z-index-1 d-flex align-items-center justify-content-center gap-3">
                                        <h1 class="text-white d-none d-md-flex">Play</h1>
                                        <a class="popup-video" href="/contact">
                                            <span class="text-white">
                                                <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 9L0 17.6603L0 0.339746L15 9Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                        <h1 class="text-white d-none d-md-flex">showrell</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Home 2 Section 12-->
                <!-- <div class="container-2200">
                    <div class="home-2-section-12 rounded-5 overflow-hidden mx-lg-3 mx-2 mt-50 p-relative pt-100 pb-100" id="paket-layanan">
                        <div class="p-absolute top-0 left-0 w-100 h-100 rounded-5 opacity-10 z-0" data-background="assets/imgs/pages/noise.gif"></div>
                        <div class="container p-relative z-1">
                            <div class="row g-4">
                                <div class="col-lg-2 p-relative d-flex flex-column justify-content-between align-items-start">
                                    <span class="at-btn common-black bg-transparent rounded-0 p-0">
                                        <span class="text-uppercase">
                                            <span class="text-1">PAKET LAYANAN</span>
                                            <span class="text-2">PAKET LAYANAN</span>
                                        </span>
                                        <i>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path>
                                            </svg>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path>
                                            </svg>
                                        </i>
                                    </span>
                                    <div class="at-about-svg-wrap move-up d-none d-xxl-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="91" viewBox="0 0 57 91" fill="none">
                                            <path opacity="0.1" d="M0 0L56.4024 33.572V90.336L0 56.46V0Z" fill="#515151" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="113" height="68" viewBox="0 0 113 68" fill="none">
                                            <path opacity="0.3" d="M0 33.876L56.4024 0L112.805 33.876V34.1294L56.4024 68.0054L0 34.1294V33.876Z" fill="#515151" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="91" viewBox="0 0 57 91" fill="none">
                                            <path opacity="0.2" d="M56.4009 0L8.7738e-05 33.5367V90.2413L56.4009 56.4008V0Z" fill="#515151" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-3xl-8 col-xxl-10 col-lg-10 col-md-12">
                                    <div class="row align-items-end mb-60 g-4">
                                        <div class="col-lg">
                                            <h2 class="h3 reveal-text fw-700 mb-0">Pilihan paket internet cepat untuk rumah & bisnis Anda</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center g-4">
                                        <div class="col-lg-4">
                                            <div class="home-2-pricing-card bg-neutral-50">
                                                <div class="home-2-pricing-card__body">
                                                    <h3 class="h4 home-2-pricing-card__title">Paket 15 Mbps</h3>
                                                    <div class="home-2-pricing-card__price mb-1">
                                                        <span class="fz-font-lg neutral-500">Mulai dari</span>
                                                        <span class="home-2-pricing-card__price-value">Rp 120.000</span>
                                                        <span class="home-2-pricing-card__price-period">/bulan</span>
                                                    </div>
                                                    <p class="home-2-pricing-card__desc">Cocok untuk kebutuhan dasar internet rumahan dan browsing.</p>
                                                    <a class="at-btn px-5" href="{{ route('registration.create') }}">
                                                        <span><span class="text-1 text-capitalize">Daftar Paket Ini</span><span class="text-2 text-capitalize">Daftar Paket Ini</span></span>
                                                        <i>
                                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path></svg>
                                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path></svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <ul class="home-2-pricing-card__features">
                                                    <li><span class="home-2-pricing-card__feature-icon dark-mode-invert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M9 0C13.9706 0 18 4.02944 18 9C18 13.9706 13.9706 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0ZM8 5V8H5V10H8V13H10V10H13V8H10V5H8Z" fill="currentColor" /></svg>
                                                        </span>
                                                        Biaya Instalasi Rp 100.000
                                                    </li>
                                                    <li><span class="home-2-pricing-card__feature-icon dark-mode-invert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M9 0C13.9706 0 18 4.02944 18 9C18 13.9706 13.9706 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0ZM8 5V8H5V10H8V13H10V10H13V8H10V5H8Z" fill="currentColor" /></svg>
                                                        </span>
                                                        Support 24/7
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="home-2-pricing-card bg-neutral-50 home-2-pricing-card--popular">
                                                <span class="home-2-pricing-card__badge">Paling Populer</span>
                                                <div class="home-2-pricing-card__body">
                                                    <h3 class="h4 home-2-pricing-card__title">Paket 20 Mbps</h3>
                                                    <div class="home-2-pricing-card__price mb-1">
                                                        <span class="fz-font-lg neutral-500">Mulai dari</span>
                                                        <span class="home-2-pricing-card__price-value">Rp 150.000</span>
                                                        <span class="home-2-pricing-card__price-period">/bulan</span>
                                                    </div>
                                                    <p class="home-2-pricing-card__desc">Ideal untuk streaming HD dan gaming online dengan lancar.</p>
                                                    <a class="at-btn px-5" href="{{ route('registration.create') }}">
                                                        <span><span class="text-1 text-capitalize">Daftar Paket Ini</span><span class="text-2 text-capitalize">Daftar Paket Ini</span></span>
                                                        <i>
                                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path></svg>
                                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path></svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <ul class="home-2-pricing-card__features">
                                                    <li><span class="home-2-pricing-card__feature-icon dark-mode-invert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M9 0C13.9706 0 18 4.02944 18 9C18 13.9706 13.9706 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0ZM8 5V8H5V10H8V13H10V10H13V8H10V5H8Z" fill="currentColor" /></svg>
                                                        </span>
                                                        Biaya Instalasi Rp 100.000
                                                    </li>
                                                    <li><span class="home-2-pricing-card__feature-icon dark-mode-invert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M9 0C13.9706 0 18 4.02944 18 9C18 13.9706 13.9706 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0ZM8 5V8H5V10H8V13H10V10H13V8H10V5H8Z" fill="currentColor" /></svg>
                                                        </span>
                                                        Support 24/7
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="home-2-pricing-card bg-neutral-50">
                                                <div class="home-2-pricing-card__body">
                                                    <h3 class="h4 home-2-pricing-card__title">Paket 25 Mbps</h3>
                                                    <div class="home-2-pricing-card__price mb-1">
                                                        <span class="fz-font-lg neutral-500">Mulai dari</span>
                                                        <span class="home-2-pricing-card__price-value">Rp 180.000</span>
                                                        <span class="home-2-pricing-card__price-period">/bulan</span>
                                                    </div>
                                                    <p class="home-2-pricing-card__desc">Performa maksimal untuk aktivitas banyak perangkat sekaligus.</p>
                                                    <a class="at-btn px-5" href="{{ route('registration.create') }}">
                                                        <span><span class="text-1 text-capitalize">Daftar Paket Ini</span><span class="text-2 text-capitalize">Daftar Paket Ini</span></span>
                                                        <i>
                                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path></svg>
                                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor"></path></svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <ul class="home-2-pricing-card__features">
                                                    <li><span class="home-2-pricing-card__feature-icon dark-mode-invert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M9 0C13.9706 0 18 4.02944 18 9C18 13.9706 13.9706 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0ZM8 5V8H5V10H8V13H10V10H13V8H10V5H8Z" fill="currentColor" /></svg>
                                                        </span>
                                                        Biaya Instalasi Rp 100.000
                                                    </li>
                                                    <li><span class="home-2-pricing-card__feature-icon dark-mode-invert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M9 0C13.9706 0 18 4.02944 18 9C18 13.9706 13.9706 18 9 18C4.02944 18 0 13.9706 0 9C0 4.02944 4.02944 0 9 0ZM8 5V8H5V10H8V13H10V10H13V8H10V5H8Z" fill="currentColor" /></svg>
                                                        </span>
                                                        Support 24/7
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 text-start d-flex flex-column gap-2">
                                    <a href="{{ route('contact') }}" class="text-decoration-underline">Contact Us</a>
                                    <p class="h6 fw-600 mb-0">
                                        <a href="mailto:pt.jernihmultikomunikasi@gmail.com">pt.jernihmultikomunikasi@gmail.com</a>
                                    </p>
                                    <p class="h6 fw-600 mb-0">
                                        <a href="tel:0272123456">(0272)3393373</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
              
                {{-- <!--Home 4 Section 8 temporarily disabled -->
                <div class="home-4-section-8 bg-cover pt-120 pb-120">
                    <div class="container">
                        <div class="row align-items-end mb-50">
                            <div class="col-lg-3">
                                <span class="at-btn common-black bg-transparent mb-10 rounded-0 p-0">
                                    <span class="text-uppercase">
                                        <span class="text-1">INSIDE COMPANY</span>
                                        <span class="text-2">INSIDE COMPANY</span>
                                    </span>
                                    <i>
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                        </svg>
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                        </svg>
                                    </i>
                                </span>
                                <h3 class="alt-section-title lh-1 neutral-900 fw-700 mb-30 reveal-text mb-0">Inside the World of AI</h3>
                            </div>
                            <div class="col-lg-4 col-md-8">
                                <p class="fz-font-lg neutral-900 fw-500 mb-0">Explore expert insights on AI innovation, real-world applications, and the future of intelligent systems.</p>
                            </div>
                            <div class="col-lg-3 col-md-4 ms-auto text-md-end">
                                <div class="at-service-btn pt-30">
                                    <a class="at-btn" href="archive-1.html">
                                        <span>
                                            <span class="text-1">ALL ARTICLES</span>
                                            <span class="text-2">ALL ARTICLES</span>
                                        </span>
                                        <i>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                            </svg>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <!-- prettier-ignore -->
                            <div class="blog-card col-lg-3 col-md-6 col-12 mb-30" data-category="@@category">
                                <div class="blog-card__thumb hover-effect-1">
                                    <a href="blog-details.html" class="blog-card__img-link">
                                        <img src="assets/imgs/pages/img-97.webp" class="blog-card__img22" alt="jernihnet">
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                    <h2 class=" h6 blog-card__title">
                                        <a href="blog-details.html" class="blog-card__title-link">Designing Digital Experiences That Connect Brands and People</a>
                                    </h2>
                                    <p class="blog-card__meta">
                                        <span class="blog-card__meta-text">By </span>
                                        <a href="team-details.html" class="blog-card__author">Olivia</a>
                                        <span class="blog-card__meta-text"> – July 3, 2026</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-card col-lg-3 col-md-6 col-12 mb-30" data-category="@@category">
                                <div class="blog-card__thumb hover-effect-1">
                                    <a href="blog-details.html" class="blog-card__img-link">
                                        <img src="assets/imgs/pages/img-98.webp" class="blog-card__img22" alt="jernihnet">
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                    <h2 class=" h6 blog-card__title">
                                        <a href="blog-details.html" class="blog-card__title-link">From Concept to Launch: Building Products That Truly Matter</a>
                                    </h2>
                                    <p class="blog-card__meta">
                                        <span class="blog-card__meta-text">By </span>
                                        <a href="team-details.html" class="blog-card__author">Daniel</a>
                                        <span class="blog-card__meta-text"> – July 8, 2026</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-card col-lg-3 col-md-6 col-12 mb-30" data-category="@@category">
                                <div class="blog-card__thumb hover-effect-1">
                                    <a href="blog-details.html" class="blog-card__img-link">
                                        <img src="assets/imgs/pages/img-99.webp" class="blog-card__img22" alt="jernihnet">
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                    <h2 class=" h6 blog-card__title">
                                        <a href="blog-details.html" class="blog-card__title-link">Why Strong Visual Identity Is the Foundation of Modern Brands</a>
                                    </h2>
                                    <p class="blog-card__meta">
                                        <span class="blog-card__meta-text">By </span>
                                        <a href="team-details.html" class="blog-card__author">Emma</a>
                                        <span class="blog-card__meta-text"> – July 12, 2026</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-card col-lg-3 col-md-6 col-12 mb-30" data-category="@@category">
                                <div class="blog-card__thumb hover-effect-1">
                                    <a href="blog-details.html" class="blog-card__img-link">
                                        <img src="assets/imgs/pages/img-100.webp" class="blog-card__img22" alt="jernihnet">
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                    <h2 class=" h6 blog-card__title">
                                        <a href="blog-details.html" class="blog-card__title-link">Creating Impactful Interfaces Through Thoughtful Design Systems</a>
                                    </h2>
                                    <p class="blog-card__meta">
                                        <span class="blog-card__meta-text">By </span>
                                        <a href="team-details.html" class="blog-card__author">Lucas</a>
                                        <span class="blog-card__meta-text"> – July 17, 2026</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            --}}
            </main>
@endsection
