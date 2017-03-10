<?php

namespace App\Console\Commands;

use App\Lib\ProcessPairing;
use App\Models\Payer;
use App\Models\Receiver;
use Illuminate\Console\Command;

class DoPairing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'familyapp:pair';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command pairs payers to receivers instantly';

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
     * @param ProcessPairing $pairing
     * @return mixed
     */
    public function handle(ProcessPairing $pairing)
    {
        //1, get the next receiver
        $receiver = $pairing->getNextReceiver();

        if ( $receiver == null )
            return;

        //2. get the next two payers with the same package_id as receiver in 1
        $payers = $pairing->getNextPayers();

        //if we get null, we exit. it means we have one payer or no payer
        if ( $payers == null )
            return;

        //we have 2 payers, do the pairing
        $pairing->doPair();
    }
}
