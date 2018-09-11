<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Http\Requests\StoreOrderRequest;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\ShoppingCart;
use App\Events\OrderNotifyEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    //
    public function addToCartApi()
    {
        $id = Input::get('id');
        $quantity = Input::get('quantity');
        if ($id == null || $quantity == null) {
            return response()->json(['msg' => 'Thông tin không hợp lệ'], 404);
        }
        $product = Product::find($id);
        if ($product == null || $product->status != 1) {
            return response()->json(['msg' => 'Sản phẩm không tồn tại hoặc đã bị xoá!'], 404);
        }
        $shopping_cart = new ShoppingCart();
        if (Session::has('cart')) {
            $shopping_cart = Session::get('cart');
            if (array_key_exists($id, $shopping_cart->items)) {
                    $quantity += $shopping_cart->items[$id]->quantity;
                    if($quantity <= 0){
                        $quantity = 1;
                    }
            }
        }
        $item = new CartItem();
        $item->product = $product;
        $item->product->dicountPriceString = $product->discountPriceString;
        $item->quantity = $quantity;
        $shopping_cart->items[$id] = $item;
        $shopping_cart->count = ShoppingCart::calculateTotalItem($shopping_cart);
        $shopping_cart->total_money = $shopping_cart->getTotalMoneyString();
        Session::put('cart', $shopping_cart);
        return response()->json(['msg' => 'Thêm vào giỏ hàng thành công',
            'new_item'=> ['new_qty'=> $quantity,
                'new_total_price' => $item->getTotalPriceString()
            ] , 'new_cart_price' =>  $shopping_cart->getTotalMoneyString(),
            'shopping_cart' => $shopping_cart], 200);
    }

    public function removeFromCart()
    {

    }

    public function showCart()
    {
        $shopping_cart = new ShoppingCart();
        if (Session::has('cart')) {
            $shopping_cart = Session::get('cart');
        }
        return view('client.cart')->with('shopping_cart', $shopping_cart);
    }

    public function updateCart()
    {
        $shopping_cart = new ShoppingCart();

        $products = Input::get('products');

        if (is_array($products)) {
            foreach (array_keys($products) as $key) {
                $product = Product::find($key);
                if ($product == null || $product->status != 1) {
                    return view('error.404');
                }
                $item = new CartItem();
                $item->product = $product;
                $item->quantity = $products[$key];
                $shopping_cart->items[$key] = $item;
            }
        }
        Session::put('cart', $shopping_cart);
        return redirect('/xem-gio-hang');
    }

    public function destroyCart()
    {
        Session::remove('cart');
    }

    public function checkoutCart(StoreOrderRequest $request)
    {
        if ($request->validated()) {
            dd($request);
            return response()->json(['msg' => 'Thông tin không hợp lệ, vui lòng điền lại thông tin chính xác',
                'errors' => $request->errors()], 422);
        }

        if (Session::has('cart')) {
            try {
                DB::beginTransaction();
                $shopping_cart = Session::get('cart');
                $customer_name = Input::get('customer_name');
                $ship_name = Input::get('ship_name');
                $ship_address = Input::get('ship_address');
                $ship_phone = Input::get('ship_phone');
                $message = Input::get('message');
                $order = new Order();
                $order->customer_name = $customer_name;
                $order->ship_name = $ship_name;
                $order->ship_address = $ship_address;
                $order->ship_phone = $ship_phone;
                $order->message = $message;
                $order->total_price = 0;
                $order->save();
                $order_id = $order->id;
                $order_details = array();
                foreach ($shopping_cart->items as $item) {
                    $product = Product::find($item->product->id);
                    if ($product == null || $product->status != 1) {
                        return view('error.404');
                    }
                    $quantity = $item->quantity;
                    $order_detail = new OrderDetail();
                    $order_detail->order_id = $order_id;
                    $order_detail->product_id = $product->id;
                    $order_detail->quantity = $quantity;
                    $order_detail->unit_price = $product->discountPrice;
                    $order->total_price += $order_detail->unit_price * $order_detail->quantity;
                    $order_detail->save();
                    array_push($order_details, $order_detail);
                }
                $order->save();
                DB::commit();
                $data['ship_phone'] = $ship_phone;
                $data['customer_name'] = $customer_name;
                $data['room'] = $ship_address;
                event(new OrderNotifyEvent($data));
                // clear session cart.
                Session::remove('cart');
                // send mail or sms.
                return response()->json(['msg' => 'Bạn đã đặt hàng thành công',
                    'class' => 'success'], 200);
            } catch (\Exception $exception) {
                DB::rollBack();
                return 'Có lỗi xảy ra.' . $exception->getMessage();
            }

        } else {
            return redirect('/cart')->with('message', 'Hiện tại chưa có sản phẩm nào trong giỏ hàng.');
        }
    }
}
