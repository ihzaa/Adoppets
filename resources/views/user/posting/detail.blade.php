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
            <div class="number">Suka</div>
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
                    <!-- lihat orang yang neken adopsi -->

                    @if (count($latestAdopt) != 0)
                    @if(count($latestAdopt) == 1)
                    <h3 class="text-left text-muted">{{strtok($user[$latestAdopt[0]->user_id], " ")}} berminat dengan
                        hewan ini</h3>
                    @else
                    <h3 class="text-left text-muted">{{strtok($user[$latestAdopt[0]->user_id], " ")}} dan
                        {{count($latestAdopt)-1}} lainnya
                        berminat dengan hewan ini</h3>
                    @endif
                    @endif
                    <!--end Gallery Carousel-->
                    @if ($adopted == 0)
                    @if (Auth::guard('user')->check())
                    @if (Auth::guard('user')->user()->id != $data->user_id)
                    <section>
                        <div class="row justify-content-end">
                            <button class="tombol btn @if ($reported!=1) btn-framed @endif  btn-primary btn-rounded"
                                id="btn_report" data-id="{{$data->id}}" @if ($reported==1) disabled
                                @endif>Laporkan</button>
                            @if ($like['isLike'] == 0)
                            <button class="tombol btn btn-framed btn-info btn-rounded btn_like"
                                data-id="{{$data->id}}">Like</button>
                            @else
                            <button class="tombol btn btn-framed btn-primary btn-rounded btn_dislike"
                                data-id="{{$data->id}}">Dislike</button>
                            @endif
                            @if ($isAdopt=='' )
                            <button class="tombol btn btn-framed btn-info btn-rounded" id="btn_adopt">Adopsi</button>
                            @else
                            <button class="tombol btn btn-framed btn-danger btn-rounded" id="btn_unadopt"
                                data-id="{{$isAdopt->id}}">Batal Adopsi</button>
                            @endif

                        </div>
                    </section>
                    @endif
                    @else
                    <section>
                        <div class="row justify-content-end">
                            <button class="tombol btn btn-framed btn-primary btn-rounded" id="btn_report"
                                data-id="{{$data->id}}">Laporkan</button>
                            <button class="tombol btn btn-framed btn-info btn-rounded btn_like"
                                data-id="{{$data->id}}">Like</button>
                            @if ($isAdopt=='' )
                            <button class="tombol btn btn-framed btn-info btn-rounded" id="btn_adopt">Adopsi</button>
                            @else
                            <button class="tombol btn-framed btn-danger btn-rounded" id="btn_unadopt"
                                data-id="{{$isAdopt->id}}">Batal Adopsi</button>
                            @endif
                        </div>
                    </section>
                    @endif

                    {{-- main if --}}
                    @else
                    <h3 class="text-center text-danger">Sudah Teradopsi</h3>
                    @endif

                    <!--Description-->
                    <section>
                        <h2>Deskripsi</h2>
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
                                {{-- <div id="map" style="width: 100%; height: 480px"></div> --}}
                                {{-- <input name="latitude" type="text" class="form-control" id="latitude" value="{{$edit->}}"
                                hidden>
                                <input name="longitude" type="text" class="form-control" id="longitude"
                                    value="106.816666" hidden> --}}
                            </div>
                        </div>
                    </section>
                    <!--end Details and Locations-->
                    <!--Author-->
                    <section>
                        <h2>Author
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
                                                    <a
                                                        href="sms:+62{{$deskripsi['nomor_telpon'][$data->user_id]}}&body=Hallo..."><i
                                                            class="fa fa-phone"></i>
                                                        {{$deskripsi['nomor_telpon'][$data->user_id]}}</a>
                                                </h4>
                                                <h4 class="phone">
                                                    <a
                                                        href="https://api.whatsapp.com/send?phone=+62{{$deskripsi['no_wa'][$data->user_id]}}"><i
                                                            class="fa fa-whatsapp "></i>
                                                        {{$deskripsi['no_wa'][$data->user_id]}}</a>
                                                </h4 class="email">
                                                <h4><a href="mailto:{{$deskripsi['email'][$data->user_id]}}"><i
                                                            class="fa fa-envelope"></i>
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
                            <h2>Postingan Populer</h2>
                            <div class="items compact">
                                @foreach ($popular as $item)
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="{{route('detail_posting',['id'=>$item->id])}}"
                                                    class="tag category">{{$item->nama}}</a>
                                                <a href="{{route('detail_posting',['id'=>$item->id])}}"
                                                    class="title">{{$item->title}}</a>
                                                {{-- <span class="tag">Offer</span> --}}
                                            </h3>
                                            <a href="{{route('detail_posting',['id'=>$item->id])}}"
                                                class="image-wrapper background-image">
                                                <img src="{{asset($item->foto)}}" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">{{$item->lokasi}}</a>
                                        </h4>
                                        <div class="price">{{$item->ras}}</div>
                                        <div class="meta">
                                            <figure>
                                                <i
                                                    class="fa fa-calendar-o"></i>{{\Carbon\Carbon::parse($item->created_at)->format('d.m.Y')}}
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>{{$user[$item->user_id]}}
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end item-->
                                @endforeach
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
<div id="modal_adopt" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Adopsi Hewan</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('adopt',['id'=>$data->id])}}" method="POST" id="form_adopsi">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Apakah Anda Pernah Memelihara Hewan?</label>
                        <input type="text" name="satu" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jika Pernah Hewan Apa?</label>
                        <input type="text" name="dua" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsikan Alasan Ingin Mengadopsi Hewan ini !!</label>
                        <input type="text" name="tiga" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Adopsi!</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modal_report" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Laporkan Posting</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('posting.report',$data->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alasan Melaporkan</label>
                        <textarea name="excuse" rows="5" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-sm">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js_after')
