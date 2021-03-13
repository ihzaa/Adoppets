<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/assets/fonts/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/assets/css/selectize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/user.css')}}">
    @yield('include-css')

    <title>Adopt Pets</title>

</head>

<body>
    <div class="page @yield('nama-page')">

        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero @yield('nama-hero')">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
                @include('user/include/secondary-navigation')
                <!--============ End Secondary Navigation ===========================================================-->
                <!--============ Main Navigation ====================================================================-->
                <div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="{{route('landingpage')}}">
                                <img src="@yield('brand-logo')" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                    <li class="nav-item active ">
                                        <a class="nav-link" href="{{route('landingpage')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('clinic')}}">Informasi Klinik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">Kontak</a>
                                    </li>
                                    <!-- @if (Auth::guard('admin')->check())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('home_admin')}}">Admin</a>
                                    </li>
                                    @endif -->
                                    <li class="nav-item">
                                        <a href="{{route('account')}}"
                                            class="btn btn-primary text-caps btn-rounded btn-framed">Profile
                                            Saya</a>
                                    </li>
                                </ul>
                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                        </nav>
                        <!--end navbar-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Main Navigation ================================================================-->
                <!--============ Page Title =========================================================================-->
                @yield('page-title')
                <!--============ End Page Title =====================================================================-->
                <!--============ Hero Form ==========================================================================-->
                @yield('hero-form')
                <!--============ End Hero Form ======================================================================-->
                @yield('background')
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            @yield('content')
        </section>
        <!--end content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        @include('user/include/footer')
        <!--end footer-->
    </div>
    <!--end page-->
    <div id="main_loading" style="
            display:none;
            background: #504b4b;
            color: black;
            position: fixed;
            height: 100%;
            width: 100%;
            z-index: 5000;
            top: 0;
            left: 0;
            float: left;
            text-align: center;
            padding-top: 25%;
            opacity: .80;
            ">
        <i class="fas fa-2x fa-sync-alt fa-spin"></i>
        <br />
        Loading...
    </div>
    <script src="{{asset('user/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
    <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->
    @yield('js_mid')
    <script src="{{asset('user/assets/js/selectize.min.js')}}"></script>
    <script src="{{asset('user/assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('user/assets/js/icheck.min.js')}}"></script>
    <script src="{{asset('user/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/assets/js/custom.js')}}"></script>
    @yield('js_after')

</body>

</html>
