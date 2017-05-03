<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 5/2/2017
 * Time: 4:40 PM
 */

namespace App\Lib\Pairing;


use App\Events\Payer\PayerPairedToReceiver;
use App\Models\Package;
use App\Models\Pair;
use App\Models\Payer;
use App\Models\Receiver;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DoPairing
{
    const PENDING = 0;
    const PROCESSING = 1;
    const COMPLETED = 2;

    protected $receivers;
    protected $payers;
    /**
     * @var Receiver
     */
    private $receiver;
    /**
     * @var Payer
     */
    private $payer;
    /**
     * @var Pair
     */
    private $pair;


    /**
     * DoPairing constructor.
     * @param Receiver $receiver
     * @param Payer $payer
     * @param Pair $pair
     */
    public function __construct(Receiver $receiver, Payer $payer, Pair $pair)
    {
        $this->receiver = $receiver;
        $this->payer = $payer;
        $this->pair = $pair;
        $this->receivers = $receiver->TakeAllPendingReceivers();
    }


    private function TakeNextPayers($package_id, $count = 2)
    {
        return $this->payer->TakeNextPayersInQueue($package_id, $count);
    }


    public function process()
    {
        if (count($this->receivers) > 0) {
            //we have receivers. do pairing.

            foreach ($this->receivers as $receiver) {
                $this->receiverFound();
                //see if we have pairs.
                $payers = $this->TakeNextPayers($receiver->package_id, 2);
                //dd($payers, get_class_methods(new \Illuminate\Database\Eloquent\Collection()));
                if ($payers->count() == 1) {
                    $this->onePayerInQueue();
                    break;
                }

                if ($payers->count() == 0) {
                    $this->noPayersInQueue();
                    break;
                }


                //if the pairs are 2, go on.
                if ($payers->count() == 2) {

                    DB::transaction(function () use ($payers, $receiver) {
                        //prepare to pair.
                        $amount = Package::find($receiver->package_id)->paying_amount;
                        $elapse = (int)config('family.pair_expire_minutes');

                        foreach ($payers as $payer) {
                            $pairRow = $this->pair->PairPayersToReceiver(
                                $payer->id,
                                $receiver->id,
                                $amount,
                                self::PROCESSING,
                                self::PROCESSING,
                                self::PROCESSING,
                                Carbon::now()->addMinutes($elapse)->format('Y-m-d H:i:s')
                            );
                            //mark payer as done
                            $payer->UpdatePairedPayer(self::PROCESSING);
                            event(new PayerPairedToReceiver($pairRow));
                        }
                        $receiver->UpdatePairStatus(self::PROCESSING);
                    });
                };

            }
        } else {
            $this->noReceiverInQueue();
        }
    }

#####################################################
# LOG METHODS #
#####################################################
    private function receiverFound()
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
    }


    private function now()
    {
        return Carbon::now()->format('Y-m-d H:i:s');
    }
}