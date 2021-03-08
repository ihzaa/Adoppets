@extends('user/master')

@section('include-css')
<!-- summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
.note-modal-backdrop {
    display: none !important;
}
</style>
@endsection

@section('page-title')
<div class="page-title">
    <div class="container">
        <h1 class="center">
            Halaman Editing Blog
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

@section('content')
<section class="block">
    <div class="container">
        <form class="form form-submit" action="{{route('stote_update_blog', ['id'=> $data->id])}}" method="POST"
            id="submitblog" enctype="multipart/form-data">
            @csrf
            <!--end basic information-->
            <section>
                <h2>Konten</h2>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Judul</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" placeholder="contoh : Cara Merawat Kucing Tipe Persia" required
                                value="{{$data->title}}">
                        </div>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Foto Blog</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imgInp" value="{{$data->picture}}"
                                    name="picture" {{request()->is('*/blog/update/*')?"required":""}}>
                                <label class="custom-file-label" id="labelnya_gambar"
                                    for="imgInp">{{request()->is('/postblog')?"Image Blog":"Picture.jpg"}}</label>
                                <small class="form-text text-muted">- Tambahkan Gambar untuk Tampilan Postingan Lebih
                                    Baik</small>
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
                </div>

                <!--end form-group-->

                {{-- summernote --}}
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="isi" class="col-form-label">Isi Blog</label>
                            <textarea id="summernote" name="isi"
                                class="form-control  background @error('isi') is-invalid @enderror">{{$data->isi}}</textarea>
                        </div>
                        @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <img id="blah"
                            src="{{request()->is('*/postblog*')?asset('images/default/picture.svg'):asset($data->picture)}}"
                            class="img-fluid" src="" alt="your image" />
                    </div>
                </div>
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
        ['insert', ['link', 'picture', 'video']],
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