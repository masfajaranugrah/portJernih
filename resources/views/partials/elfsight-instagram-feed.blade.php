{{-- Elfsight Instagram Feed --}}
<style>
    .instagram-feed-section a[href*="elfsight.com/instagram-feed-instashow"],
    .instagram-feed-section a[href*="elfsight.com"] {
        display: none !important;
    }
</style>
<section class="instagram-feed-section pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="reveal-text mb-0">Ikuti Kami di Instagram</h3>
                <div class="elfsight-instagram-feed mt-40">
                    <!-- Elfsight Instagram Feed | Untitled Instagram Feed -->
                    <script src="https://elfsightcdn.com/platform.js" async></script>
                    <div class="elfsight-app-1b0c3468-1da2-47e3-9aa4-a96ed5545d4d" data-elfsight-app-lazy></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            var sec = document.currentScript.closest('.instagram-feed-section');
            if (!sec) return;

            if (typeof ResizeObserver !== 'undefined') {
                var timer;
                new ResizeObserver(function () {
                    clearTimeout(timer);
                    timer = setTimeout(function () {
                        if (window.ScrollTrigger && typeof window.ScrollTrigger.refresh === 'function') {
                            window.ScrollTrigger.refresh();
                        }
                    }, 150);
                }).observe(sec);
            }

            function hideBadge(root) {
                if (!root || !root.querySelectorAll) return;
                root.querySelectorAll('a[href*="elfsight.com"]').forEach(function (el) {
                    el.style.setProperty('display', 'none', 'important');
                });
                root.querySelectorAll('*').forEach(function (el) {
                    if (el.shadowRoot) hideBadge(el.shadowRoot);
                });
            }

            var attempts = 0;
            var interval = setInterval(function () {
                hideBadge(document);
                attempts++;
                if (attempts > 40) clearInterval(interval);
            }, 500);
        })();
    </script>
</section>
