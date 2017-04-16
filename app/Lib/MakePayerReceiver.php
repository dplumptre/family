<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 4/3/2017
 * Time: 12:53 PM
 */

namespace App\Lib;


use App\Models\Payer;
use App\Models\Receiver;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MakePayerReceiver
{
    protected $completedPayers;
    /**
     * @var Payer
     */
    private $payer;
    /**
     * @var Receiver
     */
    private $receiver;


    /**
     * MakePayerReceiver constructor.
     * @param Payer $payer
     * @param Receiver $receiver
     */
    public function __construct(Payer $payer, Receiver $receiver)
    {
        $this->payer = $payer;
        $this->receiver = $receiver;
        $this->completedPayers = $payer->completedPayers();
    }


    public function getCompletedPayers()
    {
        return $this->completedPayers;
    }


    public function makeCompletedPayersReceivers()
    {
        //we have the completed payers
        //loop thru them and make the receivers
        if ( count($this->completedPayers) > 0 )
        {
            foreach ( $this->completedPayers as $completedPayer )
            {
                DB::transaction(function() use($completedPayer){

                    //create the receiver row for the completed payer
                    $this->receiver->create([
                        'user_id' => $completedPayer->user_id,
                        'package_id' => $completedPayer->package_id,
                        'status' => 0,
                    ]);

                    //update the payer row set finished=1 for payer so we won't choose him again
                    $completedPayer->finishPayer();

                    //event to notify payer has become receiver
                    $this->payerNowReceiver($completedPayer->id);
                });
                //event(PayerNowReceiver($completedPayer->user_id))

            }
        } else {
            $this->noCompletedPayer();
        }
    }


    private function now()
    {
        return Carbon::now()->format('Y-m-d H:i:s');
    }

    private function payerNowReceiver($id)
    {
        echo $this->now() . ": Payer now receiver__$id" . PHP_EOL;
    }

    private function noCompletedPayer()
    {
        echo $this->now() . ': No completed payer' . PHP_EOL;
    }


}