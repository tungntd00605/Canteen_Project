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
                'price'=>15000,
                'description'=>'Mỳ tôm trứng chua cay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>2,
                'name'=> 'Trà đá',
                'categoryId'=>2,
                'thumbnail'=>'http://static.tapchitaichinh.vn/Uploaded/phamha/2015_12_15/tra-da_WRKD.JPG',
                'price'=>3000,
                'description'=>'Trà đá phục vụ tận nơi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>3,
                'name'=> 'Nhân trần',
                'categoryId'=>2,
                'thumbnail'=>'http://admin.247shop.vn//Images/images/nhan-tran-100g-goi%20(2).jpg',
                'price'=>3000,
                'description'=>'Dành cho những ai không thích trà đá',
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
                'thumbnail'=>'http://1.bp.blogspot.com/--KuSAmlToZw/V4ZdgnoGuvI/AAAAAAAAA38/A60cTF4OdXwADBbeEOdtmMfzWFbqhDhKwCK4B/s1600/1b6504a95ed9a9d083820b25c3104a6d.png',
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
                'name'=> 'Nước chanh muối',
                'categoryId'=>2,
                'thumbnail'=>'https://product.hstatic.net/1000074072/product/icy-chanh-mu_i-min.png',
                'price'=>10000,
                'description'=>'nước chanh muối khoáng chất, giải nhiệt.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>9,
                'name'=> 'Caffe sữa',
                'categoryId'=>2,
                'thumbnail'=>'https://cdn.lotte.vn/media/catalog/product/cache/1/image/265x312/beff4985b56e3afdbeabfc89641a4582/8/9/8936079140014_1_1.jpg',
                'price'=>15000,
                'description'=>'Cafe lon sữa đá,hương vị thơm ngon.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>10,
                'name'=> 'Nước chanh leo',
                'categoryId'=>2,
                'thumbnail'=>'http://ngoaio.com.vn/wp-content/uploads/2017/06/chanh-leo.jpg',
                'price'=>15000,
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
                'price'=>10000,
                'description'=>'Fanta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>14,
                'name'=> 'Sprite',
                'categoryId'=>2,
                'thumbnail'=>'https://cdn.shopify.com/s/files/1/1335/2603/products/sprite_330.jpg?v=1519188966',
                'price'=>10000,
                'description'=>'Sprite',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>15,
                'name'=> 'Wake up 247',
                'categoryId'=>2,
                'thumbnail'=>'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/6/9/69421.u2409.d20160727.t115938.jpg',
                'price'=>10000,
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
                'price'=>10000,
                'description'=>'7up',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>18,
                'name'=> 'Trà bí đao',
                'categoryId'=>2,
                'thumbnail'=>'https://img.websosanh.vn/v2/users/root_product/images/u0ymwov8mnpgd.jpg',
                'price'=>10000,
                'description'=>'Trà bí đao Wonderfarm',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>19,
                'name'=> 'Minute Maid',
                'categoryId'=>2,
                'thumbnail'=>'https://content.etilize.com/2000/1032527964.jpg',
                'price'=>10000,
                'description'=>'Minute Maid',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>20,
                'name'=> 'Nước Yến',
                'categoryId'=>2,
                'thumbnail'=>'https://img.websosanh.vn/v2/users/root_product/images/9g3o7MMVo41A.jpg',
                'price'=>15000,
                'description'=>'Nước Yến',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'id'=>21,
                'name'=> 'Bánh mì xúc xích',
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
                'thumbnail'=>'http://static1.truyxuat.org/product//884331/1044136.png?v=0',
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
                'name'=> 'Xúc xích',
                'categoryId'=>1,
                'thumbnail'=>'http://sohanews.sohacdn.com/thumb_w/660/2016/xuc-xich-700x600-1412-1051-1477042411418-64-25-296-480-crop-1477042459781.jpg',
                'price'=>10000,
                'description'=>'xúc xích chiên, xúc xích nóng',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>31,
                'name'=> 'Bật lửa',
                'categoryId'=>3,
                'thumbnail'=>'http://media.vietq.vn/files/lelan/2017/10/17/bat-lua-16-10-2017.jpg',
                'price'=>5000,
                'description'=>'Bật lửa nhựa bơm ga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>32,
                'name'=> 'Thẻ điện thoại Viettel 20k',
                'categoryId'=>3,
                'thumbnail'=>'https://vienthong.com.vn/uploads/card_type/201506/3/28e3bd8313ff.png',
                'price'=>5000,
                'description'=>'Thẻ nạp điện thoại trả trước của Viettel, mệnh giá 20k',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>33,
                'name'=> 'Thẻ điện thoại Viettel 50k',
                'categoryId'=>3,
                'thumbnail'=>'https://vienthong.com.vn/uploads/card_type/201506/5/4c54fc8804ee.png',
                'price'=>5000,
                'description'=>'Thẻ nạp điện thoại trả trước của Viettel, mệnh giá 50k',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>34,
                'name'=> 'Thẻ điện thoại Viettel 100k',
                'categoryId'=>3,
                'thumbnail'=>'https://vienthong.com.vn/uploads/card_type/201506/6/210667d95095a.png',
                'price'=>5000,
                'description'=>'Thẻ nạp điện thoại trả trước của Viettel, mệnh giá 100k',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>35,
                'name'=> 'Cơm rang',
                'categoryId'=>1,
                'thumbnail'=>'https://pastaxi-manager.onepas.vn/content/uploads/articles/mon-an-vat-hai/com-rang-dua-bo/cach-lam-com-rang-dua-bo-1.jpg',
                'price'=>30000,
                'description'=>'Có đủ loại: thập cẩm, dưa bò, cải bò, trứng',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>36,
                'name'=> 'Mì xào',
                'categoryId'=>1,
                'thumbnail'=>'https://anh.eva.vn//upload/2-2015/images/2015-06-23/1435024972-mixao.jpg',
                'price'=>25000,
                'description'=>'Có mì xào bò, mì xào thập cẩm, mì xào xả ớt chua cay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>37,
                'name'=> 'Bánh bao nhân thịt, trứng muối',
                'categoryId'=>1,
                'thumbnail'=>'https://www.dkn.tv/wp-content/uploads/2018/09/1536629077982-4627_37-650x366.jpg',
                'price'=>10000,
                'description'=>'Bánh bao nóng nhân thịt, trứng muối, vừa rẻ vừa ngon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
