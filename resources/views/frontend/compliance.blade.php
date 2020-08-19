@extends('frontend.layouts.admin-frontend')
@section('content')
<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>Compliance</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.page-header-section -->


<!-- single-managemant-section -->
<section class="mission-vission-section single-managemant-section sp">
    <div class="container">
        <div class="row">
            <!-- single-managemant-left -->
            <div class="col-lg-4 mission-vission-left single-managemant-left">
                <figure class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <img src="{{url('frontend/assets/images/wlpa.jpg')}}" alt="management">
                </figure>
            </div>
            <!-- /.single-managemant-left -->

            <!-- single-managemant-right -->
            <div class="col-lg-7 offset-lg-1 mission-vission-right single-managemant-right">
                <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">WLPGA</h4>

                <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                    Universal Lp Gas has been an honored member of WLPGA since 20016.
                </p>
            </div>
            <!-- /.single-managemant-right -->
        </div>
    </div>
</section>
<section class="mission-vission-section single-managemant-section sp">
    <div class="container">
        <div class="row">
            <!-- single-managemant-right -->
            <div class="col-lg-7 mission-vission-right single-managemant-right">
                <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">ISO-9001</h4>

                <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                     Universal Lp Gas has been certified with ISO-9001 certification for its extraordinart plant and product procesing.
                </p>
            </div>
            <!-- /.single-managemant-right -->
            <!-- single-managemant-left -->
            <div class="col-lg-4 offset-lg-1 mission-vission-left single-managemant-left">
                <figure class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <img src="{{url('frontend/assets/images/ISO.jpg')}}" alt="management">
                </figure>
            </div>
            <!-- /.single-managemant-left -->
        </div>
    </div>
</section>
<!--/.single-managemant-section -->
@endsection