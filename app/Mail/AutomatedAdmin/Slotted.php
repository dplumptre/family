<?php

namespace App\Mail\AutomatedAdmin;

use App\Models\Receiver;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Slotted extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Receiver
     */
    public $receiver;

    /**
     * Create a new message instance.
     *
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Automated Receiver Slotted')
            ->markdown('emails.automated-receiver.slotted');
    }
}
