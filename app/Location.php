<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * Get the state associated with the user.
     */
    public function user()
    {
        return $this->hasOne(User::class);
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }
}
