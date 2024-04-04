<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>phpHotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Dropdown Menu -->
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/superfish.css') }}">
    <!-- Owl Slider -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/bootstrap-datepicker.min.css') }}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/cs-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/cs-skin-border.css') }}">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/themify-icons.css') }}">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/flaticon.css') }}">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/icomoon.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/flexslider.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/home-assets/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('assets/home-assets/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <script src="{{ asset('assets/home-assets/js/respond.min.js') }}"></script>
    @livewireStyles

</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <livewire:homelayout.header />

            @yield('content')

            <livewire:homelayout.footer />


        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- Javascripts -->
    <script src="{{ asset('assets/home-assets/js/jquery-2.1.4.min.js') }}"></script>
    <!-- Dropdown Menu -->
    <script src="{{ asset('assets/home-assets/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/home-assets/js/superfish.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/home-assets/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('assets/home-assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Counters -->
    <script src="{{ asset('assets/home-assets/js/jquery.countTo.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('assets/home-assets/js/jquery.stellar.min.js') }}"></script>
    <!-- Owl Slider -->
    <!-- // <script src="js/owl.carousel.min.js')}}'"></script> -->
    <!-- Date Picker -->
    <script src="{{ asset('assets/home-assets/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- CS Select -->
    <script src="{{ asset('assets/home-assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/home-assets/js/selectFx.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('assets/home-assets/js/jquery.flexslider-min.js') }}"></script>

    <script src="{{ asset('assets/home-assets/js/custom.js') }}"></script>
    @livewireScripts

</body>

</html>
