<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        //create admin user
        $admin = DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password' =>Hash::make('12345678')
        ]);
        if($admin){
            $user = User::where('email','admin@gmail.com')->first();
            $user->roles()->attach([1,2,3]);

        }

        //create retail user
        $retail = DB::table('users')->insert([
            'name'=>'retail',
            'email'=>'retail@gmail.com',
            'password' =>Hash::make('12345678')
        ]);
        if($retail){
            $user = User::where('email','retail@gmail.com')->first();
            $user->roles()->attach([2]);

        }

         //create wholesaler user
         $wholesaler = DB::table('users')->insert([
            'name'=>'wholesaler',
            'email'=>'wholesaler@gmail.com',
            'password' =>Hash::make('12345678')
        ]);
        if($wholesaler){
            $user = User::where('email','wholesaler@gmail.com')->first();
            $user->roles()->attach([3]);

        }
        */

    }
}
