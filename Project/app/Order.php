<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function details()
    {
        return $this->hasMany('App\OrderDetail', 'order_id');
    }
    // Hàm để cho ra trạng thái của order bằng chữ thay vì bằng số  và gọi bằng $order->statusLabel
    //(với $order là một đối tượng Order)
    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case -1:
                return 'Đã huỷ';
                break;
            case 0:
                return 'Chờ xử lý';
                break;
            case 1:
                return 'Đã xác nhận';
                break;
            case 2:
                return 'Hoàn thành';
                break;
            default:
                return 'Không xác định';
                break;
        }
    }
}
