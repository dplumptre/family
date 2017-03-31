<?php

namespace App\Mail\Payer;

use App\Models\Payer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PayerPaired extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Payer
     */
    private $payer;

    /**
     * Create a new message instance.
     *
     * @param Payer $payer
     */
    public function __construct(Payer $payer)
    {
        //
        $this->payer = $payer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
