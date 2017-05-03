<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pair extends Model
{
    //

    protected $table = 'pairs';

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at', 'elapse_time'];


    public function payer()
    {
        return $this->belongsTo(Payer::class, 'payer_id');
    }
    
    
        public function receivers()
    {
        return $this->belongsTo(Receiver::class, 'receiver_id','payer_id','id');
    }


    public function receiver()
    {
        return $this->belongsTo(Receiver::class);
    }

    public function scopePairReceiverToPayer($query, $payer_id, $receiver_id, $amount, $payer_status, $receiver_status, $status, $elapse_time)
    {
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


    public static function elapsedPairRows()
    {
        return self::select()
            ->where(DB::raw("TIMESTAMPDIFF(MINUTE, NOW(), elapse_time)"), '<=', 0)
            ->where('payer_status', 1)
            ->where('receiver_status', 1)
            ->with('payer')
            //->toSql()
            ->get()
            ;
    }
    
    
       public static function completedRecRows()
    {
        return self::select()
            ->where('receiver_status', 2)
            //->toSql()
            ->get()
            ;
    }

    public function PairPayersToReceiver
    ($payer_id, $receiver_id, $amount, $payer_status, $receiver_status, $status, $elapse_time)
    {
        return $this->create([
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


}
