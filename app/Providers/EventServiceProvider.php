<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Illuminate\Auth\Events\Registered' => [
            'App\Listeners\SendWelcomeEmail',
        ],
        'App\Events\PasswordChanged' =>[
            'App\Listeners\PasswordChangeSuccess'
        ],
        'App\Events\Payer\PayerPairedToReceiver' => [
            'App\Listeners\Payer\PayerPaired',
            'App\Listeners\Receiver\ReceiverHasPairs'
        ],
        'App\Events\Pair\PairExpired' => [
            'App\Listeners\Payer\PayerPairExpired',
            'App\Listeners\Receiver\ReceiverPairExpired'
        ],
        'App\Events\Pair\PairUpdated' => [
            'App\Listeners\Payer\PayerPairedOldPair',
            'App\Listeners\Receiver\NewPayerGiven'
        ],
        'App\Events\AutomatedAdminSlotted' => [
            'App\Listeners\AutomatedAdmin\AdminSlotted'
        ],
        'App\Events\Payer\PayerMadeReceiver' => [
            'App\Listeners\Payer\MadeReceiver'
        ]



    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
