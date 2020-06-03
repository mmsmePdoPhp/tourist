<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    /**
     * Get the car's owner.
     */
    public function carOwner()
    {
        return $this->hasOneThrough('App\Owner', 'App\Car');
    }


    /**
     * Get all of the owners for the mechnic.
     */
    public function owners()
    {
        return $this->hasManyThrough('App\Owner', 'App\Car');
    }
}
