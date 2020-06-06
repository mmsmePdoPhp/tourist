<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //administrator full permission
        $role = DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        
        //normall user
        $role = DB::table('roles')->insert([
            'name' => 'user'
        ]);


        //user just add content to website
        $role = DB::table('roles')->insert([
            'name' => 'writer'
        ]);
    }
}
