<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payer extends Model
{
    //
    
    
    protected  $table = 'payers';
    protected $fillable = ['status','pairing_result','user_id','package_id'];
    
       
        public function users()
    {
        return $this->belongsTo('App\Models\User');
    } 
    
    
           public function packages()
    {
        return $this->belongsTo('App\Models\Package','package_id');
    }  
    
    
    
    public function scopeGetNextPayerInQueue($query,$package_id)
    {   
    /* you can pick this up anywhere like this
    * dd(\App\Models\Payer::GetNextPayerInQueue(2));
    * checks for the oldest and just one row
    */   
    return $query->where('status', 0)
            ->where('package_id',$package_id)->oldest()->limit(2)->get();

    } 

  
    

    
    
    
    
    
    
    
    
    
    
    
    
}
