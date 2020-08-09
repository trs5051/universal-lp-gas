@extends('frontend.layouts.admin-frontend')
@section('content')

<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>About Us</h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.page-header-section -->

<!-- leading-section -->
<section class="leading-section sp">
    <div class="container">
        <div class="row">
            <!-- leading-left -->
            <div class="col-lg-6 col-md-7 leading-left wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                <h5><span class="color-y">About Us</span></h5>

                <h3>We are leading International company in the world</h3>
                <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10.</p>
                <p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond too the complex global forces shaping our future</p>
                <p>
                    <a href="our-services.html" class="btn-lpg">Our Services <i class="fa fa-arrow-right"></i></a>
                    <a href="contact.html" class="btn-lpg alt">Contact Us <i class="fa fa-arrow-right"></i></a>
                </p>
            </div>
            <!-- /.leading-left -->

            <!-- leading-right leading-features -->
            <div class="col-lg-5 offset-lg-1 col-md-5 leading-right leading-features wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                <!-- leading-feature -->
                <div class="leading-feature">
                    <figure class="icon">
                        <img src="{{url('frontend/assets/images/leading-section/leading-feature-1.png')}}" alt="leading-feature">
                    </figure>

                    <div class="leading-feature-desc">
                        <h3>Building Staffs</h3>
                        <p>We have a long and proud histiry givin emphasis to envi ronment social and economic outcomes.</p>
                    </div>
                </div>
                <!-- /.leading-feature -->

                <!-- leading-feature -->
                <div class="leading-feature">
                    <figure class="icon">
                        <img src="{{url('frontend/assets/images/leading-section/leading-feature-2.png')}}" alt="leading-feature">
                    </figure>

                    <div class="leading-feature-desc">
                        <h3>Building Staffs</h3>
                        <p>We have a long and proud histiry givin emphasis to envi ronment social and economic outcomes.</p>
                    </div>
                </div>
                <!-- /.leading-feature -->

                <!-- leading-feature -->
                <div class="leading-feature">
                    <figure class="icon">
                        <img src="{{url('frontend/assets/images/leading-section/leading-feature-3.png')}}" alt="leading-feature">
                    </figure>

                    <div class="leading-feature-desc">
                        <h3>Building Staffs</h3>
                        <p>We have a long and proud histiry givin emphasis to envi ronment social and economic outcomes.</p>
                    </div>
                </div>
                <!-- /.leading-feature -->
            </div>
            <!-- /.leading-right leading-features -->
        </div>
    </div>
</section>
<!--/.leading-section -->
@endsection
