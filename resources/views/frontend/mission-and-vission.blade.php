@extends('frontend.layouts.admin-frontend')
@section('content')

<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>Mission & Vission</h3>
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
                <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Mission and Vision</h4>

                <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                    We are working hard to ensure healthy products for a perfect healthy life of customer through innovation processes. We are devoted to investing in our people, our company and the communities where we operate to help position the company for long-term, sustainable growth.
                </p>

                <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">
                    Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.
                </p>
            </div>
            <!-- /.mission-vission-left -->
        </div>
    </div>
</section>
<!--/.mission-vission-section -->
@endsection
