@extends('layouts.app')

@section('title', 'JernihNet')

@section('content')
            <main>
                <!--Home 4 Section 1-->
                <div class="container-2200 sec-1-home-4-wrap p-relative z-0 pt-85">
                    <div class="sec-1-home-4 bg-linear-opacity p-relative bg-cover mt-20 rounded-5 mx-lg-3 mx-2" data-background="{{ asset('assets/imgs/pages/bg-img-4.webp') }}">
                        <div class="container p-relative z-index-1">
                            <div class="row align-items-start">
                                <!-- Left: Tagline, Headline, Buttons -->
                                <div class="col-12">
                                    <span class="sec-1-home-4__tagline d-inline-block mb-30">[AI & TECHNOLOGY AGENCY ]</span>
                                </div>
                                <div class="col-xxl-4 col-lg-5 mb-5 mb-lg-0">
                                    <h4 class="sec-1-home-4__headline text-white mb-4 mb-md-5 lh-1">
                                        From strategy to execution, we turn intelligence into real-world impact.
                                    </h4>
                                    <div class="sec-1-home-4__btns d-flex flex-wrap gap-3">
                                        <a class="at-btn text-white rounded-0" href="{{ route('services-1') }}">
                                            <span>
                                                <span class="text-1">EXPLORE SOLUTIONS</span>
                                                <span class="text-2">EXPLORE SOLUTIONS</span>
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
                                        <a class="at-btn text-white rounded-0" href="{{ route('portfolio-4') }}">
                                            <span>
                                                <span class="text-1">VIEW CASE STUDIES</span>
                                                <span class="text-2">VIEW CASE STUDIES</span>
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
                                <!-- Right: Image Cards + Tags -->
                                <div class="col-xxl-4 col-lg-6 col-md-10 ms-lg-auto mt-lg-0 mt-4">
                                    <div class="sec-1-home-4__cards d-flex gap-3 mb-4">
                                        <div class="sec-1-home-4__card rounded-3 overflow-hidden">
                                            <img class="img-cover" src="{{ asset('assets/imgs/pages/img-43-lg.webp') }}" alt="orisa">
                                        </div>
                                        <div class="sec-1-home-4__card rounded-3 overflow-hidden">
                                            <img class="img-cover" src="{{ asset('assets/imgs/pages/img-74.webp') }}" alt="orisa">
                                        </div>
                                        <div class="sec-1-home-4__card rounded-3 overflow-hidden">
                                            <img class="img-cover" src="{{ asset('assets/imgs/pages/img-75.webp') }}" alt="orisa">
                                        </div>
                                    </div>
                                    <div class="sec-1-home-4__tags d-flex flex-wrap gap-3 mt-40">
                                        <a href="#" class="sec-1-home-4__tag">LLMs
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10" fill="none">
                                                <path d="M5.62494 9.99994L0.562517 10L0.5625 8.75003L4.49994 8.74996L4.5 2.39273L2.27828 4.86124L1.48278 3.97739L5.0625 0L8.64225 3.97739L7.84676 4.86124L5.625 2.3927L5.62494 9.99994Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a href="#" class="sec-1-home-4__tag">Data pipelines
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10" fill="none">
                                                <path d="M5.62494 9.99994L0.562517 10L0.5625 8.75003L4.49994 8.74996L4.5 2.39273L2.27828 4.86124L1.48278 3.97739L5.0625 0L8.64225 3.97739L7.84676 4.86124L5.625 2.3927L5.62494 9.99994Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a href="#" class="sec-1-home-4__tag">Data pipelines
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10" fill="none">
                                                <path d="M5.62494 9.99994L0.562517 10L0.5625 8.75003L4.49994 8.74996L4.5 2.39273L2.27828 4.86124L1.48278 3.97739L5.0625 0L8.64225 3.97739L7.84676 4.86124L5.625 2.3927L5.62494 9.99994Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a href="#" class="sec-1-home-4__tag">Automation tools
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10" fill="none">
                                                <path d="M5.62494 9.99994L0.562517 10L0.5625 8.75003L4.49994 8.74996L4.5 2.39273L2.27828 4.86124L1.48278 3.97739L5.0625 0L8.64225 3.97739L7.84676 4.86124L5.625 2.3927L5.62494 9.99994Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a href="#" class="sec-1-home-4__tag">Cloud & APIs
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
                                    Orisa AI Solutions<span class="sec-1-home-4__brand-suffix"><sup>®</sup></span>
                                </h2>
                                <div class="container p-relative z-index-2">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12 text-center">
                                            <div class="at-btn at-btn-border-white ps-2 pt-20 pb-20  pe-2 text-white bg-transparent rounded-0 border-bottom-0 border-start-0 border-end-0 w-100">
                                                <span>
                                                    <span class="text-1">Web Development</span>
                                                    <span class="text-2">Web Development</span>
                                                </span>
                                                <i>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12 text-center">
                                            <div class="at-btn at-btn-border-white ps-2 pt-20 pb-20  pe-2 text-white bg-transparent rounded-0 border-bottom-0 border-start-0 border-end-0 w-100">
                                                <span>
                                                    <span class="text-1">Design & Experience</span>
                                                    <span class="text-2">Design & Experience</span>
                                                </span>
                                                <i>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12 text-center">
                                            <div class="at-btn at-btn-border-white ps-2 pt-20 pb-20  pe-2 text-white bg-transparent rounded-0 border-bottom-0 border-start-0 border-end-0 w-100">
                                                <span>
                                                    <span class="text-1">Network Integration</span>
                                                    <span class="text-2">Network Integration</span>
                                                </span>
                                                <i>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12 text-center">
                                            <div class="at-btn at-btn-border-white ps-2 pt-20 pb-20  pe-2 text-white bg-transparent rounded-0 border-bottom-0 border-start-0 border-end-0 w-100">
                                                <span>
                                                    <span class="text-1">Build & Launch</span>
                                                    <span class="text-2">Build & Launch</span>
                                                </span>
                                                <i>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.21967 9.40717C-0.0732232 9.70006 -0.0732232 10.1749 0.21967 10.4678C0.512563 10.7607 0.987437 10.7607 1.28033 10.4678L0.21967 9.40717ZM10.6875 0.75C10.6875 0.335786 10.3517 2.97145e-09 9.9375 1.50485e-07L3.1875 -2.70983e-07C2.77329 -2.70983e-07 2.4375 0.335786 2.4375 0.75C2.4375 1.16421 2.77329 1.5 3.1875 1.5H9.1875V7.5C9.1875 7.91421 9.52329 8.25 9.9375 8.25C10.3517 8.25 10.6875 7.91421 10.6875 7.5L10.6875 0.75ZM0.75 9.9375L1.28033 10.4678L10.4678 1.28033L9.9375 0.75L9.40717 0.21967L0.21967 9.40717L0.75 9.9375Z" fill="currentColor" />
                                                    </svg>
                                                </i>
                                            </div>
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
                                        <span class="text-1">what we offer</span>
                                        <span class="text-2">what we offer</span>
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
                                    <img class="portfolio-text" src="{{ asset('assets/imgs/pages/img-gemstone.webp') }}" alt="orisa">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-9">
                                <h3 class="reveal-text lh-1">Turning ideas into digital experiences that perform in the real world.</h3>
                            </div>
                            <div class="col-lg-3 col-md-6 ms-auto mt-md-0 mt-4">
                                <ul class="list-unstyled navigation-section-10">
                                    <li>
                                        <div class="icon-shape size-60 rounded-2 fix">
                                            <img class="img-cover" src="{{ asset('assets/imgs/template/avatar/avatar-10.webp') }}" alt="orisa">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-shape size-60 rounded-2 fix">
                                            <img class="img-cover" src="{{ asset('assets/imgs/template/avatar/avatar-11.webp') }}" alt="orisa">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-shape size-60 rounded-2 fix">
                                            <img class="img-cover" src="{{ asset('assets/imgs/template/avatar/avatar-12.webp') }}" alt="orisa">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-shape size-60 rounded-2 fix">
                                            <img class="img-cover" src="{{ asset('assets/imgs/template/avatar/avatar-13.webp') }}" alt="orisa">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-shape size-60 rounded-2 fix">
                                            <img class="img-cover" src="{{ asset('assets/imgs/template/avatar/avatar-14.webp') }}" alt="orisa">
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-flex gap-3 pt-30">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27 13.5V0H13.5H0V13.5V27H13.5L27 13.5ZM27 13.5H13.5V27L0 13.5L13.5 0L27 13.5Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <span class="neutral-900">We design intelligent systems that help businesses think, decide, and scale faster.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-3 col-md-6">
                                <div class="at-service-card card-1 rounded-4 overflow-hidden p-relative bg-cover" data-background="{{ asset('assets/imgs/pages/img-76.webp') }}">
                                    <a href="#" class="p-absolute top-0 left-0 w-100 h-100"></a>
                                    <div class="at-service-card-content text-white p-absolute bottom-0 start-0 end-0 m-xxl-5 m-4">
                                        <div class="at-service-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M7.5 15C11.6421 15 15 11.6421 15 7.5C15 11.6412 18.3563 14.9984 22.4971 15C18.3563 15.0016 15 18.3588 15 22.5C15 18.3579 11.6421 15 7.5 15C3.35786 15 5.08894e-07 18.3579 3.27835e-07 22.5L0 30L7.5 30C11.6421 30 15 26.6421 15 22.5C15 26.6421 18.3579 30 22.5 30L30 30L30 22.5C30 18.3588 26.6437 15.0016 22.5029 15C26.6437 14.9984 30 11.6412 30 7.5L30 6.31805e-06L22.5 6.64589e-06C18.3579 6.82695e-06 15 3.35787 15 7.5C15 3.35787 11.6421 5.21315e-06 7.5 5.39421e-06L2.62268e-06 3.8147e-06L1.63918e-06 7.5C1.096e-06 11.6421 3.35786 15 7.5 15Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h4 class="h6 text-white mt-3"><a href="#">Strategy & Research</a></h4>
                                        <div class="at-service-card-description">
                                            <p class="text-white mb-0">Through research, analysis, and positioning, we build a clear foundation for meaningful digital growth.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="at-service-card card-2 rounded-4 overflow-hidden p-relative bg-neutral-0">
                                    <a href="#" class="p-absolute bottom-0 start-0 end-0">
                                        <img class="img-cover" src="{{ asset('assets/imgs/pages/img-77.webp') }}" alt="orisa">
                                    </a>
                                    <div class="at-service-card-content p-absolute top-0 left-0 m-xxl-5 m-4">
                                        <div class="at-service-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M15 0H30V15L15 0Z" fill="currentColor" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 15V0H7.5L0 7.5V15V30H15H22.5L30 22.5V15H15ZM15 15V30L0 15H15Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h4 class="h6 mt-3"><a href="#">Design & Experience</a></h4>
                                        <div class="at-service-card-description">
                                            <p class="mb-0">Every interaction is crafted to balance beauty, usability, and brand personality.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="at-service-card card-3 rounded-4 overflow-hidden p-relative">
                                    <a href="#" class="p-absolute top-0 left-0">
                                        <img class="img-cover" src="{{ asset('assets/imgs/pages/img-78.webp') }}" alt="orisa">
                                    </a>
                                    <a href="#" class="p-absolute bottom-0 start-0 end-0">
                                        <img class="img-cover" src="{{ asset('assets/imgs/pages/img-79.webp') }}" alt="orisa">
                                    </a>
                                    <div class="at-service-card-content text-white p-absolute top-50 left-0 mx-xxl-5 mx-4 translate-middle-y">
                                        <div class="at-service-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0L20 10L10 0L0 10V30L10 20L20 30L30 20V0ZM10 20V10H20V20H10Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h4 class="h6 text-white mt-3"><a href="#">Network Integration</a></h4>
                                        <div class="at-service-card-description">
                                            <p class="mb-0 text-white">From on-premise to cloud environments, we ensure seamless communication, scalability, and operational stability.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="at-service-card card-2 rounded-4 overflow-hidden p-relative bg-neutral-0">
                                    <a href="#" class="p-absolute bottom-0 start-0 end-0">
                                        <img class="img-cover" src="{{ asset('assets/imgs/pages/img-80.webp') }}" alt="orisa">
                                    </a>
                                    <div class="at-service-card-content p-absolute top-50 left-0 mx-xxl-5 mx-4 translate-middle-y">
                                        <div class="at-service-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <path d="M10 10L20 0H30V10L20 20V10H10Z" fill="currentColor" />
                                                <path d="M20 20H30V30H20V20Z" fill="currentColor" />
                                                <path d="M10 10L0 20V30H10L20 20H10V10Z" fill="currentColor" />
                                                <path d="M10 10H0V0H10V10Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <h4 class="h6 mt-3"><a href="#">Build & Launch</a></h4>
                                        <div class="at-service-card-description">
                                            <p class="mb-0">Bring ideas to life with clean, scalable, and performance-driven builds. From development to launch, we focus on reliability and long-term growth.</p>
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
                                            <span class="text-1">HOW WE WORK</span>
                                            <span class="text-2">HOW WE WORK</span>
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
                                    <h3 class="reveal-text mb-0">A structured process
                                        built for real-world impact</h3>
                                </div>
                                <div class="col-lg-3 ms-auto d-flex justify-content-lg-end">
                                    <div class="at-btn-group at_fade_anim" data-delay=".4" data-fade-from="bottom" data-ease="bounce">
                                        <a class="at-btn-circle" href="{{ route('contact') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a class="at-btn z-index-1" href="{{ route('contact') }}">Get a free quote</a>
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
                                            <h4 class="h6 card__process-title">Discover & Diagnose</h4>
                                            <p class="card__process-desc">We analyze your market, audience, data, and existing performance to uncover real growth opportunities.</p>
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
                                            <h4 class="h6 card__process-title">Strategy & Plan</h4>
                                            <p class="card__process-desc">We craft data-driven strategies tailored to your goals, ensuring every decision is backed by insights.</p>
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
                                            <h4 class="h6 card__process-title">Execute & Optimize</h4>
                                            <p class="card__process-desc">We implement with precision and continuously optimize to maximize impact and ROI.</p>
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
                                            <h4 class="h6 card__process-title">Scale & Sustain</h4>
                                            <p class="card__process-desc">We help you scale what works and build sustainable systems for long-term growth.</p>
                                            <div class="card__process-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center g-md-5 g-4 mt-lg-0 mt-20">
                                <div class="col-lg-3 order-lg-1 order-2">
                                    <div class="at_fade_anim" data-delay=".4" data-fade-from="bottom" data-ease="bounce">
                                        <img src="{{ asset('assets/imgs/pages/img-85.webp') }}" alt="orisa">
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
                                    <span class="fz-font-3xl neutral-900 reveal-text">“We combine strategy, design, and technology into a clear, repeatable process — built to reduce risk and maximize results.”.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Home 2 Section 3-->
                <!-- Home 4 Section 4 -->
                <div class="container-2200">
                    <div class="sec-4-home-4 pt-100 pb-100 mt-30 rounded-5 mx-lg-3 mx-2 fix p-relative bg-neutral-0">
                        <div class="container">
                            <div class="row align-items-end g-4">
                                <div class="col-xxl-5 col-lg-6">
                                    <span class="at-btn common-black text-uppercase bg-transparent mb-10 rounded-0 p-0">
                                        <span class="text-uppercase">
                                            <span class="text-1">CASE STUDIES</span>
                                            <span class="text-2">CASE STUDIES</span>
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
                                    <h3 class="reveal-text mb-0">Real-world AI solutions with measurable impact</h3>
                                </div>
                                <div class="col-lg-3 ms-auto d-flex justify-content-lg-end">
                                    <div class="at-btn-group at-btn-group-transparent at_fade_anim" data-delay=".5" data-fade-from="bottom" data-ease="bounce">
                                        <a class="at-btn-circle" href="{{ route('portfolio-4') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                        <a class="at-btn z-index-1" href="{{ route('portfolio-4') }}">View All Projects</a>
                                        <a class="at-btn-circle" href="{{ route('portfolio-4') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                <path d="M0.0001297 8.99993L0 3.00407e-05L2 0L2.0001 6.99993L12.1719 7.00003L8.22224 3.05027L9.63644 1.63606L16.0003 8.00003L9.63644 14.364L8.22224 12.9497L12.1719 9.00003L0.0001297 8.99993Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container pt-70">
                            <div class="row g-4">
                                <div class="col-12">
                                    <!-- card list CASE STUDIES (Featured Case) -->
                                    <div class="card_case__studies-list">
                                        <div class="card_case__studies-card">
                                            <div class="card_case__studies-left">
                                                <span class="card_case__studies-featured-tag">Featured case</span>
                                                <h4 class="card_case__studies-title">
                                                    <a href="#">AI-Driven Demand <br> Forecasting System</a>
                                                </h4>
                                                <p class="card_case__studies-desc">We built an intelligent forecasting platform that helps enterprises predict demand, optimize inventory, and reduce operational risk using real-time data and machine learning models.</p>
                                                <div class="card_case__studies-metrics">
                                                    <div class="card_case__studies-metric">
                                                        <h4 class="card_case__studies-metric-value">+<span class="odometer" data-count="72"></span>%</h4>
                                                        <span class="card_case__studies-metric-label">Planning Efficiency</span>
                                                    </div>
                                                    <div class="card_case__studies-metric-divider"></div>
                                                    <div class="card_case__studies-metric">
                                                        <h4 class="card_case__studies-metric-value">-<span class="odometer" data-count="18"></span>%</h4>
                                                        <span class="card_case__studies-metric-label">Inventory Cost</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-auto pt-50">
                                                    <div class="card_case__studies-tags">
                                                        <a href="#" class="card_case__studies-tag">AI Application</a>
                                                        <a href="#" class="card_case__studies-tag">Data Pipelines</a>
                                                        <a href="#" class="card_case__studies-tag">Enterprise Systems</a>
                                                        <a href="#" class="card_case__studies-tag">Experimental</a>
                                                    </div>
                                                    <a href="#" class="card_case__studies-link text-white">
                                                        <span class="text-white text-nowrap">View case</span>
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path d="M6 1v10M1 6h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card_case__studies-right">
                                                <div class="card_case__studies-thumb anim-zoomin">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/imgs/pages/img-86.webp') }}" alt="AI-Driven Demand Forecasting System">
                                                    </a>
                                                    <div class="card_case__studies-play p-relative postbox-play-btn">
                                                        <a class="popup-video size-100" href="https://www.youtube.com/watch?v=VCPGMjCW0is">
                                                            <span class="text-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="44" viewBox="0 0 35 44" fill="none">
                                                                    <path d="M6.40193e-06 5.72002V38.28C6.40193e-06 40.7629 2.76819 42.2714 4.90001 40.92L30.8 24.64C31.2534 24.3566 31.6269 23.9644 31.8858 23.5001C32.1446 23.0358 32.2803 22.5144 32.2803 21.9843C32.2803 21.4543 32.1446 20.9328 31.8858 20.4685C31.6269 20.0042 31.2534 19.612 30.8 19.3286L4.90001 3.08002C4.42009 2.77341 3.86529 2.60044 3.29413 2.57934C2.72298 2.55824 2.15665 2.6898 1.65488 2.96014C1.15312 3.23048 0.734523 3.62957 0.443259 4.11532C0.151995 4.60107 -0.00114111 5.15546 6.40193e-06 5.72002Z" fill="#FEFEFE" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- prettier-ignore -->
                                <div class="card_case__studies-list card_case__studies card_case__studies-list--row col-lg-6" data-category="">
                                    <div class="card_case__studies-card card_case__studies-card--overlay">
                                        <div class="card_case__studies-visual">
                                            <a href="#">
                                                <img src="{{ asset('assets/imgs/pages/img-87.webp') }}" alt="Smart Automation">
                                            </a>
                                            <div class="card_case__studies-metric-overlay">
                                                <h4 class="card_case__studies-metric-value mb-0">+<span class="odometer" data-count="30"></span>%</h4>
                                                <span class="card_case__studies-metric-label">Operational Speed</span>
                                            </div>
                                            <div class="card_case__studies-tags-overlay">
                                                <a href="#" class="card_case__studies-tag">AI Models</a><a href="#" class="card_case__studies-tag">Deployment</a><a href="#" class="card_case__studies-tag">Scalability</a><a href="#" class="card_case__studies-tag">Engineering</a>
                                            </div>
                                        </div>
                                        <div class="card_case__studies-footer mt-10">
                                            <h5 class="card_case__studies-footer-title">
                                                <a href="#">Smart Automation</a>
                                            </h5>
                                            <a href="#" class="card_case__studies-link text-white">
                                                <span class="text-white text-nowrap">View case</span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path d="M6 1v10M1 6h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_case__studies-list card_case__studies card_case__studies-list--row col-lg-6" data-category="">
                                    <div class="card_case__studies-card card_case__studies-card--overlay">
                                        <div class="card_case__studies-visual">
                                            <a href="#">
                                                <img src="{{ asset('assets/imgs/pages/img-88.webp') }}" alt="Data Intelligence">
                                            </a>
                                            <div class="card_case__studies-metric-overlay">
                                                <h4 class="card_case__studies-metric-value mb-0">-<span class="odometer" data-count="20"></span>%</h4>
                                                <span class="card_case__studies-metric-label">Planning Risk</span>
                                            </div>
                                            <div class="card_case__studies-tags-overlay">
                                                <a href="#" class="card_case__studies-tag">Decision Systems</a><a href="#" class="card_case__studies-tag">Analytics</a><a href="#" class="card_case__studies-tag">Systems</a><a href="#" class="card_case__studies-tag">Engineering</a>
                                            </div>
                                        </div>
                                        <div class="card_case__studies-footer mt-10">
                                            <h5 class="card_case__studies-footer-title">
                                                <a href="#">Data Intelligence</a>
                                            </h5>
                                            <a href="#" class="card_case__studies-link text-white">
                                                <span class="text-white text-nowrap">View case</span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path d="M6 1v10M1 6h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container pt-120">
                            <div class="row g-5">
                                <div class="col-lg-6 col-12">
                                    <div class="award-description d-flex gap-5 pe-lg-5">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83" viewBox="0 0 83 83" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M41.5 0H0L41.5 41.5H0L41.5 83H83L41.5 41.5H83L41.5 0Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5 class="revert-text mb-0 reveal-text">Orisa is a digital agency creating impactful digital experiences. We think like strategists and execute with clarity, creativity, and performance.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <span class="neutral-500 fw-600 text-uppercase">trusted by</span>
                                    <div class="d-flex align-items-center flex-wrap gap-lg-5 gap-4 mb-40 pt-30">
                                        <div class="brand">
                                            <img class="dark-mode-invert" src="{{ asset('assets/imgs/template/logo/logo-brand-09.webp') }}" alt="Brand 1">
                                        </div>
                                        <div class="brand">
                                            <img class="dark-mode-invert" src="{{ asset('assets/imgs/template/logo/logo-brand-01.webp') }}" alt="Brand 2">
                                        </div>
                                        <div class="brand">
                                            <img class="dark-mode-invert" src="{{ asset('assets/imgs/template/logo/logo-brand-02.webp') }}" alt="Brand 3">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap gap-lg-5 gap-4">
                                        <div class="brand">
                                            <img class="dark-mode-invert" src="{{ asset('assets/imgs/template/logo/logo-brand-03.webp') }}" alt="Brand 4">
                                        </div>
                                        <div class="brand">
                                            <img class="dark-mode-invert" src="{{ asset('assets/imgs/template/logo/logo-brand-04.webp') }}" alt="Brand 5">
                                        </div>
                                        <div class="brand">
                                            <img class="dark-mode-invert" src="{{ asset('assets/imgs/template/logo/logo-brand-10.webp') }}" alt="Brand 6">
                                        </div>
                                        <div class="brand">
                                            <img class="dark-mode-invert" src="{{ asset('assets/imgs/template/logo/logo-brand-06.webp') }}" alt="Brand 7">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Home 4 Section 4 End -->
                <!-- Home 4 Section 5 -->
                <div class="container-2200 mt-30">
                    <div class="sec-5-home-4 bg-neutral-50">
                        <div class="bg-linear-opacity pt-100 pb-100 rounded-5 mx-lg-3 mx-2 bg-cover" data-background="{{ asset('assets/imgs/pages/bg-img-5.webp') }}">
                            <div class="container">
                                <div class="row g-4 align-items-end">
                                    <div class="col-lg-8 col-md-8">
                                        <h2 class="text-white mb-2 lh-1">Awards & Recognitions</h2>
                                        <h3 class="h6 text-white mb-0">Recognized for innovation, quality, and impact</h3>
                                    </div>
                                    <div class="col-lg-3 col-md-4 ms-auto d-flex justify-content-lg-end">
                                        <div class="at-btn-group at-btn-group-transparent at_fade_anim" data-delay=".5" data-fade-from="bottom" data-ease="bounce">
                                            <a class="at-btn-circle" href="{{ route('portfolio-4') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5.00013 13.9999L5 5.00003L7 5L7.0001 11.9999L17.1719 12L13.2222 8.05027L14.6364 6.63606L21.0003 13L14.6364 19.364L13.2222 17.9497L17.1719 14L5.00013 13.9999Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                            <a class="at-btn z-index-1" href="{{ route('portfolio-4') }}">View All Awards</a>
                                            <a class="at-btn-circle" href="{{ route('portfolio-4') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5.00013 13.9999L5 5.00003L7 5L7.0001 11.9999L17.1719 12L13.2222 8.05027L14.6364 6.63606L21.0003 13L14.6364 19.364L13.2222 17.9497L17.1719 14L5.00013 13.9999Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-120">
                                    <div class="col-12">
                                        <div class="card-award style-1 scroll-move-up" data-rotate="positive-15deg" data-img-award="assets/imgs/pages/img-89.webp">
                                            <a href="https://globaldigitalawards.com" target="_blank" class="card-award-link">
                                                <div class="card-award-content">
                                                    <div class="card-award-image">
                                                        <img src="{{ asset('assets/imgs/pages/img-89-sm.webp') }}" alt="Award" class="w-100 h-100" />
                                                    </div>
                                                    <h4 class="h6 card-award-title mb-0">Best AI & Technology Agency</h4>
                                                </div>
                                                <h5 class="h6 card-award-web-excellence mb-0 fz-font-lg fw-500">Global Digital Awards</h5>

                                                <span class="card-award-date">[ March 12, 2025 ]</span>
                                                <div class="card-award-meta">
                                                    <span class="card-award-url fz-font-lg">globaldigitalawards.com</span>
                                                </div>
                                                <div class="card-award-icon ms-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M10.0208 3.41421L1.41421 12.0208L0 10.6066L8.60659 2H1.02082V0H12.0208V11H10.0208V3.41421Z" fill="currentColor" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-award style-1 scroll-move-up" data-rotate="positive-15deg" data-img-award="assets/imgs/pages/img-90.webp">
                                            <a href="https://techexcellenceforum.org" target="_blank" class="card-award-link">
                                                <div class="card-award-content">
                                                    <div class="card-award-image">
                                                        <img src="{{ asset('assets/imgs/pages/img-90-sm.webp') }}" alt="Award" class="w-100 h-100" />
                                                    </div>
                                                    <h4 class="h6 card-award-title mb-0">Innovation in Intelligent Systems</h4>
                                                </div>
                                                <h5 class="h6 card-award-web-excellence mb-0 fz-font-lg fw-5">Tech Excellence Forum</h5>

                                                <span class="card-award-date">[ October 8, 2024 ]</span>
                                                <div class="card-award-meta">
                                                    <span class="card-award-url fz-font-lg">techexcellenceforum.org</span>
                                                </div>
                                                <div class="card-award-icon ms-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M10.0208 3.41421L1.41421 12.0208L0 10.6066L8.60659 2H1.02082V0H12.0208V11H10.0208V3.41421Z" fill="currentColor" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-award style-1 scroll-move-up" data-rotate="positive-15deg" data-img-award="assets/imgs/pages/img-91.webp">
                                            <a href="https://internationaluxawards.com" target="_blank" class="card-award-link">
                                                <div class="card-award-content">
                                                    <div class="card-award-image">
                                                        <img src="{{ asset('assets/imgs/pages/img-91-sm.webp') }}" alt="Award" class="w-100 h-100" />
                                                    </div>
                                                    <h4 class="h6 card-award-title mb-0">Outstanding Digital Experience Design</h4>
                                                </div>
                                                <h5 class="h6 card-award-web-excellence mb-0 fz-font-lg fw-5">International UX Awards</h5>

                                                <span class="card-award-date">[ June 21, 2024 ]</span>
                                                <div class="card-award-meta">
                                                    <span class="card-award-url fz-font-lg">internationaluxawards.com</span>
                                                </div>
                                                <div class="card-award-icon ms-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M10.0208 3.41421L1.41421 12.0208L0 10.6066L8.60659 2H1.02082V0H12.0208V11H10.0208V3.41421Z" fill="currentColor" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-award style-1 scroll-move-up" data-rotate="positive-15deg" data-img-award="assets/imgs/pages/img-92.webp">
                                            <a href="https://enterprisetechnetwork.org" target="_blank" class="card-award-link">
                                                <div class="card-award-content">
                                                    <div class="card-award-image">
                                                        <img src="{{ asset('assets/imgs/pages/img-92-sm.webp') }}" alt="Award" class="w-100 h-100" />
                                                    </div>
                                                    <h4 class="h6 card-award-title mb-0">Trusted Partner of the Year</h4>
                                                </div>
                                                <h5 class="h6 card-award-web-excellence mb-0 fz-font-lg fw-5">Enterprise Technology Network</h5>

                                                <span class="card-award-date">[ December 3, 2023 ]</span>
                                                <div class="card-award-meta">
                                                    <span class="card-award-url fz-font-lg">enterprisetechnetwork.org</span>
                                                </div>
                                                <div class="card-award-icon ms-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M10.0208 3.41421L1.41421 12.0208L0 10.6066L8.60659 2H1.02082V0H12.0208V11H10.0208V3.41421Z" fill="currentColor" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-award style-1 mb-0 scroll-move-up" data-rotate="positive-15deg" data-img-award="assets/imgs/pages/img-93.webp">
                                            <a href="https://globaldigitalawards.com" target="_blank" class="card-award-link">
                                                <div class="card-award-content">
                                                    <div class="card-award-image">
                                                        <img src="{{ asset('assets/imgs/pages/img-93-sm.webp') }}" alt="Award" class="w-100 h-100" />
                                                    </div>
                                                    <h4 class="h6 card-award-title mb-0">Best AI & Technology Agency</h4>
                                                </div>
                                                <h5 class="h6 card-award-web-excellence mb-0 fz-font-lg fw-5">Global Digital Awards</h5>

                                                <span class="card-award-date">[ March 12, 2025 ]</span>
                                                <div class="card-award-meta">
                                                    <span class="card-award-url fz-font-lg">globaldigitalawards.com</span>
                                                </div>
                                                <div class="card-award-icon ms-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M10.0208 3.41421L1.41421 12.0208L0 10.6066L8.60659 2H1.02082V0H12.0208V11H10.0208V3.41421Z" fill="currentColor" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Home 4 Section 6-->
                <div class="sec-6-home-4 pt-120 pb-120">
                    <div class="container">
                        <div class="row pb-60">
                            <div class="col-xxl-1 col-lg-2 col-md-3">
                                <span class="at-btn common-black bg-transparent mb-10 rounded-0 p-0">
                                    <span class="text-uppercase">
                                        <span class="text-1">Our Team</span>
                                        <span class="text-2">Our Team</span>
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
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <h2 class="h3 reveal-text">Meet our dedicated <br> and skilled team</h2>
                            </div>
                            <div class="col-lg-3 col-md-5 ms-auto text-center">
                                <h2 class="h1 fz-ds-1 fw-500 mb-0 lh-1"><span class="odometer" data-count="190"></span>+</h2>
                                <h3 class="h6 fw-500 mb-0">Projects have been <br> completed.</h3>
                            </div>
                        </div>
                        <div class="row g-4">
                            <!-- card team 2 (3 columns) -->
                            <!-- beautify ignore:start -->
            <div class="col-xxl-4 col-lg-6 col-12">
    <div class="team-card-2">
        <div class="team-card-2__image">
            <div class="anim-zoomin">
                <img src="{{ asset('assets/imgs/pages/img-94.webp') }}" alt="Alex Morgan" class="img-cover">
            </div>
            <div class="team-card-2__social">
                <a href="#" class="team-card-2__social-link" aria-label="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.706 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                    <span>Twitter</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                    <span>Facebook</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                    <span>Linkedin</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                    <span>Instagram</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                    <span>Youtube</span>
                </a>
            </div>
        </div>
        <div class="team-card-2__content at_fade_anim" data-delay=".2">
            <a href="{{ route('team-details') }}" class="team-card-2__name">
                <h4 class="h6 fz-font-2xl fw-600 m-0">Alex Morgan</h4>
            </a>
            <span class="team-card-2__position">Creative Director</span>
        </div>
    </div>
