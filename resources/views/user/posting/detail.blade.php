@extends('user/master')

@section('include-css')
<link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('user/assets/fonts/font-awesome.css')}}" type="text/css">
{{-- <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script> --}}
<style>
    .tombol {
        margin-left: 8px;
    }
</style>
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
                        <!-- <h2>Gallery</h2> -->
                        <!--end section-title-->
                        <div class="gallery-carousel owl-carousel">
                            @foreach ($asset_posting as $item)
                            <img src="{{asset($item->path)}}" alt="" data-hash="{{$loop->iteration}}">
                            @endforeach
                            {{-- <img src="{{asset('user/assets/img/image-20.jpg')}}" alt="" data-hash="2"> --}}

                        </div>
                        <div class="gallery-carousel-thumbs owl-carousel">
                            @foreach ($asset_posting as $item)
                            <a href="#{{$loop->iteration}}" class="owl-thumb active-thumb background-image">
                                <img src="{{asset($item->path)}}" alt="">
                            </a>
                            @endforeach

                            {{-- <a href="#2" class="owl-thumb background-image">
                                <img src="{{asset('user/assets/img/image-20.jpg')}}" alt="">
                            </a> --}}

                        </div>
                    </section>
                    <!--end Gallery Carousel-->
                    @if (Auth::guard('user')->check())
                    @if (Auth::guard('user')->user()->id != $data->user_id)
                    <section>
                        <div class="row justify-content-end">
                            <button class="tombol btn btn-framed btn-primary btn-rounded">Report</button>
                            @if ($like['isLike'] == 0)
                            <button class="tombol btn btn-framed btn-info btn-rounded btn_like"
                                data-id="{{$data->id}}">Like</button>
                            @else
                            <button class="tombol btn btn-framed btn-primary btn-rounded btn_dislike"
                                data-id="{{$data->id}}">Dislike</button>
                            @endif
                            @if ($isAdopt=='' )
                            <button class="tombol btn btn-framed btn-info btn-rounded" id="btn_adopt">Adopt</button>
                            @else
                            <button class="tombol btn btn-framed btn-danger btn-rounded" id="btn_unadopt"
                                data-id="{{$isAdopt->id}}">Unadopt</button>
                            @endif

                        </div>
                    </section>
                    @endif
                    @else
                    <section>
                        <div class="row justify-content-end">
                            <button class="tombol btn btn-framed btn-primary btn-rounded">Report</button>
                            <button class="tombol btn btn-framed btn-info btn-rounded btn_like"
                                data-id="{{$data->id}}">Like</button>
                            @if ($isAdopt=='' )
                            <button class="tombol btn btn-framed btn-info btn-rounded" id="btn_adopt">Adopt</button>
                            @else
                            <button class="tombol btn-framed btn-danger btn-rounded" id="btn_unadopt"
                                data-id="{{$isAdopt->id}}">Unadopt</button>
                            @endif
                        </div>
                    </section>
                    @endif

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
                                <h2>Location</h2>
                                {{-- <div class="map height-300px" id="map-small"></div> --}}
                                {{-- <div id="map" style="width: 100%; height: 480px"></div> --}}
                                {{-- <input name="latitude" type="text" class="form-control" id="latitude" value="{{$edit->}}"
                                hidden>
                                <input name="longitude" type="text" class="form-control" id="longitude"
                                    value="106.816666" hidden> --}}
                            </div>
                        </div>
                    </section>
                    <!--end Details and Locations-->
                    {{-- like and report --}}
                    <section>
                        <div class="row justify-content-end">
                            <button><i class="fas fa-heart"></i></button>
                            <a href=""><i class="fas fa-share-alt"></i></a>
                        </div>
                    </section>
                    {{-- akhir like and report --}}
                    <!--Author-->
                    <section>
                        <h2>Author <a href='#'>
                                <li class='fa fa-exclamation-circle'></li>
                            </a>
                        </h2>
                        <div class="box">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="author">
                                        <div class="author-image">
                                            <div class="background-image">
                                                <img src="{{asset($user_foto[$data->user_id])}}" alt="">
                                            </div>
                                        </div>
                                        <!--end author-image-->
                                        <div class="author-description">
                                            <div class="section-title">
                                                <h3>{{$user[$data->user_id]}}</h3>
                                                <h5><a href="#"><i class="fa fa-map-marker"></i>
                                                        {{$deskripsi['domisili_sekarang'][$data->user_id]}}</a></h5>
                                                <hr>
                                                <h4 class="phone">
                                                    <a href="#"><i class="fa fa-phone"></i>
                                                        {{$deskripsi['nomor_telpon'][$data->user_id]}}</a>
                                                </h4>
                                                <h4 class="phone">
                                                    <a href="#"><i class="fa fa-whatsapp "></i>
                                                        {{$deskripsi['no_wa'][$data->user_id]}}</a>
                                                </h4 class="email">
                                                <h4><a href="#"><i class="fa fa-envelope"></i>
                                                        {{$deskripsi['email'][$data->user_id]}}</a></h4>

                                            </div>
                                        </div>
                                        <!--end author-description-->
                                    </div>

                                    <!--end author-->
                                </div>
                                <!--end col-md-5-->

                                <!--end col-md-7-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end box-->
                    </section>
                    <!--End Author-->
                </div>
                <!--============ End Listing Detail =========================================================-->
                <!--============ Sidebar ====================================================================-->
                <div class="col-md-3">
                    <aside class="sidebar">
                        <section>
                            <h2>Similar Post</h2>
                            <div class="items compact">
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Kusing</a>
                                                <a href="single-listing-1.html" class="title">Kucing Persia Lucu</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="{{asset('user/assets/img/image-01.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Malang Kabupaten</a>
                                        </h4>
                                        <div class="price">persia</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end item-->
                            </div>

                        </section>
                    </aside>
                </div>
                <!--============ End Sidebar ================================================================-->
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
    const post_id = "{{$data->id}}"
    $("#btn_adopt").on("click",function(){
        let data = {
            id : post_id
        }
        $("#main_loading").show();
        fetch("{{route('adopt')}}", {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        })
        .then(response => {
            if (response.status == 201) {
                return "EROR"
            } else {
                return response.json()
            }
        })
        .then(data => {
            if (data == "EROR") {
                window.location.replace("{{route('get_login')}}");
            } else {
                location.reload();
            }
        })
        .catch(err => console.log(err))
        .finally(()=>{
        $("#main_loading").hide();
        });
    })
    $("#btn_unadopt").on("click",function(){
        let data = {
            id : $(this).data('id')
        }
        $("#main_loading").show();
        fetch("{{route('unadopt')}}", {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        })
        .then(response => {
            if (response.status == 201) {
                return "EROR"
            } else {
                return response.json()
            }
        })
        .then(data => {
            if (data == "EROR") {
                window.location.replace("{{route('get_login')}}");
            } else {
                location.reload();
            }
        })
        .catch(err => console.log(err))
        .finally(()=>{
            $("#main_loading").hide();
        });
    })

    $(document).on('click','.btn_like',function(){
        let data = {
            id : $(this).data('id')
        }
        // $("#main_loading").show();
        $(this).html(`Loading...`);
        $(this).removeClass('btn_like');
        fetch("{{route('likePosting')}}", {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        })
        .then(response => {
            if (response.status == 201) {
                return "EROR"
            } else {
                return response.json()
            }
        })
        .then(data => {
            if (data == "EROR") {
                window.location.replace("{{route('get_login')}}");
            } else {
                $(this).removeClass('btn-info');
                $(this).addClass('btn_dislike btn-primary')
                $(this).html(`Dislike`);
                $("#likeCounter").html(data.like)
            }
        })
        .catch(err => console.log(err))

    });

    $(document).on('click','.btn_dislike',function(){
        let data = {
            id : $(this).data('id')
        }
        // $("#main_loading").show();
        $(this).html(`Loading...`);
        $(this).removeClass('btn_dislike');
        fetch("{{route('dislikePosting')}}", {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        })
        .then(response => {
            if (response.status == 201) {
                return "EROR"
            } else {
                return response.json()
            }
        })
        .then(data => {
            if (data == "EROR") {
                window.location.replace("{{route('get_login')}}");
            } else {
                $(this).removeClass('btn-primary');
                $(this).addClass('btn_like btn-info')
                $(this).html(`Like`);
                $("#likeCounter").html(data.like)
            }
        })
        .catch(err => console.log(err))

    });
