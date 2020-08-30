@extends('frontend.layouts.admin-frontend')
@section('content')
        <!-- page-header-section -->
        <section class="page-header-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3>Universal CNG & Petrol Pump</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/.page-header-section -->


        <!-- mission-vission-section -->
        <section class="mission-vission-section sp">
            <div class="container">
                <div class="row">
                    <!-- mission-vission-left -->
                    <div class="col-md-5 mission-vission-left">
                        <figure class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                           <img src="{{ asset('/storage/image/' . $concern->img) }}" alt="mission-vission">
                        </figure>
                    </div>
                    <!-- /.mission-vission-left -->

                    <!-- mission-vission-left -->
                    <div class="col-md-7 mission-vission-right">
                        <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">{{ $concern->heading }}</h4>
                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{{ $concern->text1 }}</p>
                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">{{ $concern->text2 }}</p>
                    </div>
                    <!-- /.mission-vission-left -->
                </div>
            </div>
        </section>
        <!--/.mission-vission-section -->
<!-- our-works-section -->
        <section class="our-works-section sp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 section-header text-center">
                        <div class="sub-title wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Our Works</div>
                        <h3 class="section-title wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">Products <span class="colored">portfolio</span></h3>
                    </div>
                </div>

                <div class="row">
                    <!-- portfolio-filter -->
                    <div class="col-lg-12 portfolio-filter">
                        <ul class="unstyled d-flex controls wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <li><a href="javascript:void(0)" class="control" data-filter="all">All Products</a></li>
                            <li><a href="javascript:void(0)" class="control" data-filter=".gas-cylinder">Gas Cylinder</a></li>
                            <li><a href="javascript:void(0)" class="control" data-filter=".bitumen">Bitumen</a></li>
                            <li><a href="javascript:void(0)" class="control" data-filter=".others">Others</a></li>
                        </ul>
                    </div>
                    <!-- /.portfolio-filter -->
                </div>

                <!-- portfolio -->
                <div class="row portfolio wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix bitumen">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/portfolio/project-1.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix gas-cylinder">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/portfolio/project-2.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix gas-cylinder">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/portfolio/project-3.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix others">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/portfolio/project-4.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix others">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/portfolio/project-5.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix bitumen">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/portfolio/project-6.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix others">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/portfolio/project-7.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix gas-cylinder">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/portfolio/project-8.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->
                </div>
                <!-- /.portfolio -->
            </div>
        </section>
        <!--/.our-works-section -->
@endsection