</div><div class="col-xxl-4 col-lg-6 col-12">
    <div class="team-card-2">
        <div class="team-card-2__image">
            <div class="anim-zoomin">
                <img src="{{ asset('assets/imgs/pages/img-95.webp') }}" alt="Alex Morgan" class="img-cover">
            </div>
            <div class="team-card-2__social">
                <a href="#" class="team-card-2__social-link" aria-label="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.706 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                    <span>Twitter</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                    <span>Facebook</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                    <span>Linkedin</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                    <span>Instagram</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                    <span>Youtube</span>
                </a>
            </div>
        </div>
        <div class="team-card-2__content at_fade_anim" data-delay=".5">
            <a href="{{ route('team-details') }}" class="team-card-2__name">
                <h4 class="h6 fz-font-2xl fw-600 m-0">Alex Morgan</h4>
            </a>
            <span class="team-card-2__position">Data & Analytics Lead</span>
        </div>
    </div>
</div><div class="col-xxl-4 col-lg-6 col-12">
    <div class="team-card-2">
        <div class="team-card-2__image">
            <div class="anim-zoomin">
                <img src="{{ asset('assets/imgs/pages/img-96.webp') }}" alt="Alex Morgan" class="img-cover">
            </div>
            <div class="team-card-2__social">
                <a href="#" class="team-card-2__social-link" aria-label="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.706 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                    <span>Twitter</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                    <span>Facebook</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                    <span>Linkedin</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                    <span>Instagram</span>
                </a>
                <a href="#" class="team-card-2__social-link" aria-label="Youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                    <span>Youtube</span>
                </a>
            </div>
        </div>
        <div class="team-card-2__content at_fade_anim" data-delay=".8">
            <a href="{{ route('team-details') }}" class="team-card-2__name">
                <h4 class="h6 fz-font-2xl fw-600 m-0">Alex Morgan</h4>
            </a>
            <span class="team-card-2__position">Technology Architect</span>
        </div>
    </div>
