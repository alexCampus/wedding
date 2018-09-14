<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- Magnific popup  -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon.ico')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <style>
        /* CSS used here will be applied after bootstrap.css */
        .fa-heart{
            color:#e74c3c;
        }
        [class^="fa fa-star"]{
            color:#f1c40f;
        }
        .fa-quote-right{
            font-size:.5em;
        }
        section.panel-title{
            padding:15px;
            padding-top:0;
        }
        #user-description{
            height:100%;
            border-left:2px solid #444;
            margin:0 auto;
            text-align:center;
        }
        figure img{
            display :inline !important;
        }
        h4.online:before{
            background-color:green;
            height:10px;
            width:10px;
            border: 2px solid #11f464;
        }
        dt{
            text-align:left !important;
            width:37% !important;
        }
        dd{
            margin-left:2% !important;
        }

        .panel-footer{
            width:100%;
            min-height:40px;
        }


    </style>
    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
<script type="text/javascript">
    // if ('serviceWorker' in navigator && 'PushManager' in window) {
    //     window.addEventListener('load', function() {
    //         navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
    //             // Registration was successful
    //             console.log('ServiceWorker registration successful with scope: ', registration.scope);
    //         }, function(err) {
    //             // registration failed :(
    //             console.log('ServiceWorker registration failed: ', err);
    //         });
    //     });
    // }
</script>
    @if (!Request::is('/') && !Request::is('login'))
        <header role="banner" id="qbootstrap-header">
            @include('layouts.navbar')
        </header>
    @endif
    <div id="app">
        @include('layouts.header')
        @yield('content')
    </div>
    @include('layouts.footer')
    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>

    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- YTPlayer -->
    <script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup-options.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
