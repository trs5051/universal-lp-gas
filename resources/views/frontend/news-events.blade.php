@extends('frontend.layouts.admin-frontend')
@section('content')
<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>News & Events</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.page-header-section -->

<!-- tauhid -->

<!-- upcoming-project-section -->
<section class="upcoming-project-section sp">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- section-header -->
            <div class="section-header text-center wow fadeInUp" data-wow-duration="0.75s"
                data-wow-delay="0s">
                <h3>Latest <span class="colored">News</span></h3>

            </div>
            <!-- /.section-header -->
        </div>
    </div>

    <div class="row">
        <!-- upcoming-projects -->
        <div class="col upcoming-projects owl-theme owl-carousel wow fadeInUp" data-wow-duration="0.75s"
            data-wow-delay="0s">

            <!-- single-upcoming-project -->
            <a href="dealer-conference-2020.html">
                <div class="single-upcoming-project">
                    <figure class="scf-photo">
                        <img src="{{url('frontend/assets/images/news/main.jpg')}}" style="height: 400px; width: 400px;"
                            alt="upcoming-project">
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
                        <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" style="height: 400px; width: 400px;"
                            alt="upcoming-project">
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
                        <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" style="height: 400px; width: 400px;"
                            alt="upcoming-project">
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
    <div class="row">
        <!-- upcoming-projects -->
        <div class="col upcoming-projects owl-theme owl-carousel wow fadeInUp" data-wow-duration="0.75s"
            data-wow-delay="0s">

            <!-- single-upcoming-project -->
            <a href="">
                <div class="single-upcoming-project">
                    <figure class="scf-photo">
                        <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" style="height: 400px; width: 400px;"
                            alt="upcoming-project">
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
                        <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" style="height: 400px; width: 400px;"
                            alt="upcoming-project">
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
                        <img src="{{url('frontend/assets/images/upcoming-projects/upcoming-project-1.jpg')}}" style="height: 400px; width: 400px;"
                            alt="upcoming-project">
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

<!-- tauhid -->
@endsection
