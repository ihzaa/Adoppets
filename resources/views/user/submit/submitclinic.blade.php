@extends('user/master')

@section('include-css')

<!-- summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
.note-modal-backdrop {
    display: none !important;
}

#blah {
    width: 210.5px;
}
</style>

{{-- for maps --}}
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>


@section('page-title')
<div class="page-title">
    <div class="container">
        <h1 class="center">
            Informasi Klinik Hewan yang Akan Anda Publikasikan
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
        <form class="form form-submit" action="{{route('post_clinic')}}" method="POST" id="submitclinic"
            enctype="multipart/form-data">
            @csrf
            <section>
                <h2>Konten</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama_klinik" class="col-form-label">Nama Klinik</label>
                            <input name="nama_klinik" type="text"
                                class="form-control @error('nama_klinik') is-invalid @enderror" id="nama_klinik"
                                placeholder="contoh : Klinik Bakti Husada" required value="{{old('nama_klinik')}}">
                        </div>
                        @error('nama_klinik')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end col-md-8-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_telepon" class="col-form-label">Nomer Telepon</label>
                            <input name="no_telepon" type="text"
                                class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon"
                                placeholder="contoh : 03321245161" required value="{{old('no_telepon')}}">
                        </div>
                        @error('no_telepon')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="contoh : klinikhusada@gmail.com" value="{{old('email')}}">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <!--end form-group-->
                    </div>
                </div>

                {{-- foto klinik --}}
                <div class="row justify-content-end">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="deskripsi" class="col-form-label">Deskripsi</label>
                            <textarea id="summernote" name="deskripsi"
                                class="form-control  background @error('deskripsi') is-invalid @enderror">{{old('deskripsi')}}</textarea>
                        </div>
                        @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 float-none">
                        <div class="row-md">
                            <div class="form-group">
                                <label for="picture" class="col-form-label">Foto Klinik</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imgInp" value="{{old('picture')}}"
                                        required name="picture" {{request()->is('*/clinic*')?"required":""}}>
                                    <label class="custom-file-label" id="labelnya_gambar"
                                        for="imgInp">{{request()->is('*/clinic*')?"Image Clinic":"Picture.jpg"}}</label>
                                    <small class="form-text text-muted">- Ukuran max 256KB</small>
                                    <small class="form-text text-muted">- Harus berupa gambar (format:
                                        jpg, jpeg, svg, jfif,
                                        png)</small>
                                </div>
                            </div>
                            @error('picture')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>

                        <div class="row-md">
                            {{-- request foto --}}

                            <img id="blah"
                                src="{{request()->is('*submitclinic*')?asset('images/default/picture.svg'):asset($clinic->picture)}}"
                                class="img-fluid" src="" alt="image advertisement" />
                            {{-- akhir request foto --}}
                        </div>
                    </div>
                </div>
                {{-- akhir foto klinik --}}
                <div class="row justify-content-end">
                    {{-- deskripsi --}}
                    {{-- akhir deskripsi --}}

                </div>
                {{-- summernote --}}
            </section>

            <section>
                <h2>Lokasi</h2>
                <!--end row-->
                <div class="form-group">
                    <label for="input-location" class="col-form-label">Detail Lokasi</label>
                    <input name="city" type="text" class="form-control" id="city" placeholder="Location"
                        readonly="readonly" value="Jakarta" name="city">
                    <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top"
                        title="Find My Position"><i class="fa fa-map-marker"></i></span>
                </div>
                <!--end form-group-->
                <label>Map</label>
                <div id="map" style="width: 100%; height: 480px"></div>
                {{-- <div class="map height-400px" id="map-submit"></div> --}}
                <input name="latitude" type="text" class="form-control" id="latitude" value="-6.200000" hidden>
                <input name="longitude" type="text" class="form-control" id="longitude" value="106.816666" hidden>
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


@section('js_after')
<script src="{{asset('user/assets/js/page/submitpostingan.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

{{-- summernote --}}
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('#summernote').summernote({
    placeholder: 'Tulis Deskripsi Iklan Disini',
    tabsize: 4,
    height: 190,
    minHeight: null,
    maxHeight: null,
    focus: true,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture']],
    ]
});

$(document).ready(function() {
    $('#summernote').summernote();
});
</script>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }
        $("#labelnya_gambar").html(input.files[0].name);
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#imgInp").change(function() {
    readURL(this);
});
</script>

@endsection