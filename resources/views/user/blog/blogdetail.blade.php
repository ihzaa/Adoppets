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
                            <a href="#" class="tag">Home & Decor</a>
                            <a href="#" class="tag">Design</a>
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
                        </p>
                        <h2>In nec nulla nec enim</h2>
                        <p>
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
                        <div class="author">
                            <div class="author-image">
                                <div class="background-image">
                                    <img src="assets/img/author-09.jpg" alt="">
                                </div>
                            </div>
                            <!--end author-image-->
                            <div class="author-description">
                                <div class="section-title">
                                    <h2>Judy Ivey</h2>
                                    <h4 class="location">
                                        <a href="#">Manhattan, NY</a>
                                    </h4>
                                    <figure>
                                        <div class="float-left">
                                            <div class="rating" data-rating="4"></div>
                                        </div>
                                        <div class="text-align-right social">
                                            <a href="#">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter-square"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu,
                                    sit amet fermentum sem. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.
                                </p>
                            </div>
                            <!--end author-description-->
                        </div>
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
                            <h3>Concrete Decorations</h3>
                        </a>
                        <!--end prev-->
                        <a href="#" class="next">
                            <i class="fa fa-chevron-right"></i>
                            <figure>Next Post</figure>
                            <h3>Professional kitchen at your home</h3>
                        </a>
                    </div>
                    <!--end blog-posts-navigation-->
                </section>

                <hr>

                <section>
                    <h2>Comments</h2>
                    <div class="comments">
                        <div class="comment">
                            <div class="author">
                                <a href="#" class="author-image">
                                    <div class="background-image">
                                        <img src="assets/img/author-09.jpg" alt="">
                                    </div>
                                </a>
                                <div class="author-description">
                                    <h3>Jane Doe</h3>
                                    <div class="meta">
                                        <span>02.05.2017</span>
                                    </div>
                                    <!--end meta-->
                                    <p>
                                        Nam pulvinar tortor nec lacinia efficitur. Integer erat tortor, ultricies
                                        ut est vel, euismod imperdiet lacus. Aenean nec turpis condimentum, mollis
                                        mauris id, scelerisque quam.
                                    </p>
                                </div>
                                <!--end author-description-->
                            </div>
                            <!--end author-->
                        </div>
                        <!--end comment-->

                        <div class="comment">
                            <div class="author">
                                <a href="#" class="author-image">
                                    <div class="background-image">
                                        <img src="assets/img/author-05.jpg" alt="">
                                    </div>
                                </a>
                                <div class="author-description">
                                    <h3>John Doe</h3>
                                    <div class="meta">
                                        <span>02.05.2017</span>
                                    </div>
                                    <!--end meta-->
                                    <p>
                                        Integer erat tortor, ultricies ut est vel, euismod imperdiet lacus.
                                        Aenean nec turpis condimentum, mollis mauris id, scelerisque quam.
                                    </p>
                                </div>
                                <!--end author-description-->
                            </div>
                            <!--end author-->
                        </div>
                        <!--end comment-->

                        <div class="comment">
                            <div class="author">
                                <a href="#" class="author-image">
                                    <div class="background-image">
                                        <img src="assets/img/author-04.jpg" alt="">
                                    </div>
                                </a>
                                <div class="author-description">
                                    <h3>Susan Jefferson</h3>
                                    <div class="meta">
                                        <span>02.05.2017</span>
                                    </div>
                                    <!--end meta-->
                                    <p>
                                        Cras luctus aliquet fringilla. In eu cursus nunc. Quisque dolor leo,
                                        vehicula a sem ut, aliquam pretium tellus. Morbi ut mi eleifend,
                                        sollicitudin nisl in, elementum nisi. Praesent sed libero euismod,
                                        pellentesque risus sit amet, faucibus lorem. Pellentesque bibendum
                                        libero sed tempor tristique.
                                    </p>
                                </div>
                                <!--end author-description-->
                            </div>
                            <!--end author-->
                        </div>
                        <!--end comment-->

                    </div>
                    <!--end comments-->
                </section>

                <section>
                    <h2>Add Comment</h2>
                    <form class="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Your Name</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your Name">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Your Email</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="Your Email">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-6-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comment" class="col-form-label">Your Comment</label>
                                    <textarea name="comment" id="comment" class="form-control" rows="4"
                                        placeholder="Your Comment"></textarea>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-12-->
                        </div>
                        <!--end row-->
                        <button type="submit" class="btn btn-primary float-right">Add Comment</button>
                    </form>
                    <!--end form-->
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

                    <section>
                        <h2>Popular Post</h2>
                        <ul class="sidebar-list list-unstyled">
                            <li>
                                <a href="#">January 2017<span>4</span></a>
                            </li>
                            <li>
                                <a href="#">February 2017<span>12</span></a>
                            </li>
                            <li>
                                <a href="#">October 2016<span>8</span></a>
                            </li>
                            <li>
                                <a href="#">August 2016<span>3</span></a>
                            </li>
                            <li>
                                <a href="#">May 2016<span>11</span></a>
                            </li>
                        </ul>
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