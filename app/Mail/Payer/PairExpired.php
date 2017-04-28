<?php

namespace App\Mail\Payer;

use App\Models\Pair;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PairExpired extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Pair
     */
    public $pair;

    /**
     * Create a new message instance.
     *
     * @param Pair $pair
     */
    public function __construct(Pair $pair)
    {
        //
        $this->pair = $pair;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Offer to Donate has Expired')
            ->markdown('emails.user.pair-expired');
    }
}
