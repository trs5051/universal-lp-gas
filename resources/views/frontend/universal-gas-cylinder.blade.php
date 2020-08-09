@extends('frontend.layouts.admin-frontend')
@section('content')
        <!-- page-header-section -->
        <section class="page-header-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3>Universal Gas & Gas Cylinder Ltd</h3>
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
                            <img src="{{url('frontend/assets/images/mission-vission/mission-vission.jpg')}}" alt="mission-vission">
                        </figure>
                    </div>
                    <!-- /.mission-vission-left -->

                    <!-- mission-vission-left -->
                    <div class="col-md-7 mission-vission-right">
                        <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Universal Gas & Gas Cylinder Ltd</h4>

                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                            Industrial concern of the group. The group right now has three plants at different location of the country. First one is LPG bottling plant located at Kaichutty, Chowddogram, Comilla with a capacity to fill 4000 Cylinders per day.
                        </p>

                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">
                          At the same location the company has a LPG Cylinder Manufacturing Plant with production capacity of 1000/cylinders per day. In Barabkunda, Chittagong under the same name a LPG Import, Storage, Bottling and Distribution plant is commercially running. The daily bottling capacity of the plant is 18,000/day.
                        </p>
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
