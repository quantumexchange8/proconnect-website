<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     * 
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = '';

        // Check the actionType and set the subject accordingly
        if ($this->data['actionType'] == 'analysisForm') {
            $subject = 'Welcome to Proconnect! You have successfully submitted the Analysis Form.';
        } elseif ($this->data['actionType'] == 'userSubscription') {
            $subject = 'Welcome to Proconnect! You have successfully subscribed to our newsletter.';
        }

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.email-template',
            with: [
                'content' => $this->data,
            ]
        );
    }
}
