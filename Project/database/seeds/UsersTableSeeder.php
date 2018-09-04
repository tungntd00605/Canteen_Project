<?php

use Illuminate\Database\Seeder;

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
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=> 'Admin',
                'email'=> 'FPTcanteen@gmail.com',
                'password'=> 'canteen2018',
            ],
        ]);
    }
}
