@extends('user/master')

@section('include-css')
<link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}" type="text/css">
@endsection

@section('nama-page', 'sub-page')
@section('page-title')
<div class="page-title">
    <div class="container clearfix">
        <div class="float-left float-xs-none">
            <h1>Hewan Siap Adopsi
                <span class="tag">Offer</span>
            </h1>
            <h4 class="location">
                <a href="#">Manhattan, NY</a>
            </h4>
        </div>
        <div class="float-right float-xs-none price">
            <div class="number">Like</div>
            <div class="id opacity-50">
                <strong>56789</strong>
            </div>
        </div>
    </div>
    <!--end container-->
</div>
@endsection

@section('nama-hero')

@endsection

@section('brand-logo')
{{asset('user/assets/img/include_image/logo_adoptpets.png')}}
@endsection

@section('hero-form')

@endsection

@section('background')
<div class="background">
    <div class="background-image original-size">
        <img src="{{asset('user/assets/img/footer-background-icons.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="content">
    <section class="block">
        <div class="container">
            <div class="row">
                <!--============ Listing Detail =============================================================-->
                <div class="col-md-9">
                    <!--Gallery Carousel-->
                    <section>
                        <h2>Gallery</h2>
                        <!--end section-title-->
                        <div class="gallery-carousel owl-carousel">
                            <img src="{{asset('user/assets/img/image-20.jpg')}}" alt="" data-hash="1">
                        </div>
                        <div class="gallery-carousel-thumbs owl-carousel">
                            @foreach ($asset_posting as $item)
                            <a href="#1" class="owl-thumb active-thumb background-image">
                                <img src="{{asset($item->path)}}" alt="">
                            </a>
                            @endforeach
                        </div>
                    </section>
                    <!--end Gallery Carousel-->
                    <!--Description-->
                    <section>
                        <h2>Description</h2>
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
                    </section>
                    <!--end Description-->
                    <!--Details & Location-->
                    <section>
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Informasi vaksin</h2>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Vaksin</th>
                                            <th>Jenis Vaksin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>Jenis Vaksin</td>
                                        <td></td>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-8">
                                <h2>Location</h2>
                                <div class="map height-300px" id="map-small"></div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--============ End Listing Detail =========================================================-->
                <!--============ Sidebar ====================================================================-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>
@endsection

@section('js_after')
<script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/assets/js/custom.js')}}"></script>
<script>
    var latitude = 51.511971;
var longitude = -0.137597;
var markerImage = "{{asset('user/assets/img/map-marker.png')}}";
var mapTheme = "light";
var mapElement = "map-small";
simpleMap(latitude, longitude, markerImage, mapTheme, mapElement);
</script>
@endsection
