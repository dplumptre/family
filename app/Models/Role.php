<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name','type','description'];


    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
