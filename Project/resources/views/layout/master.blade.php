<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Aug 2018 16:11:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$page_title}}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('mdb/css/font-awesome.min.css')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}"> 
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <script src="{{asset('mdb/js/jquery-3.3.1.min.js')}}"></script>

    <!-- Your custom styles (optional) -->
    <style>
    </style>
</head>

<body class="fixed-sn white-skin">

    <!--Main Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
            <!-- Logo -->
            <li class="logo-sn waves-effect"  style="height: 230px;">
                <div class="text-center">
                    <a href="#" class="pl-0"><img src="{{asset('img/logo.png')}}" class="img-fluid" ></a>
                </div>
            </li>
            <!--/. Logo -->

            <!--Search Form-->
            {{--<li>--}}
                {{--<form class="search-form" role="search">--}}
                    {{--<div class="form-group md-form mt-0 pt-1 waves-light">--}}
                        {{--<input type="text" class="form-control" placeholder="Search">--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</li>--}}
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-tachometer"></i> Home<i class="fa fa-angle-down rotate-icon"></i></a>
                    </li>
                    <li><a href="/admin/product" class="collapsible-header waves-effect arrow-r {{$current_page == 'product_page'?'active':''}}"><i class="fa fa-photo"></i>Product<i class="fa fa-angle-down rotate-icon"></i></a>
                       
                    </li>
                    <li><a href="/admin/category" class="collapsible-header waves-effect arrow-r {{$current_page == 'category_page'?'active':''}}"><i class="fa fa-user"></i>Category<i class="fa fa-angle-down rotate-icon"></i></a>
                    </li>
                    <li><a href="/admin/order" class="collapsible-header waves-effect arrow-r {{$current_page == 'order_page'?'active':''}}"><i class="fa fa-css3"></i> Order<i class="fa fa-angle-down rotate-icon"></i></a>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-th"></i>User<i class="fa fa-angle-down rotate-icon"></i></a>              
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Admin Dashboard</p>
            </div>

            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                <!-- Dropdown -->
                <li class="nav-item dropdown notifications-nav">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="badge red">3</span> <i class="fa fa-bell"></i>
                        <span class="d-none d-md-inline-block">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            <span>New order received</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            <span>New order received</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 33 min</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-line-chart mr-2" aria-hidden="true"></i>
                            <span>Your campaign is about to end</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 53 min</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Log Out</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>

            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->

        <!-- Fixed button -->
        <div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;" id="backToTop">
            <a href="#top-section" class="btn-floating btn-large red">
                <i class="fa fa-arrow-up"></i>
            </a>
        </div>
        <!-- Fixed button -->

    </header>
    <!--Main Navigation-->

    <main id="top-section">
        <div class="container-fluid" >
                @section('content')
                @show()
        </div>
    </main>

    <!--Footer-->
    <footer class="page-footer pt-0 mt-5 rgba-stylish-light">

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
              <div class="container-fluid">
                 © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('mdb/js/bootstrap.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
    <!-- Sweet alert JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Initializations-->
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        // Data Picker Initialization
        $('.datepicker').pickadate();

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        // Hide back to top button

    </script>

</body>

<!-- Mirrored from mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Aug 2018 16:11:53 GMT -->
</html>