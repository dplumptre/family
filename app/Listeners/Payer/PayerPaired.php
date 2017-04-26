<?php

namespace App\Listeners\Payer;

use App\Events\Payer\PayerPairedToReceiver;
use App\Mail\Payer\PayerPairedToReceiver as MailPayerPairedToReceiver;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class PayerPaired
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
        Mail::to($event->pair->payer->user)->send(new MailPayerPairedToReceiver($event->pair));
    }
}
