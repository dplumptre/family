<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newz extends Model
{
    protected $table = 'news';

    protected $guarded = ['id'];
    
    
    
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
