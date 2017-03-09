<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{

    const PENDING = 0;
    const PROCESSING = 1;
    const COMPLETED = 2;
    protected $guarded = ['id'];

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
            //->toSql()
            ->first()
            ;
    }


    public function scopeUpdateReceiverAfterPairing($query, $receiver_id)
    {
        /* updates the status of the receiver that was paired from 0 to 1
        *  dd(\App\Models\Payer::UpdateReceiverAfterBeingPaired(2));
        *  it returns true
        */
        return $query->where('id', $receiver_id)->update(['status' => self::PROCESSING]);
    }
}
