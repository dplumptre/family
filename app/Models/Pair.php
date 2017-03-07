<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    //
    
     protected  $table = 'pairs';   
    
     protected $guarded = ['id'];
     
     
     
     
    public function scopePairReceiverToPayment($query,$payer_id,$receiver_id)
    {   
    /* 
    *   example    dd(\App\Models\Pair::PairReceiverToPayment(10,2));
    * 
    */   
    return $query->create([
        
       'payer_id' => $payer_id,
       'receiver_id' =>$receiver_id,
        'image'=> 'example.jpg',
        'amount'=> 5000,
        'payer_status'=>0,
        'receiver_status'=> 0,
        'status'=> 0,
        'elapse_time'=> date("Y-m-d H:i:s")
        
    ]);
    
    
    
    
    
    
    

    }      
     
    
}
