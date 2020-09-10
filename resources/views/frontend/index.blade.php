@extends('frontend.layouts.admin-frontend')
@section('content')

<!-- main part -->


<!-- slider-area -->
<section class="cylinder-slider-section">
    <div class="cylinder-slider owl-carousel owl-theme">
        @forelse ($frontSliders as $key => $item)
        <div class="cylinder-slide">
            <img src="{!!  asset('/storage/sliderImage/' . $item->img) !!}" />
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

                            <h3 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                                {{ $ourProud->heading }}</h3>

                            <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">
                                {{ $ourProud->description }}</p>
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
                                    <img src="{{ asset('/storage/ourProud/' . $ourProud->img1) }}" alt="proud-feature" />
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
                                    <img src="{{ asset('/storage/ourProud/' . $ourProud->img2) }}" alt="proud-feature" />
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
                                    <img src="{{ asset('/storage/ourProud/' . $ourProud->img3) }}" alt="proud-feature" />
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
                                    <img src="{{ asset('/storage/ourProud/' . $ourProud->img4) }}" alt="proud-feature" />
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
                    <p class="sub-title wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                        {{ $information->text1 }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- concern-features -->
            <div class="col concern-features owl-carousel owl-theme wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                @forelse ($concerns as $concern)
                <!-- single-concern-feature -->
                <a href="{{ Route($concern->route) }}">

                    <div class="single-concern-feature">
                        <figure class="scf-photo">
                            @isset($concern)
                            <img src="{{ asset('/storage/image/' . $concern->img) }}" alt="concern-feature" />
                            @endisset
                        </figure>

                        <div class="concern-feature-desc">
                            <h3>{{ $concern->heading }}</h3>
                        </div>
                    </div>
                </a>
                <!-- /.single-concern-feature -->

                @empty

                @endforelse

            </div>
        </div>
        <!-- /.concern-features -->

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

                <h3 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{{ $sustainability->heading }}
                </h3>

                <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">
                    {{ $sustainability->description }}</p>
            </div>
            <!-- /.sustainability-left -->


            <!-- sustainability-right -->
            <div class="col-lg-6 col-md-6 col-sm-12 sustainability-right">

                <h3 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">{{ $sustainability->heading2 }}
                </h3>
                <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                    {{ $sustainability->description2 }}</p>
                <!-- best-fields -->
                <div class="row best-fields">

                    <!-- single-best-field -->
                    <div class="col-lg-6 col-md-12 col-sm-6 single-best-field wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <figure class="icon">
                            @isset($sustainability)
                            <img src="{{ asset('/storage/ourProud/' . $sustainability->img1) }}" alt="best-field" />
                            @endisset
                        </figure>

                        <h5>{{ $sustainability->text1 }}</h5>
                    </div>
                    <!-- /.single-best-field -->
                    <!-- single-best-field -->
                    <div class="col-lg-6 col-md-12 col-sm-6 single-best-field wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <figure class="icon">
                            @isset($sustainability)
                            <img src="{{ asset('/storage/ourProud/' . $sustainability->img2) }}" alt="best-field" />
                            @endisset
                        </figure>

                        <h5>{{ $sustainability->text2 }}</h5>
                    </div>
                    <!-- /.single-best-field -->
                    <!-- single-best-field -->
                    <div class="col-lg-6 col-md-12 col-sm-6 single-best-field wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <figure class="icon">
                            @isset($sustainability)
                            <img src="{{ asset('/storage/ourProud/' . $sustainability->img3) }}" alt="best-field" />
                            @endisset
                        </figure>

                        <h5>{{ $sustainability->text3 }}</h5>
                    </div>
                    <!-- /.single-best-field -->
                    <!-- single-best-field -->
                    <div class="col-lg-6 col-md-12 col-sm-6 single-best-field wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <figure class="icon">
                            @isset($sustainability)
                            <img src="{{ asset('/storage/ourProud/' . $sustainability->img4) }}" alt="best-field" />
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

{{-- product --}}
@include('frontend.products')
{{-- product --}}
<!-- upcoming-project-section -->
@include('frontend.news')
<!--/.upcoming-project-section -->

<!-- end main part -->

@endsection