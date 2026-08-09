<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array<string, string>  $data
     */
    public function __construct(
        public array $data,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pesan Baru dari Form Kontak — ' . ($this->data['name'] ?? 'Pengunjung'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contact',
        );
    }
}