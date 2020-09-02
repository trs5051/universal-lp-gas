@extends('frontend.layouts.admin-frontend')
@section('content')
<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>Products</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.page-header-section -->

<!-- our-works-section -->
@include('frontend.products')
<!--/.our-works-section -->

<!-- upcoming-project-section -->
<section class="upcoming-project-section sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-header -->
                <div class="section-header text-center wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>Upcoming <span class="colored">project</span></h3>
                    <p>
                        Meridian Group with corporate office in Chittagong was incorporated in 1992's with Meridian Hotel & Restaurant and is today become one of the renowned business house in Bangladesh. Though the group started its business with Hotel & Restaurant, at present it has nine business concerns
                    </p>
                </div>
                <!-- /.section-header -->
            </div>
        </div>

        <div class="row">
        <!-- upcoming-projects -->
            <div class="col upcoming-projects owl-theme owl-carousel wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                <!-- single-upcoming-project -->
                <div class="single-upcoming-project">
                    <figure class="scf-photo">
                        <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" alt="upcoming-project">
                    </figure>

                    <div class="upcoming-project-desc">
                        <h3>Universal C & G Patrol Pump</h3>
                    </div>
                </div>
                <!-- /.single-upcoming-project -->

                <!-- single-upcoming-project -->
                <div class="single-upcoming-project">
                    <figure class="scf-photo">
                        <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" alt="upcoming-project">
                    </figure>

                    <div class="upcoming-project-desc">
                        <h3>Universal C & G Patrol Pump</h3>
                    </div>
                </div>
                <!-- /.single-upcoming-project -->

                <!-- single-upcoming-project -->
                <div class="single-upcoming-project">
                    <figure class="scf-photo">
                        <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" alt="upcoming-project">
                    </figure>

                    <div class="upcoming-project-desc">
                        <h3>Universal C & G Patrol Pump</h3>
                    </div>
                </div>
                <!-- /.single-upcoming-project -->
            </div>
            <!-- /.upcoming-projects -->
        </div>

    </div>
</section>
<!--/.upcoming-project-section -->
@endsection
