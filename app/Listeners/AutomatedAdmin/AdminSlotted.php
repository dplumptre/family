<?php

namespace App\Listeners\AutomatedAdmin;

use App\Events\AutomatedAdminSlotted;
use App\Mail\AutomatedAdmin\Slotted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class AdminSlotted
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
     * @param  AutomatedAdminSlotted  $event
     * @return void
     */
    public function handle(AutomatedAdminSlotted $event)
    {
        Mail::to($event->receiver->user)->send(new Slotted($event->receiver));
    }
}
