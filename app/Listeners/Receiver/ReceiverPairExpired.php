<?php

namespace App\Listeners\Receiver;

use App\Events\Pair\PairExpired;
use App\Mail\Receiver\OnePairExpired;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ReceiverPairExpired
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
     * @param  PairExpired  $event
     * @return void
     */
    public function handle(PairExpired $event)
    {
        Mail::to($event->pair->receiver->user)->send(new OnePairExpired($event->pair));
    }
}
