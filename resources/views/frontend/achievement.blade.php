@extends('frontend.layouts.admin-frontend')
@section('content')
<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>Achievement and Awards</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.page-header-section -->

@forelse ($achievements as $key => $item)


<!-- mission-vission-section -->
<section class="mission-vission-section sp">
    <div class="container">
        <div class="row">
            @if ($key % 2 == 0 )
             <!-- mission-vission-left -->
             <div class="col-md-5 mission-vission-left">
                <figure class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <img src="{!!  asset('/storage/achievementsImage/' . $item->img) !!}" alt="mission-vission">
                </figure>
            </div>
            <!-- /.mission-vission-left -->
            @endif


            <!-- mission-vission-left -->
            <div class="col-md-7 mission-vission-right">
                <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">{!! $item->heading ?? '' !!}</h4>

                <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{!! $item->text1 ?? '' !!}</p>

                <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">{!! $item->text2 ?? '' !!}</p>
            </div>
            <!-- /.mission-vission-left -->
            @if ($key % 2 != 0 )
             <!-- mission-vission-left -->
             <div class="col-md-5 mission-vission-left">
                <figure class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <img src="{!!  asset('/storage/achievementsImage/' . $item->img) !!}" alt="mission-vission">
                </figure>
            </div>
            <!-- /.mission-vission-left -->
            @endif
        </div>
    </div>
</section>
@empty

@endforelse

<!--/.mission-vission-section -->
@endsection
