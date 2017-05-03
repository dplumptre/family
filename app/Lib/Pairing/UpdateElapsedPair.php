<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 5/3/2017
 * Time: 12:25 AM
 */

namespace App\Lib\Pairing;


use App\Events\Pair\PairExpired;
use App\Events\Pair\PairUpdated;
use App\Models\Pair;
use App\Models\Payer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UpdateElapsedPair
{
    protected $elapsedPairRows;
    /**
     * @var Payer
     */
    private $payer;
    /**
     * @var Pair
     */
    private $pair;


    /**
     * UpdateElapsedPair constructor.
     * @param Payer $payer
     * @param Pair $pair
     */
    public function __construct(Payer $payer, Pair $pair)
    {
        $this->payer = $payer;
        $this->pair = $pair;
        $this->elapsedPairRows = $pair->elapsedPairRows();
    }


    public function process()
    {
        if (count($this->elapsedPairRows) > 0)
        {

            foreach( $this->elapsedPairRows as $row )
            {
                //1 elapsed row processing
                $payer = $this->payer->findNextPayer($row->payer->package_id);

                if ( $payer ){
                    //we have a payer. re-pair
                    DB::transaction(function() use ($payer, $row){
                        $defaulter = $row->payer_id;

                        //do update
                        $this->updatePairWithPayer($row, $payer);
                        //update new payer
                        $payer->status = 1;
                        $payer->save();

                        //event
                        event(new PairUpdated($row));

                        //log pair update
                        $this->logPairUpdated();
                    });
                } else {
                    $this->logNoNewPayer();
                }

                //Tell the Receiver about defaulted payer
                //& inform the Payer himself
                if ( $row->payer->pairing_result == 0 )
                    event(new PairExpired($row));

                //update payer to show he has defaulted. (So he won't receive emails again)
                $row->payer->updateFailedPairStatus();

            }


        }
        else
        {

        }
    }


    private function updatePairWithPayer($pairRow, $payer)
    {
        $pair_expire_min = (int)config('family.pair_expire_minutes');


        $pairRow->payer_id = $payer->id;
        $pairRow->image = 'example.jpg';
        $pairRow->payer_status = 1;
        $pairRow->receiver_status = 1;
        $pairRow->status = 1;
        $pairRow->elapse_time = Carbon::now()->addMinutes($pair_expire_min)->format('Y-m-d H:i:s');
        $pairRow->save();

        //event(\App\Events\Pairing\MemberPaired($payer))
    }
}