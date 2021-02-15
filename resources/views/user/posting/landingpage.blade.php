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
                        <input name="location" type="text" class="form-control" id="input-location"
                            placeholder="Masukkan Lokasi">
                        <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top"
                            title="Find My Position"><i class="fa fa-map-marker"></i></span>
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label for="category" class="col-form-label">Kategori?</label>
                        <select name="category" id="category" data-placeholder="Select Category">
                            <option value="">Pilih Kategori</option>
                            <option value="1">Computers</option>
                            <option value="2">Real Estate</option>
                            <option value="3">Cars & Motorcycles</option>
                            <option value="4">Furniture</option>
                            <option value="5">Pets & Animals</option>
                        </select>
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <button type="submit" class="btn btn-primary width-100">Cari</button>
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
                    <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting">
                        <option value="">Urutan Default</option>
                        <option value="1">Newest First</option>
                        <option value="2">Oldest First</option>
                        <option value="3">Lowest Price First</option>
                        <option value="4">Highest Price First</option>
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
                <div class="item">
                    <!-- <div class="ribbon-featured">Featured</div> -->
                    <!--end ribbon-->
                    <div class="wrapper">
                        <div class="image">
                            <h3>
                                <a href="#" class="tag category">Home & Decor</a>
                                <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                <span class="tag">Offer</span>
                            </h3>
                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                <img src="assets/img/image-01.jpg" alt="">
                            </a>
                        </div>
                        <!--end image-->
                        <h4 class="location">
                            <a href="#">Manhattan, NY</a>
                        </h4>
                        <div class="price">$80</div>
                        <div class="meta">
                            <figure>
                                <i class="fa fa-calendar-o"></i>02.05.2017
                            </figure>
                            <figure>
                                <a href="#">
                                    <i class="fa fa-user"></i>Jane Doe
                                </a>
                            </figure>
                        </div>
                        <!--end meta-->
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                        </div>
                        <!--end description-->
                        <a href="{{route('detail_posting')}}" class="detail text-caps underline">Detail</a>
                    </div>
                </div>
                <!--end item-->

                <a href="{{route('get_submit_postingan')}}" class="item call-to-action">
                    <div class="wrapper">
                        <div class="title">
                            <i class="fa fa-plus-square-o"></i>
                            Submit Your Post
                        </div>
                    </div>
                </a>
                <button class="item call-to-action" id="btn_like">
                    <div class="wrapper">
                        <div class="title">
                            <i class="fa fa-plus-square-o"></i>
                            LIKE
                        </div>
                    </div>
                </button>
                <!--end item-->


            </div>
            <!--============ End Items ======================================================================-->
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
        <!--end container-->
    </section>
    <!--end block-->
</section>
@endsection

@section('js_after')
<script>
    $('#btn_like').click(function(){
        let data = {
            id : 123
        }
        fetch("{{route('likePostingan')}}",{
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
            if(response.status == 201){
                return "EROR"
            }else{
                return response.json()
            }
        })
        .then(data => {
            if(data == "EROR"){
                window.location.replace("{{route('get_login')}}");
            }else{
                console.log(data);
            }
        })
        .catch(err => console.log(err));
    })
</script>
@endsection
