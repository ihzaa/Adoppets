@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1><strong>Kelola Akun</strong></h1>
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
    <div class="background-image">
        <img src="{{asset('user/assets/img/include_image/bg_akunsaya.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav class="nav flex-column side-nav">
                    @include('user.account.sidebar')
                </nav>
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">

                <form class="form" action="{{route('post_update_account')}}" method="POST" enctype="multipart/form-data"
                    id="register">
                    <div class="row">
                        <div class="col-md-12">

                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>Informasi Pribadi</h2>
                                    <section>
                                        <div class="form-group">
                                            <label for="name" class="col-form-label required">{{ __('Name') }}</label>
                                            <input name="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="Your Name" value="{{ $user->name }}" required>
                                        </div>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="username" class="col-form-label required">Username</label>
                                            <input name="username" type="text"
                                                class="form-control  @error('username') is-invalid @enderror"
                                                id="username" placeholder="Your Name" value="{{ $user->username }}"
                                                required>
                                        </div>
                                        @error('username')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end row-->
                                        <div class="form-group">
                                            <label for="alamat_asal" class="col-form-label required">Alamat Asal</label>
                                            <input name="alamat_asal" type="text"
                                                class="form-control @error('alamat_asal') is-invalid @enderror"
                                                id="alamat_asal" placeholder="Your Location"
                                                value="{{ $user->alamat_asal }}" required>
                                        </div>
                                        @error('alamat_asal')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="domisili_sekarang" class="col-form-label required">Alamat
                                                Sekarang</label>
                                            <input name="domisili_sekarang" type="text"
                                                class="form-control @error('domisili_sekarang') is-invalid @enderror"
                                                id="domisili_sekarang" placeholder="Your Location"
                                                value="{{ $user->domisili_sekarang }}" required>
                                        </div>
                                        @error('domisili_sekarang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end form-group-->
                                        <!-- <div class="form-group">
                                        <label for="about" class="col-form-label">Tentang Anda</label>
                                        <textarea name="about" id="about" class="form-control"
                                            rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</textarea>
                                    </div> -->
                                        <!--end form-group-->
                                    </section>

                                    <section>
                                        <h2>Kontak</h2>
                                        <div class="form-group">
                                            <label for="nomor_telpon" class="col-form-label">Telepon</label>
                                            <input name="nomor_telpon" type="text"
                                                class="form-control @error('nomor_telpon') is-invalid @enderror"
                                                id="nomor_telpon" placeholder="Your Phone"
                                                value="{{ $user->nomor_telpon }}">
                                        </div>
                                        @error('nomor_telpon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="no_wa" class="col-form-label">Nomer Whatsapp</label>
                                            <input name="no_wa" type="text"
                                                class="form-control @error('no_wa') is-invalid @enderror" id="no_wa"
                                                placeholder="Your Whatsapp Number" value="{{ $user->no_wa }}">
                                        </div>
                                        @error('no_wa')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="email" class="col-form-label">Email</label>
                                            <input name="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                placeholder="Your Email" value="{{ $user->email }}">
                                        </div>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end form-group-->
                                    </section>

                                    <section>
                                        <h2>Sosial Media</h2>
                                        <div class="form-group">
                                            <label for="instagram"
                                                class="col-form-label @error('instagram') is-invalid @enderror">Instagram</label>
                                            <input name="instagram" type="text" class="form-control" id="instagram"
                                                placeholder="your username at instagram" value="{{ $user->instagram }}">
                                        </div>
                                        @error('instagram')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end form-group-->

                                    </section>

                                    {{-- <section class="clearfix">
                                    <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </section> --}}
                                </div>
                                <!--end col-md-8-->
                                <div class="col-md-4">
                                    <div class="profile-image">
                                        <div class="image background-image">
                                            <img id="blah" src="{{ $user->foto_profil }}" alt="">
                                        </div>
                                        <div class="single-file-input">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="imgInp"
                                                    value={{old('foto_profil')}} required name="foto_profil"
                                                    {{request()->is('/posteditaccount')?"required":""}} name="foto">
                                                <label class="custom-file-label" id="labelnya_gambar"
                                                    for="imgInp">{{request()->is('/posteditaccount')?"Image Profile":"Foto Profile.jpg"}}</label>
                                                <br>
                                                <br>
                                                <small class="form-text text-muted">- Ukuran max 256KB</small>
                                                <small class="form-text text-muted">- Harus berupa gambar (format:
                                                    jpg, jpeg, svg, jfif,
                                                    png)</small>
                                            </div>
                                            @error('foto_profil')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            {{-- <div class="btn btn-framed btn-primary small">Upload a picture</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 mt-4">
                                    <section class="clearfix">
                                        <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                    </section>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <!--end col-md-3-->
            <div class="col-12">
                <form action="{{route('change.password')}}" method="POST" id="form_change_password">
                    @csrf
                    <section>
                        <div class="row">
                            <div class="col-md-8">
                                <h2>Ubah Password</h2>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password Lama</label>
                                    <input name="old" type="password"
                                        class="form-control @error('old') is-invalid @enderror" id="oldpassword"
                                        placeholder="Password Lama" required>
                                    @error('old')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password Baru</label>
                                    <input name="new" type="password"
                                        class="form-control @error('new') is-invalid @enderror" id="newpassword"
                                        placeholder="Password Baru" required>
                                    @error('new')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="confpassword" class="col-form-label">Konfirmasi Password </label>
                                    <input type="password" class="form-control" id="confpassword"
                                        placeholder="Konfirmasi Password Baru" required>
                                </div>
                            </div>
                        </div>
                        <!--end form-group-->
                    </section>
                    <section class="clearfix">
                        <button type="submit" class="btn btn-primary float-right">Rubah Password</button>
                    </section>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
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

$("#form_change_password").on("submit", function() {
    let newPass = $("#newpassword").val();
    let confPass = $("#confpassword").val();

    if (newPass != confPass) {
        event.preventDefault();
        swal({
            icon: "error",
            title: "Maaf!",
            text: "Password Konfirmasi salah!",
        });
        return;
    }

})
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