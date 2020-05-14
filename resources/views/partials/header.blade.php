<!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FELS - Online</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('scss/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/gijgo.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{ asset('scss/css/style.css') }}">
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    </head>

    <body>
        <!--[if lte IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid p-0">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo-img">
                                    <a href="index.html">
                                        <img src="scss/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="Courses.html">Courses</a></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="course_details.html">Words</a></li>
                                                    <li><a href="elements.html">Lessions</a></li>
                                                    <li><a href="elements.html">Answers</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">Categories</a></li>
                                            <li><a href="#">Choices</a></li>
                                            <li><a href="#">Followers <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="#">blog</a></li>
                                                    <li><a href="#">single-blog</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="">{{ trans('admin/lessions/list_les.admin') }}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 nav navbar-nav navbar-right">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="col-xl-3 col-lg-3" href="{{ route('login') }}">Login</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="d-none d-lg-block main-menu">
                                       <ul id="navigation">
                                            <li><b class="cursor-pointer">{{ Auth::user()->name }}</b>
                                                <ul class="submenu">

                                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                   </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