</script>
@if(Session::get('icon'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal({
        icon: "{{Session::get('icon')}}",
        title: "{{Session::get('title')}}",
        text: "{{Session::get('text')}}",
    });
</script>
@endif
{{-- <script>
    const elLat = document.getElementById("latitude");
const elLng = document.getElementById("longitude");

navigator.geolocation.getCurrentPosition(
    (pos) => {
        localLoc = pos.coords;
        objCoords = {
            lat: localLoc.latitude,
            lng: localLoc.longitude,
        };
        fetch(
            `https://revgeocode.search.hereapi.com/v1/revgeocode?at=${localLoc.latitude}%2C${localLoc.longitude}&lang=en-US&apikey=IRYdcn93t9FECP0VLR1v8UrMcEO5042jdifi7QNoWKU`
        )
            .then((res) => res.json())
            .then((data) => {
                document.getElementById("city").value =
                    data.items[0].address.city;
            })
            .catch((err) => console.log(err));
        function addDraggableMarker(map, behavior) {
            var marker = new H.map.Marker(objCoords, {
                volatility: true,
            });
            marker.draggable = true;
            map.addObject(marker);
            map.addEventListener(
                "dragstart",
                function (ev) {
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
                function (ev) {
                    var target = ev.target;
                    if (target instanceof H.map.Marker) {
                        behavior.enable();
                    }
                },
                false
            );
            map.addEventListener(
                "drag",
                function (ev) {
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
            defaultLayers.vector.normal.map,
            {
                center: objCoords,
                zoom: 12,
                pixelRatio: window.devicePixelRatio || 1,
            }
        );
        window.addEventListener("resize", () => map.getViewPort().resize());
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
        var ui = H.ui.UI.createDefault(map, defaultLayers, "en-US");
        addDraggableMarker(map, behavior);
        const elLat = document.getElementById("latitude");
        const elLng = document.getElementById("longitude");
        map.addEventListener("dragend", function (ev) {
            let target = ev.target;
            if (target instanceof H.map.Marker) {
                behavior.enable();
                let res = map.screenToGeo(
                    ev.currentPointer.viewportX,
                    ev.currentPointer.viewportY
                );
                elLat.value = res.lat;
                elLng.value = res.lng;

                fetch(
                    `https://revgeocode.search.hereapi.com/v1/revgeocode?at=${res.lat}%2C${res.lng}&lang=en-US&apikey=IRYdcn93t9FECP0VLR1v8UrMcEO5042jdifi7QNoWKU`
                )
                    .then((res) => res.json())
                    .then((data) => {
                        document.getElementById("city").value =
                            data.items[0].address.city;
                    })
                    .catch((err) => console.log(err));
            }
        });
    },
    () => {
        objCoords = {
            lat: "-6.200000",
            lng: "106.816666",
        };
        // elLat.value = objCoords.lat;
        // elLng.value = objCoords.lng;
        function addDraggableMarker(map, behavior) {
            var marker = new H.map.Marker(objCoords, {
                volatility: true,
            });
            marker.draggable = true;
            map.addObject(marker);
            map.addEventListener(
                "dragstart",
                function (ev) {
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
                function (ev) {
                    var target = ev.target;
                    if (target instanceof H.map.Marker) {
                        behavior.enable();
                    }
                },
                false
            );
            map.addEventListener(
                "drag",
                function (ev) {
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
            defaultLayers.vector.normal.map,
            {
                center: objCoords,
                zoom: 12,
                pixelRatio: window.devicePixelRatio || 1,
            }
        );
        window.addEventListener("resize", () => map.getViewPort().resize());
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
        var ui = H.ui.UI.createDefault(map, defaultLayers, "en-US");
        addDraggableMarker(map, behavior);

        map.addEventListener("dragend", function (ev) {
            let target = ev.target;
            if (target instanceof H.map.Marker) {
                behavior.enable();
                let res = map.screenToGeo(
                    ev.currentPointer.viewportX,
                    ev.currentPointer.viewportY
                );
                elLat.value = res.lat;
                elLng.value = res.lng;

                fetch(
                    `https://revgeocode.search.hereapi.com/v1/revgeocode?at=${res.lat}%2C${res.lng}&lang=en-US&apikey=IRYdcn93t9FECP0VLR1v8UrMcEO5042jdifi7QNoWKU`
                )
                    .then((res) => res.json())
                    .then((data) => {
                        document.getElementById("city").value =
                            data.items[0].address.city;
                    })
                    .catch((err) => console.log(err));
            }
        });
    }
);

</script> --}}
@endsection
