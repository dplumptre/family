<?php

namespace App\Console\Commands;

use App\Lib\Pairing\UpdateFailedPayer;
use Illuminate\Console\Command;

class UpdateElapsedPayer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-elapse-payer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the payer whose elapsed pair has expired';

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
     * @param UpdateFailedPayer $failedPayer
     * @return mixed
     */
    public function handle(UpdateFailedPayer $failedPayer)
    {
        $failedPayer->updatePayer();
    }
}