<script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/assets/js/custom.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- <script>
    var latitude = 51.511971;
var longitude = -0.137597;
var markerImage = "{{asset('user/assets/img/map-marker.png')}}";
var mapTheme = "light";
var mapElement = "map-small";
simpleMap(latitude, longitude, markerImage, mapTheme, mapElement);
</script> --}}

<script>
    const post_id = "{{$data->id}}"
$("#btn_adopt").on("click", function() {
    $("#modal_adopt").modal('show');

    // let data = {
    //     id : post_id
    // }
    // $("#main_loading").show();
    // fetch("", {
    //     method: 'POST', // *GET, POST, PUT, DELETE, etc.
    //     cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    //     headers: {
    //         'Content-Type': 'application/json',
    //         "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
    //         // 'Content-Type': 'application/x-www-form-urlencoded',
    //     },
    //     body: JSON.stringify(data) // body data type must match "Content-Type" header
    // })
    // .then(response => {
    //     if (response.status == 201) {
    //         return "EROR"
    //     } else {
    //         return response.json()
    //     }
    // })
    // .then(data => {
    //     if (data == "EROR") {
    //         window.location.replace("{{route('get_login')}}");
    //     } else {
    //         location.reload();
    //     }
    // })
    // .catch(err => console.log(err))
    // .finally(()=>{
    // $("#main_loading").hide();
    // });
})
$("#btn_unadopt").on("click", function() {
    let data = {
        id: $(this).data('id')
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
        .finally(() => {
            $("#main_loading").hide();
        });
})

$(document).on('click', '.btn_like', function() {
    let data = {
        id: $(this).data('id')
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

$(document).on('click', '.btn_dislike', function() {
    let data = {
        id: $(this).data('id')
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

$("#btn_report").click(function() {
    $("#modal_report").modal('show');

    //     return;
    //     let data = {
    //         id : $(this).data('id')
    //     }
    //     $("#main_loading").show();
    //     fetch("", {
    //         method: 'POST', // *GET, POST, PUT, DELETE, etc.
    //         cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    //         headers: {
    //             'Content-Type': 'application/json',
    //             "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
    //             // 'Content-Type': 'application/x-www-form-urlencoded',
    //         },
    //         body: JSON.stringify(data) // body data type must match "Content-Type" header
    //     })
    //     .then(response => {
    //         if (response.status == 201) {
    //             return "EROR"
    //         } else {
    //             return response.json()
    //         }
    //     })
    //     .then(data => {
    //         if (data == "EROR") {
    //             window.location.replace("{{route('get_login')}}");
    //         } else {
    //             location.reload();
    //         }
    //     })
    //     .catch(err => console.log(err))
    //     .finally(()=>{
    //         $("#main_loading").hide();
    //     });
});

$("#form_adopsi").submit(function(){
    $("#main_loading").show();
})
</script>
@if(Session::get('icon'))
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
