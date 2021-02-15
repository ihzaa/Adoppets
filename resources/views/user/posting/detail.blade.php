@extends('user/master')

@section('include-css')
<link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}" type="text/css">
@endsection

@section('nama-page', 'sub-page')
@section('page-title')
<div class="page-title">
    <div class="container clearfix">
        <div class="float-left float-xs-none">
            <h1>Furniture For Sale
                <span class="tag">Offer</span>
            </h1>
            <h4 class="location">
                <a href="#">Manhattan, NY</a>
            </h4>
        </div>
        <div class="float-right float-xs-none price">
            <div class="number">$80</div>
            <div class="id opacity-50">
                <strong>ID: </strong>3479
            </div>
        </div>
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
    <div class="background-image original-size">
        <img src="{{asset('user/assets/img/footer-background-icons.jpg')}}" alt="">
    </div>
    <!--end background-image-->
</div>
@endsection

@section('content')
<section class="content">
    <section class="block">
        <div class="container">
            <div class="row">
                <!--============ Listing Detail =============================================================-->
                <div class="col-md-9">
                    <!--Gallery Carousel-->
                    <section>
                        <h2>Gallery</h2>
                        <!--end section-title-->
                        <div class="gallery-carousel owl-carousel">
                            <img src="{{asset('user/assets/img/image-20.jpg')}}" alt="" data-hash="1">
                            <img src="{{asset('user/assets/img/image-01.jpg')}}" alt="" data-hash="2">
                            <img src="{{asset('user/assets/img/image-21.jpg')}}" alt="" data-hash="3">
                            <img src="{{asset('user/assets/img/image-22.jpg')}}" alt="" data-hash="4">
                            <img src="{{asset('user/assets/img/image-23.jpg')}}" alt="" data-hash="5">
                            <img src="{{asset('user/assets/img/image-14.jpg')}}" alt="" data-hash="6">
                        </div>
                        <div class="gallery-carousel-thumbs owl-carousel">
                            <a href="#1" class="owl-thumb active-thumb background-image">
                                <img src="{{asset('user/assets/img/image-20.jpg')}}" alt="">
                            </a>
                            <a href="#2" class="owl-thumb background-image">
                                <img src="{{asset('user/assets/img/image-01.jpg')}}" alt="">
                            </a>
                            <a href="#3" class="owl-thumb background-image">
                                <img src="{{asset('user/assets/img/image-21.jpg')}}" alt="">
                            </a>
                            <a href="#4" class="owl-thumb background-image">
                                <img src="{{asset('user/assets/img/image-22.jpg')}}" alt="">
                            </a>
                            <a href="#5" class="owl-thumb background-image">
                                <img src="{{asset('user/assets/img/image-23.jpg')}}" alt="">
                            </a>
                            <a href="#6" class="owl-thumb background-image">
                                <img src="{{asset('user/assets/img/image-14.jpg')}}" alt="">
                            </a>
                        </div>
                    </section>
                    <!--end Gallery Carousel-->
                    <!--Description-->
                    <section>
                        <h2>Description</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit
                            amet fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Vestibulum tincidunt, sapien sagittis sollicitudin dapibus,
                            risus mi euismod elit, in dictum justo lacus sit amet dui. Sed faucibus vitae nisl
                            at dignissim.
                        </p>
                    </section>
                    <!--end Description-->
                    <!--Details & Location-->
                    <section>
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Details</h2>
                                <dl>
                                    <dt>Date Added</dt>
                                    <dd>05.04.2017</dd>
                                    <dt>Type</dt>
                                    <dd>Offer</dd>
                                    <dt>Status</dt>
                                    <dd>Used</dd>
                                    <dt>First Owner</dt>
                                    <dd>Yes</dd>
                                    <dt>Material</dt>
                                    <dd>Wood, Leather</dd>
                                    <dt>Color</dt>
                                    <dd>White, Grey</dd>
                                    <dt>Height</dt>
                                    <dd>47cm</dd>
                                    <dt>Width</dt>
                                    <dd>203cm</dd>
                                    <dt>Length</dt>
                                    <dd>54cm</dd>
                                </dl>
                            </div>
                            <div class="col-md-8">
                                <h2>Location</h2>
                                <div class="map height-300px" id="map-small"></div>
                            </div>
                        </div>
                    </section>
                    <!--end Details and Locations-->
                    <!--Features-->
                    <section>
                        <h2>Features</h2>
                        <ul class="features-checkboxes columns-3">
                            <li>Quality Wood</li>
                            <li>Brushed Alluminium Handles</li>
                            <li>Foam mattress</li>
                            <li>Detachable chaise section</li>
                            <li>3 fold pull out mechanism</li>
                        </ul>
                    </section>
                    <!--end Features-->
                    <!--Author-->
                    <section>
                        <h2>Author</h2>
                        <div class="box">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="author">
                                        <div class="author-image">
                                            <div class="background-image">
                                                <img src="{{asset('user/assets/img/author-01.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <!--end author-image-->
                                        <div class="author-description">
                                            <h3>Jane Doe</h3>
                                            <div class="rating" data-rating="4"></div>
                                            <a href="seller-detail-1.html" class="text-uppercase">Show My Listings
                                                <span class="appendix">(12)</span>
                                            </a>
                                        </div>
                                        <!--end author-description-->
                                    </div>
                                    <hr>
                                    <dl>
                                        <dt>Phone</dt>
                                        <dd>830-247-0930</dd>
                                        <dt>Email</dt>
                                        <dd>hijane@example.com</dd>
                                    </dl>
                                    <!--end author-->
                                </div>
                                <!--end col-md-5-->
                                <div class="col-md-7">
                                    <form class="form email">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label">Name</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="email" class="col-form-label">Email</label>
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="message" class="col-form-label">Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Hi there! I am interested in your offer ID 53951. Please give me more details."></textarea>
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </form>
                                </div>
                                <!--end col-md-7-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end box-->
                    </section>
                    <!--End Author-->
                </div>
                <!--============ End Listing Detail =========================================================-->
                <!--============ Sidebar ====================================================================-->
                <div class="col-md-3">
                    <aside class="sidebar">
                        <section>
                            <h2>Similar Ads</h2>
                            <div class="items compact">
                                <div class="item">
                                    <div class="ribbon-featured">Featured</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Home & Decor</a>
                                                <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="{{asset('user/assets/img/image-01.jpg')}}" alt="">
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
                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Education</a>
                                                <a href="single-listing-1.html" class="title">Creative Course</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="{{asset('user/assets/img/image-02.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Nashville, TN</a>
                                        </h4>
                                        <div class="price">$125</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>28.04.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Peter Browner
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Adventure</a>
                                                <a href="single-listing-1.html" class="title">Into The Wild</a>
                                                <span class="tag">Ad</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="{{asset('user/assets/img/image-03.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Seattle, WA</a>
                                        </h4>
                                        <div class="price">$1,560</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>21.04.2017
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Peak Agency
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                    </div>
                                </div>
                                <!--end item-->
                            </div>

                        </section>
                        <section>
                            <h2>Search Ads</h2>
                            <!--============ Side Bar Search Form ===========================================-->
                            <form class="sidebar-form form">
                                <div class="form-group">
                                    <label for="what" class="col-form-label">What?</label>
                                    <input name="keyword" type="text" class="form-control" id="what" placeholder="What are you looking for?">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="input-location" class="col-form-label">Where?</label>
                                    <input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
                                    <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="category" class="col-form-label">Category?</label>
                                    <select name="category" id="category" data-placeholder="Select Category">
                                        <option value="">Select Category</option>
                                        <option value="1">Computers</option>
                                        <option value="2">Real Estate</option>
                                        <option value="3">Cars & Motorcycles</option>
                                        <option value="4">Furniture</option>
                                        <option value="5">Pets & Animals</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                                <button type="submit" class="btn btn-primary width-100">Search</button>

                                <!--Alternative Form-->
                                <div class="alternative-search-form">
                                    <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                                    <div class="collapse" id="collapseAlternativeSearchForm">
                                        <div class="wrapper">
                                            <label>
                                                <input type="checkbox" name="new">
                                                New
                                            </label>
                                            <label>
                                                <input type="checkbox" name="used">
                                                Used
                                            </label>
                                            <label>
                                                <input type="checkbox" name="with_photo">
                                                With Photo
                                            </label>
                                            <label>
                                                <input type="checkbox" name="featured">
                                                Featured
                                            </label>
                                            <div class="form-group">
                                                <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                                <span class="input-group-addon small">$</span>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                                <span class="input-group-addon small">$</span>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <select name="distance" id="distance" class="small" data-placeholder="Distance" >
                                                    <option value="">Distance</option>
                                                    <option value="1">1km</option>
                                                    <option value="2">5km</option>
                                                    <option value="3">10km</option>
                                                    <option value="4">50km</option>
                                                    <option value="5">100km</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end wrapper-->
                                    </div>
                                    <!--end collapse-->
                                </div>
                                <!--end alternative-search-form-->
                            </form>
                            <!--============ End Side Bar Search Form =======================================-->
                        </section>
                    </aside>
                </div>
                <!--============ End Sidebar ================================================================-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>
@endsection

@section('js_after')
<script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/assets/js/custom.js')}}"></script>
<script>
    var latitude = 51.511971;
    var longitude = -0.137597;
    var markerImage = "{{asset('user/assets/img/map-marker.png')}}";
    var mapTheme = "light";
    var mapElement = "map-small";
    simpleMap(latitude, longitude, markerImage, mapTheme, mapElement);
</script>
@endsection
