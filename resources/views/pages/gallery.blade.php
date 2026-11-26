@extends('layouts.app')

@section('title', 'JernihNet')

@section('content')
<style>
    .gallery-masonry {
        column-count: 3;
        column-gap: 24px;
    }
    .gallery-masonry-item {
        break-inside: avoid;
        -webkit-column-break-inside: avoid;
        margin-bottom: 24px;
    }
    .gallery-masonry-card {
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        background: #f5f5f5;
    }
    .gallery-masonry-card img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.6s ease;
    }
    .gallery-masonry-card:hover img {
        transform: scale(1.04);
    }
    .gallery-masonry-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0,0,0,0) 45%, rgba(0,0,0,0.45) 100%);
        opacity: 0;
        transition: opacity 0.35s ease;
        pointer-events: none;
    }
    .gallery-masonry-card:hover .gallery-masonry-overlay {
        opacity: 1;
    }
    @media (max-width: 991.98px) {
        .gallery-masonry {
            column-count: 2;
            column-gap: 16px;
        }
        .gallery-masonry-item {
            margin-bottom: 16px;
        }
    }
    @media (max-width: 575.98px) {
        .gallery-masonry {
            column-count: 1;
        }
    }
</style>

<main class="bg-neutral-0" style="padding-top: clamp(70px, 8vw, 110px);">
    <!-- Gallery Hero -->
    <div class="sec-2-about block-journey my-5 rounded-5 mx-lg-3 mx-2 pt-120 pb-120 bg-neutral-900 changeless">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7 col-md-8">
                    <span class="at-btn text-white bg-transparent mb-10 rounded-0 p-0">
                        <span class="text-uppercase text-white">
                            <span class="text-1">Galeri</span>
                            <span class="text-2">Galeri</span>
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
                    <h3 class="text-white reveal-text">Galeri Kegiatan Kami</h3>
                    <p class="text-white fz-font-lg mb-0">Dokumentasi kegiatan tim Jernih Multi Komunikasi dalam menghadirkan layanan internet dan jaringan terbaik untuk pelanggan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Masonry -->
    <div class="pt-120 pb-120">
        <div class="container">
            <div class="gallery-masonry">
                @php
                    $galleryImages = [
                        'assets/imgs/pages/gambar/WhatsApp Image 2022-09-17 at 22.13.01.jpeg',
                        'assets/imgs/pages/gambar/teknisi-1.jpeg',
                        'assets/imgs/pages/gambar/WhatsApp Image 2022-10-03 at 20.03.19.jpeg',
                        'assets/imgs/pages/gambar/WhatsApp Image 2022-11-10 at 14.16.38 (1).jpeg',
                        'assets/imgs/pages/gambar/teknisi-2.jpeg',
                        'assets/imgs/pages/gambar/teknisi-3.jpeg',
                    ];
                @endphp

                @foreach ($galleryImages as $image)
                    <div class="gallery-masonry-item">
                        <div class="gallery-masonry-card">
                            <img src="{{ asset($image) }}" alt="Galeri Jernih Multi Komunikasi" loading="lazy">
                            <div class="gallery-masonry-overlay"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
