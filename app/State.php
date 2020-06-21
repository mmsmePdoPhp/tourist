<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Get the user that owns the state.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
