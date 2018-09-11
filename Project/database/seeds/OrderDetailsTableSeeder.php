<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            ['order_id' => '1','product_id' => '1','quantity' => '5','unit_price' => '15000'],
            ['order_id' => '1','product_id' => '2','quantity' => '1','unit_price' => '4000'],
            ['order_id' => '1','product_id' => '3','quantity' => '1','unit_price' => '20000'],
            ['order_id' => '2','product_id' => '1','quantity' => '5','unit_price' => '15000'],
            ['order_id' => '2','product_id' => '2','quantity' => '2','unit_price' => '4000'],
            ['order_id' => '2','product_id' => '3','quantity' => '2','unit_price' => '20000'],
            ['order_id' => '3','product_id' => '3','quantity' => '1','unit_price' => '20000'],
            ['order_id' => '4','product_id' => '4','quantity' => '1','unit_price' => '10000'],
            ['order_id' => '5','product_id' => '1','quantity' => '2','unit_price' => '15000'],
            ['order_id' => '6','product_id' => '3','quantity' => '1','unit_price' => '20000'],
            ['order_id' => '7','product_id' => '22','quantity' => '1','unit_price' => '20000'],
            ['order_id' => '7','product_id' => '23','quantity' => '1','unit_price' => '40000'],
            ['order_id' => '7','product_id' => '27','quantity' => '1','unit_price' => '10000'],
            ['order_id' => '8','product_id' => '8','quantity' => '1','unit_price' => '10000'],
            ['order_id' => '9','product_id' => '30','quantity' => '1','unit_price' => '60000'],
            ['order_id' => '10','product_id' => '15','quantity' => '1','unit_price' => '9000'],
            ['order_id' => '11','product_id' => '21','quantity' => '1','unit_price' => '20000'],
            ['order_id' => '11','product_id' => '26','quantity' => '2','unit_price' => '25000'],
            ['order_id' => '12','product_id' => '16','quantity' => '1','unit_price' => '11000'],
            ['order_id' => '13','product_id' => '28','quantity' => '1','unit_price' => '5000'],
            ['order_id' => '13','product_id' => '29','quantity' => '1','unit_price' => '9000'],
            ['order_id' => '14','product_id' => '12','quantity' => '7','unit_price' => '10000'],
            ['order_id' => '14','product_id' => '13','quantity' => '9','unit_price' => '8000'],
            ['order_id' => '14','product_id' => '14','quantity' => '10','unit_price' => '6000'],
            ['order_id' => '15','product_id' => '24','quantity' => '1','unit_price' => '5000'],
            ['order_id' => '16','product_id' => '11','quantity' => '1','unit_price' => '10000'],
            ['order_id' => '17','product_id' => '1','quantity' => '1','unit_price' => '15000'],
            ['order_id' => '17','product_id' => '5','quantity' => '1','unit_price' => '7000'],
            ['order_id' => '17','product_id' => '6','quantity' => '1','unit_price' => '5000'],
            ['order_id' => '18','product_id' => '4','quantity' => '1','unit_price' => '10000'],
            ['order_id' => '18','product_id' => '8','quantity' => '1','unit_price' => '10000'],
            ['order_id' => '18','product_id' => '23','quantity' => '1','unit_price' => '40000'],
            ['order_id' => '19','product_id' => '1','quantity' => '1','unit_price' => '15000'],
            ['order_id' => '19','product_id' => '2','quantity' => '1','unit_price' => '4000'],
            ['order_id' => '20','product_id' => '10','quantity' => '6','unit_price' => '13000']
        ]);
    }
}
