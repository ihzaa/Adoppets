@extends('user/master')

@section('page-title')
<div class="page-title">
    <div class="container">
        <h1 class="center">
            Blog yang Akan Anda Publikasikan
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
        <form class="form form-submit" method="POST" action="{{route('post_blog')}}" id="submitblog">

            <!--end basic information-->

            <section>
                <h2>Konten</h2>
                <div class="form-group">
                    <label for="title" class="col-form-label">Judul</label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="contoh : Cara Merawat Kucing Tipe Persia" required value="{{old('title')}}">
                </div>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="isi" class="col-form-label">Isi</label>
                    <textarea name="isi" id="warna" class="form-control @error('isi') is-invalid @enderror" rows="4"
                        placeholder="isi dari informasi yang akan anda berikan" required
                        value="{{old('isi')}}"></textarea>
                </div>
                @error('isi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <!--end form-group-->
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

@error('title')
<script>
$("#submitblog").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('isi')
<script>
$("#submitblog").form("show");
// swal("PESAN", "sub pesan", "error");
</script>
@enderror
@endsection