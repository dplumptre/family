<?php
/**
 * Created by PhpStorm.
 * User: segun
 * Date: 4/19/2017
 * Time: 12:58 PM
 */

namespace App\Lib;


use App\Events\AutomatedAdminSlotted;
use App\Events\Payer\PayerMadeReceiver;
use App\Models\AutomatedReceiver;
use App\Models\Payer;
use App\Models\Receiver;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MakeReceiver
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
     * @var AutomatedReceiver
     */
    private $automatedReceiver;

    /**
     * MakeReceiver constructor.
     * @param Payer $payer
     * @param Receiver $receiver
     * @param AutomatedReceiver $automatedReceiver
     */
    public function __construct(Payer $payer, Receiver $receiver, AutomatedReceiver $automatedReceiver)
    {
        $this->payer = $payer;
        $this->receiver = $receiver;
        $this->completedPayers = $this->payer->completedPayers();
        $this->automatedReceiver = $automatedReceiver;
    }


    public function getCompletedPayers()
    {
        return $this->completedPayers;
    }


    /**
     *
     */
    public function processQueue()
    {
        $maxReceiversBeforeAdmin = (int) config('family.max_receivers_before_admin');

        if (count($this->completedPayers) > 0):

            foreach ($this->completedPayers as $completedPayer) {
                //get the number of receivers in line after the last admin receiver
                $receiversAfterLastAdmin = $this->receiver->normalReceiversCount();

                DB::transaction(function () use ($receiversAfterLastAdmin, $maxReceiversBeforeAdmin, $completedPayer) {

//                    if ($receiversAfterLastAdmin >= $maxReceiversBeforeAdmin) {
//                        //time for next admin.
//                        //get next admin
//                        $nextAdmin = $this->automatedReceiver->getNextAutomatedReceiver();
//                        $automatedReceiver = $this->receiver->create([
//                            'user_id' => $nextAdmin->user_id,
//                            'package_id' => $nextAdmin->package_id,
//                            'status' => 0,
//                        ]);
//                        //event to notify admin has been slotted
//                        $this->adminReceiverSlotted($nextAdmin->user_id);
//                        event(new AutomatedAdminSlotted($automatedReceiver));
//                    }
                    //process the normal receiver.
                    //$this->receiver->makeCompletedPayerReceiver($completedPayer)
                    $newReceiver = $this->receiver->create([
                        'user_id' => $completedPayer->user_id,
                        'package_id' => $completedPayer->package_id,
                        'status' => 0,
                    ]);
                    //update the payer row set finished=1 for payer so we won't choose him again
                    $completedPayer->finishPayer();
                    //event to notify payer has become receiver
                    $this->payerNowReceiver($completedPayer->id);
                    event(new PayerMadeReceiver(new $newReceiver));
                });
            }
        else :
            $this->noCompletedPayer();
        endif;


    }

private
function adminReceiverSlotted($id)
{
    return $this->now() . ": Admin now receiver___$id" . PHP_EOL;
}

private
function payerNowReceiver($id)
{
    echo $this->now() . ": Payer now receiver___$id" . PHP_EOL;
}

private
function noCompletedPayer()
{
    echo $this->now() . ': No completed payer' . PHP_EOL;
}

private
function now()
{
    return Carbon::now()->format("Y-m-d__H:i:s");
}
}