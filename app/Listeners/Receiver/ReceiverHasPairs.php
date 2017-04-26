<?php

namespace App\Listeners\Receiver;

use App\Events\Payer\PayerPairedToReceiver;
use App\Mail\Receiver\ReceiverGivenPair;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ReceiverHasPairs
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
     * @param  PayerPairedToReceiver  $event
     * @return void
     */
    public function handle(PayerPairedToReceiver $event)
    {
        Mail::to($event->pair->receiver->user)->send(new ReceiverGivenPair($event->pair->receiver));
    }
}
