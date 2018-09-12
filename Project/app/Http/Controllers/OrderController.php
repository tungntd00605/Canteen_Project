<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    //
    public function index()
    {
        $list_obj = Order::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.order.list')->with('list_obj', $list_obj);
    }

    public function show($id){
        $order = Order::find($id);
//        dd($order);
        if($order === null){
            return view('error.404');
        }
        return view('admin.order.show')->with('order', $order);
    }

    public function changeStatus()
    {
        $id = Input::get('id');
        $status = Input::get('status');
        $order = Order::find($id);
        if ($order == null) {
            return view('error.404');
        }
        $order->status = $status;
        $order->save();
        return redirect('/admin/order');
    }

    public function destroy($id)
    {
        $obj = Order::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Đơn hàng không tồn tại hoặc đã bị xoá!',
                'message-class' => 'alert alert-danger'], 404);
        }
        $obj->status = -1;
        $obj->save();
        return response()->json(['message' => 'Đã hủy đơn hàng',
            'message-class' => 'alert alert-success'], 200);
    }
}
