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


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function pairs()
    {
        return $this->hasMany(Pair::class, 'payer_id', 'id');
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


    public function scopeGetMyPayerIdArrayThatHasBeenPaired($query, $user_id)
    {

        $p = $query->where('user_id', $user_id)
            ->where('status', self::PROCESSING)
            ->pluck('id');
        return $p;
    }


    public static function findNextPayer($package_id)
    {
        return self::select()
            ->where('package_id', $package_id)
            ->where('status', self::PENDING)
            ->where('pairing_result', self::PENDING)
            ->oldest()
            //->toSql()
            ->first()
        ;
    }


    public static function updateFailedPairingStatus($id)
    {
        if (is_array($id)) {
            foreach ($id as $_id) {
                self::where('id', $id)->update(['pairing_result' => 1]);
            }
            return;
        }
        self::where('id', $id)->update(['pairing_result' => 1]);
        return;
    }


}
