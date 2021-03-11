@extends('user/master')

@section('nama-page', 'home-page')
@section('page-title')
<div class="page-title">
    <div class="container">
        <h1 class="center">
            Silahkan Memilih Hewan Peliharaan yang Anda Sukai!
        </h1>
    </div>
    <!--end container-->
</div>
@endsection

@section('nama-hero')
has-dark-background
@endsection

@section('brand-logo')
{{asset('user/assets/img/include_image/logo_adoptpets-inverted.png')}}
@endsection

@section('hero-form')
<form class="hero-form form">
    <div class="container">
        <!--Main Form-->
        <div class="main-search-form">
            <div class="form-row justify-content-center">

                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label for="input-location" class="col-form-label">Dimana?</label>
                        <input name="location" type="text" class="form-control" id="search-location"
                            placeholder="Masukkan Lokasi" value="{{$data['location'] != "" ? $data['location']:''}}">
                        <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top"
                            title="Find My Position"><i class="fa fa-map-marker"></i></span>
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label for="category" class="col-form-label">Kategori?</label>
                        <select name="category" id="search-category" data-placeholder="Select Category">
                            <option value="">Pilih Kategori</option>
                            @foreach ($data['category_list'] as $k => $v)
                            <option value="{{$v}}" {{strtolower($data['category']['name'])
                                ==
                                strtolower($v) ? 'selected' : '' }}>
                                {{$v}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <button id="search-button" class="btn btn-primary width-100">Cari</button>
                </div>
                <!--end col-md-3-->
            </div>
            <!--end form-row-->
        </div>
        <!--end main-search-form-->
        <!--Alternative Form-->

        <!--end alternative-search-form-->
    </div>
    <!--end container-->
</form>
@endsection

@section('background')
<div class="background">
    <div class="background-image">
        <img src="{{asset('user/assets/img/include_image/bg_landingpage.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="content">
    <section class="block">
        <div class="container">
            <!--============ Section Title===================================================================-->
            <div class="section-title clearfix">
                <div class="float-left float-xs-none">
                    <label class="mr-3 align-text-bottom">Urutkan Berdasarkan: </label>
                    <select name="sorting" id="sorting_post" class="small width-200px"
                        data-placeholder="Default Sorting">
                        {{-- <option value="">Urutan Default</option> --}}
                        <option value="desc" {{$data['sort'] == 'desc'? 'selected' :''}}>Newest First</option>
                        <option value="asc" {{$data['sort'] == 'asc'? 'selected' :''}}>Oldest First</option>
                        {{-- <option value="3">Lowest Price First</option>
                        <option value="4">Highest Price First</option> --}}
                    </select>

                </div>
                <div class="float-right d-xs-none thumbnail-toggle">
                    <a href="#" class="change-class active" data-change-from-class="list" data-change-to-class="grid"
                        data-parent-class="items">
                        <i class="fa fa-th"></i>
                    </a>
                    <a href="#" class="change-class" data-change-from-class="grid" data-change-to-class="list"
                        data-parent-class="items">
                        <i class="fa fa-th-list"></i>
                    </a>
                </div>
            </div>
            <!--============ Items ==========================================================================-->
            <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
                @if (count($data['posts']) == 0)
                <h2 class="text-center">Maaf tidak ada postingan</h2>
                @endif
                @foreach ($data['posts'] as $post)
                <div class="item">
                    <!-- <div class="ribbon-featured">Featured</div> -->
                    <!--end ribbon-->
                    <div class="wrapper">
                        <div class="image">
                            <h3>
                                <a href="#" class="tag category">{{$post->category}}</a>
                                <a href="single-listing-1.html" class="title">{{$post->title}}</a>
                                <span class="tag">{{$post->ras}}</span>
                            </h3>
                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                <img src="{{asset($post->foto)}}" alt="">
                            </a>
                        </div>
                        <!--end image-->
                        <h4 class="location">
                            {{$post->lokasi}}
                        </h4>
                        {{-- <div class="price">$80</div> --}}
                        <div class="meta">
                            <figure>
                                <i
                                    class="fa fa-calendar-o"></i>{{\Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}
                            </figure>
                            <figure>
                                {{-- <a href="#"> --}}
                                <i class="fa fa-user"></i>
                                {{ucwords(implode(' ', array_slice(explode(' ', $post->username), 0, 2)))}}
                                {{-- </a> --}}
                            </figure>
                        </div>
                        <!--end meta-->
                        <div class="description">
                            <p>{{$post->kondisi_fisik}}</p>
                        </div>
                        <!--end description-->
                        <a href="{{route('detail_posting')}}" class="detail text-caps underline">Detail</a>
                    </div>
                </div>
                <!--end item-->
                @endforeach
                <!-- <a href="{{route('get_submit_postingan')}}" class="item call-to-action">
                    <div class="wrapper">
                        <div class="title">
                            <i class="fa fa-plus-square-o"></i>
                            Submit Your Post
                        </div>
                    </div>
                </a> -->
                <!-- <button class="item call-to-action" id="btn_like">
                    <div class="wrapper">
                        <div class="title">
                            <i class="fa fa-plus-square-o"></i>
                            LIKE
                        </div>
                    </div>
                </button> -->
                <!--end item-->


            </div>
            <!--============ End Items ======================================================================-->
            {{$data['posts']->links('user.posting.pagination')}}
            <!--end page-pagination-->
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>
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
{{-- <script src="{{asset('user\assets\js\url-search-param.js')}}"></script> --}}
<script>
    const URL = {
        current : "{{route('landingpage')}}"
    }
    $(document).on('click','#search-button',function(){
        let searchLocation = $('#search-location').val();
        let searchCategory = $('#search-category option:selected').text();
        let tempUrl = URL.current + '/?';
        if(searchCategory != ""){
            tempUrl+='category='+searchCategory+'&'
        }
        if(searchLocation != ""){
            tempUrl+='location'+searchLocation+'&'
        }
        tempUrl+='sort'+'desc'
        window.location.href = tempUrl
    })

    $(document).on('change','#sorting_post',function(){
        var searchParams = new URLSearchParams(window.location.search);
        searchParams.set('sort',$('#sorting_post').val())
        var newParams = searchParams.toString()
        window.location.href = URL.current+'/?'+newParams

    })

    $('#btn_like').click(function() {
    let data = {
        id: 123
    }
    fetch("{{route('likePostingan')}}", {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]").content
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        })
        .then(response => {
            if (response.status == 201) {
                return "EROR"
            } else {
                return response.json()
            }
        })
        .then(data => {
            if (data == "EROR") {
                window.location.replace("{{route('get_login')}}");
            } else {
                console.log(data);
            }
        })
        .catch(err => console.log(err));
})
</script>
@endsection
