<?php

namespace App\Listeners\Receiver;

use App\Events\Pair\PairUpdated;
use App\Mail\Receiver\NewPayer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class NewPayerGiven
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
        Mail::to($event->pair->receiver->user)->send(new NewPayer($event->pair));
    }
}
