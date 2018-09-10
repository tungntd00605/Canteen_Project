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

    public function getDiscountPriceStringAttribute()
    {
        if ($this->discount == 0) {
            return sprintf('%s (vnd)', number_format($this->price, 0));
        }
        return sprintf('%s (vnd)', number_format(($this->price - ($this->price * $this->discount / 100)), 0));
    }
    public function getDiscountPriceWithFormatAttribute()
    {
        if ($this->discount == 0) {
            return sprintf('%s', number_format($this->price, 0));
        }
        return sprintf('%s', number_format(($this->price - ($this->price * $this->discount / 100)), 0));
    }

    public function getOriginalPriceStringAttribute()
    {
        if ($this->discount == 0) {
            return '';
        }
        return sprintf('%s (vnd)', number_format($this->price, 0));
    }

    public function getOriginalPriceAttribute()
    {
        if ($this->discount == 0) {
            return '';
        }
        return sprintf('%s', number_format($this->price, 0));
    }

    public function getDiscountPriceAttribute()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }
}
