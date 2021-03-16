@extends('user/master')

@section('nama-page')
sub-page
@endsection

@section('page-title')
<div class="page-title">
    <div class="container">
        <h1><strong>Blogs</strong></h1>
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
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if (count($list) == 0)
                <h1 class="text-center">Belum ada blog.</h1>
                @endif
                @foreach ($list as $item)
                <article class="blog-post clearfix">
                    <a href="{{route('readmore_blog', ['id'=>$item->id])}}">
                        <img src="{{asset($item->picture)}}" alt="">
                    </a>
                    <div class="article-title">
                        <h2><a href="{{route('readmore_blog', ['id'=>$item->id])}}">{{$item->title}}</a></h2>
                    </div>
                    <div class="meta">
                        <figure>
                            <a class="icon">
                                <i class="fa fa-user"></i>
                                {{$user[$item->user_id]}}
                            </a>
                        </figure>
                        <figure>
                            <i class="fa fa-calendar-o"></i>
                            {{$item->created_at}}
                        </figure>
                    </div>
                    <div class="blog-post-content">
                        <p>
                            @php
                            echo(Str::limit($item->isi, 300))
                            @endphp

                        </p>
                        <a href="{{route('readmore_blog', ['id'=>$item->id])}}"
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
                        <h2>Search Blog</h2>
                        <!--============ Side Bar Search Form ===========================================-->
                        <form class="sidebar-form form" id="search_form">
                            <div class="form-group">
                                <label for="what" class="col-form-label">What?</label>
                                <input type="text" class="form-control" id="what"
                                    placeholder="Enter keyword and press enter">
                            </div>
                            <!--end form-group-->
                        </form>
                        <!--============ End Side Bar Search Form =======================================-->
                    </section>
                    <section>
                        <h2>Popular Posts</h2>
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
                        <!--end sidebar-post-->

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

<script>
    const URL = {
        current : "{{route('blog')}}"
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
