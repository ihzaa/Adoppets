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
                    <a href="{{route('readmore_clinic', ['id'=>$item->id])}}">
                        <img src="{{asset($item->picture)}}" alt="">
                    </a>
                    <div class="article-title">
                        <h2><a href="{{route('readmore_clinic', ['id'=>$item->id])}}">{{$item->nama_klinik}}</a></h2>
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
                            echo(Str::limit($item->deskripsi, 550))
                            @endphp
                        </p>
                        <a href="{{route('readmore_clinic', ['id'=>$item->id])}}"
                            class="btn btn-primary btn-framed detail">Read more</a>
                    </div>
                </article>
                @endforeach

                <!--end Articles-->

                {{$list->links('user.posting.pagination')}}
                <!--end page-pagination-->
            </div>
            <!--end col-md-8-->
            <div class="col-md-4">
                <!--============ Side Bar ===============================================================-->
                <aside class="sidebar">
                    <section>
                        <h2>Search Klinik</h2>
                        <!--============ Side Bar Search Form ===========================================-->
                        <form class="sidebar-form form" id="search_form">
                            <div class="form-group">
                                <label for="what" class="col-form-label">Lokasi klinik yang Anda cari?</label>
                                <input name="keyword" type="text" class="form-control" id="what"
                                    placeholder="Enter keyword and press enter">
                            </div>
                            <!--end form-group-->
                        </form>
                        <!--============ End Side Bar Search Form =======================================-->
                    </section>
                    <section>
                        <h2>Latest Clinics</h2>
                        @foreach ($latest as $item)
                        <div class="sidebar-post">
                            <a href="{{route('readmore_clinic', ['id'=>$item->id])}}" class="background-image">
                                <img src="{{asset($item->picture)}}">
                            </a>
                            <!--end background-image-->
                            <div class="description">
                                <h4>
                                    <a href="{{route('readmore_clinic', ['id'=>$item->id])}}">{{$item->nama_klinik}}</a>
                                </h4>
                                <div class="meta">
                                    <a
                                        href="{{route('readmore_clinic', ['id'=>$item->id])}}">{{$user[$item->user_id]}}</a>
                                    <figure>{{\Carbon\Carbon::parse($item->created_at)->format('d.m.Y')}}</figure>
                                </div>
                                <!--end meta-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end sidebar-post-->
                        @endforeach

                    </section>
                </aside>
                <!--============ End Side Bar ===========================================================-->
            </div>
        </div>
        <!--end col-md-3-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection

@section('js_after')
<script>
    const URL = {
        current : "{{route('clinic')}}"
    }
    $("#search_form").on('submit',function(){
        var searchParams = new URLSearchParams(window.location.search);
        searchParams.set('search', $('#what').val())
        var newParams = searchParams.toString()
        window.location.href = URL.current + '/?' + newParams
        event.preventDefault()
    })
</script>
@endsection
