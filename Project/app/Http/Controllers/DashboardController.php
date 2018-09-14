<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getSaleByDate()
    {
        $start = Input::get('start');
        $end = Input::get('end');
        $startparse = Carbon::parse($start);
        $endparse = Carbon::parse($end);
        if($start == null || $end == null){
            return 'Không điền đủ thông tin ngày tháng cần tìm';
        }
        $list_order = Order::select(DB::Raw('DATE(created_at) as day'), DB::raw('SUM(total_price) as total'))->where('status', 2)
            ->whereBetween('created_at', [$startparse, $endparse])->groupBy('day')->orderBy('day', 'asc')->get();
        $order_table = Order::where('status', 2)->whereBetween('created_at', [$startparse, $endparse])->orderBy('created_at', 'asc')->get();
        if($list_order == null) {
            return view('error.404');
        }

        return response()->json(['jsonData' => $list_order,
                                'order_table' => $order_table,
                                'start' => $start,
                                'end' => $end], 200);
    }
}
