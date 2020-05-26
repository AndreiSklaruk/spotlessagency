<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Feedback extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @param IFeedbackData $data
     */
    public function __construct(IFeedbackData $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->data->getEmail();
        return $this->from($email)
            ->replyTo($email)
            ->subject("Feedback from $email")
            ->markdown('emails.feedback')
            ->with('data', $this->data);
    }
}
