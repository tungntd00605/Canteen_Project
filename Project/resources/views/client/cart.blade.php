@extends('layout.client',  [
    'page_title'=>'Shopping Cart | FPTcanteen',
    'current_page'=>'cart_page',
])
@section('content')
    <link rel="stylesheet" href="{{asset('css/styleCart.css')}}">
<div class="container">

    <!-- Section cart -->
    <section class="section my-5 pb-5">

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
                        @foreach($shopping_cart->items as $item)
                        <!-- First row -->
                        <tr>
                            <th scope="row" class="text-center">
                                {{--<div style='background-image: url("{{$item->product->thumbnail}}");background-size: cover' class="imgProduct">--}}

                                {{--</div>--}}
                                <img src="{{$item->product->thumbnail}}" alt="" class="img-fluid z-depth-0 imgProduct img-thumbnail">
                            </th>
                            <td class="text-center">
                                <h6 class="mt-3" style="color: #5d5d5d">
                                    <strong>{{$item->product->name}}</strong>
                                </h6>
                            </td>
                            <td class="text-center">{{$item->product->discountPriceString}}</td>
                            <td class="text-center text-md-left">

                                <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                    <label class="btn btn-sm btn-primary btn-rounded btn-">
                                        <input type="radio" name="options" id="option1">--
                                    </label>
                                    <span class="qty">{{$item->quantity}}</span>
                                    <label class="btn btn-sm btn-primary btn-rounded">
                                        <input type="radio" name="options" id="option2">+
                                    </label>
                                </div>
                            </td>
                            <td class="font-weight-bold text-center">
                                <strong>{{$item->quantity * $item->product->discountPrice}}</strong>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-primary btn-delete" data-toggle="tooltip" data-placement="top" title="Remove item" style="border-radius: 15px">
                                    X
                                </button>
                            </td>
                        </tr>
                        <!-- /.First row -->
                        @endforeach

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
                            <a class="nav-link active" data-toggle="tab" href="#tabCheckoutBilling123" role="tab">1. Billing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabCheckoutPayment123" role="tab">2. Payment</a>
                        </li>
                    </ul>

                    <!-- Pills panels -->
                    <div class="tab-content pt-4">

                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">

                            <!--Card content-->
                            <form>

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form" style="margin-bottom: 10px">
                                            <input type="text" id="cusName" name="customer_name" class="form-control">
                                            <label for="cusName">Người gửi</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form" style="margin-bottom: 10px">
                                            <input type="text" id="shipName" name="ship_name" class="form-control">
                                            <label for="shipName">Người nhận</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form" style="margin-bottom: 10px">
                                            <input type="text" id="ship_phone" name="ship_phone" class="form-control">
                                            <label for="ship_phone">Số điện thoại</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="md-form" style="margin-bottom: 15px">
                                            <input type="text" id="ship_address" name="ship_address" class="form-control">
                                            <label for="ship_address">Số phòng</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea type="text" id="message" class="md-textarea form-control" rows="3" name="message"></textarea>
                                            <label for="message">Lời nhắn</label>
                                        </div>
                                    </div>

                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Đặt hàng</button>

                            </form>

                        </div>
                        <!--/.Panel 1-->

                        <!--Panel 2-->
                        <div class="tab-pane fade" id="tabCheckoutPayment123" role="tabpanel">

                            <div class="d-block my-3">
                                <div class="mb-2">
                                    <input name="group2" type="radio" class="form-check-input with-gap" id="radioWithGap4" checked required>
                                    <label class="form-check-label" for="radioWithGap4">Credit card</label>
                                </div>
                                <div class="mb-2">
                                    <input iname="group2" type="radio" class="form-check-input with-gap" id="radioWithGap5" required>
                                    <label class="form-check-label" for="radioWithGap5">Debit card</label>
                                </div>
                                <div class="mb-2">
                                    <input name="group2" type="radio" class="form-check-input with-gap" id="radioWithGap6" required>
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
                                    <input type="text" class="form-control" id="cc-number123" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration123">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration123" placeholder="" required>
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

                            <button class="btn btn-primary btn-lg btn-block" type="submit">Place order</button>

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
                                        {{$item->product->name}}
                                    </dd>
                                    <dd class="col-sm-5">
                                        {{$item->product->discountPriceString}}
                                    </dd>
                                </dl>
                            @endforeach
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

@endsection