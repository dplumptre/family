<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 3/27/2017
 * Time: 3:20 PM
 */

namespace App\Lib;


use App\Events\Pair\PairExpired;
use App\Models\Pair;
use App\Models\Payer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProcessElapsedPair
{
    protected $elapsedPairRows;
    /**
     * @var Pair
     */
    private $pair;
    /**
     * @var Payer
     */
    private $payer;

    /**
     * processElapsedPair constructor.
     * @param Pair $pair
     * @param Payer $payer
     */
    public function __construct(Pair $pair, Payer $payer)
    {
        $this->pair = $pair;
        $this->payer = $payer;
        $this->elapsedPairRows = $this->pair->elapsedPairRows();
        $this->getElapsedPairRows();
    }


    public function getElapsedPairRows()
    {
        if ( count($this->elapsedPairRows) > 0 )
            $this->haveElapsedPairRow();
        else
            $this->noElapsedPairRow();

        return $this->elapsedPairRows;
    }


    public function processElapsedPairRows()
    {
        foreach ($this->elapsedPairRows as $elapsedPairRow)
        {
            //Find next payer
            $package_id = $elapsedPairRow->payer->package_id;
            $newPayer = $this->payer->findNextPayer($package_id);

            if ( $newPayer )
            {
                DB::transaction(function() use($elapsedPairRow, $newPayer){

                    $defaulter = $elapsedPairRow->payer_id;
                    //update payer.pairing_result = 1
                    //trigger event(PairTimeElapsed($elapsedPairRow))
                    $this->updateOldPairingResult($elapsedPairRow->payer_id);

                    //Pair new payer with existing pairRow
                    //trigger event(MemberPaired($newPayer))
                    $this->updatePairWithPayer($elapsedPairRow, $newPayer);

                    //update new payer.status = 1
                    $this->updateNewPayer($newPayer);

                    $this->pairUpdated($elapsedPairRow->id, $defaulter);

                    //call event to notify new payer & receiver

                });
            } else {
                //no new payer in row.
                //but disable existing pair row till a payer is found
                $elapsedPairRow->payer->updateFailedPairStatus();
                $this->noNewPayerForElapsedRow($elapsedPairRow->id);
            }
            //no new payer.
            //Tell the Receiver & inform the Payer
            event(new PairExpired($elapsedPairRow));
        }
    }

    private function updateOldPairingResult($payer_id)
    {
        $this->payer->updateFailedPairingStatus($payer_id);
        //event(PairTimeElapsed($payer_id))
    }

    private function updateNewPayer($payerRow)
    {
        $payerRow->status = 1;
        $payerRow->save();
    }

    private function updatePairWithPayer($pairRow, $payer)
    {
        $pair_expire_min = config_path('family.pair_expire_minutes')?: 6 * 60 ;

        $pairRow->payer_id = $payer->id;
        $pairRow->image = 'example.jpg';
        $pairRow->payer_status = 1;
        $pairRow->receiver_status = 1;
        $pairRow->status = 1;
        $pairRow->elapse_time = Carbon::now()->addMinutes($pair_expire_min)->format('Y-m-d H:i:s');
        $pairRow->save();

        //event(\App\Events\Pairing\MemberPaired($payer))
    }

###################################################
# outputs
###################################################
    private function haveElapsedPairRow()
    {
        echo $this->now() . ': Elapsed pair row present' . PHP_EOL;
    }


    private function now()
    {
        return Carbon::now()->format('Y-m-d H:i:s');
    }

    private function noNewPayerForElapsedRow($id)
    {
        echo $this->now() . ": No payer for elapsed pair row $id" . PHP_EOL;
    }

    private function pairUpdated($id, $payer)
    {
        echo $this->now() . ": Pair row updated $id. defaulted payer: $payer" . PHP_EOL;
    }

    private function noElapsedPairRow()
    {
        echo $this->now() . ": No Elapsed row yet." . PHP_EOL;
    }


}