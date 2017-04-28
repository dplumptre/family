<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Receiver extends Model
{
    protected $table = 'receivers';
    protected $fillable = ['user_id', 'package_id', 'status'];

    const PENDING = 0;
    const PROCESSING = 1;
    const COMPLETED = 2;
    protected $guarded = ['id'];


    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function pairs()
    {
        return $this->hasMany(Pair::class, 'receiver_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function packages()
    {
        return $this->belongsTo('App\Models\Package', 'package_id');
    }

    
    
    /**
     * created_at + 15days = today
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGetNextReceiverInQueue($query)
    {
        /* you can pick this up anywhere like this
         * dd(Receiver::GetNextUsersInQueue());
         * checks for the oldest and just one row
         */
        return $query->where('status', self::PENDING)
            ->oldest()
            ->limit(1)
            ->first();
    }


    public function scopeUpdateReceiverAfterPairing($query, $receiver_id)
    {
        /* updates the status of the receiver that was paired from 0 to 1
        *  dd(\App\Models\Payer::UpdateReceiverAfterBeingPaired(2));
        *  it returns true
        */
        return $query->where('id', $receiver_id)->update(['status' => self::PROCESSING]);
    }


    public function scopeGetMyReceiverIdArrayThatHasBeenPaired($query, $user_id)
    {
        $r = $query->where('user_id', $user_id)
            ->where('status', self::PROCESSING)
            ->pluck('id');
        return $r;
    }


    public function normalReceiversCount()
    {
        $last_admin = $this->select()
            ->whereIn('user_id', config('family.admin_receivers'))
            ->latest()
            ->limit(1)
            //->toSql()
            ->first()->id
        ;
        $last_receiver = $this->select()->latest()->first()->id;

        $counter = $this->where([
            ['id', '>', $last_admin],
            ['id', '<=', $last_receiver]
        ])->get();

        return $counter->count();
    }


}
