<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon"  href="{{url('frontend/assets/images/favicon.png')}}" type="image/x-icon">

    <!-- Title Tag -->
    <title>Universal Group</title>

    <!-- Fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{url('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet">
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
                                <a href="{{route('frontend-index')}}">                                    
                                    <img src= "{{url('frontend/assets/images/management/footer-logo.png')}}" alt="site logo">
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-5 phone-col">
                            <a href="callto:" class="phone-wrapper">
                                <i class="fa fa-phone"></i>

                                <div class="phone-no">
                                    +88028419450<br>
                                    <span class="dark">Make a call</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 email-col">
                            <a href="mailto:" class="email-wrapper">
                                <i class="fa fa-envelope"></i>

                                <div class="email-address">
                                    info@universallpgas.com<br>
                                    <span class="dark">Drop us a line</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4  col-lg-4 col-md-6 col-sm-7 address-col">
                            <address class="not-active address-wrapper">
                                <i class="fas fa-map-marker-alt"></i>

                                <div class="address">
                                    House: #514 (3rd Floor), Road: #9 <br>
                                    DOHS, Baridhara, Dhaka, Bangladesh
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
                                <nav class="main-menu-wrapper">
                                    <button class="nav-icon d-none">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <ul class="unstyled main-menu">
                                        <li class="active"><a href="{{route('frontend-index')}}">Home</a></li>
                                        <li><a href="about.html">about</a>
                                            <ul class="sub-menu">
                                                <li><a href="mission-and-vission.html">Mission & Vission </a></li>
                                                <li><a href="universal-lpgas.html">Universal LP Gas</a></li>
                                                <li><a href="board-of-directors.html">Board of Directors</a></li>
                                                <li><a href="management.html">Management</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Associate Connccern's</a>
                                            <ul class="sub-menu">
                                                <li><a href="universal-agency.html">Universal Agency</a></li>
                                                <li><a href="ms-enterprise.html">MS Enterprise</a></li>
                                                <li><a href="universal-gas-cylender.html">Universal Gas & Gas Cylender Ltd</a></li>
                                                <li><a href="amb-traders-pvt.html">AMB Traders Pvt Ltd</a></li>
                                                <li><a href="us-energy-power-pvt.html">US Energy & Power Pvt Ltd</a>
                                                </li>
                                                <li><a href="universal-cng-petrol-pump.html">Universal CNG & Petrol Pump</a></li>
                                                <li><a href="universal-engineerin-ltd.html">Universal Engineering Ltd</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="projects.html">Products</a></li>
                                        <li><a href="#">Plant & Process</a>
                                            <ul class="sub-menu">
                                                <li><a href="cylender-safety.html">Cylender Sefty</a></li>
                                                <li><a href="plants.html">Plants</a></li>
                                                <li><a href="compliance.html">Compliance</a></li>
                                                <li><a href="why-lpg.html">Why LPG?</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="distribution.html">Distribution</a></li>
                                        <li><a href="news-events.html">News & Events</a></li>
                                        <li><a href="contact.html">Contact</a></li>
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
                            <a href="contact.html" class="btn-lpg">work with us <i class="fa fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <!-- /.trusted-partner-right -->
                </div>
            </div>
        </section>
        <!--/.trusted-partner-section -->

        

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
                                <img src="{{url('frontend/assets/images/management/footer-logo.png')}}" alt="site logo">
                            </div>

                            <h4 class="widget-title">
                                Head Office
                            </h4>

                            <p>
                                House: #514 (3rd Floor), Road: #9 <br>
                                DOHS, Baridhara, Dhaka, Bangladesh
                            </p>

                            <p>Phone: +88028419450</p>

                            <p>Email : <a href="mailto:info@universallpgas.com">info@universallpgas.com</a></p>
                        </div>
                        <!-- /.footer-widget -->

                        <!-- footer-widget -->
                        <div class="col-xl-3 offset-xl-1 col-lg-4 col-md-12  footer-widget widget-2 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">

                            <h4 class="widget-title">
                                &nbsp;
                            </h4>

                            <ul class="unstyled">
                                <li><a href="{{route('frontend-index')}}">Home</a></li>
                                <li><a href="about.html">about</a></li>
                                <li><a href="cylender-safety.html">Cylender Safety</a></li>
                                <li><a href="projects.html">Product</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- /.footer-widget -->

                        <!-- footer-widget -->
                        <div class="col-xl-4 offset-xl-1 col-lg-4 col-md-6  footer-widget widget-3 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">

                            <h4 class="widget-title">
                                &nbsp;
                            </h4>
                            <!-- newsletter-wrapper -->
                            <div class="newsletter-wrapper text-center">
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
                                        <b>Call us: <a href="callto:+88028419450">+88028419450</a></b>
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
                            Copyright &copy; 2019 <a href="{{route('frontend-index')}}">Universal Group</a>. All Right Reserved.
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

    

    <script src="{{url('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/mdb.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/mixitup.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/custom.js')}}"></script>

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