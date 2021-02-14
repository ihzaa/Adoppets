@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1>Contact Us</h1>
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
    <!-- <div class="map height-500px" id="map-contact"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Get In Touch</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit
                    amet fermentum sem. Class aptent taciti sociosqu ad litora
                </p>
                <br>
                <figure class="with-icon">
                    <i class="fa fa-map-marker"></i>
                    <span>Malang<br>Jawa Timur, Indonesia</span>
                </figure>
                <br>
                <figure class="with-icon">
                    <i class="fa fa-phone"></i>
                    <span>+1 516-480-4273</span>
                </figure>
                <figure class="with-icon">
                    <i class="fa fa-envelope"></i>
                    <a href="#">adoptpets@gmail.com</a>
                </figure>
                <figure class="with-icon">
                    <i class="fa fa-envelope"></i>
                    <a href="#">@adoptpets</a>
                </figure>
            </div>
            <!--end col-md-4-->
            <div class="col-md-8">
                <h2>Contact Form</h2>
                <form class="form email">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="col-form-label required">Your Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="col-form-label required">Your Email</label>
                                <input name="email" type="email" class="form-control" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                    <div class="form-group">
                        <label for="subject" class="col-form-label">Subject</label>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="message" class="col-form-label required">Pesan Anda</label>
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Your Message"
                            required></textarea>
                    </div>
                    <!--end form-group-->
                    <button type="submit" class="btn btn-primary float-right">Kirim Pesan</button>
                </form>
                <!--end form-->
            </div>
            <!--end col-md-8 -->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection
