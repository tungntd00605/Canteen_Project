<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=> 'Mỳ tôm trứng',
                'categoryId'=>1,
                'thumbnail'=>'http://caynhalavuon.net/wp-content/uploads/2016/08/my-tom.jpg',
                'price'=>150000,
                'description'=>'Mỳ tôm trứng chua cay',

            ],
            [
                'id'=>2,
                'name'=> 'Trà đá',
                'categoryId'=>2,
                'thumbnail'=>'http://static.tapchitaichinh.vn/Uploaded/phamha/2015_12_15/tra-da_WRKD.JPG',
                'price'=>4000,
                'description'=>'Trà đá phục vụ tận nơi',

            ],
            [
                'id'=>3,
                'name'=> 'Bật lửa',
                'categoryId'=>3,
                'thumbnail'=>'http://media.tapchigiaothong.vn/files/minh.phuong/2015/07/06/batluaga_cg1-tc5-0928.jpg',
                'price'=>8000,
                'description'=>'Bật lửa dùng một lần    ',

            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
