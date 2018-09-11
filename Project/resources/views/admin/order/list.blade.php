@extends('layout.master', [
    'page_title'=>'Danh sách đơn hàng | FPTcanteen Admin Page',
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
                @if(count($list_obj) > 0)
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
                        @foreach ($list_obj as $item)
                            <tr>
                                <td class="pt-3-half id-col">{{$item->id}}</td>
                                <td class="pt-3-half">{{$item->customer_name}}</td>
                                <td class="pt-3-half">{{$item->ship_phone}}</td>
                                <td class="pt-3-half">{{$item->ship_name}}</td>
                                <td class="pt-3-half">{{$item->created_at}}</td>
                                <td class="pt-3-half">
                                    <ul>
                                        @foreach($item->details as $order_detail)
                                            <li>{{$order_detail->product->name}} x {{$order_detail->quantity}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="pt-3-half">{{$item->statusLabel}}</td>
                                <td>
                                    @if($item->status==0)
                                        <span
                                           class="table-confirm" id="order-{{$item->id}}" title="Xác nhận đơn hàng">
                                            <button type="button"
                                                    class="btn-floating btn-sm btn-info btn-confirm"><i
                                                        class="fas fa-check"></i></button>
                                        </span>
                                    @elseif($item->status==1)
                                        <span
                                           class="table-done" id="order-{{$item->id}}" title="Hoàn thành đơn hàng">
                                            <button type="button"
                                                    class="btn-floating btn-sm btn-success btn-confirm"><i
                                                        class="fas fa-check-double"></i></button>
                                        </span>
                                    @endif
                                    @if($item->status!=-1)
                                    <span class="table-remove"><button type="button"
                                                                       class="btn-floating btn-sm btn-danger btn-delete"><i
                                                    class="far fa-trash-alt"></i></button></span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="float-right">
                        {{ $list_obj->links() }}
                    </div>
                @else
                    <div class="text-center">Hiện không có đơn hàng nào để hiển thị</div>
                @endif
            </div>
        </div>
    </div>
    <!-- Editable table -->

    <!-- Script -->
    <script type="text/javascript" src="{{asset('js/order.js')}}"></script>
@endsection