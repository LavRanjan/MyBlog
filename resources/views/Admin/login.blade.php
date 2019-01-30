<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lav Ranjan - Tech Blog -Admin Pannel</title>
    <meta name="description" content="My profile and tech blog." />
    <meta name="keywords" content="Laravel,Eloquent,ORM,Laravel 5.4,javascript,jquery" />
    <meta name="author" content="Lav Ranjan Giri" />

    <!-- CSS
    ================================================== -->
    <link rel="shortcut icon" href="/images/l.png">
    <link rel="stylesheet" type="text/css" href="/login_css/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/login_css/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/login_css/css/component.css" />
    <link href="/login_css/css/loginpage.css" rel="stylesheet" />
    <link href="/login_css/css/animate.css" rel="stylesheet" />
    {{-- <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'> --}}
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    {{-- toaster style sheet --}}
    <link rel="stylesheet" type="text/css" href="/css/toastr.css">
    <link href="/login_css/css/custom.css" rel="stylesheet" />


    <!-- Custom CSS in header
    ================================================== -->
    <style type="text/css">
        .large-header2{
            position: absolute;
            background: center center rgba(51, 51, 51, 0);
            z-index: 9999999;
            margin-top: -620px;
            height: 616px;
        }
    </style>


</head>
<!-- Header Part ends Here
================================================== -->
<body>
<div class="container demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <h1 class="main-title-one">&nbsp;&nbsp;Laravel Tech-Blog</h1>
            <h1 class="main-title"><span class="thin"> Admin Site </span></h1>
            <h3  class="main-title-para"> Please sign to continue ..!</h3>
        </div>

    </div>
    <div id="large-header2" class="large-header2" style="">
        <canvas id="demo-canvas2"></canvas>
    </div>


</div><!-- /container -->
<div class="demo">
    <div class="login">
        <div class="login__check3">
            <img src="../images/p2.jpg" alt="Avatar">
            <p class="name_text">Hello,Lav</p>
        </div>
        <div class="login__form">
        {{-- <form id="signIn_form"> --}}

        {{ csrf_field() }}
        <!-- <div class="login__row">
            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
              <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
            </svg>
            <input type="text" class="login__input name" placeholder="Username"/>
          </div> -->
            <div class="login__row">
                <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                    <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                </svg>
                <input type="password" class="login__input pass" placeholder="Password" id="password"/>
                <p class="error_pwd" id="pwd_error" style="display: none;">Password can't be blank.</p>
                <p class="error_pwd" id="invalid_error" style="display: none;">Invalid password !</p>
            </div>
            <button type="submit" class="login__submit" id="login_submit">Sign in</button>
            <p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>

            {{-- </form> --}}
        </div>
    </div>
</div>

{{-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --}}
<script src="/admin-vendor/jquery-3.2.1.min.js"></script>
<script src="/login_css/js/TweenLite.min.js"></script>
<script src="/login_css/js/EasePack.min.js"></script>
<script src="/login_css/js/rAF.js"></script>
<script src="/login_css/js/demo-1.js"></script>
<script src="/login_css/js/demo-2.js"></script>
<script src="/login_css/js/loginpage.js" type="text/javascript"></script>

<script src="/login_css/js/toastr.min.js" type="text/javascript"></script>
@include('layout.flash-message')
</body>
</html>