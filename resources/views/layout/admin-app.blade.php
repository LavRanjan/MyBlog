<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="/css/font-face.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/admin-vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- admin-vendor CSS-->
    <link href="/admin-vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/admin-vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/css/toastr.css">

    <!-- Main CSS-->
    <link href="/css/theme.css" rel="stylesheet" media="all">
    {{-- code mirror css file  --}}
    <link href="/css/codemirror.css" rel="stylesheet" />
    <link href="/login_css/css/custom.css" rel="stylesheet" />


</head>

<body class="animsition">
<div class="page-wrapper">
@include('layout.admin-mobile-header')

@include('layout.admin-side-menu')

<!-- PAGE CONTAINER-->
    <div class="page-container">

        <!-- including here header part of admin-vendor pannel
        ============================================-->
    @include('layout.admin-header')

    <!-- yield all body content here
        ============================================-->
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                @yield('content')

                <!-- yield all body content here
                    ============================================-->

                    @include('layout.admin-footer')

                </div>

            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="/admin-vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/admin-vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/admin-vendor/bootstrap-4.1/bootstrap.min.js"></script>
{{-- <script src="/js/jquery.dataTables.min.js"></script> --}}
<!-- admin-vendor JS       -->
<script src="/admin-vendor/slick/slick.min.js">
</script>
<script src="/admin-vendor/wow/wow.min.js"></script>
<script src="/admin-vendor/animsition/animsition.min.js"></script>
<script src="/admin-vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="/admin-vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="/admin-vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="/admin-vendor/circle-progress/circle-progress.min.js"></script>
<script src="/admin-vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/admin-vendor/chartjs/Chart.bundle.min.js"></script>
<script src="/admin-vendor/select2/select2.min.js">
</script>

<script src="/js/jquery.dataTables.min.js"></script>
<!-- Main JS-->
<script src="/js/main.js"></script>

<script src="/js/codemirror.js"></script>
<script src="/js/toastr.min.js" type="text/javascript"></script>

@include('layout.flash-message')
@yield('jscode')
</body>

</html>