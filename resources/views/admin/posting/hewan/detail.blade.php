@extends('admin/master')

@section('title')
Detail Postingan Hewan
@endsection

{{-- my css --}}
@section('custom-style')

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



<!--DataTables [ OPTIONAL ]-->
<link href="{{asset('admin/asset/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('admin/asset/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css')}}"
    rel="stylesheet">
<link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}" type="text/css">

<style>
    .splide__slide img {
        width: 100%;
        height: auto;
    }
</style>
@endsection

{{-- judul halaman pada bagian atas halaman --}}
@section('page-head')
<div id="page-head">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Detail Postingan Hewan</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard_admin')}}"><i class="demo-pli-home"></i></a></li>
        <li><a href="">Posting</a></li>
        <li><a href="{{route('admin_posting_hewan')}}">Data Postingan Hewan</a></li>
        <li class="active">Detail</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->
</div>
@endsection

{{-- content halaman --}}
@section('content')
<div id="page-content">
    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel blog blog-details">
        <div class="panel-body">
            <div class="blog-title media-block">
                <div class="media-right textright">
                </div>
                <div class="media-body">
                    <a href="#" class="btn-link">
                        <h1>{{ $data->title}}</h1>
                    </a>
                </div>
            </div>
            <div id="primary-slider" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($asset_posting as $item)
                        {{-- <li class="splide__slide" style="display: flex;justify-content: center;
                        align-items: center;">
                            <img class="img-fluid" style="max-height: 250px;" src="{{asset($item->path)}}">
                        </li> --}}

                        <li class="splide__slide">
                            <img src="{{asset($item->path)}}">
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
            <div id="secondary-slider" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($asset_posting as $item)
                        {{-- <li class="splide__slide" style="display: flex;justify-content: center;
                        align-items: center;">
                            <img class="img-fluid" style="max-height: 250px;" src="{{asset($item->path)}}">
                        </li> --}}

                        <li class="splide__slide">
                            <img src="{{asset($item->path)}}">
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- <section>
                <div class="gallery-carousel owl-carousel">
                    @foreach ($asset_posting as $item)
                    <img src="{{asset($item->path)}}" alt="" data-hash="{{$loop->iteration}}">
            @endforeach
        </div>
        <div class="gallery-carousel-thumbs owl-carousel">
            @foreach ($asset_posting as $item)
            <a href="#{{$loop->iteration}}" class="owl-thumb active-thumb background-image">
                <img src="{{asset($item->path)}}" alt="">
            </a>
            @endforeach
        </div>
        </section> --}}
        <div class="blog-content">

            <div class="blog-body">

                <table class="table">
                    <tbody>
                        <tr>
                            <td>Ras</td>
                            <td width="10">:</td>
                            <td>{{$data->ras}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$data->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>:</td>
                            <td>{{$data->umur}}</td>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>:</td>
                            <td>{{$data->makanan}}</td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td>:</td>
                            <td>{{$data->warna}}</td>
                        </tr>
                        <tr>
                            <td>Kondisi Fisik</td>
                            <td>:</td>
                            <td>{{$data->kondisi_fisik}}</td>
                        </tr>
                        <tr>
                            <td>Informasi Lain</td>
                            <td>:</td>
                            <td>{{$data->informasi_lain}}</td>
                        </tr>
                    </tbody>
                </table>
                <ul>
                    List Vaksin:
                    @foreach ($vaccines as $item)
                    <li>{{$item->keterangan}} - {{\Carbon\Carbon::parse($item->tanggal)->format('d.m.Y')}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="blog-footer">
            <div class="media-left">
                <span class="label label-success">{{\Carbon\Carbon::parse($data->created_at)->format('d.m.Y')}}</span>
                <small>Diposting Oleh : <a href="#" class="btn-link">{{$user[$data->user_id]}}</a></small>
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!-- End Striped Table -->

</div>
@endsection

{{-- cutom java script --}}
@section('custom-js')

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

<!--DataTables [ OPTIONAL ]-->
<script src="{{asset('admin/asset/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/asset/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('admin/asset/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}">
</script>


<!--DataTables Sample [ SAMPLE ]-->
<script src="{{asset('admin/asset/js/demo/tables-datatables.js')}}"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
    // document.addEventListener( 'DOMContentLoaded', function () {
	// 	new Splide( '.splide',{type     : 'slide',
	// autoWidth: true,
	// focus    : 'center',} ).mount();
	// } );
    document.addEventListener( 'DOMContentLoaded', function () {
	var secondarySlider = new Splide( '#secondary-slider', {
		fixedWidth  : 100,
		height      : 60,
		gap         : 10,
		cover       : true,
		isNavigation: true,
		focus       : 'center',
		breakpoints : {
			'600': {
				fixedWidth: 66,
				height    : 40,
			}
		},
	} ).mount();

	var primarySlider = new Splide( '#primary-slider', {
		type       : 'fade',
		heightRatio: 0.5,
		pagination : false,
		arrows     : false,
		cover      : true,
	} ); // do not call mount() here.

	primarySlider.sync( secondarySlider ).mount();
} );
</script>
@endsection
