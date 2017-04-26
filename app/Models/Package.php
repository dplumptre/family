<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = ['name', 'paying_amount', 'receiving_amount', 'description'];


    public function payers()
    {
        return $this->hasMany('App\Models\Payer', 'id');
    }

    public function receivers()
    {
        return $this->hasMany('App\Models\Receiver', 'id');
    }
    
}
