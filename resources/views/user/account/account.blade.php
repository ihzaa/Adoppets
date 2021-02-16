@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1>Manage Your Account</h1>
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
        <img src="assets/img/footer-background-icons.jpg" alt="">
    </div>
    <!--end background-image-->
</div>
<!--end background-->
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav class="nav flex-column side-nav">
                    <a class="nav-link active icon" href="">
                        <i class="fa fa-user"></i>Profil Saya
                    </a>
                    <a class="nav-link icon" href="">
                        <i class="fa fa-heart"></i>Postingan Saya
                    </a>
                    <a class="nav-link icon" href="bookmarks.html">
                        <i class="fa fa-star"></i>Bookmarks
                    </a>
                    <a class="nav-link icon" href="change-password.html">
                        <i class="fa fa-recycle"></i>Ubah Password
                    </a>
                    <a class="nav-link icon" href="">
                        <i class="fa fa-check"></i>Hewan Teradopsi
                    </a>
                </nav>
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
                <form class="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Informasi Pribadi</h2>
                            <section>
                                <div class="form-group">
                                    <label for="name" class="col-form-label required">{{ __('Name') }}</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your Name" value="{{ $user->name }}" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="username" class="col-form-label required">Username</label>
                                    <input name="username" type="text" class="form-control" id="username"
                                        placeholder="Your Name" value="{{ $user->username }}" required>
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="alamat_asal" class="col-form-label required">Alamat Asal</label>
                                    <input name="alamat_asal" type="text" class="form-control" id="alamat_asal"
                                        placeholder="Your Location" value="{{ $user->alamat_asal }}" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="domisili_sekarang" class="col-form-label required">Alamat
                                        Sekarang</label>
                                    <input name="domisili_sekarang" type="text" class="form-control"
                                        id="domisili_sekarang" placeholder="Your Location"
                                        value="{{ $user->domisili_sekarang }}" required>
                                </div>
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
                                    <input name="nomor_telpon" type="text" class="form-control" id="nomor_telpon"
                                        placeholder="Your Phone" value="{{ $user->nomor_telpon }}">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="no_wa" class="col-form-label">Nomer Whatsapp</label>
                                    <input name="no_wa" type="text" class="form-control" id="no_wa"
                                        placeholder="Your Whatsapp Number" value="{{ $user->no_wa }}">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="Your Email" value="{{ $user->email }}">
                                </div>
                                <!--end form-group-->
                            </section>

                            <section>
                                <h2>Sosial Media</h2>
                                <div class="form-group">
                                    <label for="twitter" class="col-form-label">Twitter</label>
                                    <input name="twitter" type="text" class="form-control" id="twitter"
                                        placeholder="http://" value="http://www.twitter.com/jane.doe">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="facebook" class="col-form-label">Facebook</label>
                                    <input name="facebook" type="text" class="form-control" id="facebook"
                                        placeholder="http://" value="http://www.facebook.com/jane.doe">
                                </div>
                                <!--end form-group-->
                            </section>

                            <section class="clearfix">
                                <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                            </section>
                        </div>
                        <!--end col-md-8-->
                        <div class="col-md-4">
                            <div class="profile-image">
                                <div class="image background-image">
                                    <img src="{{ $user->foto_profil }}" alt="">
                                </div>
                                <div class="single-file-input">
                                    <input type="file" id="user_image" name="user_image">
                                    <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                </div>
                            </div>
                        </div>
                        <!--end col-md-3-->
                    </div>
                </form>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection
