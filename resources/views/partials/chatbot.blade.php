{{-- Widget Chatbot melayang (kecil & independen dari template Orisa) --}}
<div class="chatbot" id="chatbot" aria-live="polite">
    <button type="button" class="chatbot-toggle" id="chatbot-toggle" aria-expanded="false" aria-label="Buka chatbot">
        <span class="chatbot-toggle-icon chatbot-toggle-icon--chat" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        </span>
        <span class="chatbot-toggle-icon chatbot-toggle-icon--close" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" width="20" height="20"><path d="M18 6 6 18M6 6l12 12"/></svg>
        </span>
    </button>

    <div class="chatbot-panel" id="chatbot-panel" hidden>
        <div class="chatbot-panel__header">
            <div class="chatbot-panel__brand">
                <span class="chatbot-panel__avatar" aria-hidden="true">JN</span>
                <div>
                    <p class="chatbot-panel__title">Jernih Assist</p>
                    <p class="chatbot-panel__status">Asisten AI tolong-menolong</p>
                </div>
            </div>
            <button type="button" class="chatbot-panel__close" id="chatbot-close" aria-label="Tutup chatbot">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" width="18" height="18"><path d="M18 6 6 18M6 6l12 12"/></svg>
            </button>
        </div>

        <div class="chatbot-body" id="chatbot-body"></div>

        <form class="chatbot-form" id="chatbot-form" autocomplete="off">
            <input type="text" class="chatbot-input" id="chatbot-input"
                   placeholder="Tulis pertanyaanmu…" maxlength="2000" aria-label="Pesan">
            <button type="submit" class="chatbot-send" aria-label="Kirim pesan">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
            </button>
        </form>
    </div>
</div>