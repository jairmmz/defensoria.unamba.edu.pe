<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AttentionMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name_plaintiff;
    protected $whatch;


    /**
     * Create a new message instance.
     */
    public function __construct(string $name_plaintiff, string $whatch)
    {
        $this->name_plaintiff = $name_plaintiff;
        $this->whatch = $whatch;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Attention Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.mail-send',
            with: [
                'name_plaintiff' => $this->name_plaintiff,
                'whatch' => $this->whatch,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
