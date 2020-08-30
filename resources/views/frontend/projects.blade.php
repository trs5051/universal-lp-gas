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

                    @forelse ($categories as $category)
                <li><a href="javascript:void(0)" class="control" data-filter=".category_{{$category->id}}">{{$category->title}}</a></li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <!-- /.portfolio-filter -->
        </div>

        <!-- portfolio -->
        <div class="row portfolio wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

            @forelse ($products as $product)

             <!-- project  -->
        <div class="col-xl-3 col-lg-4 col-sm-6 project mix category_{{$product->category->id}}">
                <figure class="project-thumb">
                    <img src="{!!  asset('/storage/productimage/' . $product->img) !!}" alt="project">
                </figure>
                <div class="project-desc">
                </div>
            </div>
            <!-- /.project  -->
            @empty
            @endforelse
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
