<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>@yield('title')</title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ]-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="{{asset('admin/asset/css/bootstrap.min.css')}}" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="{{asset('admin/asset/css/nifty.min.css')}}" rel="stylesheet">


	<!--Nifty Premium Icon [ DEMONSTRATION ]-->
	<link href="{{asset('admin/asset/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">


	<!--=================================================-->


	<!--Pace - Page Load Progress Par [OPTIONAL]-->
	<link href="{{asset('admin/asset/plugins/pace/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset('admin/asset/plugins/pace/pace.min.js')}}"></script>

	<!--Demo [ DEMONSTRATION ]-->
	<link href="{{asset('admin/asset/css/demo/nifty-demo.min.css')}}" rel="stylesheet">

    {{-- custome styles --}}
    @yield('custom-style')

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
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


	<!--NiftyJS [ RECOMMENDED ]-->
	<script src="{{asset('admin/asset/js/nifty.min.js')}}"></script>




	<!--=================================================-->

	<!--Demo script [ DEMONSTRATION ]-->
	<script src="{{asset('admin/asset/js/demo/nifty-demo.min.js')}}"></script>


	<!--Flot Chart [ OPTIONAL ]-->
	<script src="{{asset('admin/asset/plugins/flot-charts/jquery.flot.min.js')}}"></script>
	<script src="{{asset('admin/asset/plugins/flot-charts/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('admin/asset/plugins/flot-charts/jquery.flot.tooltip.min.js')}}"></script>


	<!--Sparkline [ OPTIONAL ]-->
	<script src="{{asset('admin/asset/plugins/sparkline/jquery.sparkline.min.js')}}"></script>


	<!--Specify page [ SAMPLE ]-->
	<script src="{{asset('admin/asset/js/demo/dashboard.js')}}"></script>

    {{-- custom js --}}
    @yield('custom-js')

</body>

</html>
