<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Events\ClientNotifyEvent;

class OrderController extends Controller
{
    //
    public function index()
    {
        $now = Carbon::now();
        $start = $now->subDay();
        $end = $now::now();
        $list_obj = Order::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.order.list')->with(['list_obj' => $list_obj,
                                                    'start' => $start,
                                                    'end' => $end]);
    }

    public function show($id){
        $order = Order::find($id);
//        dd($order);
        if($order === null){
            return view('error.404');
        }
        return view('admin.order.show')->with('order', $order);
    }

    public function showByDate(){
        $start = Input::get('start');
        $end = Input::get('end');
        $startparse = Carbon::parse($start);
        $endparse = Carbon::parse($end);
        if($start == null || $end == null){
            return 'Không điền đủ thông tin ngày tháng cần tìm';
        }
        $list_order = Order::whereBetween('created_at', [$startparse, $endparse])->orderBy('created_at', 'desc')->paginate(10);
        if($list_order == null) {
            return view('error.404');
        }
        return view('admin.order.list')->with(['list_obj' => $list_order,
            'start' => $start,
            'end' => $end]);
    }

    public function changeStatus($id)
    {
        $status = Input::get('status');
        if($status != 1 & $status != 2){
            return response()->json(['message' => 'Trạng thái bạn đang muốn chuyển không hợp lệ'], '400');
        }
        $order = Order::find($id);
        if($order->status == -1 || $order->status == 2){
            return response()->json(['message' => 'Bạn không thể chuyển trạng thái của đơn hàng đã hủy hoặc đã hoàn thành'], '400');
        }
        if ($order == null) {
            dd($order);
            return view('error.404');
        }
        $order->status = $status;
        if($status == 1){
            event(new ClientNotifyEvent('Đơn hàng của bạn đang được xử lý'));
        }
        $order->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $obj = Order::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Đơn hàng không tồn tại hoặc đã bị xoá!',
                'message-class' => 'alert alert-danger'], 404);
        }
        if($obj->status == 2){
            return response()->json(['message' => 'Bạn không thể chuyển trạng thái của đơn hàng đã hoàn thành'], '400');
        }
        $obj->status = -1;
        $obj->save();
        return response()->json(['message' => 'Đã hủy đơn hàng',
            'message-class' => 'alert alert-success'], 200);
    }
}
