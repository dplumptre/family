<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 3/8/2017
 * Time: 11:55 PM
 */

namespace App\Lib;


use App\Events\Payer\PayerPairedToReceiver;
use App\Models\Package;
use App\Models\Pair;
use App\Models\Payer;
use App\Models\Receiver;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProcessPairing
{
    const PENDING = 0;
    const PROCESSING = 1;
    const COMPLETED = 2;

    protected $payerModel;
    protected $receiverModel;
    /**
     * @var Receiver
     */
    private $receiver;
    private $package_id;
    /**
     * @var Payer
     */
    private $payer;
    /**
     * @var Pair
     */
    private $pair;


    /**
     * ProcessPairing constructor.
     * @param Receiver $receiver
     * @param Payer $payer
     * @param Pair $pair
     */
    public function __construct(Receiver $receiver, Payer $payer, Pair $pair)
    {
        $this->receiver = $receiver;
        $this->payer = $payer;
        $this->pair = $pair;
    }


    public function getNextReceiver()
    {
        $receiver = $this->receiver->TakeNextReceiverInQueue();

        if ($receiver) {
            $this->receiverModel = $receiver;
            $this->receiverFoundQueue();
            return true;
        }
        unset($this->receiverModel);
        $this->noReceiverInQueue();
        return null;
    }


    public function getNextPayers()
    {
        $payers = $this->payer->TakeNextPayersInQueue($this->receiverModel->package_id);

        if ($payers->count() == 0) {
            $this->noPayersInQueue();
            return null;
        }

        if ($payers->count() == 2) {
            $this->payerModel = $payers;
            return true;
        }

        $this->onePayerInQueue();
        return null;
    }


    public function doPair()
    {
        //loop over payer model to do the insert.
        $amount = Package::find($this->receiverModel->package_id)->paying_amount;
        $pem = (int) config('family.pair_expire_minutes');

        DB::transaction(function () use ($amount, $pem) {
            //make sure u're not processing the receiver more than once
            if (!$this->pair->where('receiver_id', $this->receiverModel->id)->first()) {

                foreach ($this->payerModel as $row):

                    $pairRow = $this->pair->pairReceiverToPayer(
                        $row->id,
                        $this->receiverModel->id,
                        $amount,
                        self::PROCESSING,
                        self::PROCESSING,
                        self::PROCESSING,
                        Carbon::now()->addMinutes($pem)->format('Y-m-d H:i:s')
                    );

                    //update payer status
                    $this->updatePayerStatus($row->id);

                    event(new PayerPairedToReceiver($pairRow));

                endforeach;
                //update receiver status
                $this->updateReceiverStatus($this->receiverModel->id);
            }
        });

    }


    protected function updatePayerStatus($payer_id)
    {
        $this->payer->updatePayerAfterPairing($payer_id);
    }


    protected function updateReceiverStatus($receiver_id)
    {
        $this->receiver->updateReceiverAfterPairing($receiver_id);
    }

####################################################
# Methods for Logs
####################################################

    private function receiverFoundQueue()
    {
        echo $this->now() . ': 1 receiver to be processed' . PHP_EOL;
        //event(ReceiverInQueue)
    }


    private function noReceiverInQueue()
    {
        echo $this->now() . ': no receiver in queue' . PHP_EOL;
        //event(NoReceiverInQueue)
    }

    private function noPayersInQueue()
    {
        echo $this->now() . ': no payers in queue' . PHP_EOL;
        //event(NoPayersInQueue)
    }

    private function onePayerInQueue()
    {
        echo $this->now() . ': 1 payer in queue' . PHP_EOL;
        //event(OnePayerInQueue)
    }

    private function now()
    {
        return Carbon::now()->format('Y-m-d H:i:s');
    }

}