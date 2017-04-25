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

    public $name ;
    public $email;
    public $subject;
    public $message ;
    
    public function __construct($request)
    {
        
        
        $this->name = $request->get('name');
        $this->email = $request->get('email');
        $this->subject = $request->get('subject');
        $this->message = $request->get('message');
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
           return $this->subject($this->subject ." - ". config('app.name'))
                    ->markdown('emails.page.contact');
    }
}
