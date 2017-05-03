<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 5/3/2017
 * Time: 12:48 AM
 */

namespace App\Lib\Pairing;


use App\Models\Pair;
use App\Models\Payer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UpdateFailedPayer
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
     * UpdateFailedPayer constructor.
     * @param Pair $pair
     * @param Payer $payer
     */
    public function __construct(Pair $pair, Payer $payer)
    {
        $this->pair = $pair;
        $this->payer = $payer;
        $this->elapsedPairRows = $this->pair->elapsedPairRows();
    }


    public function updatePayer()
    {
        if ( count($this->elapsedPairRows) > 0 )
        {
            foreach ( $this->elapsedPairRows as $row )
            {
                DB::transaction(function() use ($row) {

                    if ( !$row->payer->pairing_result == 1 )
                    {
                        $row->payer->pairing_result = 1;
                        $row->payer->save();
                        $this->payerFound($row->payer->id);
                    }
                });
            }
        } else {
            $this->payerNotFound();
        }
    }


    private function payerFound($id)
    {
        echo $this->now() . ": Elapsed payer found___$id" . PHP_EOL;
    }


    private function payerNotFound()
    {
        echo $this->now() . ": Elapsed payer NOT found." . PHP_EOL;
    }


    private function now()
    {
        return Carbon::now()->format('Y-m-d H:i:s');
    }
}