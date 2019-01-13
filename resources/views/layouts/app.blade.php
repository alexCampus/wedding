<!DOCTYPE html>
<html lang="fr_FR">
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

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

        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: #898687; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 15px; /* Some padding */
            border-radius: 10px; /* Rounded corners */
            font-size: 18px; /* Increase font size */
        }

        #myBtn:hover {
            background-color: #555; /* Add a dark-grey background on hover */
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

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
    <header role="banner" id="qbootstrap-header">
        @include('layouts.navbar')
    </header>
    <div id="app">
        @include('layouts.header')
        @yield('content')
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-1x fa-angle-up"></i></button>
    @include('layouts.footer')
@yield('script')
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
