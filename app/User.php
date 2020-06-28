<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    /**
     * Get the state associated with the user.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }






    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'location_id',
        'address',
        'postCode',
        'fixednumber',
        'phone',
        'companyName',
        'email',
        'password',
        'nationalCard',
        'contractImage',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }


    /**
     * check is user admin
     */
    public static function getIsAdminAttribute(){
        $result = Auth::user()->roles->filter(function($value, $key){
            if($value->name ==='admin'){
                return true;
            }
        });
        if(count($result) === 0){
            return false;
        }else{
            if($result[0]->name =='admin'){
                return true;
            }else{
                return false;
            }
        }
    }



    /**
     * check is user retail
     */
    public static function getIsRetailAttribute(){
        $result = Auth::user()->roles->filter(function($value, $key){
            if($value->name ==='retail'){
                return true;
            }
        });
        if(count($result) === 0){
            return false;
        }else{
            if($result[0]->name =='retail'){
                return true;
            }else{
                return false;
            }
        }
    }

 /**
     * check is user wholesaler
     */
    public static function getIsWholesalerAttribute(){
        $result = Auth::user()->roles->filter(function($value, $key){
            if($value->name ==='wholesaler'){
                return true;
            }
        });
        if(count($result) === 0){
            return false;
        }else{
            if($result[0]->name =='wholesaler'){
                return true;
            }else{
                return false;
            }
        }
    }

}
