<?php

namespace App\Listeners\Pairing;

use App\Events\Pairing\MemberPaired;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberPairedSuccess
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
     * @param  MemberPaired  $event
     * @return void
     */
    public function handle(MemberPaired $event)
    {
        //
    }
}
