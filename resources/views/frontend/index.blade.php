@extends('frontend.layouts.admin-frontend')
@section('content')

        <!-- main part -->

        <!-- slider-area -->
        <section class="cylinder-slider-section">
            <div class="cylinder-slider owl-carousel owl-theme">
                @forelse ($frontSliders as $key => $item)
                <div class="cylinder-slide">
                    <img src="{!! asset('/storage/sliderImage/' . $item->img) !!}" />
                    @if ($key == 0)
                    <div class="slide-desc cylinder-slide-caption">
                        <h1 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            Welcome To Universal Group
                        </h1>
                    </div>
                    @endif

                </div>

                @empty

                @endforelse


            </div>
        </section>
        <!--/.slider-area -->

        <!-- our-proud-section -->
        <section class="our-proud-section spt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row our-proud">
                            <div class="col-lg-5 our-proud-left">
                                <!-- our-proud-desc -->
                                <div class="our-proud-desc">
                                    <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Our proud</p>

                                    <h3 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{{ $ourProud->heading }}</h3>

                                    <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">{{ $ourProud->description }}</p>
                                </div>
                                <!-- /.our-proud-desc -->
                            </div>

                            <div class="col-lg-7 our-proud-right">
                                <!-- proud-features -->
                                <div class="row proud-features">

                                    <!-- single-pfeature -->
                                    <div class="col-sm-6 single-pfeature">
                                        <figure class="icon wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                            @isset($ourProud)
                                            <img src="{{ asset('/storage/ourProud/' . $ourProud->img1) }}" alt="proud-feature"/>
                                            @endisset
                                        </figure>

                                        <div class="single-pfeature-text wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                            <div class="pf-number">{{ $ourProud->number1 }}</div>

                                            <p>{{ $ourProud->text1 }}</p>
                                        </div>
                                    </div>
                                    <!-- /.single-pfeature -->
                                    <!-- single-pfeature -->
                                    <div class="col-sm-6 single-pfeature">
                                        <figure class="icon wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                            @isset($ourProud)
                                            <img src="{{ asset('/storage/ourProud/' . $ourProud->img2) }}" alt="proud-feature"/>
                                            @endisset
                                        </figure>

                                        <div class="single-pfeature-text wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                            <div class="pf-number">{{ $ourProud->number2 }}</div>

                                            <p>{{ $ourProud->text2 }}</p>
                                        </div>
                                    </div>
                                    <!-- /.single-pfeature -->
                                    <!-- single-pfeature -->
                                    <div class="col-sm-6 single-pfeature">
                                        <figure class="icon wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                            @isset($ourProud)
                                            <img src="{{ asset('/storage/ourProud/' . $ourProud->img3) }}" alt="proud-feature"/>
                                            @endisset
                                        </figure>

                                        <div class="single-pfeature-text wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                            <div class="pf-number">{{ $ourProud->number3 }}</div>

                                            <p>{{ $ourProud->text3 }}</p>
                                        </div>
                                    </div>
                                    <!-- /.single-pfeature -->
                                    <!-- single-pfeature -->
                                    <div class="col-sm-6 single-pfeature">
                                        <figure class="icon wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                            @isset($ourProud)
                                            <img src="{{ asset('/storage/ourProud/' . $ourProud->img4) }}" alt="proud-feature"/>
                                            @endisset
                                        </figure>

                                        <div class="single-pfeature-text wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                            <div class="pf-number">{{ $ourProud->number4 }}</div>

                                            <p>{{ $ourProud->text4 }}</p>
                                        </div>
                                    </div>
                                    <!-- /.single-pfeature -->



                                </div>
                                <!-- /.proud-features -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/.our-proud-section -->

        <!-- business-concern-section -->
        <section class="business-concern-section sp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header text-center">
                            <h3 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Our business <span class="colored">Concern</span></h3>
                        <p class="sub-title wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{{ $information->text1 }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- concern-features -->
                    <div class="col concern-features owl-carousel owl-theme wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                        <!-- single-concern-feature -->

                        <a href="universal-cng-petrol-pump.html">

                            <div class="single-concern-feature">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/concern-features/concern-feature-1.jpg')}}" alt="concern-feature">
                                </figure>

                                <div class="concern-feature-desc">
                                    <h3>Universal CNG Patrol Pump</h3>
                                </div>
                            </div>
                        </a>


                        <!-- /.single-concern-feature -->

                        <!-- single-concern-feature -->
                        <a href="universal-gas-cylinder.html">

                            <div class="single-concern-feature">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/concern-features/concern-feature-2.jpg')}}" alt="concern-feature">
                                </figure>

                                <div class="concern-feature-desc">
                                    <h3>Universal Gas & Gas Cylinder Ltd</h3>
                                </div>
                            </div>
                        </a>
                        <!-- /.single-concern-feature -->

                        <!-- single-concern-feature -->
                        <a href="ms-enterprise.html">

                            <div class="single-concern-feature">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/concern-features/concern-feature-3.jpg')}}" alt="concern-feature">
                                </figure>

                                <div class="concern-feature-desc">
                                    <h3>MS ENTERPRISE </h3>
                                </div>
                            </div>
                        </a>
                        <!-- /.single-concern-feature -->

                        <!-- single-concern-feature -->
                        <a href="amb-traders-pvt.html">

                            <div class="single-concern-feature">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/concern-features/concern-feature-1.jpg')}}" alt="concern-feature">
                                </figure>

                                <div class="concern-feature-desc">
                                    <h3>AMB Traders Private Ltd</h3>
                                </div>
                            </div>
                        </a>
                        <!-- /.single-concern-feature -->

                        <!-- single-concern-feature -->
                        <a href="universal-agency.html">

                            <div class="single-concern-feature">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/concern-features/concern-feature-2.jpg')}}" alt="concern-feature">
                                </figure>

                                <div class="concern-feature-desc">
                                    <h3>Universal Agencies</h3>
                                </div>
                            </div>
                        </a>
                        <!-- /.single-concern-feature -->

                        <!-- single-concern-feature -->
                        <a href="universal-engineering-ltd.html">

                            <div class="single-concern-feature">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/concern-features/concern-feature-3.jpg')}}" alt="concern-feature">
                                </figure>

                                <div class="concern-feature-desc">
                                    <h3>Universal Engineering Pvt Ltd</h3>
                                </div>
                            </div>
                        </a>
                        <!-- /.single-concern-feature -->
                        <a href="us-energy-power-pvt.html">

                            <div class="single-concern-feature">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/concern-features/concern-feature-3.jpg')}}" alt="concern-feature">
                                </figure>

                                <div class="concern-feature-desc">
                                    <h3>US Energy & Power Pvt Ltd</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /.concern-features -->
                </div>
            </div>
        </section>
        <!--/.business-concern-section -->

        <!-- sustainability-section -->
        <section class="sustainability-section">
            <div class="container">
                <div class="row">

                    <!-- sustainability-left -->
                    <div class="col-lg-6 col-md-6 col-sm-12 sustainability-left">
                        <h5 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">SUSTAINABILITY</h5>

                        <h3 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{{ $sustainability->heading }}</h3>

                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">{{ $sustainability->description }}</p>
                    </div>
                    <!-- /.sustainability-left -->


                    <!-- sustainability-right -->
                    <div class="col-lg-6 col-md-6 col-sm-12 sustainability-right">

                        <h3 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">{{ $sustainability->heading2 }}</h3>
                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{{ $sustainability->description2 }}</p>
                        <!-- best-fields -->
                        <div class="row best-fields">

                            <!-- single-best-field -->
                            <div class="col-lg-6 col-md-12 col-sm-6 single-best-field wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                <figure class="icon">
                                    @isset($sustainability)
                                            <img src="{{ asset('/storage/ourProud/' . $sustainability->img1) }}" alt="best-field"/>
                                            @endisset
                                          </figure>

                                <h5>{{ $sustainability->text1 }}</h5>
                            </div>
                            <!-- /.single-best-field -->
                            <!-- single-best-field -->
                            <div class="col-lg-6 col-md-12 col-sm-6 single-best-field wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                <figure class="icon">
                                    @isset($sustainability)
                                            <img src="{{ asset('/storage/ourProud/' . $sustainability->img2) }}" alt="best-field"/>
                                            @endisset
                                          </figure>

                                <h5>{{ $sustainability->text2 }}</h5>
                            </div>
                            <!-- /.single-best-field -->
                            <!-- single-best-field -->
                            <div class="col-lg-6 col-md-12 col-sm-6 single-best-field wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                <figure class="icon">
                                    @isset($sustainability)
                                            <img src="{{ asset('/storage/ourProud/' . $sustainability->img3) }}" alt="best-field"/>
                                            @endisset
                                          </figure>

                                <h5>{{ $sustainability->text3 }}</h5>
                            </div>
                            <!-- /.single-best-field -->
                            <!-- single-best-field -->
                            <div class="col-lg-6 col-md-12 col-sm-6 single-best-field wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                <figure class="icon">
                                    @isset($sustainability)
                                            <img src="{{ asset('/storage/ourProud/' . $sustainability->img4) }}" alt="best-field"/>
                                            @endisset
                                          </figure>

                                <h5>{{ $sustainability->text4 }}</h5>
                            </div>
                            <!-- /.single-best-field -->

                        </div>
                        <!-- /.best-fields -->
                    </div>
                    <!-- /.sustainability-right -->
                </div>
            </div>
        </section>
        <!--/.sustainability-section -->

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
                            <li><a href="javascript:void(0)" class="control" data-filter=".others">lube</a></li>
                        </ul>
                    </div>
                    <!-- /.portfolio-filter -->
                </div>

                <!-- portfolio -->
                <div class="row portfolio wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix bitumen">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/bitumin2.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->
                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix lube">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/lube2.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->
                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix lube">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/lube.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->
                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix bitumen">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/bitumin.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->
                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix gas-cylinder">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/cylinder.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix gas-cylinder">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/cylinder1.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix gas-cylinder">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/cylinder5.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->

                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix gas-cylinder">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/cylinder3.jpg')}}" alt="project">
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
                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix lube">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/lube1.jpg')}}" alt="project">
                        </figure>

                        <div class="project-desc">

                        </div>
                    </div>
                    <!-- /.project  -->
                    <!-- project  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 project mix lube">
                        <figure class="project-thumb">
                            <img src="{{url('frontend/assets/images/ms-enterprise/lube2.jpg')}}" alt="project">
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

        <!-- upcoming-project-section -->
        <section class="upcoming-project-section sp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-header -->
                        <div class="section-header text-center wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3>Latest <span class="colored">News</span></h3>

                        </div>
                        <!-- /.section-header -->
                    </div>
                </div>

                <div class="row">
                    <!-- upcoming-projects -->
                    <div class="col upcoming-projects owl-theme owl-carousel wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                        <!-- single-upcoming-project -->
                        <a href="dealer-conference-2020.html">
                            <div class="single-upcoming-project">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/news/main.jpg')}}" alt="upcoming-project">
                                </figure>

                                <div class="upcoming-project-desc">

                                    <h3>Dealer Conference-2020</h3>
                                </div>
                            </div>
                        </a>
                        <!-- /.single-upcoming-project -->

                        <!-- single-upcoming-project -->
                        <a href="">
                            <div class="single-upcoming-project">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" style="height: 360px; width: 360px;" alt="upcoming-project">
                                </figure>

                                <div class="upcoming-project-desc">
                                    <h3>Universal C & G Patrol Pump</h3>
                                </div>
                            </div>
                        </a>
                        <!-- /.single-upcoming-project -->

                        <!-- single-upcoming-project -->
                        <a href="">
                            <div class="single-upcoming-project">
                                <figure class="scf-photo">
                                    <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" style="height: 360px; width: 360px;" alt="upcoming-project">
                                </figure>

                                <div class="upcoming-project-desc">
                                    <h3>Universal C & G Patrol Pump</h3>
                                </div>
                            </div>
                        </a>
                        <!-- /.single-upcoming-project -->
                    </div>
                    <!-- /.upcoming-projects -->
                </div>

            </div>
        </section>
        <!--/.upcoming-project-section -->

        <!-- end main part -->

        @endsection
