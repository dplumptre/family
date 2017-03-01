<?php

namespace App\Listeners;

use App\Events\PasswordChanged;
use App\Mail\PasswordChange;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class PasswordChangeSuccess
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
     * @param  PasswordChanged  $event
     * @return void
     */
    public function handle(PasswordChanged $event)
    {
        Mail::to($event->user)->send(new PasswordChange($event->user));
    }
}
