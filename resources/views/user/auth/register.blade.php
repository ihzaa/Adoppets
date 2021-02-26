@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1>Register</h1>
    </div>
    <!--end container-->
</div>
@endsection

@section('brand-logo')
{{asset('user/assets/img/include_image/logo_adoptpets.png')}}
@endsection

@section('hero-form')
@endsection

@section('background')
<div class="background">
    <div class="background-image original-size">
        <img src="{{asset('user/assets/img/include image/footer-background-icons.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                <form class="form clearfix" action="{{route('post_register')}}" method="POST" id="register" enctype="multipart/form-data">
                    @csrf
                    <!-- nama -->
                    <div class="form-group">
                        <label for="name" class="col-form-label required">Nama Anda</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" required value="{{old('name')}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- email -->
                    <div class="form-group">
                        <label for="email" class="col-form-label required">Email</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="
                            email" placeholder="Your Email" required value="{{old('email')}}">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- username -->
                    <div class="form-group">
                        <label for="username" class="col-form-label required">Username</label>
                        <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Your Username" required value="{{old('username')}}">
                    </div>
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- alamat asal -->
                    <div class="form-group">
                        <label for="alamat_asal" class="col-form-label required">Alamat Asal</label>
                        <input name="alamat_asal" type="text" class="form-control @error('alamat_asal') is-invalid @enderror" id="alamat_asal" placeholder="Your Address Origin" required required value="{{old('alamat_asal')}}">
                    </div>
                    @error('alamat_asal')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- domisili_sekarang -->
                    <div class="form-group">
                        <label for="domisili_sekarang" class="col-form-label required">Alamat Sekarang</Address></label>
                        <input name="domisili_sekarang" type="text" class="form-control @error('domisili_sekarang') is-invalid @enderror" id="domisili_sekarang" placeholder="Your Current Address" required required value="{{old('domisili_sekarang')}}">
                    </div>
                    @error('domisili_sekarang')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- nomor telpon -->
                    <div class="form-group">
                        <label for="nomor_telpon" class="col-form-label required">Nomer Telepon</Address></label>
                        <input name="nomor_telpon" type="text" class="form-control @error('nomor_telpon') is-invalid @enderror" id="nomor_telpon" placeholder="Your Phone Number" required required value="{{old('nomor_telpon')}}">
                    </div>
                    @error('nomor_telpon')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- whatsapp number -->
                    <div class="form-group">
                        <label for="no_wa" class="col-form-label required">Nomer Whatsapp</Address></label>
                        <input name="no_wa" type="text" class="form-control @error('no_wa') is-invalid @enderror" id="no_wa" placeholder="Your Whatsapp Number" required required value="{{old('no_wa')}}">
                    </div>
                    @error('no_wa')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- instagram -->
                    <div class="form-group">
                        <label for="instagram" class="col-form-label required">Instagram</Address></label>
                        <input name="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" placeholder="Your username at instagram" value="{{old('instagram')}}">
                    </div>
                    @error('instagram')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- foto profil -->
                    <div class="form-group">
                        @csrf
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imgInp" value={{old('foto_profil')}} required name="foto_profil" {{request()->is('/postregister')?"required":""}} name="foto">
                            <label class="custom-file-label" id="labelnya_gambar" for="imgInp">{{request()->is('/postregister')?"Image Advertisement":"Foto Profile.jpg"}}</label>
                            <small class="form-text text-muted">- Ukuran max 256KB</small>
                            <small class="form-text text-muted">- Harus berupa gambar (format:
                                jpg, jpeg, svg, jfif,
                                png)</small>
                        </div>
                        @error('foto_profil')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- password -->
                    <div class="form-group">
                        <label for="password" class="col-form-label required">Password</label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required required value="{{old('password')}}">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->

                    <!-- button -->
                    <div class="d-flex justify-content-between align-items-baseline">
                        <label for=""></label>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                </form>
                <hr>
                <p>
                    To Login Please Click <a href="{{route('get_login')}}" class="link">Here</a>
                </p>
            </div>
            <!--end col-md-6-->
        </div>
        <!--end row-->
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

@error('name')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('username')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('instagram')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('alamat_asal')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('domisili_sekarang')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('nomor_telpon')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('email')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror

@error('no_wa')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror


@error('password')
<script>
    $("#register").form("show");
    // swal("PESAN", "sub pesan", "error");
</script>
@enderror
@endsection