</div>
            <!-- beautify ignore:end -->
                        </div>
                    </div>
                </div>
                <!--Home 4 Section 7-->
                <div class="home-4-section-7 p-relative">
                    <div class="container">
                        <div class="row g-2">
                            <!-- testimonial -->
                            <div class="col-lg-4">
                                <div class="p-relative rounded-4 overflow-hidden bg-cover bg-linear-opacity p-xxl-5 p-md-5 p-4 h-100" data-background="{{ asset('assets/imgs/pages/bg-img-6.webp') }}">
                                    <span class="at-btn text-white bg-transparent mb-10 rounded-0 p-0">
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
                                    <h2 class="text-white reveal-text mb-60 pb-60 border-bottom-opacity">Apa kata para klien kami</h2>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="rotate-infinite">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M53.5715 0H46.4286V41.3778L17.17 12.1193L12.1193 17.17L41.3778 46.4286H0V53.5715H41.3778L12.1193 82.83L17.17 87.8805L46.4286 58.622V100H53.5715V58.622L82.83 87.8805L87.8805 82.83L58.622 53.5715H100V46.4286H58.622L87.8805 17.17L82.83 12.1193L53.5715 41.3778V0Z" fill="#FEFEFE" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="testimonial-star d-flex align-items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                    <path d="M8.55696 13.6975L12.707 16.2075C13.467 16.6675 14.397 15.9875 14.197 15.1275L13.097 10.4075L16.767 7.2275C17.437 6.6475 17.077 5.5475 16.197 5.4775L11.367 5.0675L9.47696 0.6075C9.13696 -0.2025 7.97696 -0.2025 7.63696 0.6075L5.74696 5.0575L0.916957 5.4675C0.0369575 5.5375 -0.323043 6.6375 0.346957 7.2175L4.01696 10.3975L2.91696 15.1175C2.71696 15.9775 3.64696 16.6575 4.40696 16.1975L8.55696 13.6975Z" fill="#FEFEFE" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                    <path d="M8.55696 13.6975L12.707 16.2075C13.467 16.6675 14.397 15.9875 14.197 15.1275L13.097 10.4075L16.767 7.2275C17.437 6.6475 17.077 5.5475 16.197 5.4775L11.367 5.0675L9.47696 0.6075C9.13696 -0.2025 7.97696 -0.2025 7.63696 0.6075L5.74696 5.0575L0.916957 5.4675C0.0369575 5.5375 -0.323043 6.6375 0.346957 7.2175L4.01696 10.3975L2.91696 15.1175C2.71696 15.9775 3.64696 16.6575 4.40696 16.1975L8.55696 13.6975Z" fill="#FEFEFE" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                    <path d="M8.55696 13.6975L12.707 16.2075C13.467 16.6675 14.397 15.9875 14.197 15.1275L13.097 10.4075L16.767 7.2275C17.437 6.6475 17.077 5.5475 16.197 5.4775L11.367 5.0675L9.47696 0.6075C9.13696 -0.2025 7.97696 -0.2025 7.63696 0.6075L5.74696 5.0575L0.916957 5.4675C0.0369575 5.5375 -0.323043 6.6375 0.346957 7.2175L4.01696 10.3975L2.91696 15.1175C2.71696 15.9775 3.64696 16.6575 4.40696 16.1975L8.55696 13.6975Z" fill="#FEFEFE" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                    <path d="M8.55696 13.6975L12.707 16.2075C13.467 16.6675 14.397 15.9875 14.197 15.1275L13.097 10.4075L16.767 7.2275C17.437 6.6475 17.077 5.5475 16.197 5.4775L11.367 5.0675L9.47696 0.6075C9.13696 -0.2025 7.97696 -0.2025 7.63696 0.6075L5.74696 5.0575L0.916957 5.4675C0.0369575 5.5375 -0.323043 6.6375 0.346957 7.2175L4.01696 10.3975L2.91696 15.1175C2.71696 15.9775 3.64696 16.6575 4.40696 16.1975L8.55696 13.6975Z" fill="#FEFEFE" />
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                                    <path d="M8.55696 13.6975L12.707 16.2075C13.467 16.6675 14.397 15.9875 14.197 15.1275L13.097 10.4075L16.767 7.2275C17.437 6.6475 17.077 5.5475 16.197 5.4775L11.367 5.0675L9.47696 0.6075C9.13696 -0.2025 7.97696 -0.2025 7.63696 0.6075L5.74696 5.0575L0.916957 5.4675C0.0369575 5.5375 -0.323043 6.6375 0.346957 7.2175L4.01696 10.3975L2.91696 15.1175C2.71696 15.9775 3.64696 16.6575 4.40696 16.1975L8.55696 13.6975Z" fill="#FEFEFE" />
                                                </svg>
                                            </div>
                                            <p class="text-white fz-font-sm mb-0 mt-2">Average 4.9 rating point <br> reviews from 968 clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="p-relative rounded-4 overflow-hidden bg-cover bg-linear-opacity p-xxl-5 p-lg-4 p-md-3 h-100 d-flex align-items-center justify-content-center" data-background="{{ asset('assets/imgs/pages/bg-img-7.webp') }}">
                                    <div class="d-flex flex-lg-nowrap flex-wrap gap-5 p-md-5 p-4">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="61" height="43" viewBox="0 0 61 43" fill="none">
                                                <path d="M4.3 43H17.2L25.8 25.8V0H0V25.8H12.9L4.3 43ZM38.7 43H51.6L60.2 25.8V0H34.4V25.8H47.3L38.7 43Z" fill="#FEFEFE" />
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <p class="text-white fz-font-3xl fw-400 mb-50 lh-base">What impressed us most was their ability to translate a high-level AI strategy into a system that actually worked in production. Within a short time, we saw clear improvements in efficiency, decision-making speed, and overall operational performance.</p>
                                            <h3 class="h5 text-white fw-500">Michael Turner</h3>
                                            <p class="text-white fz-font-md fw-500 opacity-75 mb-0">CTO, Nexora Systems</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Home 4 Section 8-->
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
                                    <a class="at-btn" href="{{ route('archive-1') }}">
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
                                    <a href="{{ route('blog-details') }}" class="blog-card__img-link">
                                        <img src="{{ asset('assets/imgs/pages/img-97.webp') }}" class="blog-card__img22" alt="orisa">
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                    <h2 class=" h6 blog-card__title">
                                        <a href="{{ route('blog-details') }}" class="blog-card__title-link">Designing Digital Experiences That Connect Brands and People</a>
                                    </h2>
                                    <p class="blog-card__meta">
                                        <span class="blog-card__meta-text">By </span>
                                        <a href="{{ route('team-details') }}" class="blog-card__author">Olivia</a>
                                        <span class="blog-card__meta-text"> – July 3, 2026</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-card col-lg-3 col-md-6 col-12 mb-30" data-category="@@category">
                                <div class="blog-card__thumb hover-effect-1">
                                    <a href="{{ route('blog-details') }}" class="blog-card__img-link">
                                        <img src="{{ asset('assets/imgs/pages/img-98.webp') }}" class="blog-card__img22" alt="orisa">
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                    <h2 class=" h6 blog-card__title">
                                        <a href="{{ route('blog-details') }}" class="blog-card__title-link">From Concept to Launch: Building Products That Truly Matter</a>
                                    </h2>
                                    <p class="blog-card__meta">
                                        <span class="blog-card__meta-text">By </span>
                                        <a href="{{ route('team-details') }}" class="blog-card__author">Daniel</a>
                                        <span class="blog-card__meta-text"> – July 8, 2026</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-card col-lg-3 col-md-6 col-12 mb-30" data-category="@@category">
                                <div class="blog-card__thumb hover-effect-1">
                                    <a href="{{ route('blog-details') }}" class="blog-card__img-link">
                                        <img src="{{ asset('assets/imgs/pages/img-99.webp') }}" class="blog-card__img22" alt="orisa">
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                    <h2 class=" h6 blog-card__title">
                                        <a href="{{ route('blog-details') }}" class="blog-card__title-link">Why Strong Visual Identity Is the Foundation of Modern Brands</a>
                                    </h2>
                                    <p class="blog-card__meta">
                                        <span class="blog-card__meta-text">By </span>
                                        <a href="{{ route('team-details') }}" class="blog-card__author">Emma</a>
                                        <span class="blog-card__meta-text"> – July 12, 2026</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-card col-lg-3 col-md-6 col-12 mb-30" data-category="@@category">
                                <div class="blog-card__thumb hover-effect-1">
                                    <a href="{{ route('blog-details') }}" class="blog-card__img-link">
                                        <img src="{{ asset('assets/imgs/pages/img-100.webp') }}" class="blog-card__img22" alt="orisa">
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                    <h2 class=" h6 blog-card__title">
                                        <a href="{{ route('blog-details') }}" class="blog-card__title-link">Creating Impactful Interfaces Through Thoughtful Design Systems</a>
                                    </h2>
                                    <p class="blog-card__meta">
                                        <span class="blog-card__meta-text">By </span>
                                        <a href="{{ route('team-details') }}" class="blog-card__author">Lucas</a>
                                        <span class="blog-card__meta-text"> – July 17, 2026</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
@endsection

