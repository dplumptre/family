<?php

namespace App\Listeners\Payer;

use App\Events\Pair\PairExpired;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PayerPairExpired
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
        //
    }
}
