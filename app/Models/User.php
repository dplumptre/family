<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function userDetail()
    {
        return $this->hasOne(UserDetail::class);
    }


    public function payers()
    {
        return $this->hasMany('App\Models\Payer');
    }


    public function receivers()
    {
        return $this->hasMany('App\Models\Receiver');
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function hasAnyRole($roles)
    {
        if (is_array($roles)):
            foreach ($roles as $role):
                if ($this->hasRole($role)):
                    return true;
                endif;
            endforeach;
        else:
            if ($this->hasRole($roles)):
                return true;
            endif;
        endif;
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('type', $role)->first())
            return true;
        return false;
    }


    public function scopeGetUserByReceiverId($query, $receiver_id)
    {
        $p = $query->where('user_id', $user_id)
            ->where('status', self::PROCESSING)
            ->pluck('id');
    }


}
