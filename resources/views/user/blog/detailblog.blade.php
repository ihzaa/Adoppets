@extends('user/master')


@section('nama-page')
sub-page
@endsection



@section('page-title')
<div class="page-title">
    <div class="container">
        <h1>Information Detail</h1>
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
            <div class="col-md-8">

                <article class="blog-post clearfix">
                    <a href="blog-post.html">
                        <img src="assets/img/blog-image-01.jpg" alt="">
                    </a>
                    <div class="article-title">
                        <h2><a href="blog-post.html">10 tips for renovation</a></h2>
                        <div class="tags framed">
                        </div>
                    </div>
                    <div class="meta">
                        <figure>
                            <a href="#" class="icon">
                                <i class="fa fa-user"></i>
                                John Doe
                            </a>
                        </figure>
                        <figure>
                            <i class="fa fa-calendar-o"></i>
                            02.05.2017
                        </figure>
                    </div>
                    <div class="blog-post-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit
                            amet fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Vestibulum tincidunt, sapien sagittis sollicitudin dapibus,
                            risus mi euismod elit
                            vehicula mattis id vel nunc. Quisque vel augue in erat scelerisque egestas at et
                            leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                            ac turpis egestas. Ut cursus orci et lacus imperdiet, sed maximus nibh laoreet.
                            Nam posuere dolor id orci fringilla, imperdiet porttitor justo varius. Proin ac
                            lorem condimentum, iaculis tortor sed, semper dui. Praesent dignissim posuere
                            euismod. Donec cursus massa nisi, eget lobortis eros vestibulum vitae. Vivamus a
                            sapien sem. Praesent in massa dui. Aliquam augue sem, porttitor in orci quis,
                            tempus bibendum purus. Suspendisse at aliquet ex, id egestas nisi. Donec quis
                            dictum elit. Nullam sed sodales nisl. Duis eget consectetur ante, eu sodales nisi.
                        </p>
                        <hr>

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



            </div>
            <!--end col-md-8-->

            <div class="col-md-4">
                <!--============ Side Bar ===============================================================-->
                <aside class="sidebar">
                    <section>
                        <h2>Search Blog</h2>
                        <!--============ Side Bar Search Form ===========================================-->
                        <form class="sidebar-form form">
                            <div class="form-group">
                                <label for="what" class="col-form-label">What?</label>
                                <input name="keyword" type="text" class="form-control" id="what"
                                    placeholder="Enter keyword and press enter">
                            </div>
                            <!--end form-group-->
                        </form>
                        <!--============ End Side Bar Search Form =======================================-->
                    </section>
                    <section>
                        <h2>Popular Posts</h2>
                        <div class="sidebar-post">
                            <a href="blog-post.html" class="background-image">
                                <img src="assets/img/blog-image-03.jpg">
                            </a>
                            <!--end background-image-->
                            <div class="description">
                                <h4>
                                    <a href="blog-post.html">How to build a cool swimming pool</a>
                                </h4>
                                <div class="meta">
                                    <a href="#">John Doe</a>
                                    <figure>02.05.2017</figure>
                                </div>
                                <!--end meta-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end sidebar-post-->

                        <div class="sidebar-post">
                            <a href="blog-post.html" class="background-image">
                                <img src="assets/img/blog-image-04.jpg">
                            </a>
                            <!--end background-image-->
                            <div class="description">
                                <h4>
                                    <a href="blog-post.html">Concrete decorations can be beautiful</a>
                                </h4>
                                <div class="meta">
                                    <a href="#">John Doe</a>
                                    <figure>02.05.2017</figure>
                                </div>
                                <!--end meta-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end sidebar-post-->

                        <div class="sidebar-post">
                            <a href="blog-post.html" class="background-image">
                                <img src="assets/img/blog-image-05.jpg">
                            </a>
                            <!--end background-image-->
                            <div class="description">
                                <h4>
                                    <a href="blog-post.html">Let’s take a break</a>
                                </h4>
                                <div class="meta">
                                    <a href="#">John Doe</a>
                                    <figure>02.05.2017</figure>
                                </div>
                                <!--end meta-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end sidebar-post-->

                    </section>

                    \
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