<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * Get the user that owns the city.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
