<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{

     protected $guarded = ['id'];

    /**
     * created_at + 15days = today
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    
    
     public function scopeGetNextUsersInQueue($query){   
      /* you can pick this up anywhere like this
       * dd(Receiver::GetNextUsersInQueue());
       * checks for the oldest and just one row
       */   
       return $query->where('status', 0)->oldest()->first();
         
     }
    

 
    
    
}
