@extends('user/master')

@section('include-css')
<link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('user/assets/fonts/font-awesome.css')}}" type="text/css">
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>

@endsection

@section('nama-page', 'sub-page')
@section('page-title')
<div class="page-title">
    <div class="container clearfix">
        <div class="float-left float-xs-none">
            <h1>{{$data->title}}
                <span class="tag">Offer</span>
            </h1>
            <h4 class="location">
                <a href="#">{{$data->lokasi}}</a>
            </h4>
        </div>
        <div class="float-right float-xs-none price">
            <div class="number">Like</div>
            <div class="id opacity-50">
                <strong id="likeCounter">{{$like['counter']}}</strong>
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
                                    @foreach($edit as $dit)
                                    <tbody>
                                        <td>{{$dit->tanggal}}</td>
                                        <td>{{$dit->keterangan}}</td>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-8">
                                <h2>Lokasi</h2>
                                {{-- <div class="map height-300px" id="map-small"></div> --}}
                                <div id="map" style="width: 100%; height: 480px"></div>
                                {{-- <input name="latitude" type="text" class="form-control" id="latitude" value="{{$edit->}}"
                                hidden>
                                <input name="longitude" type="text" class="form-control" id="longitude"
                                    value="106.816666" hidden> --}}
                                <a href="http://maps.google.com?q={{$data->latitude}},{{$data->longitude}}"
                                    target="_blank" class="text-danger"><strong>Klik Disini Untuk
                                        Navigasi Maps</strong></a>
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
<script>
objCoords = {
    lat: "{{$data->latitude}}",
    lng: "{{$data->longitude}}",
};

function addDraggableMarker(map, behavior) {
    var marker = new H.map.Marker(objCoords, {
        volatility: true,
    });
    // marker.draggable = true;
    map.addObject(marker);
    map.addEventListener(
        "dragstart",
        function(ev) {
            var target = ev.target,
                pointer = ev.currentPointer;
            if (target instanceof H.map.Marker) {
                var targetPosition = map.geoToScreen(
                    target.getGeometry()
                );
                target["offset"] = new H.math.Point(
                    pointer.viewportX - targetPosition.x,
                    pointer.viewportY - targetPosition.y
                );
                behavior.disable();
            }
        },
        false
    );
    map.addEventListener(
        "dragend",
        function(ev) {
            var target = ev.target;
            if (target instanceof H.map.Marker) {
                behavior.enable();
            }
        },
        false
    );
    map.addEventListener(
        "drag",
        function(ev) {
            var target = ev.target,
                pointer = ev.currentPointer;
            if (target instanceof H.map.Marker) {
                target.setGeometry(
                    map.screenToGeo(
                        pointer.viewportX - target["offset"].x,
                        pointer.viewportY - target["offset"].y
                    )
                );
            }
        },
        false
    );
}
var platform = new H.service.Platform({
    apikey: "nnHrOmFFjmffnY9Xp68b7iIBObnxTfgzwnerEaYVKqg",
});
var defaultLayers = platform.createDefaultLayers();
var map = new H.Map(
    document.getElementById("map"),
    defaultLayers.vector.normal.map, {
        center: objCoords,
        zoom: 12,
        pixelRatio: window.devicePixelRatio || 1,
    }
);
window.addEventListener("resize", () => map.getViewPort().resize());
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
var ui = H.ui.UI.createDefault(map, defaultLayers, "en-US");
addDraggableMarker(map, behavior);
</script>

@endsection