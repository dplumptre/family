<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
        protected  $table = 'role_user';
        
        
        
     public function receivers()
    {
        return $this->hasMany('App\Models\Receiver');
    }       
        
        
        
        
        
        
        
        
}