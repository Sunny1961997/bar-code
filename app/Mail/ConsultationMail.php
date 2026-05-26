<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ConsultationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Consultation Request',
            to: [new Address('infoamlshop@gmail.com')],
            from: new Address(
                config('mail.from.address', 'infoamlshop@gmail.com'),
                config('mail.from.name', 'GOAML Compliance Service')
            )
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.consultation',
        );
    }
} 