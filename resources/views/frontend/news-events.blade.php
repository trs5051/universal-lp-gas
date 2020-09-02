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

    <!-- news-event -->
    @include('frontend.news')
    <!--/.news-event -->

    <!-- tauhid -->
@endsection
