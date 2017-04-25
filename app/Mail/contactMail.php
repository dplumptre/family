<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $details;
    
    public function __construct($contactDetails)
    {
        $this->details = $contactDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
           return $this->subject('Contact Form ' . config('app.name'))
                    ->markdown('emails.page.contact');
    }
}
