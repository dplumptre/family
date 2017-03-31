<?php

namespace App\Listeners\Pairing;

use App\Events\Pairing\PairTimeElapsed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TimeElapsed
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
     * @param  PairTimeElapsed  $event
     * @return void
     */
    public function handle(PairTimeElapsed $event)
    {
        //
    }
}
