@extends('layout.master',['page_title' => 'Trang 404 | Seafashion Admin Page',
'current_menu' => 'category_manager',
    'current_sub_menu' => 'form',])
@section('content')
    <head>
        <link href="{{asset('css/404.css')}}" rel="stylesheet" type="text/css" media="all">
        {{--<link href="/assets/css/font-awesome.css" rel="stylesheet">--}}
        <link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
    <div class="header">
        <h1>error!!! page not found</h1>
    </div>
    <div class="w3-main">
        <div class="agile-info ">
            <h3>SORRY</h3>
            <h2>404</h2>
            <p>An error Occurred in the Application And Your Page could not be Served.</p>

            <a href="/admin/category">go back</a>
        </div>

    </div>
    {{--<div class="footer-w3l">--}}
        {{--<p>&copy; 2018 Error Page. All rights reserved | Design by <a href="admin/category">Sea Fashion</a></p>--}}
    {{--</div>--}}

    </body>
    @endsection