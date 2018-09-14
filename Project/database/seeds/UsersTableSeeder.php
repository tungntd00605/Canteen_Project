<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        App\User::create([
        	'id'=>1,
            'name'=> 'Admin',
            'email'=> 'FPTcanteen@gmail.com',
            'password'=> bcrypt('canteen2018')
        ]);
    }
}
