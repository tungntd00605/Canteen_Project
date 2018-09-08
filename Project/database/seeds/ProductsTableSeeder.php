<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=> 'Mỳ tôm trứng',
                'categoryId'=>1,
                'thumbnail'=>'http://caynhalavuon.net/wp-content/uploads/2016/08/my-tom.jpg',
                'price'=>150000,
                'description'=>'Mỳ tôm trứng chua cay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>2,
                'name'=> 'Trà đá',
                'categoryId'=>2,
                'thumbnail'=>'http://static.tapchitaichinh.vn/Uploaded/phamha/2015_12_15/tra-da_WRKD.JPG',
                'price'=>4000,
                'description'=>'Trà đá phục vụ tận nơi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>3,
                'name'=> 'Bật lửa',
                'categoryId'=>3,
                'thumbnail'=>'http://media.tapchigiaothong.vn/files/minh.phuong/2015/07/06/batluaga_cg1-tc5-0928.jpg',
                'price'=>8000,
                'description'=>'Bật lửa dùng một lần',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>4,
                'name'=> 'Mỳ tôm chua cay',
                'categoryId'=>1,
                'thumbnail'=>'https://acecookvietnam.vn/wp-content/uploads/2017/07/HH-TOM-591X438.png',
                'price'=>5000,
                'description'=>'Mỳ tôm chua cay Vina Acecook',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>5,
                'name'=> 'Snack bắp ngọt',
                'categoryId'=>1,
                'thumbnail'=>'http://baobiduckien.com/wp-content/uploads/2016/04/bao-bi-bim-bim.jpg',
                'price'=>13000,
                'description'=>'Snack bắp ngọt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>6,
                'name'=> 'Oishi snack tôm cay',
                'categoryId'=>1,
                'thumbnail'=>'http://baobiduckien.com/wp-content/uploads/2016/04/bao-bi-bim-bim.jpg',
                'price'=>8000,
                'description'=>'Snack Oishi tôm cay ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>7,
                'name'=> 'Swing',
                'categoryId'=>1,
                'thumbnail'=>'http://vpo.vn/wp-content/uploads/2016/09/00000506.png',
                'price'=>15000,
                'description'=>'Snack Swing vị bít tết kiểu New York',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>8,
                'name'=> 'Oishi snack phô mai',
                'categoryId'=>1,
                'thumbnail'=>'http://www.12gmart.com/image/data/product/Bim%20Bim/Oishi/Bim%20bim%20Oishi%20pho%20m%C3%A1t%20mi%E1%BA%BFng%20g%C3%B3i%2045gr.jpg',
                'price'=>11000,
                'description'=>'Snack Oishi phô mai',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>9,
                'name'=> 'Oishi snack tôm cay',
                'categoryId'=>1,
                'thumbnail'=>'https://media.static-adayroi.com/sys_master/hb4/hd5/9614005731358.jpg',
                'price'=>8000,
                'description'=>'Snack Oishi tôm cay ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>10,
                'name'=> 'Oishi snack hành',
                'categoryId'=>1,
                'thumbnail'=>'http://www.12gmart.com/image/data/product/Bim%20Bim/Oishi/Bim%20bim%20Oishi%20snack%20h%C3%A0nh%20g%C3%B3i%2045gr.jpg',
                'price'=>13000,
                'description'=>'Snack Oishi Onion Rings',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>11,
                'name'=> 'Coca cola',
                'categoryId'=>2,
                'thumbnail'=>'https://media.static-adayroi.com/sys_master/h45/h89/9523811254302.jpg',
                'price'=>7000,
                'description'=>'Coca cola',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>12,
                'name'=> 'Pepsi',
                'categoryId'=>2,
                'thumbnail'=>'https://images-na.ssl-images-amazon.com/images/I/61kFbWto%2BOL._SY355_.jpg',
                'price'=>7000,
                'description'=>'Pepsi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>13,
                'name'=> 'Fanta',
                'categoryId'=>2,
                'thumbnail'=>'https://www.britishcornershop.co.uk/img/large/SGN0316.jpg',
                'price'=>8000,
                'description'=>'Fanta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>14,
                'name'=> 'Sprite',
                'categoryId'=>2,
                'thumbnail'=>'https://cdn.shopify.com/s/files/1/1335/2603/products/sprite_330.jpg?v=1519188966',
                'price'=>6000,
                'description'=>'Sprite',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>15,
                'name'=> 'Wake up 247',
                'categoryId'=>2,
                'thumbnail'=>'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/6/9/69421.u2409.d20160727.t115938.jpg',
                'price'=>9000,
                'description'=>'Wake up 247',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>16,
                'name'=> 'Mountain Dew',
                'categoryId'=>2,
                'thumbnail'=>'https://cdn.thomasridley.co.uk/pub/media/catalog/product/cache/4504122c228d4b8db4d9e9cb7aac45db/0/0/00859.jpg',
                'price'=>11000,
                'description'=>'Mountain Dew',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>17,
                'name'=> '7up',
                'categoryId'=>2,
                'thumbnail'=>'https://jlbrooks.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/d/-/d-7up-can_1.jpg',
                'price'=>8000,
                'description'=>'7up',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>18,
                'name'=> 'Trà bí đao',
                'categoryId'=>2,
                'thumbnail'=>'https://img.websosanh.vn/v2/users/root_product/images/u0ymwov8mnpgd.jpg',
                'price'=>9000,
                'description'=>'Trà bí đao Wonderfarm',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>19,
                'name'=> 'Minute Maid',
                'categoryId'=>2,
                'thumbnail'=>'https://content.etilize.com/2000/1032527964.jpg',
                'price'=>6000,
                'description'=>'Minute Maid',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>20,
                'name'=> 'Nước Yến',
                'categoryId'=>2,
                'thumbnail'=>'https://img.websosanh.vn/v2/users/root_product/images/9g3o7MMVo41A.jpg',
                'price'=>8000,
                'description'=>'Nước Yến',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>21,
                'name'=> 'Thuốc lá Vinataba',
                'categoryId'=>3,
                'thumbnail'=>'https://trixie.com.vn/media/images/product/19642058/Thuoc-la-vinataba.jpg',
                'price'=>15000,
                'description'=>'Thuốc lá Vinataba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>22,
                'name'=> 'Bộ búp bê Barbie',
                'categoryId'=>3,
                'thumbnail'=>'https://khuyenmaikiengiang.com/images/contentsanpham/2457/1-bo-do-choi-bup-be-barbie.jpg',
                'price'=>99000,
                'description'=>'Bộ búp bê 2 công chúa có khớp Barbie nhiều phụ kiện đẹp lung linh',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>23,
                'name'=> 'Thú bông người nhện Spiderman',
                'categoryId'=>3,
                'thumbnail'=>'https://media3.scdn.vn/img2/2018/5_14/TPhZpC_simg_de2fe0_500x500_maxb.jpg',
                'price'=>48000,
                'description'=>'NGƯỜI NHỆN SPIDER MAN 55CM THÚ BÔNG NGƯỜI NHỆN GẤU BÔNG NGƯỜI NHỆN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>24,
                'name'=> 'Vở Campus',
                'categoryId'=>3,
                'thumbnail'=>'http://vinata.vn/hinhanh/sanpham/vo-gift-nbbgif80.jpg',
                'price'=>9000,
                'description'=>'Vở campus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>25,
                'name'=> 'Nhãn vở Campus',
                'categoryId'=>3,
                'thumbnail'=>'http://cdn.nhanh.vn/cdn/store/3969/ps/20160425/2541201614141_10405359_778816505496105_3730373528057651615_n_960x720.jpg',
                'price'=>8000,
                'description'=>'Nhãn vở Canpus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>26,
                'name'=> 'Bút bi Thiên Long',
                'categoryId'=>3,
                'thumbnail'=>'https://product.hstatic.net/1000230347/product/but_bi_thien_long_-_flexoffice_fo-039__17__large.jpg',
                'price'=>5000,
                'description'=>'Bút bi Thiên Long',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>27,
                'name'=> 'Thuốc lá Thăng Long',
                'categoryId'=>3,
                'thumbnail'=>'https://trixie.com.vn/media/images/product/19642058/Thuoc-la-vinataba.jpg',
                'price'=>10000,
                'description'=>'Thuốc lá Thăng Long',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>28,
                'name'=> 'Bộ thước kẻ học sinh',
                'categoryId'=>3,
                'thumbnail'=>'https://nhanvan.vn/images/detailed/10/No160.png',
                'price'=>11000,
                'description'=>'Bộ thước kẻ học sinh',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>29,
                'name'=> 'Bộ lắp ghép mô hình kĩ thuật lớp 5',
                'categoryId'=>3,
                'thumbnail'=>'http://cdn.nhanh.vn/cdn/store/3969/ps/20160527/27332016113318_13289001_1584165815247128_804510300_n_960x575.jpg',
                'price'=>9000,
                'description'=>'Bộ lắp ghép mô hình kĩ thuật lớp 5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>30,
                'name'=> 'Ba lô chống trộm',
                'categoryId'=>3,
                'thumbnail'=>'https://file.hstatic.net/1000032207/file/balo-chong-trom-kaka-8_grande.jpg',
                'price'=>60000,
                'description'=>'Ba lô chống trộm',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
