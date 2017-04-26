<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutomatedReceiver extends Model
{
    protected $table = 'automated_receivers';
    protected $fillable = ['user_id', 'package_id', 'position'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function getAll()
    {
        return $this->select(['id'])->get();
    }


    public function getTotalPosition()
    {
        return $this->all()->count();
    }


    protected function getFirstPosition()
    {
        return 1;
    }


    public function getNextAutomatedReceiver()
    {
        $next = $this->getFirstPerson();
        $this->updatePosition();
        return $next;
    }


    private function updatePosition()
    {
        //get all accounts
        $all = $this->orderBy('position')->get();

        $firstPosition = $this->getFirstPosition();
        $lastPosition = $all->count();

        foreach ( $all as $row )
        {
            if ( $row->position == $lastPosition )
            {
                $row->position = $firstPosition;
                $row->save();
            } else{
                $row->increment('position');
            }
        }
    }


    public function getFirstPerson()
    {
        return $this->where('position', $this->getFirstPosition())->first();
    }


    public function getLastPerson()
    {
        return $this->where('position', $this->getTotalPosition())->first();
    }
}
