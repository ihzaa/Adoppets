@extends('user/master')


@section('nama-page')
sub-page
@endsection

@section('page-title')
<div class="page-title">
    <div class="container">
        <h1><strong>Kontak Kami</strong></h1>
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
        <img src="{{asset('user/assets/img/include_image/bg_klinik.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="block">
    <!-- <div class="map height-500px" id="map-contact"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <br>
                <p>
                    Jika Anda memiliki pertanyaan tentang kami silahkan kunjungi salah satu narahubung dibawah ini. Kami
                    siap menjawab dan memberikan pelayanan yang baik kepada Anda
                </p>
                <br>
                <figure class="with-icon">
                    <i class="fa fa-map-marker"></i>
                    <span><a href="https://goo.gl/maps/2UQANNTdu5QS5V2bA" target="_blank">Malang<br>Jawa Timur,
                            Indonesia</a></span>
                </figure>
                <br>
                <figure class="with-icon">
                    <i class="fa fa-phone"></i>
                    <span><a href="https://api.whatsapp.com/send?phone=+6281330904695"
                            target="_blank">081330904695</a></span>
                </figure>
                <figure class="with-icon">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:adoptpets477@gmail.com" target="_blank">adoptpets477@gmail.com</a>
                </figure>
                <figure class="with-icon">
                    <i class="fa fa-instagram"></i>
                    <a href="https://www.instagram.com/adoptpets477/?hl=en" target="_blank">@adoptpets</a>
                </figure>
            </div>
            <!--end col-md-4-->
            <div class="col-md-8">
                <h2>Beritahu Kami Keluhan Anda</h2>
                <form class="form form-submit" action="{{route('post_contact')}}" method="POST" id="contact">
                    @csrf
                    <div class="form-group">
                        <label for="subject" class="col-form-label">Subject</label>
                        <input name="subject" type="text" class="form-control @error('subject') is-invalid @enderror"
                            id="subject" placeholder="Subject" required value="{{old('subject')}}">
                    </div>
                    @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="message" class="col-form-label required">Pesan Anda</label>
                        <textarea name="message" id="message"
                            class="form-control @error('message') is-invalid @enderror" rows="4"
                            placeholder="Your Message" required value="{{old('message')}}"></textarea>
                    </div>
                    @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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

@section('js_after')
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

@endsection