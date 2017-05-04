<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisabledUser extends Model
{
    protected $table = 'disabled_users';
    protected $fillable = ['user_id', 'reason'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }




    public static function check($id)
    {
        return self::where('user_id', $id)->first();
    }
}
