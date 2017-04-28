<?php

namespace App\Console;

use App\Console\Commands\DoPairing;
use App\Console\Commands\MakeCompletedPayerReceiver;
use App\Console\Commands\UpdateElapsedPayers;
use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        DoPairing::class,
        UpdateElapsedPayers::class,
        MakeCompletedPayerReceiver::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        //pair payers to a receiver
        $schedule->command('app:pair')
            ->everyTenMinutes()
            ->appendOutputTo(storage_path('commands/pairing-output.txt'));

        //update elapsed pair
        $schedule->command('app:update-pair')
            ->everyTenMinutes()
            ->appendOutputTo(storage_path('commands/update-pair.txt'));

        //make successful payers receivers
        $schedule->command('app:make-receivers')
            ->everyTenMinutes()
            ->appendOutputTo(storage_path('commands/receivers.txt'));
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
