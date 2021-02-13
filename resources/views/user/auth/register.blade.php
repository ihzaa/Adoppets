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
{{asset('user/assets/img/logo.png')}}
@endsection

@section('hero-form')
@endsection

@section('background')
<div class="background">
    <div class="background-image original-size">
        <img src="{{asset('user/assets/img/footer-background-icons.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                <form class="form clearfix">
                    <div class="form-group">
                        <label for="name" class="col-form-label required">Your Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="email" class="col-form-label required">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email"
                            required>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="username" class="col-form-label required">Username</label>
                        <input name="username" type="text" class="form-control" id="username"
                            placeholder="Your Username" required>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="alamat_asal" class="col-form-label required">Address Origin</label>
                        <input name="alamat_asal" type="text" class="form-control" id="alamat_asal"
                            placeholder="Your Address Origin" required>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="domisili_sekarang" class="col-form-label required">Current Address</Address></label>
                        <input name="domisili_sekarang" type="text" class="form-control" id="domisili_sekarang"
                            placeholder="Your Current Address" required>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="nomor_telpon" class="col-form-label required">Phone Number</Address></label>
                        <input name="nomor_telpon" type="text" class="form-control" id="nomor_telpon"
                            placeholder="Your Phone Number" required>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="no_wa" class="col-form-label required">Whatsapp Number</Address></label>
                        <input name="no_wa" type="text" class="form-control" id="no_wa"
                            placeholder="Your Whatsapp Number" required>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="password" class="col-form-label required">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password"
                            required>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="repeat_password" class="col-form-label required">Repeat Password</label>
                        <input name="repeat_password" type="password" class="form-control" id="repeat_password"
                            placeholder="Repeat Password" required>
                    </div>
                    <!--end form-group-->
                    <div class="d-flex justify-content-between align-items-baseline">
                        <label>
                            <input type="checkbox" name="newsletter" value="1">
                            Receive Newsletter
                        </label>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
                <hr>
                <p>
                    By clicking "Register" button, you agree with our <a href="#" class="link">Terms &
                        Conditions.</a>
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