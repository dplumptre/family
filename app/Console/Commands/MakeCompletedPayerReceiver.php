<?php

namespace App\Console\Commands;

use App\Lib\MakePayerReceiver;
use Illuminate\Console\Command;

class MakeCompletedPayerReceiver extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-payers-receivers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to make completed payers receivers.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param MakePayerReceiver $makePayerReceiver
     * @return mixed
     */
    public function handle(MakePayerReceiver $makePayerReceiver)
    {
        $makePayerReceiver->makeCompletedPayersReceivers();
    }
}
