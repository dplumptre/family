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
    
}
