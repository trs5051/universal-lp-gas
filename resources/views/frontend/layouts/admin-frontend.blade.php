<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    @isset($settings)
    <link rel="shortcut icon" href="{{ asset('/storage/favicon/' . $settings->favicon) }}" type="image/x-icon">
    @endisset


    <!-- Title Tag -->
    <title>Universal Group</title>

    <!-- Fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ url('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="home">
    <!-- site-wrapper -->
    <div class="site-wrapper">

        <!-- preloader off -->
        <!-- <div class="preloader">
            <div class="round"></div>
        </div> -->
        <!-- /.preloader -->

        <!-- site-header -->
        <header class="site-header">
            <!-- header-top-area -->
            <section class="header-top-area">
                <!-- section-title -->
                <h6 class="section-title d-none">&nbsp;</h6>
                <!-- /.section-title -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 logo-col">
                            <div class="logo wow">
                                <a href="{{ route('frontend.index') }}">

                                    @isset($settings)
                                    <img src="{{ asset('/storage/logo/' . $settings->logo) }}" width="200" />
                                    @endisset
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-5 phone-col">
                            <a href="callto:{{ !empty($settings->contact) ? $settings->contact : 'no number' }}" class="phone-wrapper">
                                <i class="fa fa-phone"></i>

                                <div class="phone-no">
                                    {{ !empty($settings->contact) ? $settings->contact : 'no number' }}
                                    <br>
                                    <span class="dark">Make a call</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 email-col">
                            <a href="mailto:" class="email-wrapper">
                                <i class="fa fa-envelope"></i>

                                <div class="email-address">
                                    {{ !empty($settings->email) ? $settings->email : 'no email' }}<br>
                                    <span class="dark">Drop us a line</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4  col-lg-4 col-md-6 col-sm-7 address-col">
                            <address class="not-active address-wrapper">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="address">
                                    {{ !empty($settings->address_first_part) ? $settings->address_first_part : 'no address' }}
                                    <br>
                                    {{ !empty($settings->address_second_part) ? $settings->address_second_part : 'no address' }}
                                </div>
                            </address>
                        </div>

                    </div>
                </div>
            </section>
            <!--/.header-top-area -->

            <!-- header-area -->
            <section class="header-area">
                <!-- section-title -->
                <h6 class="section-title d-none">&nbsp;</h6>
                <!-- /.section-title -->
                <div class="menu-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-search-form-wrapper">
                                <!-- main-menu-wrapper -->
                                {{-- main nav-bar --}}
                                <nav class="main-menu-wrapper">
                                    <button class="nav-icon d-none">
                                        <i class="fa fa-bars"></i>
                                    </button>

                                    <ul class="unstyled main-menu">

                                        <li class="active"><a href="{{ route('frontend.index') }}">Home</a></li>

                                        <li>
                                            <a href="#">about</a>

                                            <ul class="sub-menu">
                                                <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                                                <li><a href="{{ route('frontend.mission-and-vision') }}">Mission & Vision </a></li>
                                                <li><a href="{{ route('frontend.universal-lp-gas') }}">Universal LP Gas</a></li>
                                                <li><a href="{{ route('frontend.achievement-and-award') }}">Achievement & Award</a></li>
                                                <li><a href="{{ route('frontend.board-of-directors') }}">Board of Directors</a></li>
                                                <li><a href="{{ route('frontend.management') }}">Management</a></li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#">Associate Connccern's</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('frontend.universal-agency') }}">Universal Agency</a></li>
                                                <li><a href="{{ route('frontend.ms-enterprise') }}">MS Enterprise</a> </li>
                                                <li><a href="{{ route('frontend.universal-gas-cylinder') }}">Universal Gas & Gas Cylinder Ltd</a></li>
                                                <li><a href="{{ route('frontend.amb-traders-pvt') }}">AMB Traders Pvt
                                                        Ltd</a></li>
                                                <li><a href="{{ route('frontend.us-energy-power-pvt') }}">US Energy &
                                                        Power Pvt Ltd</a>
                                                </li>
                                                <li><a href="{{ route('frontend.universal-cng-petrol-pump') }}">Universal
                                                        CNG & Petrol
                                                        Pump</a></li>
                                                <li><a href="{{ route('frontend.universal-engineering-ltd') }}">Universal
                                                        Engineering
                                                        Ltd</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('frontend.product') }}">Products</a></li>
                                        <li><a href="#">Plant & Process</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('frontend.cylinder-safety') }}">Cylinder Safety</a>
                                                </li>
                                                <li><a href="{{ route('frontend.plants') }}">Plants</a></li>
                                                <li><a href="{{ route('frontend.compliance') }}">Compliance</a></li>
                                                <li><a href="{{ route('frontend.why-lpg') }}">Why LPG?</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('frontend.distribution') }}">Distribution</a></li>
                                        <li><a href="{{ route('frontend.news-events') }}">News & Events</a></li>
                                        <li><a href="{{ route('frontend.career') }}">Career</a></li>
                                        <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                                <!-- /.main-menu-wrapper -->

                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <!--/.header-area -->
        </header>
        <!-- /.site-header -->

        <div class="ticker-wrap tickers">
            <div class="ticker">
            <div class="ticker__item">{{$settings->ticker ?? ''}}</div>
                {{-- <div class="ticker__item">Ugh PBR&B kale chips Echo Park.</div> --}}
            </div>
        </div>

        <!-- main part -->

        <!-- Main content -->
        <section class="content">
            @yield('content')

        </section><!-- /.content -->
        <!-- Main Footer -->

        <!-- end main part -->
        <!-- trusted-partner-section -->
        <section class="trusted-partner-section sp">
            <div class="container">
                <div class="row">
                    <!-- trusted-partner-left -->
                    <div class="col-lg-9 col-md-7 trusted-partner-left">
                        <h3 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Your Trusted Construction
                            Partner</h3>

                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">Everything should be as
                            simple as it is, but not simpler as you</p>
                    </div>
                    <!-- /.trusted-partner-left -->

                    <!-- trusted-partner-right -->
                    <div class="col-lg-3 col-md-5 trusted-partner-right text-right">
                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <a href="{{Route('frontend.contact')}}" class="btn-lpg">work with us <i class="fa fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <!-- /.trusted-partner-right -->
                </div>
            </div>
        </section>
        <!--/.trusted-partner-section -->

        <!-- our-clients-section -->
        <section class="our-clients-section sp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- our-clients -->
                        <div class="our-clients owl-carousel owl-theme wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                            <!-- single-client -->
                            <div class="single-client">
                                <img src="{{ url('frontend/assets/images/our-clients/our-client-1.png') }}" alt="our-client">
                            </div>
                            <!-- /.single-client -->

                            <!-- single-client -->
                            <div class="single-client">
                                <img src="{{ url('frontend/assets/images/our-clients/our-client-2.png') }}" alt="our-client">
                            </div>
                            <!-- /.single-client -->

                            <!-- single-client -->
                            <div class="single-client">
                                <img src="{{ url('frontend/assets/images/our-clients/our-client-3.png') }}" alt="our-client">
                            </div>
                            <!-- /.single-client -->

                            <!-- single-client -->
                            <div class="single-client">
                                <img src="{{ url('frontend/assets/images/our-clients/our-client-4.png') }}" alt="our-client">
                            </div>
                            <!-- /.single-client -->

                            <!-- single-client -->
                            <div class="single-client">
                                <img src="{{ url('frontend/assets/images/our-clients/our-client-5.png') }}" alt="our-client">

                            </div>
                            <!-- /.single-client -->
                        </div>
                        <!-- /.our-clients -->
                    </div>
                </div>
            </div>
        </section>
        <!--/.our-clients-section -->



        <!-- site-footer -->
        <footer class="site-footer">
            <!-- footer-top-section -->
            <section class="footer-top-section sp">
                <div class="container">
                    <!-- footer-widgets -->
                    <div class="row footer-widgets">

                        <!-- footer-widget -->
                        <div class="col-xl-3 col-lg-4 col-md-6 footer-widget widget-1 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <div class="footer-logo">

                                <a href="{{ route('frontend.index') }}">

                                    @isset($settings)
                                    <img src="{{ asset('/storage/logo/' . $settings->logo) }}" width="200" />
                                    @endisset
                                </a>
                            </div>

                            <h4 class="widget-title">
                                Head Office
                            </h4>

                            <p>
                                {{ !empty($settings->address_first_part) ? $settings->address_first_part : 'no address' }}
                                <br>
                                {{ !empty($settings->address_second_part) ? $settings->address_second_part : 'no address' }}
                            </p>

                            <p>Phone: {{ !empty($settings->contact) ? $settings->contact : 'no number' }}</p>

                            <p>Email : <a href="mailto:{{ !empty($settings->email) ? $settings->email : 'no email' }}">{{ !empty($settings->email) ? $settings->email : 'no email' }}</a>
                            </p>
                        </div>
                        <!-- /.footer-widget -->

                        <!-- footer-widget -->
                        <div class="col-xl-3 offset-xl-1 col-lg-4 col-md-12  footer-widget widget-2 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">

                            <h4 class="widget-title">
                                Visitor Counter
                            </h4>
                            <ul class="list-group v-counts">
                                <li class="list-group-item">
                                    <i class="fa fa-twitter"></i> Total visitor: 6217
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-twitter"></i> Unique visitor: 504
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-twitter"></i> Page visitor: 36217
                                </li>
                            </ul>
                            <ul class="unstyled social-medias">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            </ul>

                            <ul class="unstyled d-none">
                                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                <li><a href="about.html">about</a></li>
                                <li><a href="cylinder-safety.html">Cylinder Safety</a></li>
                                <li><a href="projects.html">Product</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- /.footer-widget -->

                        <!-- footer-widget -->
                        <div class="col-xl-4 offset-xl-1 col-lg-4 col-md-6  footer-widget widget-3 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">

                            <h4 class="widget-title">
                                Contact Us
                            </h4>

                            <div class="contact-form">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="user-email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="messages" rows="3" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>


                            <!-- newsletter-wrapper -->
                            <div class="newsletter-wrapper text-center d-none">
                                <h3>Subscribe for latest newsletter</h3>

                                <form action="#" class="newsletter-form">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="usermail" class="form-control" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Subscribe now <i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>

                                    <div class="call-us">
                                        or <br>
                                        <b>Call us: <a href="callto:{{ !empty($settings->contact) ? $settings->contact : 'no number' }}">{{ !empty($settings->contact) ? $settings->contact : 'no number' }}</a></b>
                                    </div>
                                </form>
                            </div>
                            <!-- ./newsletter-wrapper -->

                            <ul class="unstyled social-medias">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.footer-widget -->
                    </div>
                    <!-- /.footer-widgets -->
                </div>
            </section>
            <!--/.footer-top-section -->

            <!-- footer-bottom-section -->
            <section class="footer-bottom-section">
                <!-- section-title -->
                <h6 class="section-title d-none">&nbsp;</h6>
                <!-- /.section-title -->

                <div class="container">
                    <div class="row">
                        <!-- copyright  -->
                        <div class="col-md-6 copyright wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            Copyright &copy; 2019 <a href="{{ route('frontend.index') }}">Universal Group</a>. All Right
                            Reserved.
                        </div>
                        <!-- /.copyright  -->

                        <!-- developer  -->
                        <div class="col-md-6 developer text-right wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            Designed & Developed by <a href="https://www.ennvisiodigital.tech/" target="_blank">Ennvisio
                                Digital Pvt. Ltd.</a>
                        </div>
                        <!-- /.copyright  -->
                    </div>
                </div>
            </section>
            <!--/.footer-bottom-section -->
        </footer>
        <!-- /.site-footer -->

        <!-- scrolltotop -->
        <a class="scrolltotop" href="#page" style="display: block;">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- /.scrolltotop -->

    </div>
    <!-- /.site-wrapper -->

    <!-- Scripts -->



    <script src="{{ url('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/mdb.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/mixitup.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/custom.js') }}"></script>

    <script>
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        injectSvgSprite('https://demo.bootstrapious.com/sell/1-2-0/icons/orion-svg-sprite.svg');
    </script>
</body>

</html>
