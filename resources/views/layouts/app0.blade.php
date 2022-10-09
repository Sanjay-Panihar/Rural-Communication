<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <title>Rural Communication | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png')}}" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slider/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.min.css?version=1.0.1') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth-css/style.css?version=1.0.1') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css?version=1.0.2') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
</head>
<body class="gray-bg">
  <header class="continer-fluid ">
    @include('include.header-top')
    @include('include.navbar')
  </header>

    @yield('content')

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/velocity.min.js"></script>
    <script src="assets/js/velocity.ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
</body>
</html>
