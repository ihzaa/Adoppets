<footer class="footer">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <a href="#" class="brand">
                        <img src="{{asset('user/assets/img/include_image/logo_adoptpets.png')}}" alt="">
                    </a>
                    <p>
                        Dengan platform adopt pets Anda dapat memilih hewan favorit Anda
                        dan mari bersama memberikan kehidupan yang baik untuk hewan - hewan
                        di sekitar Anda.
                    </p>
                </div>
                <!--end col-md-5-->
                <div class="col-md-3">
                    <h2>Navigasi</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{route('landingpage')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{route('clinic')}}">Info Klinik</a>
                                    </li>
                                    <li>
                                        <a href="{{route('get_submit_postingan')}}">Submit Posting</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Akun Saya</a>
                                    </li>
                                    <li>
                                        <a href="#">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="#">Register</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-md-3-->
                <div class="col-md-4">
                    <h2>Kontak</h2>
                    <address>
                        <figure class="with-icon">
                            <i class="fa fa-map-marker"></i>
                            <span><a href="https://goo.gl/maps/2UQANNTdu5QS5V2bA" target="_blank">Malang<br>Jawa Timur,
                                    Indonesia</a></span>
                        </figure>
                        <figure class="with-icon">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:adoptpets477@gmail.com" target="_blank">adoptpets477@gmail.com</a>
                        </figure>
                        <figure class="with-icon">
                            <i class="fa fa-instagram"></i>
                            <a href="https://www.instagram.com/adoptpets477/?hl=en" target="_blank">@adoptpets</a>
                        </figure>
                        <br>
                        <br>
                        <a href="{{route('contact')}}" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                    </address>
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
        </div>
        <div class="background">
            <div class="background-image original-size">
                <img src="{{asset('user/assets/img/footer-background-icons.jpg')}}" alt="">
            </div>
            <!--end background-image-->
        </div>
        <!--end background-->
    </div>
</footer>