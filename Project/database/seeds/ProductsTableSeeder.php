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
                'name'=> 'Caffe sữa đá',
                'categoryId'=>2,
                'thumbnail'=>'http://www.une-journee-a-paris.com/wp-content/uploads/2016/12/iced-milk-vietnam.jpg',
                'price'=>20000,
                'description'=>'Caffe nguyên chất cùng sữa đặc thơm ngay ngất.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>4,
                'name'=> 'Bánh Mì Trứng',
                'categoryId'=>1,
                'thumbnail'=>'https://images.foody.vn/res/g28/271363/prof/s640x400/foody-mobile-3-jpg-394-636092713645207184.jpg',
                'price'=>10000,
                'description'=>'Bánh mì kẹp trứng chiên thơm ngon.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>5,
                'name'=> 'Snack bắp ngọt',
                'categoryId'=>1,
                'thumbnail'=>'http://baobiduckien.com/wp-content/uploads/2016/04/bao-bi-bim-bim.jpg',
                'price'=>7000,
                'description'=>'Snack bắp ngọt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>6,
                'name'=> 'Oishi snack tôm cay',
                'categoryId'=>1,
                'thumbnail'=>'http://baobiduckien.com/wp-content/uploads/2016/04/bao-bi-bim-bim.jpg',
                'price'=>5000,
                'description'=>'Snack Oishi tôm cay ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>7,
                'name'=> 'Bánh ngọt',
                'categoryId'=>1,
                'thumbnail'=>'https://images.foody.vn/res/g24/233268/prof/s576x330/foody-mobile-tiramisu-1-155034904-273-635984956616966331.jpg',
                'price'=>15000,
                'description'=>'Bánh ngọt pháp , vị socola',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>8,
                'name'=> 'Nước ngọt chanh muối',
                'categoryId'=>2,
                'thumbnail'=>'https://product.hstatic.net/1000074072/product/icy-chanh-mu_i-min.png',
                'price'=>10000,
                'description'=>'nước chanh muối khoáng chất, giải nhiệt.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>9,
                'name'=> 'Caffe sữa ',
                'categoryId'=>2,
                'thumbnail'=>'https://cdn.lotte.vn/media/catalog/product/cache/1/image/265x312/beff4985b56e3afdbeabfc89641a4582/8/9/8936079140014_1_1.jpg',
                'price'=>12000,
                'description'=>'Cafe lon sữa đá,hương vị thơm ngon.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>10,
                'name'=> 'Nước chanh leo',
                'categoryId'=>2,
                'thumbnail'=>'http://ngoaio.com.vn/wp-content/uploads/2017/06/chanh-leo.jpg',
                'price'=>13000,
                'description'=>'Nước chanh leo nguyên chất.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>11,
                'name'=> 'Coca cola',
                'categoryId'=>2,
                'thumbnail'=>'https://media.static-adayroi.com/sys_master/h45/h89/9523811254302.jpg',
                'price'=>10000,
                'description'=>'Coca cola',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>12,
                'name'=> 'Pepsi',
                'categoryId'=>2,
                'thumbnail'=>'https://images-na.ssl-images-amazon.com/images/I/61kFbWto%2BOL._SY355_.jpg',
                'price'=>10000,
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
                'name'=> 'Bánh mì trứng xúc xích',
                'categoryId'=>1,
                'thumbnail'=>'https://images.foody.vn/res/g70/692135/prof/s576x330/foody-mobile-foody-xuc-xich-duc-v-150-636426500961170440.jpg',
                'price'=>20000,
                'description'=>'Thuốc lá Vinataba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>22,
                'name'=> 'Thuốc lá vina',
                'categoryId'=>3,
                'thumbnail'=>'https://trixie.com.vn/media/images/product/19642058/Thuoc-la-vinataba.jpg',
                'price'=>20000,
                'description'=>'Thuốc lá Vinataba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>23,
                'name'=> 'Thuốc lá ba số',
                'categoryId'=>3,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQb2sKdldmSczx_Q1_g5LlWS1rVMSNyiINzTJHbE8k9WmTGQhj',
                'price'=>40000,
                'description'=>'Thuốc lá đắt tiền',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>24,
                'name'=> 'Bánh nướng',
                'categoryId'=>1,
                'thumbnail'=>'https://cdn.daylambanh.edu.vn/images/kienthuckynang/banh-ngot-muffin.jpg',
                'price'=>5000,
                'description'=>'bánh ngọt ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>25,
                'name'=> 'Khoai tây chiên',
                'categoryId'=>1,
                'thumbnail'=>'https://www.bepgiadinh.com/wp-content/uploads/2013/03/12/khoai-tay-chien-bo.jpg',
                'price'=>10000,
                'description'=>'Khoai tây chiên giòn,',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>26,
                'name'=> 'Gà Rán',
                'categoryId'=>1,
                'thumbnail'=>'https://jollibee.com.vn/uploads/dish/0669ef5f33f726-2miengga08.png',
                'price'=>25000,
                'description'=>'Đùi gà, cánh gà, thịt gà chiên bột ròn thơm ngon',
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
                'name'=> 'Bút bi',
                'categoryId'=>3,
                'thumbnail'=>'http://www.vpphongha.com.vn/images/products/2016/06/29/original/but-bi-go-hh-807-1467198023.jpg',
                'price'=>5000,
                'description'=>'Bút bi, có tất cả các loại',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>29,
                'name'=> 'Vở viết',
                'categoryId'=>3,
                'thumbnail'=>'http://www.hoangcuong.online/images/detailed/7/image003-3.jpg?t=1468746921',
                'price'=>9000,
                'description'=>'Vở dùng giấy chất lượng tốt',
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
