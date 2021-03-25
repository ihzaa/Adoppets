@extends('user/master')

@section('include-css')
{{-- data picker --}}

<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

{{-- for maps --}}
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>

{{-- form informasi vaksin --}}
<style>
    .delete {
        background-color: #fd1200;
        border: none;
        color: white;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .add_form_field {
        background-color: #1c97f3;
        border: none;
        color: white;
        padding: 8px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border: 1px solid #186dad;
    }
</style>
@endsection

@section('page-title')
<div class="page-title">
    <div class="container">
        <h1 class="center">
            Edit Postingan
        </h1>
    </div>
    <!--end container-->
</div>
@endsection

@section('nama-hero')

@endsection

@section('brand-logo')
{{asset('user/assets/img/include_image/logo_adoptpets-inverted.png')}}
@endsection

@section('hero-form')

@endsection

@section('background')
@endsection

@section('include-css')
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <form class="form" action="{{route('store_update_posting_hewan', ['id'=> $data->id])}}" method="POST"
            id="submitposting" enctype="multipart/form-data">
            @csrf

            {{-- section detail informasi hewan --}}
            <section>
                <h2>Deskripsi</h2>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title" class="col-form-label required">Judul</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                id=" title" placeholder="contoh : Kucing Persia" required value="{{$data->title}}">
                        </div>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end col-md-8-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category" class="col-form-label required">Jenis Hewan</label>
                            <select class="change-tab" data-change-tab-target="category-tabs" name="submit_category"
                                id="submit-category" data-placeholder="Select Category">
                                @foreach ($cat as $item)
                                <option @if ($item->id == $data->category_id)
                                    {{ "selected" }}
                                    @endif value="{{$item->id}}">{{$item->nama}}
                                </option>
                                @endforeach

                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ras" class="col-form-label required">Ras</label>
                            <input name="ras" type="text" class="form-control @error('ras') is-invalid @enderror"
                                id=" ras" placeholder="contoh : persia" required value="{{$data->ras}}">
                        </div>
                        @error('ras')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="umur" class="col-form-label required">Umur</label>
                            <input name="umur" type="text" class="form-control @error('umur') is-invalid @enderror"
                                id=" umur" placeholder="Masukkan usia dalam bentuk jumlah bulan. contoh : 1"
                                value="{{$data->umur}}">
                        </div>
                        @error('umur')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ras" class="col-form-label required">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" data-placeholder="Select">
                                <option value="0">Pilih Jenis Kelamin</option>
                                <option @if ($data->jenis_kelamin == "Betina")
                                    selected
                                    @endif value="Betina">Betina</option>
                                <option @if ($data->jenis_kelamin == "Jantan")
                                    selected
                                    @endif value="Jantan">Jantan</option>
                            </select>
                            <!-- <div style="display: none;" class="alert alert-danger" id="message_jk">Silahkan pilih opsi
                            </div> -->
                        </div>
                        <!--end form-group-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="warna" class="col-form-label required">Warna</label>
                            <input name="warna" type="text" class="form-control @error('warna') is-invalid @enderror"
                                id="warna" placeholder="contoh : abu mix putih" required
                                value="{{$data->warna}}"></input>
                        </div>
                        @error('warna')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end col-md-8-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="makanan" class="col-form-label required">Makanan</label>
                            <input name="makanan" type="text"
                                class="form-control @error('makanan') is-invalid @enderror" id="
                        makanan" placeholder="contoh : Makanan Kering/Basah" required value="{{$data->makanan}}">
                        </div>
                        @error('makanan')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <!--end form-group-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row-md-2">
                            <div class="form-group">
                                <label for="kondisi_fisik" class="col-form-label required">Kondisi Fisik</label>
                                <textarea name="kondisi_fisik" id="kondisi_fisik"
                                    class="form-control @error('kondisi_fisik') is-invalid @enderror" rows=" 6"
                                    placeholder="contoh : ada luka dibagian telinga"
                                    required>{{$data->kondisi_fisik}}</textarea>
                            </div>
                            @error('kondisi_fisik')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!--end form-group-->
                        </div>
                        <div class="row-md-2">
                            <div class="form-group">
                                <label for="informasi_lain" class="col-form-label">informasi_lain</label>
                                <textarea name="informasi_lain" id="informasi_lain"
                                    class="form-control @error('informasi_lain') is-invalid @enderror" rows="6"
                                    placeholder="contoh : kebiasaan kucing suka makan daun">{{$data->informasi_lain}}</textarea>
                            </div>

                            <!--end form-group-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group container1">
                            {{-- button tambah vaksin --}}
                            <label for="informasi_vaksin" class="col-form-label">Informasi Vaksin</label><br>
                            @foreach ($vaccinInfo as $item)
                            <div>
                                <input name="informasi_vaksin[]" type="text" class="form-control
                                @error('informasi_vaksin ')
                                is-invalid
                                @enderror" id=" informasi_vaksin" placeholder="" value="{{$item->keterangan}}"> <small
                                    class="form-text">Masukkan Nama Vaksin</small>
                                @error('informasi_vaksin') <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input name="tanggal[]" type="text" class="datepicker date_input form-control
                                @error('tanggal')
                                is-invalid
                                @enderror" id="tanggal" placeholder=""
                                    value="{{\Carbon\Carbon::parse($item->tanggal)->format('m/d/Y')}}" /><small
                                    class="form-text">Masukkan
                                    Tanggal
                                    Vaksin</small> <br>
                                @error('tanggal ')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <a href="#" class="btn small btn-danger delete">Delete</a>
                                <hr>
                            </div>
                            @endforeach


                            {{-- akhir button tambah vaksin --}}
                        </div>
                        <button type="button"
                            class="btn add_info_button add_form_field btn-info small icon float-left">Tambah
                            Vaksin</i></button>
                    </div>
                    <!--end col-md-8-->
                </div>
            </section>


            {{-- section foto hewan hewan --}}
            <section>
                <h2>Foto Hewan</h2>
                <div class="row">
                    @foreach ($foto as $f)
                    <div class="col">
                        <img src="{{asset($f->path)}}" alt="" class="img-fluid" style="max-height: 100px !important">
                        <input type="hidden" name="oldFoto[]" value="{{$f->id}}">
                        <button type="button" class="btn btn-sm btn-danger btn_hapus_foto">x</button>
                    </div>
                    @endforeach
                </div>
                <div class="file-upload-previews"></div>
                <div class="file-upload">
                    <input type="file" name="path[]"
                        class="file-upload-input with-preview @error('path') is-invalid @enderror" multiple
                        title="Click to add path" maxlength="10" accept="gif|jpg|png|mp4|webm|mpg">
                    <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                </div>
                @error('path')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </section>


            {{-- section lokasi --}}
            <section>
                <h2>Lokasi</h2>
                <!--end row-->
                <div class="form-group">
                    <label for="input-location" class="col-form-label">Detail Lokasi</label>
                    <input name="city" type="text" class="form-control" id="city" placeholder="Location"
                        readonly="readonly" value="{{$data->lokasi}}" name="city">
                    <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top"
                        title="Find My Position"><i class="fa fa-map-marker"></i></span>
                </div>
                <small class="form-text text-muted">Geser Tanda Hijau Untuk Memindah</small>

                <!--end form-group-->
                <label>Map</label>
                <div id="map" style="width: 100%; height: 480px"></div>
                {{-- <div class="map height-400px" id="map-submit"></div> --}}
                <input name="latitude" type="text" class="form-control" id="latitude" value="{{$data->latitude}}"
                    hidden>
                <input name="longitude" type="text" class="form-control" id="longitude" value="{{$data->longitude}}"
                    hidden>
                <small class="form-text text-muted">Geser Tanda Hijau Untuk Memindah</small>
            </section>
            <!--end location-->


            <section class="clearfix">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary large icon float-right">Submit</i></button>
                </div>
            </section>
        </form>
        <!--end form-submit-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection

@section('js_mid')
<script src="{{asset('user/assets/js/jQuery.MultiFile.min.js')}}"></script>
@endsection

@section('js_after')
<script>
    let elLat = document.getElementById("latitude");
    let elLng = document.getElementById("longitude");

        objCoords = {
            lat: elLat.value,
            lng: elLng.value,
        };

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
        // const elLat = document.getElementById("latitude");
        // const elLng = document.getElementById("longitude");
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

</script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Session::get('icon'))
<script>
    swal({
    icon: "{{Session::get('icon')}}",
    title: "{{Session::get('title')}}",
    text: "{{Session::get('text')}}",
});
</script>
@endif
{{-- js datepicker --}}
<script>
    // add form dynamic
