@extends('frontend.layouts.admin-frontend')
@section('content')
    <!-- page-header-section -->
    <section class="page-header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <h3>Job Notice</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.page-header-section -->

    @forelse ($notices as $item)
        <!-- mission-vission-section -->
        <section class="mission-vission-section sp">
            <div class="container">
                <div class="row">
                    <!-- mission-vission-left -->
                    <div class="col-md-5 mission-vission-left">
                        <figure class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <img src="{!!  asset('/storage/noticesimage/1601363310-download.jpg') !!}" alt="mission-vission">
                        </figure>
                    </div>
                    <!-- /.mission-vission-left -->

                    <!-- mission-vission-left -->
                    <div class="col-md-7 mission-vission-right">
                        <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">{!! $item->heading ?? '' !!}</h4>
                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{!! $item->text1 ?? '' !!}</p>
                         <h5> <pre class="wow fadeInUp" data-wow-duration="0.75s"
                            data-wow-delay="0.2s">{!! $item->text2 ?? '' !!}</pre></h5>
                         <a href="{{Route('frontend.career')}}" class="btn btn-primary" >Apply Now</a>
                    </div>
                </div>
                <!-- /.mission-vission-left -->

            </div>


        </section>
    @empty
        <h4>No Notice Here</h4>
    @endforelse

    <!--/.mission-vission-section -->
@endsection
