<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id' => '1','customer_name' => 'Linh','total_price' => '99000','ship_name' => 'Linh','ship_address' => '100','ship_phone' => '0163254325','message' => 'NHanh nhe','created_at' => '2018-07-10 19:22:24','updated_at' => '2018-07-10 19:22:24','status' => '2'
            ],
            [
                'id' => '2','customer_name' => 'Minh','total_price' => '123000','ship_name' => 'Minh','ship_address' => '101','ship_phone' => '21312312412','message' => 'ko co','created_at' => '2018-08-10 19:26:20','updated_at' => '2018-08-10 19:26:20','status' => '2'
            ],
            [
                'id' => '3','customer_name' => 'Dũng','total_price' => '20000','ship_name' => 'Dũng','ship_address' => '103','ship_phone' => '0124356212','message' => 'gấp','created_at' => '2018-07-05 19:31:15','updated_at' => '2018-07-05 19:31:15','status' => '2'
            ],
            [
                'id' => '4','customer_name' => 'Long','total_price' => '10000','ship_name' => 'Long','ship_address' => '12','ship_phone' => '01268913829','message' => 'Gấp','created_at' => '2018-08-11 19:37:46','updated_at' => '2018-08-11 19:37:46','status' => '2'
            ],
            [
                'id' => '5','customer_name' => 'Hiền','total_price' => '30000','ship_name' => 'Hiền','ship_address' => '101','ship_phone' => '0123456789','message' => 'Nhanh đang đói','created_at' => '2018-08-25 19:47:15','updated_at' => '2018-08-25 19:47:15','status' => '2'
            ],
            [
                'id' => '6','customer_name' => 'Đức','total_price' => '20000','ship_name' => 'Đức','ship_address' => '100','ship_phone' => '012672391','message' => 'NHiều đá nhé','created_at' => '2018-08-03 02:48:31','updated_at' => '2018-08-03 02:48:31','status' => '2'
            ],
            [
                'id' => '7','customer_name' => 'Sơn','total_price' => '70000','ship_name' => 'Sơn','ship_address' => '105','ship_phone' => '016273812','message' => 'Nhanh đang thèm thuốc','created_at' => '2018-07-14 02:50:25','updated_at' => '2018-07-14 02:50:25','status' => '2'
            ],
            [
                'id' => '8','customer_name' => 'Mạnh','total_price' => '10000','ship_name' => 'Mạnh','ship_address' => '201','ship_phone' => '02789723812','message' => 'Nhanh đang khát','created_at' => '2018-06-30 02:52:02','updated_at' => '2018-06-30 02:52:02','status' => '2'
            ],
            [
                'id' => '9','customer_name' => 'Tùng','total_price' => '60000','ship_name' => 'Tùng','ship_address' => '213','ship_phone' => '021739812738','message' => 'Đóng gói cẩn thận','created_at' => '2018-08-26 02:53:27','updated_at' => '2018-08-26 02:53:27','status' => '2'
            ],
            [
                'id' => '10','customer_name' => 'Đoàn','total_price' => '9000','ship_name' => 'Đoàn','ship_address' => '231','ship_phone' => '01278392','message' => 'Lạnh','created_at' => '2018-08-01 02:55:30','updated_at' => '2018-08-01 02:55:30','status' => '2'
            ],
            [
                'id' => '11','customer_name' => 'Duy','total_price' => '70000','ship_name' => 'Duy','ship_address' => '200','ship_phone' => '0289102312','message' => 'CÒn nóng nhé','created_at' => '2018-07-09 03:01:39','updated_at' => '2018-07-09 03:01:39','status' => '2'
            ],
            [
                'id' => '12','customer_name' => 'Khoa','total_price' => '11000','ship_name' => 'Khoa','ship_address' => '203','ship_phone' => '012879213','message' => 'Giải khát','created_at' => '2018-08-01 03:02:38','updated_at' => '2018-08-01 03:02:38','status' => '2'
            ],
            [
                'id' => '13','customer_name' => 'Thành','total_price' => '14000','ship_name' => 'Thành','ship_address' => '300','ship_phone' => '012791783','message' => 'Nhanh cần đồ để học','created_at' => '2018-07-21 03:03:58','updated_at' => '2018-07-21 03:03:58','status' => '2'
            ],
            [
                'id' => '14','customer_name' => 'Đại','total_price' => '202000','ship_name' => 'Đại','ship_address' => '3002','ship_phone' => '08273018312','message' => 'Liên hoan lớp','created_at' => '2018-07-17 03:05:30','updated_at' => '2018-07-17 03:05:30','status' => '2'
            ],
            [
                'id' => '15','customer_name' => 'Hoàng','total_price' => '5000','ship_name' => 'Hoàng','ship_address' => '122','ship_phone' => '0278973912','message' => 'Ăn Sáng','created_at' => '2018-08-11 03:07:25','updated_at' => '2018-08-11 03:07:25','status' => '2'
            ],
            [
                'id' => '16','customer_name' => 'Huyền','total_price' => '10000','ship_name' => 'Huyền','ship_address' => '322','ship_phone' => '082190831','message' => 'giải khát','created_at' => '2018-07-24 03:08:56','updated_at' => '2018-07-24 03:08:56','status' => '2'
            ],
            [
                'id' => '17','customer_name' => 'Minh','total_price' => '27000','ship_name' => 'Minh','ship_address' => '233','ship_phone' => '0931830123','message' => 'Ăn sáng','created_at' => '2018-08-13 03:10:24','updated_at' => '2018-08-13 03:10:24','status' => '2'
            ],
            [
                'id' => '18','customer_name' => 'Minh','total_price' => '60000','ship_name' => 'Minh','ship_address' => '223','ship_phone' => '08371927381','message' => 'Nhanh nhé','created_at' => '2018-09-11 03:11:01','updated_at' => '2018-09-11 03:11:01','status' => '2'
            ],
            [
                'id' => '19','customer_name' => 'Minh Nguyen','total_price' => '19000','ship_name' => 'Nguyen','ship_address' => '223','ship_phone' => '0723891738','message' => 'Ăn nhẹ','created_at' => '2018-09-11 03:11:41','updated_at' => '2018-09-11 03:11:41','status' => '2'
            ],
            [
                'id' => '20','customer_name' => 'Ly','total_price' => '78000','ship_name' => 'Ly','ship_address' => '345','ship_phone' => '0231839021','message' => 'Đẹp da','created_at' => '2018-09-11 03:12:32','updated_at' => '2018-09-11 03:12:32','status' => '2'
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