$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = "{{count($vaccinInfo)+1}}";
    $(add_button).click(function(e) {
        // console.log("1");

        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append(
                '<div><input name="informasi_vaksin[]" type="text" class="form-control @error('
                informasi_vaksin ') is-invalid @enderror" id=" informasi_vaksin" placeholder="" value=""> <small class="form-text">Masukkan Nama Vaksin</small> @error('
                informasi_vaksin ') <div class="alert alert-danger">{{ $message }}</div> @enderror <input name="tanggal[]"  type="text" class="datepicker date_input form-control @error('
                tanggal ') is-invalid @enderror" id="tanggal" placeholder="" value=""/><small class="form-text">Masukkan Tanggal Vaksin</small> <br> @error('
                tanggal ') <div class="alert alert-danger">{{ $message }}</div> @enderror <a href="#" class=" btn small btn-danger delete">Delete</a><hr></div>'
            ); //add input box

        } else {
            alert('You Reached the limits')
        }
    });

    $(document).on('focus', ".datepicker", function() {
        $(this).datepicker({
            uiLibrary: 'bootstrap4'
        });
    });

    $(wrapper).on("click", ".delete", function(e) {
        // console.log("2");
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
    $("#submitposting").on("submit", function() {
        let dateEl = $('.date_input')
        for(let i = 0; i < dateEl.length ; i++){
            console.log(moment(dateEl[i].value, "MM/DD/YYYY", true).isValid());
            if(!moment(dateEl[i].value, "MM/DD/YYYY", true).isValid()){
                swal({
                    icon: "error",
                    title: "Maaf!",
                    text: "Tanggal Vaksin Salah!",
                });
                event.preventDefault();
                return;
            }
        }
    })

    $(".btn_hapus_foto").click(function(){
        // console.log($(this).parent());
        $(this).parent().remove();
        event.preventDefault()
    })
});


</script>

{{-- selecter jenis_kelamin --}}
{{-- <script>
    $("#submitposting").on("submit", function() {
        console.log($("#jenis_kelamin").val());
    if ($("#jenis_kelamin").val() == 0) {
        event.preventDefault();
        $("#message_jk").show();
    }
})
</script> --}}



{{-- @error('title')
<script>
    $("#submitposting").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('ras')
<script>
    $("#submitposting").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('umur')
<script>
    $("#submitposting").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('makanan')
<script>
    $("#submitposting").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('warna')
<script>
    $("#submitposting").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('kondisi_fisik')
<script>
    $("#submitposting").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('path')
<script>
    $("#submitposting").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('informasi_lain')
<script>
    $("#submitposting").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror --}}
@endsection
