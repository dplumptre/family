<?php

namespace App\Listeners\Payer;

use App\Events\Pair\PairUpdated;
use App\Mail\Payer\PayerPairedToReceiver as MailPayerPairedToReceiver;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class PayerPairedOldPair
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PairUpdated  $event
     * @return void
     */
    public function handle(PairUpdated $event)
    {
        Mail::to($event->pair->payer->user)->send(new MailPayerPairedToReceiver($event->pair));
    }
}
