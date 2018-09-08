<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 8/21/18
 * Time: 8:50 PM
 */

namespace App;


use Illuminate\Support\Facades\Session;

class ShoppingCart
{
    public static function getCart()
    {
        if (Session::has('cart')) {
            return Session::get('cart');
        }
        return new ShoppingCart();
    }

    function __construct()
    {
        $this->items = array();
    }

    public static function getTotalItem()
    {
        $count = 0;
        if (Session::has('cart')) {
            $shopping_cart = Session::get('cart');
            $count = self::calculateTotalItem($shopping_cart);
        }
        return $count;
    }

    public static function calculateTotalItem($shopping_cart)
    {
        $count = 0;
        foreach ($shopping_cart->items as $item) {
            $count += $item->quantity;
        }
        return $count;
    }

    function getTotalMoney()
    {
        $total_money = 0;
        foreach ($this->items as $item) {
            $total_money += $item->product->discountPrice * $item->quantity;
        }
        return $total_money;
    }

    function getTotalMoneyWithFormat()
    {
        return sprintf('%s', number_format($this->getTotalMoney(), 0));
    }

        function getTotalMoneyString()
    {
        return sprintf('%s (vnd)', number_format($this->getTotalMoney(), 0));
    }
}