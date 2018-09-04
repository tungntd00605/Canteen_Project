<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
                'name'=>'Đồ Ăn',
                'description'=>'Các loại đồ ăn nhanh',
                'thumbnail'=>'https://www.circlek.com.vn/wp-content/uploads/2015/11/FOOD.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Đồ Uống',
                'description'=>'Các loại đồ uống đóng chai',
                'thumbnail'=>'http://media.tinmoi.vn/2011/12/14/67_10_1323853772_43_nguoiduatin-nh1.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Khác',
                'description'=>'Đồ tạp hóa',
                'thumbnail'=>'https://hstatic.net/392/1000219392/file/img-product-2000691.jpg'
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
