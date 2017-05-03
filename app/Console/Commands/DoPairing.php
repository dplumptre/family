<?php

namespace App\Console\Commands;

use App\Lib\ProcessElapsedPair;
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
    protected $signature = 'app:pair';

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
     * @param \App\Lib\Pairing\DoPairing $doPairing
     * @param ProcessElapsedPair $processElapsedPair
     * @return mixed
     * @internal param ProcessPairing $pairing
     */
    public function handle(\App\Lib\Pairing\DoPairing $doPairing, ProcessElapsedPair $processElapsedPair)
    {
        $processElapsedPair->processElapsedPairRows();
        $doPairing->process();
    }
//    public function handle(ProcessPairing $pairing)
//    {
//        //1, get the next receiver
//        $receiver = $pairing->getNextReceiver();
//        //while we have a receiver
//        while ($receiver != null) {
//            //get two payers
//            $payers = $pairing->getNextPayers();
//
//            if ($payers != null) {
//                $pairing->doPair();
//                //get next receiver to keep loop going or stop.
//                $receiver = $pairing->getNextReceiver();
//            }
//            else
//            {
//                $receiver = null;
//            }
//        }
//    }
}
