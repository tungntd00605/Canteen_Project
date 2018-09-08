@extends('layout.client',  [
    'page_title'=>'Shopping Cart | FPTcanteen',
    'current_page'=>'cart_page',
])
@section('content')

<div class="container">

    <!-- Section cart -->
    <section class="section my-5 pb-5">

        <div class="card card-ecommerce">
            <div class="card-body">

                <!-- Shopping Cart table -->
                <div class="table-responsive">

                    <table class="table product-table">

                        <!-- Table head -->
                        <thead class="mdb-color lighten-5">
                        <tr>
                            <th></th>
                            <th class="font-weight-bold">
                                <strong>Sản phẩm</strong>
                            </th>
                            <th class="font-weight-bold">
                                <strong>Color</strong>
                            </th>
                            <th></th>
                            <th class="font-weight-bold">
                                <strong>Đơn giá</strong>
                            </th>
                            <th class="font-weight-bold">
                                <strong>Số lượng</strong>
                            </th>
                            <th class="font-weight-bold">
                                <strong>Thành tiền</strong>
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
                            <th scope="row">
                                <img src="{{$item->product->thumbnail}}" alt="" class="img-fluid z-depth-0">
                            </th>
                            <td>
                                <h5 class="mt-3">
                                    <strong>{{$item->product->name}}</strong>
                                </h5>
                            </td>
                            <td>White</td>
                            <td></td>
                            <td>{{$item->product->discountPriceString}}</td>
                            <td class="text-center text-md-left">
                                <span class="qty">{{$item->quantity}}</span>
                                <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                    <label class="btn btn-sm btn-primary btn-rounded">
                                        <input type="radio" name="options" id="option1">&mdash;
                                    </label>
                                    <label class="btn btn-sm btn-primary btn-rounded">
                                        <input type="radio" name="options" id="option2">+
                                    </label>
                                </div>
                            </td>
                            <td class="font-weight-bold">
                                <strong>{{$item->quantity * $item->product->discountPrice}}</strong>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
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
                <div class="col-lg-8 mb-4">

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
                                    <div class="col-md-6 mb-4">

                                        <!--firstName-->
                                        <label for="firstName" class="">First name</label>
                                        <input type="text" id="firstName" class="form-control">

                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6 mb-2">

                                        <!--lastName-->
                                        <label for="lastName" class="">Last name</label>
                                        <input type="text" id="lastName" class="form-control">

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Username-->
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
                                </div>

                                <!--email-->
                                <label for="email" class="">Email (optional)</label>
                                <input type="text" id="email" class="form-control mb-4" placeholder="youremail@example.com">

                                <!--address-->
                                <label for="address" class="">Address</label>
                                <input type="text" id="address" class="form-control mb-4" placeholder="1234 Main St">

                                <!--address-2-->
                                <label for="address-2" class="">Address 2 (optional)</label>
                                <input type="text" id="address-2" class="form-control mb-4" placeholder="Apartment or suite">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4">

                                        <label for="country">Country</label>
                                        <select class="custom-select d-block w-100" id="country" required>
                                            <option value="">Choose...</option>
                                            <option>United States</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-6 mb-4">

                                        <label for="state">State</label>
                                        <select class="custom-select d-block w-100" id="state" required>
                                            <option value="">Choose...</option>
                                            <option>California</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-6 mb-4">

                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <hr>

                                <div class="mb-1">
                                    <input type="checkbox" class="form-check-input filled-in" id="chekboxRules">
                                    <label class="form-check-label" for="chekboxRules">I accept the terms and conditions</label>
                                </div>
                                <div class="mb-1">
                                    <input type="checkbox" class="form-check-input filled-in" id="safeTheInfo">
                                    <label class="form-check-label" for="safeTheInfo">Save this information for next time</label>
                                </div>
                                <div class="mb-1">
                                    <input type="checkbox" class="form-check-input filled-in" id="subscribeNewsletter">
                                    <label class="form-check-label" for="subscribeNewsletter">Subscribe to the newsletter</label>
                                </div>

                                <hr>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Next step</button>

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
                <div class="col-lg-4 mb-4">

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Place order</button>

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                            <h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Summary</h4>

                            <hr>

                            <dl class="row">
                                <dd class="col-sm-8">
                                    MDBootstrap UI KIT (jQuery version) - License 6-10 poeple + unlimited projects
                                </dd>
                                <dd class="col-sm-4">
                                    $ 2000
                                </dd>
                            </dl>

                            <hr>

                            <dl class="row">
                                <dd class="col-sm-8">
                                    Premium support - 2 years
                                </dd>
                                <dd class="col-sm-4">
                                    $ 2000
                                </dd>
                            </dl>

                            <hr>

                            <dl class="row">
                                <dd class="col-sm-8">
                                    MDB Membership - 2 years
                                </dd>
                                <dd class="col-sm-4">
                                    $ 2000
                                </dd>
                            </dl>

                            <hr>

                            <dl class="row">
                                <dt class="col-sm-8">
                                    Total
                                </dt>
                                <dt class="col-sm-4">
                                    $ 2000
                                </dt>
                            </dl>
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