<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payer extends Model
{
    //

    const PENDING = 0;
    const PROCESSING = 1;
    const COMPLETED = 2;

    protected $table = 'payers';
    protected $fillable = ['status', 'pairing_result', 'user_id', 'package_id'];


    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function packages()
    {
        return $this->belongsTo('App\Models\Package', 'package_id');
    }


    public function scopeGetNextPayersInQueue($query, $package_id)
    {
        /* you can pick this up anywhere like this
        * dd(\App\Models\Payer::GetNextPayerInQueue(2));
        * checks for the oldest and just one row
        */
        return $query->where('status', self::PENDING)
            ->where('package_id', $package_id)->oldest()->limit(2)->get();

    }


    public function scopeUpdatePayerAfterPairing($query, $payer_id)
    {
        /* updates the status of the payer that was paired from 0 to 1
        *  dd(\App\Models\Payer::UpdatePayerAfterBeingPaired(10));
        *  it returns true
        */
        return $query->where('id', $payer_id)->update(['status' => self::PROCESSING]);
    }


}
