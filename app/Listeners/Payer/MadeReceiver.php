<?php

namespace App\Listeners\Payer;

use App\Events\Payer\PayerMadeReceiver;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class MadeReceiver
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
     * @param  PayerMadeReceiver  $event
     * @return void
     */
    public function handle(PayerMadeReceiver $event)
    {
        Mail::to($event->receiver->user)->to(new \App\Mail\Payer\MadeReceiver($event->receiver));
    }
}
