<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{$page_title}}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('mdb/js/jquery-3.3.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/styleHome.css')}}">

</head>

<body class="homepage-v3 hidden-sn white-skin animated">

<!-- 2 -->
<div class="loader loader--style2">
    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="50px" height="50px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
          <path fill="#000" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
              <animateTransform attributeType="xml"
                                attributeName="transform"
                                type="rotate"
                                from="0 25 25"
                                to="360 25 25"
                                dur="0.6s"
                                repeatCount="indefinite"/>
          </path>
        </svg>
</div>

<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="/"><img src="{{asset('img/logo.png')}}" alt="LOGO" style="max-width: 65px"></a> <b style="line-height: 200%; margin-top: 10px; font-size: 19px; font-weight: bold">FPT
                <small class="text-muted" style="font-size: 13px">Canteen</small></b>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown ml-3">
                        <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-utensils blue-text"></i> Danh mục </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item waves-effect waves-light" href="/category">Tất cả</a>
                            @foreach($nav_category as $item)
                            <a class="dropdown-item waves-effect waves-light" href="/category?categoryId={{$item->id}}">{{$item->name}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dark-grey-text font-weight-bold waves-effect waves-light" href="#" data-toggle="modal" data-target="#cart-modal-ex">
                            <span id="cart-count-icon" class="badge {{\App\ShoppingCart::getTotalItem() == 0?'grey':'danger-color'}}">{{\App\ShoppingCart::getTotalItem()}}</span>
                            <i class="fa fa-shopping-cart blue-text" aria-hidden="true"></i>
                            <span class="clearfix d-none d-sm-inline-block">Giỏ Hàng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="/contact"><i class="fa fa-envelope blue-text"></i> Liên hệ<span class="sr-only">(current)</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</header>

@section('content')
@show()

<!--Footer-->
<footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

    <div style="background-color: #4285f4;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Kết nối qua các trang xã hội!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0 px-2">
                        <i class="fab fa-facebook-f white-text"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic px-2">
                        <i class="fab fa-twitter white-text"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic px-2">
                        <i class="fab fa-google-plus white-text"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Giới Thiệu</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
                <p><a href="/"><strong>Canteen-fpt</strong></a>. Phục vụ nhiệt tình chu đáo,có thể gọi đồ online.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Nhóm Thực Hiện</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 145px;">
                <p>Nguyễn Thanh Tùng</p>
                <p>Nguyễn Công Đoàn</p>
                <p>Nguyễn Đức Minh</p>
                <p>Lê Khang Hiếu</p>
                <p>Support: Trịnh Quốc Việt</p>
                <p>Advisor: Đào Hồng Luyến</p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Địa chỉ</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    Tòa nhà Detech, số 8a, Tôn Thất Thuyết, Cầu Giấy, Hà Nội.
                </p>

            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>
                        Hỗ trợ
                    </strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> Hà Nội</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> canteenfpt@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 0166 807 7320</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank">Fpt-Aptech-T1708E</a>
        </div>
    </div>
    <!--/.Copyright -->

</footer>

<!--/.Footer-->

<!-- Cart Modal -->
<div class="modal fade cart-modal" id="cart-modal-ex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content" >
            <!--Header-->
            <div class="modal-header" >
                <h4 class="modal-title font-weight-bold dark-grey-text" id="myModalLabel">Giỏ hàng của bạn</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body" id="style-4">
                <table class="table table-hover" >
                    <thead>
                    <tr>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                    </tr>
                    </thead>
                    <tbody id="cart-body">
                    @if(count(\App\ShoppingCart::getCart()->items)>0)
                            @foreach(\App\ShoppingCart::getCart()->items as $item)
                                <tr>
                                    <th scope="row"><img src="{{$item->product->thumbnail}}" class="img-fluid img-thumbnail imgProductCart" width="110px" alt=""></th>
                                    <td>{{$item->product->name}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->product->discountPriceString}}</td>
                                </tr>
                            @endforeach
                    @else
                        <tr>
                            <td colspan="4"><strong style="font-size: 16px;">Hiện tại không có sản phẩm nào trong giỏ hàng</strong></td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <hr>
                <div class="text-right" style="font-weight: bold">
                    Tổng cộng: <span
                            id="cart-total">{{\App\ShoppingCart::getCart()->getTotalMoneyString()}}</span>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-grey btn-rounded btn-sm" data-dismiss="modal">Đóng</button>
                <a href="/cart">
                    <button type="button" class="btn btn-rounded btn-sm btn-cart">Thanh toán</button>
                </a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

<!-- /.Cart Modal -->


<!-- SCRIPTS -->


<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>

<!-- Sweet alert JavaScript -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Custome script -->
<script type="text/javascript" src="{{asset('js/client.js')}}"></script>

<script>
    $(window).on('load',function () {
        $('.loader').addClass('complete');
    })
</script>

</body>

</html>