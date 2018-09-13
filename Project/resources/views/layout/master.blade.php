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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('mdb/css/font-awesome.min.css')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <script src="{{asset('mdb/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Daterangepicker script -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="{{asset('css/masterAdmin.css')}}">

    <!-- Your custom styles (optional) -->
    <style>
    </style>
</head>

<body class="fixed-sn white-skin">
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
<!--Main Navigation-->
<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li class="logo-sn waves-effect" style="height: 230px;">
                <div class="text-center">
                    <a href="/admin" class="pl-0"><img src="{{asset('img/logo.png')}}" class="img-fluid"></a>
                </div>
            </li>
            <!--/. Logo -->
            <hr>
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a href="/admin/"
                           class="collapsible-header waves-effect arrow-r {{$current_page == 'home_page'?'active':''}}"><i
                                    class="fa fa-tachometer"></i> Home</i></a>
                    </li>
                    <li><a href="/admin/product"
                           class="collapsible-header waves-effect arrow-r {{$current_page == 'product_page'?'active':''}}"><i
                                    class="fa fa-photo"></i>Product</i></a>

                    </li>
                    <li><a href="/admin/category"
                           class="collapsible-header waves-effect arrow-r {{$current_page == 'category_page'?'active':''}}"><i
                                    class="fa fa-user"></i>Category</i></a>
                    </li>
                    <li><a href="/admin/order"
                           class="collapsible-header waves-effect arrow-r {{$current_page == 'order_page'?'active':''}}"><i
                                    class="fa fa-css3"></i> Order</i></a>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-th"></i>User</i></a>
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
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">
                    <span class="badge" id="notify-number">0</span> <i class="fa fa-bell"></i>
                    <span class="d-none d-md-inline-block">Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink" id="messages"
                     style="width : 200%;">
                    <div class="">
                        <a class="dropdown-item" href="/admin/order/" class="row">
                            <div class="float-left">
                                <img src="https://api.adorable.io/avatars/285/abott@adorable.png" alt=""
                                     class="rounded-circle" alt="50x50" style="width: 70px; height: 70px;">
                            </div>
                            <div class="float-right">
                                <i class="fa fa-money mr-2" aria-hidden="true"></i>
                                Name : <span>Nguyen Duc Minh</span>
                                <br>
                                <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                                Phone : <span>12345678</span>
                                <br>
                                <i class="fa fa-home mr-2" aria-hidden="true"></i>
                                Room : <span>208</span>
                                <br>
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fa fa-envelope"></i> <span
                            class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fa fa-comments-o"></i> <span
                            class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
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
    <div class="container-fluid">
        @section('content')
        @show()
    </div>
</main>

<!--Footer-->
<footer class="page-footer pt-0 mt-5 rgba-stylish-light" id="stopSticky">

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank">
                MDBootstrap.com </a>

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
<script src="https://js.pusher.com/3.1/pusher.min.js"></script>
<script>
    var notifyNumber = parseInt($('#notify-number').html());
    if(notifyNumber == 0){
        $('#notify-number').attr('class', 'badge grey');
    }
    
    //instantiate a Pusher object with our Credential's key
    var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
        cluster: 'ap1',
        encrypted: true
    });

    //Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('canteen');

    //Bind a function to a Event (the full Laravel class)
    channel.bind('App\\Events\\OrderNotifyEvent', addMessage);

    function addMessage(data) {
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var notifyContent = "";

        notifyContent += '<div>';

        notifyContent += '<a class="dropdown-item" href="/admin/order/'+data.order_id+'">';
        notifyContent += '<div class="float-left">';
        notifyContent += '<img src="https://api.adorable.io/avatars/71/' + avatar + '.png" alt="" class="rounded-circle" alt="50x50" style="width: 70px; height: 70px;">';
        notifyContent += '</div>';
        notifyContent += '<div class="">';
        notifyContent += '<i class="fa fa-money mr-2" aria-hidden="true"></i>';
        notifyContent += 'Name : <span>' + data.customer_name + '</span>';
        notifyContent += '<br>';
        notifyContent += '<i class="fa fa-phone mr-2" aria-hidden="true"></i>';
        notifyContent += 'Phone : <span>' + data.ship_phone + '</span>';
        notifyContent += '<br>';
        notifyContent += '<i class="fa fa-house mr-2" aria-hidden="true"></i>';
        notifyContent += 'Room : <span>' + data.room + '</span>';
        notifyContent += '<br>';
        notifyContent += '<i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>';
        //notifyContent += '<span>  Status : New Order</span>';
        notifyContent += '</div>';
        notifyContent += '</a>';
        notifyContent += '</div>';

        $('#messages').prepend(notifyContent);
        notifyNumber+=1;
        $('#notify-number').text(notifyNumber);
        $('#notify-number').attr('class', 'badge red');
    }

    
</script>
<script>
    $(window).on('load', function () {
        $('.loader').addClass('complete');
    })
</script>
</body>

<!-- Mirrored from mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Aug 2018 16:11:53 GMT -->
</html>