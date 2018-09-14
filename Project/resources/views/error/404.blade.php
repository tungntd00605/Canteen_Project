@extends('layout.client',['page_title' => 'Trang 404 | FPT Canteen',
                        'current_page' => 'Error 404'])
@section('content')
    <head>
        <link href="{{asset('css/404.css')}}" rel="stylesheet" type="text/css" media="all">
        <link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
    <div class="header">
        <h1>Error!!! Page not found</h1>
    </div>
    <div class="w3-main">
        <div class="agile-info ">
            <h3>SORRY</h3>
            <h2>404</h2>
            <p>An error Occurred in the Application And Your Page could not be Served.</p>

            <a href="#" style="font-size: 16px;" onclick="history.go(-1)">Go Back</a>
        </div>

    </div>
    </body>
    @endsection