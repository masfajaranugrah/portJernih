/* ============================================================
   Widget Chatbot — Jernih Assist
   Vanilla JS, tanpa dependency. Berkomunikasi dengan backend
   Laravel lewat POST /chatbot (dengan CSRF token).
   ============================================================ */
(function () {
    'use strict';

    const MAX_HISTORY = 20;          // jumlah putaran pesan yang dikirim sbg konteks
    const HISTORY_KEY = 'jn_chat_history';

    var root       = document.getElementById('chatbot');
    var toggleBtn  = document.getElementById('chatbot-toggle');
    var closeBtn   = document.getElementById('chatbot-close');
    var panel      = document.getElementById('chatbot-panel');
    var body       = document.getElementById('chatbot-body');
    var form       = document.getElementById('chatbot-form');
    var input      = document.getElementById('chatbot-input');
    var teaser     = document.getElementById('chatbot-teaser');
    var sendBtn    = form ? form.querySelector('.chatbot-send') : null;

    // Tidak ada elemen widget -> berhenti (misal halaman tanpa layout).
    if (!root || !toggleBtn || !panel || !body || !form || !input) return;

    var history = loadHistory();

    /* ---------- helper render ---------- */
    function addMessage(text, type) {
        var msg = document.createElement('div');
        msg.className = 'chatbot-msg chatbot-msg--' + (type || 'bot');
        msg.textContent = text;
        body.appendChild(msg);
        body.scrollTop = body.scrollHeight;
        return msg;
    }

    function showTyping() {
        var t = document.createElement('div');
        t.className = 'chatbot-msg chatbot-msg--bot chatbot-msg--typing';
        t.innerHTML = '<span class="chatbot-typing-dot"></span><span class="chatbot-typing-dot"></span><span class="chatbot-typing-dot"></span> Mengetik…';
        body.appendChild(t);
        body.scrollTop = body.scrollHeight;
        return t;
    }

    /* ---------- riwayat percakapan (localStorage) ---------- */
    function loadHistory() {
        try {
            var raw = JSON.parse(localStorage.getItem(HISTORY_KEY) || '[]');
            return Array.isArray(raw) ? raw.filter(validItem).slice(-MAX_HISTORY * 2) : [];
        } catch (e) {
            return [];
        }
    }

    function validItem(item) {
        return item && ['user', 'assistant'].indexOf(item.role) !== -1 &&
               typeof item.content === 'string' && item.content;
    }

    function pushHistory(role, content) {
        history.push({ role: role, content: content });
        if (history.length > MAX_HISTORY * 2) history = history.slice(-MAX_HISTORY * 2);
        try { localStorage.setItem(HISTORY_KEY, JSON.stringify(history)); } catch (e) {}
    }

    /* ---------- percakapan ---------- */
    function openPanel() {
        root.classList.add('is-open');
        panel.hidden = false;
        toggleBtn.setAttribute('aria-expanded', 'true');
        if (teaser) teaser.classList.remove('is-visible');
        if (body.children.length === 0) {
            addMessage('Halo! Selamat datang di website Jernih Multi Komunikasi 👋 Saya asisten AI. Ada yang bisa saya bantu, misalnya seputar layanan internet, pemasangan, atau cara menghubungi kami?', 'bot');
            pushHistory('assistant', 'Halo! Ada yang bisa saya bantu?');
        }
        input.focus();
    }

    function closePanel() {
        root.classList.remove('is-open');
        panel.hidden = true;
        toggleBtn.setAttribute('aria-expanded', 'false');
    }

    function send() {
        var text = input.value.trim();
        if (!text) return;

        addMessage(text, 'user');
        pushHistory('user', text);
        input.value = '';
        input.disabled = true;
        if (sendBtn) sendBtn.disabled = true;

        var typing = showTyping();
        var csrf = document.querySelector('meta[name="csrf-token"]');
        var token = csrf ? csrf.getAttribute('content') : '';

        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({ message: text, history: history })
        })
        .then(function (res) {
            /* Baca sebagai teks dulu supaya respons HTML (mis. 419) tidak
               membuat seluruh proses gagal, lalu coba parse JSON. */
            return res.text().then(function (text) {
                var data = {};
                try { data = text ? JSON.parse(text) : {}; } catch (e) { data = {}; }
                return { ok: res.ok, status: res.status, data: data };
            });
        })
        .then(function (result) {
            if (typing.parentNode) typing.remove();
            if (result.ok && result.data && result.data.reply) {
                addMessage(result.data.reply, 'bot');
                pushHistory('assistant', result.data.reply);
            } else {
                var detail = null;
                if (result.data && result.data.errors) {
                    var firstError = Object.values(result.data.errors)[0];
                    detail = Array.isArray(firstError) ? firstError[0] : firstError;
                }

                var message = (result.data && (result.data.error || result.data.message)) || detail;

                if (!message) {
                    message = result.status === 419
                        ? 'Sesi halaman sudah kedaluwarsa. Silakan muat ulang halaman lalu coba lagi.'
                        : 'Maaf, terjadi kesalahan. Silakan coba lagi.';
                }

                addMessage(message, 'error');
            }
        })
        .catch(function () {
            if (typing.parentNode) typing.remove();
            addMessage('Koneksi bermasalah. Periksa internet Anda lalu coba lagi.', 'error');
        })
        .finally(function () {
            input.disabled = false;
            if (sendBtn) sendBtn.disabled = false;
            input.focus();
        });
    }

    /* ---------- events ---------- */
    toggleBtn.addEventListener('click', function () {
        panel.hidden ? openPanel() : closePanel();
    });

    /* Bubble "Butuh bantuan?" muncul dari ikon setelah beberapa detik */
    if (teaser) {
        teaser.addEventListener('click', openPanel);

        var TEASER_KEY = 'jn_chat_teaser_seen';
        var teaserSeen = false;

        try { teaserSeen = sessionStorage.getItem(TEASER_KEY) === '1'; } catch (e) {}

        if (!teaserSeen) {
            window.setTimeout(function () {
                if (panel.hidden) teaser.classList.add('is-visible');
            }, 2600);

            try { sessionStorage.setItem(TEASER_KEY, '1'); } catch (e) {}
        }
    }

    if (closeBtn) closeBtn.addEventListener('click', closePanel);

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        send();
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !panel.hidden) closePanel();
    });
})();