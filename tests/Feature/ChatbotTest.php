<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ChatbotTest extends TestCase
{
    public function test_chatbot_answers_registration_question_from_local_knowledge(): void
    {
        Http::fake();

        $response = $this->postJson(route('chatbot.chat'), [
            'message' => 'saya mau tanya cara daftarnya gimana ya',
            'history' => [],
        ]);

        $response->assertOk();
        $this->assertStringContainsString('registrasi', $response->json('reply'));
        $this->assertStringContainsString('0823232287897', $response->json('reply'));
        $this->assertStringContainsString('081818461122', $response->json('reply'));
        Http::assertNothingSent();
    }

    public function test_chatbot_answers_greeting_without_calling_ai(): void
    {
        Http::fake();

        $response = $this->postJson(route('chatbot.chat'), [
            'message' => 'halo',
            'history' => [],
        ]);

        $response->assertOk();
        $this->assertStringContainsString('Jernih Assist', $response->json('reply'));
        Http::assertNothingSent();
    }

    public function test_chatbot_answers_price_question_without_calling_ai(): void
    {
        Http::fake();

        $response = $this->postJson(route('chatbot.chat'), [
            'message' => 'harga paket internet berapa?',
            'history' => [],
        ]);

        $response->assertOk();
        $this->assertStringContainsString('120.000', $response->json('reply'));
        Http::assertNothingSent();
    }

    public function test_chatbot_accepts_long_conversation_history(): void
    {
        Http::fake();

        $history = [];
        for ($i = 0; $i < 40; $i++) {
            $history[] = [
                'role' => $i % 2 === 0 ? 'user' : 'assistant',
                'content' => 'pesan ' . $i,
            ];
        }

        $response = $this->postJson(route('chatbot.chat'), [
            'message' => 'halo',
            'history' => $history,
        ]);

        $response->assertOk();
        $this->assertStringContainsString('Jernih Assist', $response->json('reply'));
    }

    public function test_chatbot_returns_helpful_error_when_ai_is_unavailable_for_unknown_question(): void
    {
        config(['services.openai.key' => null]);
        Http::fake();

        $response = $this->postJson(route('chatbot.chat'), [
            'message' => 'apakah bisa bayar pakai bitcoin?',
            'history' => [],
        ]);

        $response->assertStatus(503);
        $this->assertStringContainsString('0823232287897', $response->json('error'));
        $this->assertStringContainsString('081818461122', $response->json('error'));
        Http::assertNothingSent();
    }
}
