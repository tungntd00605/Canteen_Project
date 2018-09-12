@extends('layout.client',[
    'page_title' => 'Danh mục | FPT Canteen'
])
@section('content')
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
    <!-- Main Container -->
    <div class="container mt-5 pt-5">
        <div class="row pt-4">

            <!-- Sidebar -->
            <div class="col-lg-3 ">

                <div class="">
                    <!-- Grid row -->
                    <div class="row sticky">
                        <div class="col-md-6 col-lg-12 mb-5">
                            <!-- Panel -->

                            <nav class="nav flex-column md-pills rgba-white-slight font-weight-bold">
                                <h5 class="font-weight-bold dark-grey-text ml-3 mb-2"><strong>Sắp xếp theo</strong></h5>
                                <a class="nav-link text-left {{$order_option != 'priceDown' && $order_option != 'priceUp' && $order_option != 'mostBuy'?'active':''}}" href="/category?categoryId={{$choosed_category}}">Mặc định</a>
                                <a class="nav-link text-left {{$order_option == 'mostBuy'?'active':''}}"  href="/category?categoryId={{$choosed_category}}&order-by=mostBuy">Bán chạy</a>
                                <a class="nav-link text-left {{$order_option == 'priceUp'?'active':''}}" href="/category?categoryId={{$choosed_category}}&order-by=priceUp">Giá: thấp đến cao</a>
                                <a class="nav-link text-left {{$order_option == 'priceDown'?'active':''}}" href="/category?categoryId={{$choosed_category}}&order-by=priceDown">Giá: cao đến thấp</a>
                            </nav>
                            <!--/. Side navigation links -->
                        </div>

                        <!-- Filter by category-->
                        <div class="col-md-6 col-lg-12 mb-5">
                            <!-- Panel -->
                            <nav class="nav flex-column md-pills rgba-white-slight font-weight-bold">
                                <h5 class="font-weight-bold dark-grey-text ml-3 mb-2"><strong>Danh mục</strong></h5>
                                <a class="nav-link text-left {{$choosed_category == null || $choosed_category == 0?'active':''}}"
                                   href="/category">Tất cả</a>
                                @foreach($list_category as $item)
                                    <a class="nav-link text-left {{$choosed_category == $item->id?'active':''}}"
                                       href="/category?categoryId={{$item->id}}">{{$item->name}}</a>
                                @endforeach
                            </nav>
                            <!--/. Side navigation links -->
                        </div>
                        <!-- /Filter by category-->
                    </div>
                    <!-- /Grid row -->
                </div>

            </div>
            <!-- /.Sidebar -->

            <!-- Content -->
            <div class="col-lg-9">
                <!-- Products Grid -->
                <section class="section pt-4" id="product-list">

                    <!-- Grid row -->
                    <div class="row">

                    @foreach($list_product as $item)
                        <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4 product">

                                <!--Card-->
                                <div class="card card-ecommerce product-card">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="{{$item->thumbnail}}" class="img-fluid" alt="">
                                        <a href="/product/{{$item->id}}" >
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="/product/{{$item->id}}" class="dark-grey-text">{{$item->name}}</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-danger mb-2">{{$item->category->name}}</span>
                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                                <div class="price">
                                                    <strong>{{$item->discountPriceWithFormat}} VND</strong>
                                                </div>
                                                <div class="add-cart">
                                                    <button type="button" title="Add to cart"
                                                            class="btn btn-outline-primary btn-sm waves-effect text-center btn-add-cart"
                                                            id="add-cart-{{$item->id}}">
                                                        <strong style="font-size: 12px;">Thêm</strong>
                                                        <i class="fas fa-cart-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!--Grid column-->
                        @endforeach

                    </div>
                    <!--Grid row-->


                    <!--Grid row-->
                    <div class="row justify-content-center mb-4" id="stopSticky">

                        {{$list_product->links()}}

                    </div>
                    <!--Grid row-->
                </section>
                <!-- /.Products Grid -->

            </div>
            <!-- /.Content -->

        </div>

    </div>
    <!-- /.Main Container -->

@endsection