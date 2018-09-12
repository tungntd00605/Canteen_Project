@extends('layout.master', [
    'page_title'=> 'Đơn hàng '.$order->id.' | FPT Canteen',
    'current_page'=>'order_page',
])
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Order table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                @if (Session::has('message'))
                    <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
                @endif
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center id-col">ID</th>
                        <th class="text-center">Customer Name</th>
                        <th class="text-center">Receiver Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Order time</th>
                        <th class="text-center">Detail</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Option</th>
                    </tr>
                    <tr>
                        <td class="pt-3-half id-col">{{$order->id}}</td>
                        <td class="pt-3-half">{{$order->customer_name}}</td>
                        <td class="pt-3-half">{{$order->ship_name}}</td>
                        <td class="pt-3-half">{{$order->ship_phone}}</td>
                        <td class="pt-3-half">{{$order->created_at}}</td>
                        <td class="pt-3-half">
                            <ul>
                                @foreach($order->details as $order_detail)
                                    <li>{{$order_detail->product->name}} x {{$order_detail->quantity}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="pt-3-half">{{$order->statusLabel}}</td>
                        <td>
                            @if($order->status==0)
                                <span
                                        class="table-confirm" id="order-{{$order->id}}"
                                        title="Xác nhận đơn hàng">
                                            <button type="button"
                                                    class="btn-floating btn-sm btn-info btn-confirm"><i
                                                        class="fas fa-check"></i></button>
                                        </span>
                            @elseif($order->status==1)
                                <span
                                        class="table-done" id="order-{{$order->id}}" title="Hoàn thành đơn hàng">
                                            <button type="button"
                                                    class="btn-floating btn-sm btn-success btn-confirm"><i
                                                        class="fas fa-check-double"></i></button>
                                        </span>
                            @endif
                            @if($order->status!=-1)
                                <span class="table-remove"><button type="button"
                                                                   class="btn-floating btn-sm btn-danger btn-delete"><i
                                                class="far fa-trash-alt"></i></button></span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Editable table -->

    <!-- Script -->
    <script type="text/javascript" src="{{asset('js/order.js')}}"></script>
@endsection