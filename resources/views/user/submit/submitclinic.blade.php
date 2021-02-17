@extends('user/master')

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
<div class="background">
    <div class="background-image">
        <img src="{{asset('user/assets/img/include_image/bg_landingpage.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <form class="form form-submit" action="{{route('post_clinic')}}" method="POST" id="submitclinic">

            <!--end basic information-->

            <section>
                <h2>Konten</h2>
                <div class="form-group">
                    <label for="nama_klinik" class="col-form-label">Nama Klinik</label>
                    <input name="nama_klinik" type="text"
                        class="form-control @error('nama_klinik') is-invalid @enderror" id="nama_klinik"
                        placeholder="contoh : Klinik Bakti Husada" required value="{{old('nama_klinik')}}">
                </div>
                @error('nama_klinik')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi"
                        class="form-control @error('deskripsi') is-invalid @enderror" rows="4"
                        placeholder="contoh : klinik sudah tersertifikasi dan termasuk klinik hewan terbaik di Jawa Timur"
                        required value="{{old('deskripsi')}}"></textarea>
                </div>
                @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="no_telepon" class="col-form-label">Nomer Telepon</label>
                    <input name="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror"
                        id="no_telepon" placeholder="contoh : (03321)-245161" required value="{{old('no_telepon')}}">
                </div>
                @error('no_telepon')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="email" class="col-form-label">Email</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="contoh : klinikhusada@gmail.com" required value="{{old('email')}}">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <!--end form-group-->
            </section>

            <section>
                <h2>Pilih Gambar</h2>
                <div class="file-upload-previews"></div>
                <div class="file-upload">
                    <input type="file" name="files[]" class="file-upload-input with-preview" multiple
                        title="Click to add files" maxlength="10" accept="gif|jpg|png">
                    <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                </div>
            </section>

            <section>
                <h2>Lokasi</h2>
                <!--end row-->
                <div class="form-group">
                    <label for="input-location" class="col-form-label">Detail Lokasi</label>
                    <input name="location" type="text" class="form-control" id="input-location"
                        placeholder="Enter Location" required value="{{old('lokasi')}}">
                    <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top"
                        title="Find My Position"><i class="fa fa-map-marker"></i></span>
                </div>
                @error('lokasi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <!--end form-group-->
                <label>Map</label>
                <div class="map height-400px" id="map-submit"></div>
                <input name="latitude" type="text" class="form-control" id="latitude" hidden>
                <input name="longitude" type="text" class="form-control" id="longitude" hidden>
            </section>


            <section class="clearfix">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary large icon float-right">Submit</button>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

@error('nama_klinik')
<script>
$("#submitclinic").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('deskripsi')
<script>
$("#submitclinic").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('no_telepon')
<script>
$("#submitclinic").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('email')
<script>
$("#submitclinic").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('lokasi')
<script>
$("#submitclinic").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror
@endsection