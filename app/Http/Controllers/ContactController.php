<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Kirim pesan dari form kontak ke email tujuan via SMTP.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:150'],
            'email'   => ['required', 'email', 'max:190'],
            'phone'   => ['required', 'string', 'max:30'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            Mail::to(config('mail.contact.to'))
                ->send(new ContactMail($data));
        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with('contact_error', 'Pesan gagal terkirim. Silakan coba lagi atau hubungi kami lewat email / telepon.');
        }

        return back()->with('contact_success', 'Terima kasih! Pesan Anda sudah terkirim. Tim kami akan merespons dalam 1–2 hari kerja.');
    }
}