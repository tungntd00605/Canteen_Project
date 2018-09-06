<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    public $timestamps = true;

    public function category() {
        return $this->belongsTo('App\Category','categoryId');
    }

    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case 0:
                return 'Đã bị xóa';
                break;
            case 1:
                return 'Còn hàng';
                break;
            case 2:
                return 'Hết hàng';
                break;
            default:
                return 'Không xác định';
                break;
        }
    }
}
