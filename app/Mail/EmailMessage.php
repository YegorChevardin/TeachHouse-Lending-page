<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailMessage extends Mailable
{
    use Queueable, SerializesModels;
	
	public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
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
        return $this->markdown('Main.mails.emailmessage')->with(['text' => $this->data['text'], 'email' => $this->data['email'], 'subject' => $this->data['subject']]);
    }
}
