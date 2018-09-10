@extends('layout.client', [
    'page_title'=>'Home Page | FPTcanteen',
    'current_page'=>'home_page',
])
@section('content')
    <link rel="stylesheet" href="{{asset('css/styleHome.css')}}">
    <!-- /.Main Container -->
    <div class="container mt-5 pt-3">
        <div class="row pt-3">
            <!-- Content -->
            <div class="col-lg-12">
                <!-- Products Grid -->
                <section class="section pt-4">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-8 col-md-12 mb-3 pb-lg-2">
                            <!--Image -->
                            <div class="view zoom z-depth-1 imgPage">
                                <img src="https://4.bp.blogspot.com/-8FJBBskZ0pA/WFs1NFsUycI/AAAAAAAAA2A/HTtpBRBAOYE5Iy0G1gQBYKv4rKtiP_NzACLcB/s1600/bi-quyet-lam-bo-luc-lac-khoai-tay-chien.jpg"
                                     class="img-fluid" alt="sample image">
                                <div class="mask">
                                    <div class="dark-grey-text d-flex align-items-center pt-4 ml-3 pl-3">
                                        <div>
                                            <a><span class="badge badge-primary"><strong>New</strong></span></a>
                                            <h2 class="card-title font-weight-bold pt-2 text-dark"><strong>Sản phẩm của
                                                    Canteen</strong></h2>
                                            <p class="text-dark">Đồ uống ngon</p>
                                            <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!-- Section: Categories -->
                            <section class="section">


                                <ul class="list-group z-depth-1">
                                    @foreach ($categories as $item)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="/category?categoryId={{$item->id}}"
                                               class="dark-grey-text font-small"><i
                                                        class="far fa-list-alt mr-1"></i><span
                                                        class="font-weight-bold">{{$item->name}}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </div>

                    </div>
                    <section>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>Sản Phẩm Bán Chạy</strong></h4>
                                <hr class="mb-5">
                                <!-- Grid row -->
                                <div class="row">
                                    @foreach ($product as $item)
                                        <div class="col-lg-4 col-md-6 mb-4 ">
                                            <!--Card-->
                                            <div class="card card-ecommerce">
                                                <!-- Grid row -->
                                                <div class="row p-1">
                                                    <!--Grid column-->
                                                    <div class="col-5 d-flex align-items-center">
                                                        <!--Card image-->
                                                        <!--Lệch do ảnh dài ngắn khác nhau-->
                                                        <div class="view overlay">
                                                            <img src="{{$item->thumbnail}}"
                                                                 class="img-fluid product-thumb imgProduct" alt="">
                                                            <a>
                                                                <div class="mask rgba-white-slight"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->
                                                    </div>

                                                    <!--Grid column-->
                                                    <div class="col-7 pl-0">
                                                        <!--Card content-->
                                                        <div class="card-body">
                                                            <!--Category & Title-->
                                                            <!--Lệch do tên dài ngắn khác nhau-->
                                                            <h6 class="card-title mb-1"><strong><a href=""
                                                                                                   class="dark-grey-text">{{$item->name}}</a></strong>
                                                            </h6>
                                                            <span class="badge badge-danger mb-2"><strong>{{$item->originalPrice}}
                                                                    VND</strong></span>
                                                            <!-- Rating -->

                                                            <!--Card footer-->
                                                            <div class="card-footer pb-0">
                                                                <div class="row mb-0">
                                                                    <button type="button" title="Add to cart"
                                                                            class="btn btn-outline-primary btn-sm waves-effect text-center btn-add-cart"
                                                                            id="add-cart-{{$item->id}}">
                                                                        <strong style="font-size: 14px;">Thêm</strong>
                                                                        <i class="fas fa-cart-plus fa-2x"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Card content-->
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card-->
                                        </div>
                                @endforeach
                                <!--Grid column-->

                                </div>
                                <!--Grid row-->

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </section>
                    <!--Section product list-->
                    <section class="mb-5">
                        <div class="row">
                            <!-- New Products-->
                            <div class="col-lg-4 col-md-12 col-12 pt-4 ">
                                <hr>
                                <h5 class="text-center font-weight-bold dark-grey-text"><strong>Đồ Ăn</strong></h5>
                                <hr>
                            @foreach ($foods as $item)
                                <!-- First row -->
                                    <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                        <div class="col-6">
                                            <a><img src="{{$item->thumbnail}}" class="img-fluid imgProduct"></a>
                                        </div>
                                        <div class="col-6 align-items-center">

                                            <!-- Title -->
                                            <a><strong>{{$item->name}}</strong></a>

                                            <!-- Price -->
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text mt-1">
                                                <strong class="badge badge-danger">{{$item->originalPrice}} VND</strong>
                                            </h6>
                                            <hr>
                                            <button type="button" title="Add to cart"
                                                    class="btn btn-outline-primary btn-sm waves-effect text-center btn-add-cart"
                                                    id="add-cart-{{$item->id}}">
                                                <strong style="font-size: 10px;">Thêm</strong>
                                                <i class="fas fa-cart-plus fa-1x"></i>
                                            </button>
                                        </div>
                                    </div>
                                <!-- /.First row -->
                            @endforeach
                                <a href="" type="button" class="btn btn-primary">Xem thêm menu</a>
                            </div>
                            <!-- /.New Products-->

                            <!-- Top Sellers-->
                            <div class="col-lg-4 col-md-12 pt-4">

                                <hr>
                                <h5 class="text-center font-weight-bold dark-grey-text"><strong>Đồ uống</strong></h5>
                                <hr>

                            @foreach ($drinks as $item)
                                <!-- First row -->
                                    <div class="row mt-5 py-2 mb-4 hoverable align-items-center">
                                        <div class="col-6">
                                            <a><img src="{{$item->thumbnail}}" class="img-fluid imgProduct"></a>
                                        </div>
                                        <div class="col-6 align-items-center">

                                            <!-- Title -->
                                            <a><strong>{{$item->name}}</strong></a>

                                            <!-- Price -->
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text mt-1">
                                                <strong class="badge badge-danger">{{$item->price}} vnđ</strong>
                                            </h6>
                                            <hr>
                                            <button type="button" title="Add to cart"
                                                    class="btn btn-outline-primary btn-sm waves-effect text-center btn-add-cart"
                                                    id="add-cart-{{$item->id}}">
                                                <strong style="font-size: 10px;">Thêm</strong>
                                                <i class="fas fa-cart-plus fa-1x"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.First row -->
                                @endforeach
                                <a href="" type="button" class="btn btn-primary">Xem thêm menu</a>
                            </div>
                            <!-- /.Top Sellers -->

                            <!-- Random Products-->
                            <div class="col-lg-4 col-md-12 pt-4">

                                <hr>
                                <h5 class="text-center font-weight-bold dark-grey-text"><strong>Khác</strong></h5>
                                <hr>

                            @foreach ($others as $item)
                                <!-- First row -->
                                    <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                        <div class="col-6">
                                            <a><img src="{{$item->thumbnail}}" class="img-fluid imgProduct"></a>
                                        </div>
                                        <div class="col-6 align-items-center">

                                            <!-- Title -->
                                            <a><strong>{{$item->name}}</strong></a>

                                            <!-- Price -->
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text mt-1">
                                                <strong class="badge badge-danger">{{$item->price}} vnđ</strong>
                                            </h6>
                                            <hr>
                                            <button type="button" title="Add to cart"
                                                    class="btn btn-outline-primary btn-sm waves-effect text-center btn-add-cart"
                                                    id="add-cart-{{$item->id}}">
                                                <strong style="font-size: 10px;">Thêm</strong>
                                                <i class="fas fa-cart-plus fa-1x"></i>
                                            </button>
                                        </div>

                                    </div>
                                    <!-- /.First row -->
                                @endforeach

                                <a href="" type="button" class="btn btn-primary">Xem thêm menu</a>

                            </div>
                            <!-- /.Random Products -->
                        </div>

                    </section>
                    <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>LAST ITEMS</strong></h4>
                    <hr class="mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="http://static.tapchitaichinh.vn/Uploaded/phamha/2015_12_15/tra-da_WRKD.JPG"
                                         class="img-fluid" alt="" style="object-fit: cover">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Trà
                                                Đá</a></strong></h5>
                                    <span class="badge badge-danger mb-2"><strong>1439$</strong></span>
                                    <!-- Rating -->

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                        <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top"
                                               title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="http://media.phunutoday.vn/files/upload_images/2016/01/21/cach-lam-banh-my-trung-ngon-1-phunutoday_vn.jpg"
                                         class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Bánh Mì
                                                Trứng</a></strong></h5>
                                    <span class="badge badge-danger mb-2"><strong>1439$</strong></span>
                                    <!-- Rating -->

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                        <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top"
                                               title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="http://amthucnangbien.com/upload/sanpham/soda-vo-chanh-panda-zone-fastfood-4859.jpg"
                                         class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Nước Chanh
                                                Tươi</a></strong></h5>
                                    <span class="badge badge-danger mb-2"><strong>1439$</strong></span>
                                    <!-- Rating -->

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                        <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top"
                                               title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://sites.google.com/site/bakerycnc/_/rsrc/1472849145393/home/nhung-loai-banh-noi-tieng-cua-mot-so-quoc-gia-tren-the-gioi/macaron.jpg"
                                         class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">Bánh Ngọt
                                                Macaron</a></strong></h5>
                                    <span class="badge badge-danger mb-2"><strong>1439$</strong></span>
                                    <!-- Rating -->

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                        <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top"
                                               title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                </section>
                <!-- /.Products Grid -->

            </div>
            <!-- /.Content -->

        </div>

    </div>
    <!-- /.Main Container -->

@endsection



