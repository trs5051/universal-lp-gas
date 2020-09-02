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
@include('frontend.products')
        <!--/.our-works-section -->
@endsection
