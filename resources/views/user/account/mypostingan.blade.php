@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1>Postingan Saya</h1>
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
        <div class="row">
            <div class="col-md-3">
                <nav class="nav flex-column side-nav">
                    <a class="nav-link active icon" href="">
                        <i class="fa fa-user"></i>Profil Saya
                    </a>
                    <a class="nav-link icon" href="">
                        <i class="fa fa-heart"></i>Postingan Saya
                    </a>
                    <a class="nav-link icon" href="">
                        <i class="fa fa-check"></i>Hewan Teradopsi
                    </a>
                </nav>
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
                <!--============ Section Title===================================================================-->
                <div class="section-title clearfix">
                    <div class="float-left float-xs-none">
                        <label class="mr-3 align-text-bottom">Urutkan Berdasarkan: </label>
                        <select name="sorting" id="sorting" class="small width-200px"
                            data-placeholder="Default Sorting">
                            <option value="">Default Sorting</option>
                            <option value="1">Newest First</option>
                            <option value="2">Oldest First</option>
                            <option value="3">Lowest Price First</option>
                            <option value="4">Highest Price First</option>
                        </select>

                    </div>
                    <div class="float-right d-xs-none thumbnail-toggle">
                        <a href="#" class="change-class" data-change-from-class="list" data-change-to-class="grid"
                            data-parent-class="items">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="#" class="change-class active" data-change-from-class="grid"
                            data-change-to-class="list" data-parent-class="items">
                            <i class="fa fa-th-list"></i>
                        </a>
                    </div>
                </div>
                <!--============ Items ==========================================================================-->
                <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">

                    @foreach ($edit as $item)
                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">{{$category[$item->category_id]}}</a>
                                    <a href="single-listing-1.html" class="title"></a>
                                    <span class="tag">Offer</span>
                                </h3>
                                <a href="single-listing-1.html" class="image-wrapper background-image">
                                    <img src="assets/img/image-02.jpg" alt="">
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">Nashville, TN</a>
                            </h4>
                            <div class="price">$125</div>
                            <div class="admin-controls">
                                <a href="edit-ad.html">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="#" class="ad-remove">
                                    <i class="fa fa-trash"></i>Remove
                                </a>
                            </div>
                            <!--end admin-controls-->
                            <div class="description">
                                <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo
                                    faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit
                                    amet. </p>
                            </div>
                            <!--end description-->
                            <div class="additional-info">
                                <ul>
                                    <li>
                                        <figure>Start Date</figure>
                                        <aside>25.06.2017 09:00</aside>
                                    </li>
                                    <li>
                                        <figure>Length</figure>
                                        <aside>2 months</aside>
                                    </li>
                                    <li>
                                        <figure>Bedrooms</figure>
                                        <aside>3</aside>
                                    </li>
                                </ul>
                            </div>
                            <!--end addition-info-->
                            <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    @endforeach
                    <!--end item-->

                </div>
                <!--end items-->
            </div>
            <!--end col-md-9-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection
