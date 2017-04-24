<?php

namespace App\Console\Commands;

use App\Lib\MakePayerReceiver;
use App\Lib\MakeReceiver;
use Illuminate\Console\Command;

class MakeCompletedPayerReceiver extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-receivers';

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
     * @param MakeReceiver $makeReceiver
     * @return mixed
     * @internal param MakePayerReceiver $makePayerReceiver
     */
    public function handle(MakeReceiver $makeReceiver)
    {
        $makeReceiver->processQueue();
    }
}
