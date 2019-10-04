<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/themify-icons.css') }}" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Theme CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Med Icons -->
        <link href="{{ asset('fonts/health/flaticon.css') }}" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="{{ asset('fonts/opensans.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('fonts/oswald.css') }}" rel='stylesheet' type='text/css'>
    </head>
    <body class="passp_white">
        <!-- Passpartu -->
        <div class="passpartu passpartu_left"></div>
        <div class="passpartu passpartu_right"></div>
        <div class="passpartu passpartu_top"></div>
        <div class="passpartu passpartu_bottom"></div>
        <!-- Passpartu End -->
        <div class="page" id="page">
            <div class="head_bck" data-color="#292929"  data-opacity="0.5"></div>
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </div>
        <!-- Page End -->
        <!-- JQuery -->
        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        <!-- WL Carousel JS -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- PrefixFree -->
        <script src="{{ asset('js/prefixfree.min.js') }}"></script>
        <!-- Magnific Popup core JS file -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Textillate -->
        <script src="{{ asset('js/jquery.lettering.js') }}"></script>
        <!-- Countdown -->
        <script src="{{ asset('js/jquery.plugin.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <!-- JQuery UI -->
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <!-- Wow -->
        <script src="{{ asset('js/wow.js') }}"></script>
        <!-- Masonry -->
        <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Theme JS -->
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
