<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Lav Ranjnan Giri - Software Engineer | Backend Developer | Laravel Developer </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lav Ranjan - Tech Blog -Admin Pannel</title>
    <meta name="description" content="My profile and tech blog." />
    <meta name="keywords" content="Laravel,Eloquent,ORM,Laravel 5.4,javascript,jquery,Mysql,Postgres" />
    <meta name="author" content="Lav Ranjan Giri" />


    <!-- website css in assets folder  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    {{--css for progress bar --}}
    <link rel="stylesheet" type="text/css" href="css/progresscircle.css">

</head>
<body>

    <!-- Header Area wrapper Starts -->
    @include('layout.app-header')
    <!-- Header Area wrapper End -->
    <section class="content">

      @yield('content')

    </section>

    <!-- Footer Section Start -->
    @include('layout.app-footer')
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top"><i class="icon-arrow-up"></i></a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="js/progresscircle.js"></script>

    @yield('jscode')

</body>
</html>
