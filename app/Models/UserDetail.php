<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected  $table = 'user_details';
    protected $fillable = ['firstname', 'lastname',  'phone', 'address', 'bank_name', 'account_name', 'account_number', 'account_type', 'bank_branch'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
