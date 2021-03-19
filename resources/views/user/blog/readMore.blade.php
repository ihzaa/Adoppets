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
    <div class="background-image">
        <img src="{{asset('user/assets/img/include_image/bg_blog.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
<!--end background-->
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <article class="blog-post clearfix">
                    <a>
                        <img src="{{asset($data->picture)}}" alt="">
                    </a>
                    <div class="article-title">
                        <h2><a>{{$data->title}}</a></h2>
                        <div class="row justify-content-end">
                            <button class="tombol btn btn-framed btn-primary btn-rounded" id="btn_report"
                                data-id="">Laporkan</button>
                        </div>
                    </div>
                    <div class="meta">
                        <figure>
                            <a href="#" class="icon">
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
                        <p>@php
                            echo $data->isi
                            @endphp
                        </p>
                        <hr>
                        <div class="author">
                            <div class="author-image">
                                <div class="background-image">
                                    <img src="{{asset($user_foto[$data->user_id])}}" alt="">
                                </div>
                            </div>
                            <!--end author-image-->
                            <div class="author-description">
                                <div class="section-title">
                                    <h2>{{$user[$data->user_id]}}</h2>
                                    <h4 class="email">
                                        <a href="#"><i class="fa fa-envelope"></i>
                                            {{$deskripsi['email'][$data->user_id]}}</a>
                                    </h4>
                                    <!-- <h4 class="location">
                                        <a href="#">{{$deskripsi['alamat_asal'][$data->user_id]}}</a>

                                    </h4> -->

                                </div>

                            </div>
                            <!--end author-description-->
                        </div>
                        <!--end author-->
                    </div>
                    <!--end blog-post-content-->
                </article>

                <!--end Article-->
                {{-- <section>
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
                </section> --}}

                <hr>
            </div>
            <!--end col-md-8-->

            <div class="col-md-4">
                <!--============ Side Bar ===============================================================-->
                <aside class="sidebar">
                    <section>
                        <h2>Cari Blog</h2>
                        <!--============ Side Bar Search Form ===========================================-->
                        <form class="sidebar-form form" id="search_form">
                            <div class="form-group">
                                <label for="what" class="col-form-label">Masukkan Judul Blog</label>
                                <input type="text" class="form-control" id="what"
                                    placeholder="Masukkan Judul Blog yang ingin anda cari disini">
                            </div>
                            <!--end form-group-->
                        </form>
                        <!--============ End Side Bar Search Form =======================================-->
                    </section>
                    <section>
                        <h2>Postingan Terbaru</h2>
                        @if (count($data['popular']) == 0)
                        <h2 class="text-center">Tidak ada blog</h2>
                        @endif
                        @foreach ($data['popular'] as $item)
                        <div class="sidebar-post">
                            <a href="{{route('detail_blog',['id'=>$item->id])}}" class="background-image">
                                <img src="{{asset($item->picture)}}">
                            </a>
                            <!--end background-image-->
                            <div class="description">
                                <h4>
                                    <a href="{{route('detail_blog',['id'=>$item->id])}}">{{$item->title}}</a>
                                </h4>
                                <div class="meta">
                                    <a href="#">{{$user[$item->user_id]}}</a>
                                    <figure>{{\Carbon\Carbon::parse($item->created_at)->format('d.m.Y')}}</figure>
                                </div>
                                <!--end meta-->
                            </div>
                            <!--end description-->
                        </div>
                        @endforeach

                    </section>

                </aside>
                <!--============ End Side Bar ===========================================================-->
            </div>
            <!--end col-md-3-->
        </div>
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection

@section('js_after')
<script>
    const URL = {
    current: "{{route('blog')}}"
}
$("#search_form").on('submit', function() {
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set('search', $('#what').val())
    var newParams = searchParams.toString()
    window.location.href = URL.current + '/?' + newParams
    event.preventDefault()
})
</script>
@endsection
