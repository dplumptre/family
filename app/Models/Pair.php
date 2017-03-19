<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    //

    protected $table = 'pairs';

    protected $guarded = ['id'];


    public function scopePairReceiverToPayer($query, $payer_id, $receiver_id, $amount, $payer_status, $receiver_status, $status, $elapse_time)
    {
        /*
        *   example    dd(\App\Models\Pair::PairReceiverToPayment(10,2));
        *
        */
        return $query->create([

            'payer_id' => $payer_id,
            'receiver_id' => $receiver_id,
            'image' => 'example.jpg',
            'amount' => $amount,
            'payer_status' => $payer_status,
            'receiver_status' => $receiver_status,
            'status' => $status,
            'elapse_time' => $elapse_time

        ]);


    }


    public function scopeGetMyPairByPayerId($query, $arrayOfPayer)
    {

        $p = $query->whereIn('payer_id', $arrayOfPayer)
            ->get();

        return $p;
    }


    public function scopeGetMyPairByReceiverId($query, $arrayOfReceiver)
    {

        $r = $query->whereIn('receiver_id', $arrayOfReceiver)
            ->get();

        return $r;
    }


}
