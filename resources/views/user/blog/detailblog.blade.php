@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1>Information Detail Blog</h1>
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
        <img src="{{asset('assets/img/footer-background-icons.jpg')}}" alt="">
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
                        <h1 class="text-center">{{$data->title}}</h1>
                        <div class="tags framed">
                        </div>
                    </div>
                    <div class="meta">

                        <br>
                        <figure>
                            <a class="icon">
                                <i class="fa fa-user"></i>
                                {{$user[$data->user_id]}}
                            </a>
                        </figure>
                        <figure>
                            <i class="fa fa-calendar-o"></i>
                            {{$data->created_at}}

                        </figure>
                    </div>
                    <div class="blog-post-content">
                        <p>
                            @php
                            echo $data->isi
                            @endphp</p>
                        <hr>

                        <!--end author-->
                    </div>
                    <!--end blog-post-content-->
                </article>
                <!--end Article-->

            </div>
            <!--end col-md-8-->
        </div>
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection