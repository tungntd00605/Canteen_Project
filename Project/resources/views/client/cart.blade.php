@extends('layout.client',  [
    'page_title'=>'Shopping Cart | FPTcanteen',
    'current_page'=>'cart_page',
])
@section('content')
    <link rel="stylesheet" href="{{asset('css/styleCart.css')}}">
    <div class="container">

        <!-- Section cart -->
        <section class="section mt-5 pt-5 pb-5">

            <div class="card card-ecommerce">
                <div class="card-body">

                    <!-- Shopping Cart table -->
                    <div class="table-responsive">

                        <table class="table product-table">

                            <!-- Table head -->
                            <thead class="mdb-color light-blue darken-2">
                            <tr>
                                <th></th>
                                <th class="font-weight-bold text-center">
                                    Sản phẩm
                                </th>
                                <th class="font-weight-bold text-center">
                                    Đơn giá
                                </th>
                                <th class="font-weight-bold text-center">
                                    Số lượng
                                </th>

                                <th class="font-weight-bold text-center">
                                    Thành tiền
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <!-- /.Table head -->

                            <!-- Table body -->
                            <tbody>
                            @if(count($shopping_cart->items) <= 0)
                                <tr>
                                    <td colspan="6" class="text-center font-weight-bold">Hiện giỏ hàng không có sản phẩm nào</td>
                                </tr>
                            @else
                                @foreach($shopping_cart->items as $item)
                                    <!-- First row -->
                                    <tr>
                                        <th scope="row" class="text-center">
                                            <img src="{{$item->product->thumbnail}}" alt=""
                                                 class="img-fluid z-depth-0 imgProduct img-thumbnail">
                                        </th>
                                        <td class="text-center">
                                            <h6 class="mt-3" style="color: #5d5d5d">
                                                <strong>{{$item->product->name}}</strong>
                                            </h6>
                                        </td>
                                        <td class="text-center">{{$item->product->discountPriceString}}</td>
                                        <td class="text-center text-md-left">

                                            <div class="btn-group radio-group ml-2 text-center" data-toggle="buttons"
                                                 style="padding-left: 26%; width: 100%">
                                                <label class="btn btn-sm btn-primary btn-rounded btn-minus" >
                                                    <input type="radio" name="options" >--
                                                </label>
                                                <span class="qty product-qty-{{$item->product->id}}">{{$item->quantity}}</span>
                                                <label class="btn btn-sm btn-primary btn-rounded btn-add" >
                                                    <input type="radio" name="options" >+
                                                </label>
                                            </div>
                                        </td>
                                        <td class="font-weight-bold text-center">
                                            <strong class="product-total-price-{{$item->product->id}}">{{$item->getTotalPriceString()}}</strong>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-primary btn-delete" id="product-{{$item->product->id}}"
                                                    data-toggle="tooltip" data-placement="top" title="Remove item"
                                                    style="border-radius: 15px">
                                                X
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- /.First row -->
                                @endforeach
                            @endif


                            </tbody>
                            <!-- /.Table body -->

                        </table>

                    </div>
                    <!-- /.Shopping Cart table -->

                </div>

            </div>

        </section>
        <!-- /Section cart -->

        <!-- Section products -->
        <div class="card">
            <div class="card-body">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-7 mb-4">

                        <!-- Pills navs -->
                        <ul class="nav md-pills nav-justified pills-primary font-weight-bold">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabCheckoutBilling123" role="tab">1.
                                    Billing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabCheckoutPayment123" role="tab">2.
                                    Payment</a>
                            </li>
                        </ul>

                        <!-- Pills panels -->
                        <div class="tab-content pt-4">

                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">

                                <!--Card content-->

                                <!--Grid row-->
                                    <div class="row">

                                        {{--Error alert--}}
                                        <div class="hidden" id="validate-msg">
                                            <ul>

                                            </ul>
                                        </div>


                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <div class="md-form" style="margin-bottom: 10px">
                                                <input type="text" id="cusName" name="customer_name"
                                                       class="form-control">
                                                <label for="cusName" class="labelCusname">Người gửi <span style="color: #db1c13;font-size: 12px">*</span></label>
                                                <div id="errorCusName"></div>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <div class="md-form" style="margin-bottom: 10px">
                                                <input type="text" id="ship_name" name="ship_name" class="form-control">
                                                <label for="shipName">Người nhận <span style="color: #db1c13;font-size: 12px">*</span></label>
                                                <div id="errorShipName"></div>
                                            </div>
                                        </div>
                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <div class="md-form" style="margin-bottom: 10px">
                                                <input type="text" id="ship_phone" name="ship_phone"
                                                       class="form-control">
                                                <label for="ship_phone">Số điện thoại <span style="color: #db1c13;font-size: 12px">*</span></label>
                                                <div id="errorShipPhone"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="md-form" style="margin-bottom: 15px">
                                                <select class="mdb-select md-form" id="list-room">
                                                    <option value="" disabled selected>Choose your room</option>
                                                    {{-- <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option> --}}
                                                </select>
                                                <label>Phòng</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <textarea type="text" id="message" class="md-textarea form-control"
                                                          rows="3" name="message"></textarea>
                                                <label for="message">Lời nhắn</label>
                                            </div>
                                        </div>

                                    </div>

                                    <button class="btn btn-primary btn-lg btn-block" id="btn-order">Đặt hàng</button>


                            </div>
                            <!--/.Panel 1-->

                            <!--Panel 2-->
                            <div class="tab-pane fade" id="tabCheckoutPayment123" role="tabpanel">

                                <div class="d-block my-3">
                                    <div class="mb-2">
                                        <input name="group2" type="radio" class="form-check-input with-gap"
                                               id="radioWithGap4" checked required>
                                        <label class="form-check-label" for="radioWithGap4">Credit card</label>
                                    </div>
                                    <div class="mb-2">
                                        <input iname="group2" type="radio" class="form-check-input with-gap"
                                               id="radioWithGap5" required>
                                        <label class="form-check-label" for="radioWithGap5">Debit card</label>
                                    </div>
                                    <div class="mb-2">
                                        <input name="group2" type="radio" class="form-check-input with-gap"
                                               id="radioWithGap6" required>
                                        <label class="form-check-label" for="radioWithGap6">Paypal</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-name123">Name on card</label>
                                        <input type="text" class="form-control" id="cc-name123" placeholder="" required>
                                        <small class="text-muted">Full name as displayed on card</small>
                                        <div class="invalid-feedback">
                                            Name on card is required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-number123">Credit card number</label>
                                        <input type="text" class="form-control" id="cc-number123" placeholder=""
                                               required>
                                        <div class="invalid-feedback">
                                            Credit card number is required
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration123">Expiration</label>
                                        <input type="text" class="form-control" id="cc-expiration123" placeholder=""
                                               required>
                                        <div class="invalid-feedback">
                                            Expiration date required
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-cvv123">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv123" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Security code required
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">

                                <button class="btn btn-primary btn-lg btn-block ">Place
                                    order
                                </button>

                            </div>
                            <!--/.Panel 2-->

                        </div>
                        <!-- Pills panels -->


                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-5 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">
                                <h4 class="mb-4 mt-1 h5 text-center font-weight-bold">HÓA ĐƠN</h4>
                                @foreach($shopping_cart->items as $item)
                                    <hr>
                                    <dl class="row">
                                        <dd class="col-sm-7">
                                            <span>{{$item->product->name}}</span> x <span class="product-qty-{{$item->product->id}}">{{$item->quantity}}</span>
                                        </dd>
                                        <dd class="col-sm-5">
                                            <span class="product-total-price-{{$item->product->id}}">{{$item->getTotalPriceString()}}</span>
                                        </dd>
                                    </dl>
                                @endforeach
                                <hr>
                                <div class="text-right"><span>Tổng cộng: </span><strong id="total-cart-price">{{$shopping_cart->getTotalMoneyString()}}</strong></div>
                            </div>

                        </div>
                        <!--/.Card-->


                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>

    </div>
    <!-- /.Main Container -->

    <script src="{{asset('js/shopping-cart.js')}}"></script>
@endsection