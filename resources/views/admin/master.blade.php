<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/loadingio/loading.css@v2.0.0/dist/loading.min.css">
    {{-- custome styles --}}
    @yield('custom-style')

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div style="
    display: none;
    flex-direction: column;
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 99999999;
    background-color: rgba(122, 117, 117,0.5);
    justify-content: center;
    align-items: center;
    " id="main_loading">
        <div class="ld ld-spinner ld-spin-fast" style="font-size:64px;color:rgb(0, 0, 0)">
        </div>
        <h1>Loading....</h1>
    </div>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        @include('admin.include.navbar')
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                @yield('page-head')


                <!--Page content-->
                <!--===================================================-->
                @yield('content')
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->



            <!--ASIDE-->
            <!--===================================================-->
            @include('admin/include/aside-container')
            <!--===================================================-->
            <!--END ASIDE-->


            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    @include('admin/include/menu')
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        @include('admin/include/footer')
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="{{asset('admin/asset/js/jquery.min.js')}}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset('admin/asset/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('admin/asset/plugins/pace/pace.min.js')}}"></script>
    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{asset('admin/asset/js/nifty.min.js')}}"></script>

    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{{asset('admin/asset/js/demo/nifty-demo.min.js')}}"></script>

    {{-- custom js --}}
    @yield('custom-js')

</body>

</html>
