{{-- Layout utama Orisa --}}
<!doctype html>
<html lang="en" data-bs-theme="{{ $theme ?? 'light' }}">
@include('partials.head')
<body class="{{ $bodyClass ?? 'at-magic-cursor' }}">
    @include('partials.search')

    @include('partials.navbar')

    @include('partials.offcanvas-1')
    @include('partials.offcanvas-2')

    @if($blur ?? true)
        <div class="px-blur-bottom"></div>
    @endif

    <!-- Begin magic cursor -->
    <div id="magic-cursor" class="cursor-black-bg">
        <div id="ball"></div>
    </div>
    <!-- End magic cursor -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            @yield('content')

            @include('partials.footer')
        </div>
    </div>

    @if($showBackToTop ?? true)
        @include('partials.back-to-top')
    @endif

    @include('partials.scripts')
    @stack('scripts')
</body>
</html>
