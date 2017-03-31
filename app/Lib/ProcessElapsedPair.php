<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 3/27/2017
 * Time: 3:20 PM
 */

namespace App\Lib;


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
    }


    public function getElapsedPairRows()
    {
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

                    //update payer.pairing_result = 1
                    //trigger event(PairTimeElapsed($elapsedPairRow))
                    $this->updatePairingResult($elapsedPairRow->payer_id);

                    //Pair new payer with existing pairRow
                    //trigger event(MemberPaired($newPayer))
                    $this->updatePairWithPayer($elapsedPairRow, $newPayer);
                });
            } else {
                //no new payer in row.
            }
        }
    }

    private function updatePairingResult($payer_id)
    {
        $this->payer->updateFailedPairingStatus($payer_id);
        //event(PairTimeElapsed($payer_id))
    }

    private function updatePairWithPayer($pairRow, $payer)
    {
        $pairRow->payer_id = $payer->id;
        $pairRow->image = 'example.jpg';
        $pairRow->payer_status = 1;
        $pairRow->receiver_status = 1;
        $pairRow->status = 1;
        $pairRow->elapse_time = Carbon::now()->addHours(48)->format('Y-m-d H:i:s');
        $pairRow->save();

        //event(\App\Events\Pairing\MemberPaired($payer))
    }
}