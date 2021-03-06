@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1>Detail Informasi Klinik</h1>
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
        <div class="row justify-content-center">
            <div class="col-md-8">

                <article class="blog-post clearfix">
                    <a>
                        <img src="{{asset($data->picture)}}" alt="">
                    </a>
                    <div class="article-title">
                        <h2><a>{{$data->nama_klinik}}</a></h2>
                    </div>
                    <div class="meta">
                        <figure>
                            <a class="icon">
                                <i class="fa fa-user"></i>
                                {{$user[$data->user_id]}}
                            </a>
                        </figure>
                        <figure>
                            <i href="#" class="fa fa-map-marker"></i>
                            {{$data->lokasi}}
                        </figure>
                    </div>
                    <div class="blog-post-content">
                        <p>
                            @php
                            echo($data->deskripsi)
                            @endphp</p>
                        <hr>
                        <div class="author">
                            <!--end author-image-->
                            <div class="section">
                                <div class="email">
                                    <a href="#"><i class="fa fa-envelope"></i> {{$data->email}}</a>
                                </div>
                                <div class="no-telp">
                                    <a href="#"><i class="fa fa-phone"></i> {{$data->no_telepon}}</a>
                                </div>
                                <!-- <figure>
                                    <div class="text-align-right social">
                                        <a href="#">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </figure> -->
                            </div>

                            <!--end author-description-->
                        </div>
                        <!--end author-->
                    </div>
                    <!--end blog-post-content-->
                </article>

                <!--end Article-->

                <section>
                    <div class="blog-posts-navigation clearfix">
                        <a href="#" class="prev">
                            <i class="fa fa-chevron-left"></i>
                            <figure>Previous Post</figure>

                        </a>
                        <!--end prev-->
                        <a href="#" class="next">
                            <i class="fa fa-chevron-right"></i>
                            <figure>Next Post</figure>

                        </a>
                    </div>
                    <!--end blog-posts-navigation-->
                </section>

                <hr>

            </div>
            <!--end col-md-8-->


            <!--end col-md-3-->
        </div>
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection