@extends('layouts.app')

@section('title', 'JernihNet')

@section('content')
            <main class="bg-neutral-0" style="padding-top: clamp(70px, 8vw, 110px);">
                <!-- About section 2 -->
                <div class="sec-2-about block-journey my-5 rounded-5 mx-lg-3 mx-2 pt-120 pb-120 bg-neutral-900 changeless">
                    <div class="container">
                        <div class="row align-items-end pb-60">
                            <div class="col-lg-7 col-md-7">
                                <span class="at-btn text-white bg-transparent mb-10 rounded-0 p-0">
                                    <span class="text-uppercase text-white">
                                        <span class="text-1">Tentang Kami</span>
                                        <span class="text-2">Tentang Kami</span>
                                    </span>
                                    <i>
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="#fff"></path>
                                        </svg>
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="#fff"></path>
                                        </svg>
                                    </i>
                                </span>
                                <h3 class="text-white reveal-text">Provider WiFi Klaten Terpercaya</h3>
                                <p class="text-white fz-font-lg">PT Jernih Multi Komunikasi — provider ISP dan jasa pasang WiFi murah di Klaten sejak 2005. Melayani internet fiber optik untuk rumah, kantor, dan perusahaan di Klaten dan sekitarnya.</p>
                            </div>
                            <div class="col-lg-3 col-md-5 ms-auto d-flex justify-content-md-end">
                                <div class="at-btn-group at_fade_anim" data-delay=".4" data-fade-from="bottom" data-ease="bounce">
                                    <a class="at-btn-circle bg-neutral-700" href="{{ route('contact') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                            <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                        </svg>
                                    </a>
                                    <a class="at-btn z-index-1 bg-neutral-700" href="{{ route('contact') }}">Hubungi Kami</a>
                                    <a class="at-btn-circle bg-neutral-700" href="{{ route('contact') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                            <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="alt-portfolio-item mb-30 at-hover-item">
                                    <a href="#" class="alt-portfolio-thumb mb-15 p-relative fix d-block">
                                        <img class="w-100 scale-img-from-to" data-value-1="1.5" data-value-2="1" src="{{ asset('assets/imgs/pages/jmk.png') }}" alt="JMK Jernih Multi Komunikasi">
                                        <div class="alt-portfolio-btn">
                                            <div class="content">
                                                <span class="bg-transparent text-uppercase border px-3 py-1 rounded-pill text-white fz-font-label">Sejak 2005</span>
                                                <h2 class="fw-400 fz-font-3xl text-white mb-0 mt-20">Sistem Integrator Jaringan Terpercaya</h2>
                                                <p class="text-white fz-font-md mb-0 mt-10 text-truncate-2 des">Melayani jasa instalasi jaringan, konfigurasi, dan infrastruktur internet fiber optik untuk rumah hingga enterprise.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="alt-portfolio-content d-flex justify-content-between align-items-center bg-neutral-700">
                                        <h3 class="h5 alt-portfolio-title mb-0"><a href="#" class="common-underline text-white">Jernih Multi Komunikasi</a></h3>
                                        <span class="alt-portfolio-plus text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                <path d="M4.512 10.8V0H6.984V10.8H4.512ZM0 6.6V4.2H11.52V6.6H0Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 ms-auto pt-80">
                                <ul class="journey-list">
                                    <li class="journey-list__item scroll-move-up">
                                        <span class="journey-list__date">Oktober 2005 — Berdiri</span>
                                        <div class="journey-list__body">
                                            <h3 class="h6 journey-list__title neutral-0">Awal Mula Perusahaan</h3>
                                            <p class="journey-list__desc">JMK Jernih Multi Komunikasi (ejpmedia network) bergerak di bidang jasa Teknologi Informasi, khususnya jaringan, membantu klien dari perumahan hingga perusahaan berskala besar.</p>
                                        </div>
                                    </li>
                                    <li class="journey-list__item scroll-move-up">
                                        <span class="journey-list__date">Visi Kami</span>
                                        <div class="journey-list__body">
                                            <h3 class="h6 journey-list__title neutral-0">Sistem Integrator Jaringan Terbaik</h3>
                                            <p class="journey-list__desc">Menjadi perusahaan sistem integrator jaringan yang terbaik dan terkemuka di Indonesia, dengan layanan terbaik kepada semua pelanggan.</p>
                                        </div>
                                    </li>
                                    <li class="journey-list__item scroll-move-up">
                                        <span class="journey-list__date">Misi</span>
                                        <div class="journey-list__body">
                                            <h3 class="h6 journey-list__title neutral-0">Misi Kami</h3>
                                            <ul class="journey-list__desc list-unstyled mb-0">
                                                <li>Menyediakan layanan integrasi sistem jaringan terbaik kepada semua pelanggan</li>
                                                <li>Menjadi perusahaan terdepan dalam perkembangan Teknologi Informasi</li>
                                                <li>Menjalin kerjasama dengan berbagai vendor terkemuka di dunia</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="journey-list__item scroll-move-up">
                                        <span class="journey-list__date">Kemitraan</span>
                                        <div class="journey-list__body">
                                            <h3 class="h6 journey-list__title neutral-0">Bekerja dengan Vendor Terkemuka</h3>
                                            <p class="journey-list__desc">Tim kami memiliki kemampuan individual dan kerjasama yang handal, bekerja sama dengan CISCO, ORACLE, dan SAP untuk solusi terbaik.</p>
                                        </div>
                                    </li>
                                    <li class="journey-list__item scroll-move-up">
                                        <span class="journey-list__date">Teknologi</span>
                                        <div class="journey-list__body">
                                            <h3 class="h6 journey-list__title neutral-0">Router M3200 & Algoritma Malfo-IA01</h3>
                                            <p class="journey-list__desc">Menggunakan perangkat router seri M3200 dengan routing table andal serta metode algoritma Malfo-IA01 untuk mem-backup jalur layanan.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQs section 3 -->
                <div class="sec-3-faqs p-relative z-n1 pb-100">
                    <div class="scroll-section">
                        <div class="wrapper">
                            <div class="item bg-neutral-0 d-block">
                                <div class="pt-100 border-top-100">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-lg-4 h-100">
                                                <span class="at-btn common-black text-uppercase bg-transparent mb-10 rounded-0 p-0">
                                                    <span class="text-uppercase">
                                                        <span class="text-1">[ 01 ]</span>
                                                        <span class="text-2">[ 01 ]</span>
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
                                                <h3 class="reveal-text">General Information</h3>
                                                <h4 class="h6 fw-500 mb-0 fz-font-lg">Essential questions to understand who we are, what we do, and who we work with.</h4>

                                                <div class="section-title-pin"></div>
                                            </div>
                                            <div class="col-lg-7 offset-lg-1 p-relative">
                                                <div class="accordion p-relative z-index-3" id="accordionFaq1">
                                                    <div class="at-faq-item bg-neutral-0 border-100 rounded-4">
                                                        <div class="at-faq-header d-flex gap-2">
                                                            <div class="box-number">
                                                                <span class="at-faq-number">1</span>
                                                            </div>
                                                            <button class="at-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1-1" aria-expanded="true" aria-controls="collapseFaq1-1">Apa saja layanan yang JMK tawarkan?</button>
                                                        </div>
                                                        <div id="collapseFaq1-1" class="at-faq-collapse collapse show" data-bs-parent="#accordionFaq1">
                                                            <div class="at-faq-body">
                                                                <p>Kami menyediakan pemasangan WiFi dan internet fiber optik, instalasi &amp; konfigurasi jaringan, hingga pembangunan infrastruktur jaringan untuk rumah, kantor, dan perusahaan.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="at-faq-item bg-neutral-0 border-100 rounded-4">
                                                        <div class="at-faq-header d-flex gap-2">
                                                            <div class="box-number">
                                                                <span class="at-faq-number">2</span>
                                                            </div>
                                                            <button class="at-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1-2" aria-expanded="false" aria-controls="collapseFaq1-2">Wilayah mana saja yang dilayani?</button>
                                                        </div>
                                                        <div id="collapseFaq1-2" class="at-faq-collapse collapse" data-bs-parent="#accordionFaq1">
                                                            <div class="at-faq-body">
                                                                <p>Kami melayani seluruh wilayah Klaten, Yogyakarta, Gunung Kidul, Sragen, Sukoharjo, Boyolali, dan sekitarnya untuk kebutuhan internet fiber optik rumah, kantor, maupun perusahaan.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="at-faq-item bg-neutral-0 border-100 rounded-4">
                                                        <div class="at-faq-header d-flex gap-2">
                                                            <div class="box-number">
                                                                <span class="at-faq-number">3</span>
                                                            </div>
                                                            <button class="at-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1-3" aria-expanded="false" aria-controls="collapseFaq1-3">Bagaimana jika koneksi bermasalah?</button>
                                                        </div>
                                                        <div id="collapseFaq1-3" class="at-faq-collapse collapse" data-bs-parent="#accordionFaq1">
                                                            <div class="at-faq-body">
                                                                <p>Tim dukungan teknis kami siap membantu 24/7. Kami menyediakan pemantauan dan maintenance jaringan berkala dengan SLA hingga 99%.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="at-faq-item bg-neutral-0 border-100 rounded-4">
                                                        <div class="at-faq-header d-flex gap-2">
                                                            <div class="box-number">
                                                                <span class="at-faq-number">4</span>
                                                            </div>
                                                            <button class="at-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1-4" aria-expanded="false" aria-controls="collapseFaq1-4">Bagaimana cara memasang layanan JMK?</button>
                                                        </div>
                                                        <div id="collapseFaq1-4" class="at-faq-collapse collapse" data-bs-parent="#accordionFaq1">
                                                            <div class="at-faq-body">
                                                                <p>Hubungi kami melalui telepon atau email. Tim kami akan survei lokasi, menentukan solusi yang tepat, lalu melakukan instalasi secara profesional.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                <div class="sec-4-faqs pb-80 pt-80 bg-neutral-50 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mx-auto text-center">
                                <div class="p-relative d-inline-block mb-40">
                                    <div class="at-about-svg-wrap start-50 translate-middle d-none d-lg-block">

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
                                <h4>Masih ada pertanyaan?</h4>
                                <p class="fz-font-lg neutral-900">
                                    Jika Anda tidak menemukan jawabannya di FAQ kami, jangan ragu untuk menghubungi kami. <br>
                                    Tim kami akan segera merespons! Temui tim dukungan kami
                                </p>
                                <h5 class="mt-40">
                                    <a href="mailto:pt.jernihmultikomunikasi@gmail.com">pt.jernihmultikomunikasi@gmail.com</a>
                                </h5>

                                <h6>
                                    <a href="tel:+6285741475779">(62) 857 4147 5779</a>
                                </h6>

                            </div>
                        </div>
                    </div>
                </div>

            </main>
@endsection