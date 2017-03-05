<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{


    /**
     * created_at + 15days = today
     */
    public function getUsersTobePairedToday(){}
}
