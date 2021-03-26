@extends('user/master')

@section('page-title')
<div class="page-title">
    <div class="container">
        <h1 class="left">
            Submit Post
        </h1>
    </div>
    <!--end container-->
</div>
@endsection

@section('nama-hero')

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

@section('background')

@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
            <a href="{{route('submit_posting')}}" class="item call-to-action">
                <div class="wrapper">
                    <div class="title">
                        <i class="fa fa-plus-square-o"></i>
                        Submit Hewan Peliharaan
                    </div>
                </div>
            </a>
            <a href="{{route('submit_blog')}}" class="item call-to-action">
                <div class="wrapper">
                    <div class="title">
                        <i class="fa fa-plus-square-o"></i>
                        Submit Informasi Blog
                    </div>
                </div>
            </a>
            <a href="{{route('submit_clinic')}}" class="item call-to-action">
                <div class="wrapper">
                    <div class="title">
                        <i class="fa fa-plus-square-o"></i>
                        Submit Informasi Klinik
                    </div>
                </div>
            </a>
            <!--end item-->
        </div>
    </div>
    <!--end page-pagination-->
</section>
<!--end block-->
@endsection