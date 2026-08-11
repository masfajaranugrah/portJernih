<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    /**
     * System prompt asisten — sesuaikan profil bisnis di sini bila perlu.
     * Bot diarahkan berbahasa Indonesia dan jujur bahwa ia asisten AI,
     * lalu mengalihkan hal spesifik ke halaman kontak.
     */
    protected const SYSTEM_PROMPT = <<<'PROMPT'
Kamu adalah asisten layanan pelanggan dari Jernih Multi Komunikasi (Jernih Net),
sebuah perusahaan yang bergerak di bidang komunikasi & multimedia.

Panduan menjawab:
- Jawab dengan ramah, sopan, dan mudah dipahami dalam Bahasa Indonesia.
- Kenali bahwa kamu adalah asisten AI, bukan manusia.
- Jawab singkat & padat (maksimal 150 kata) berdasarkan pertanyaan pengunjung.
- Untuk hal yang bersifat pribadi/spesifik (data, biaya, penawaran, kendala teknis
  di luar pengetahuanmu), arahkan pengunjung untuk menghubungi tim kami
  melalui halaman Kontak (https://jernihmultikomunikasi.net.id/contact)
  atau form di website.
- Jangan menulis nomor telepon atau email yang tidak kamu ketahui secara pasti.
- Jika tidak tahu jawabannya, katakan jujur bahwa kamu perlu bantuan tim kami
  dan sarankan menghubungi kontak kami.
PROMPT;

    /**
     * Terima satu pesan chat dari pengunjung, teruskan ke OpenAI,
     * dan kembalikan jawaban sebagai JSON.
     */
    public function chat(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:2000'],
            'history' => ['present', 'array', 'max:20'],
        ]);

        $apiKey = config('services.openai.key');

        if (blank($apiKey)) {
            return response()->json([
                'error' => 'AI belum dikonfigurasi. Hubungi admin website untuk mengaktifkan chatbot.',
            ], 503);
        }

        $messages = [
            ['role' => 'system', 'content' => static::SYSTEM_PROMPT],
        ];

        // Sanitasi history: hanya izinkan role user/assistant + content string,
        // agar pengunjung tidak bisa menyuntikkan role system/prompt override.
        foreach (array_slice($validated['history'], -20) as $item) {
            $role  = $item['role'] ?? null;
            $text  = $item['content'] ?? null;
            if (in_array($role, ['user', 'assistant'], true) && is_string($text)) {
                $messages[] = ['role' => $role, 'content' => mb_substr($text, 0, 2000)];
            }
        }

        $messages[] = ['role' => 'user', 'content' => $validated['message']];

        try {
            $response = Http::withToken($apiKey)
                ->acceptJson()
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model'       => config('services.openai.default_model', 'gpt-4o-mini'),
                    'messages'    => $messages,
                    'max_tokens'  => 500,
                    'temperature' => 0.7,
                ]);
        } catch (\Throwable $e) {
            report($e);

            return response()->json([
                'error' => 'Gagal menghubungi layanan AI. Silakan coba lagi sebentar lagi.',
            ], 502);
        }

        if (! $response->successful()) {
            return $this->openAIFailure($response);
        }

        $reply = $response->json('choices.0.message.content');

        if (blank($reply)) {
            $reply = 'Maaf, saya belum bisa menjawab pertanyaan itu. Silakan hubungi tim kami melalui halaman Kontak ya.';
        }

        return response()->json(['reply' => $reply]);
    }

    /**
     * Petakan kegagalan dari API OpenAI menjadi pesan yang jelas.
     * Kasus khusus: 429 insufficient_quota = saldo habis (masalah billing,
     * bukan kode) — log untuk admin, tapi tampilkan pesan ramah ke pengunjung.
     */
    private function openAIFailure($response)
    {
        $code     = $response->json('error.code');
        $status   = $response->status();
        $isQuota  = (int) $status === 429 &&
                    in_array($code, ['insufficient_quota', 'credit_balance_exhausted'], true);

        report(new \RuntimeException(
            'OpenAI error ' . $status . ($isQuota ? ' (insufficient_quota)' : '') . ': ' . $response->body()
        ));

        $message = $isQuota
            ? 'Asisten AI sedang nonaktif sementara. Silakan hubungi kami melalui halaman Kontak.'
            : 'Layanan AI sedang bermasalah. Silakan coba lagi.';

        return response()->json(['error' => $message], $status);
    }
}