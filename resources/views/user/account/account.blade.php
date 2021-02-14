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
                    <a class="nav-link active icon" href="my-profile.html">
                        <i class="fa fa-user"></i>Profil Saya
                    </a>
                    <a class="nav-link icon" href="my-ads.html">
                        <i class="fa fa-heart"></i>Postingan Saya
                    </a>
                    <a class="nav-link icon" href="bookmarks.html">
                        <i class="fa fa-star"></i>Bookmarks
                    </a>
                    <a class="nav-link icon" href="change-password.html">
                        <i class="fa fa-recycle"></i>Ubah Password
                    </a>
                    <a class="nav-link icon" href="sold-items.html">
                        <i class="fa fa-check"></i>Hewan Teradopsi
                    </a>
                </nav>
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
                <form class="form">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Informasi Pribadi</h2>
                            <section>
                                <div class="form-group">
                                    <label for="Name" class="col-form-label required">Nama Anda</label>
                                    <input name="Name" type="text" class="form-control" id="input-name"
                                        placeholder="Your Name" value="" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="Username" class="col-form-label required">Username</label>
                                    <input name="Username" type="text" class="form-control" id="input-username"
                                        placeholder="Your Name" value="TiaraIntana" required>
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="Origin Address" class="col-form-label required">Alamat Asal</label>
                                    <input name="Origin Address" type="text" class="form-control"
                                        id="input-originaddress" placeholder="Your Location"
                                        value="Lamongan, Jawa Timur" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="Current Address" class="col-form-label required">Alamat Sekarang</label>
                                    <input name="Current Address" type="text" class="form-control"
                                        id="input-currentaddress" placeholder="Your Location" value="Malang, Jawa Timur"
                                        required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="about" class="col-form-label">Tentang Anda</label>
                                    <textarea name="about" id="about" class="form-control"
                                        rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</textarea>
                                </div>
                                <!--end form-group-->
                            </section>

                            <section>
                                <h2>Kontak</h2>
                                <div class="form-group">
                                    <label for="phone" class="col-form-label">Telepon</label>
                                    <input name="phone" type="text" class="form-control" id="phone"
                                        placeholder="Your Phone" value="08115618291">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="whatsapp_number" class="col-form-label">Nomer Whatsapp</label>
                                    <input name="phone" type="text" class="form-control" id="phone"
                                        placeholder="Your Whatsapp Number" value="081220904695">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="Your Email" value="adoptpets@example.com">
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
                                    <img src="assets/img/author-09.jpg" alt="">
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
