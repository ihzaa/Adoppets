@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1><strong>Pets Clinic</strong></h1>
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
        <img src="{{asset('user/assets/img/include_image/bg_klinik1.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($list as $item)
                <article class="blog-post clearfix">
                    <a href="#">
                        <img src="{{asset($item->picture)}}" alt="">
                    </a>
                    <div class="article-title">
                        <h2><a href="#">{{$item->nama_klinik}}</a></h2>
                    </div>
                    <div class="meta">
                        <figure>
                            <a href="#" class="icon">
                                <i class="fa fa-user"></i>
                                {{$user[$item->user_id]}}
                            </a>
                        </figure>
                        <figure>
                            <i class="fa fa-map-marker"></i>
                            {{$item->lokasi}}
                        </figure>
                    </div>
                    <div class="blog-post-content">
                        <p>
                            @php
                            echo($item->deskripsi)
                            @endphp
                        </p>
                        <a href="{{route('clinic_detail')}}" class="btn btn-primary btn-framed detail">Read more</a>
                    </div>
                </article>
                @endforeach

                <!--end Articles-->

                <div class="page-pagination">
                    <nav aria-label="Pagination">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-chevron-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--end page-pagination-->
            </div>
            <!--end col-md-8-->

        </div>
        <!--end col-md-3-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection