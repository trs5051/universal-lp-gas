@extends('frontend.layouts.admin-frontend')
@section('content')

    <!-- page-header-section -->
    <section class="page-header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <h3>About Us</h3>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.page-header-section -->

    <!-- leading-section -->
    <section class="leading-section sp">
        <div class="container">
            <div class="row">
                <!-- leading-left -->
                <div class="col-lg-6 col-md-7 leading-left wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h5><span class="color-y">About Us</span></h5>

                    <h3>{{ $aboutUs->heading1 }}</h3>
                    <p>{{ $aboutUs->description1 }}</p>
                    <p>{{ $aboutUs->description2 }}
                    <p>
                        <a href="our-services.html" class="btn-lpg">Our Services <i class="fa fa-arrow-right"></i></a>
                        <a href="contact.html" class="btn-lpg alt">Contact Us <i class="fa fa-arrow-right"></i></a>
                    </p>
                </div>
                <!-- /.leading-left -->

                <!-- leading-right leading-features -->
                <div class="col-lg-5 offset-lg-1 col-md-5 leading-right leading-features wow fadeInUp"
                    data-wow-duration="0.75s" data-wow-delay="0s">

                    <!-- leading-feature -->
                    <div class="leading-feature">
                        <figure class="icon">
                            @isset($aboutUs)
                                <img src="{{ asset('/storage/information/' . $aboutUs->img1) }}" alt="leading-feature" />
                            @endisset
                        </figure>

                        <div class="leading-feature-desc">
                            <h3>{{ $aboutUs->heading2 }}</h3>
                            <p>{{ $aboutUs->text1 }}</p>
                        </div>
                    </div>
                    <!-- /.leading-feature -->
                    <!-- leading-feature -->
                    <div class="leading-feature">
                        <figure class="icon">
                            @isset($aboutUs)
                                <img src="{{ asset('/storage/information/' . $aboutUs->img2) }}" alt="leading-feature" />
                            @endisset
                        </figure>

                        <div class="leading-feature-desc">
                            <h3>{{ $aboutUs->heading3 }}</h3>
                            <p>{{ $aboutUs->text2 }}</p>
                        </div>
                    </div>
                    <!-- /.leading-feature -->
                    <!-- leading-feature -->
                    <div class="leading-feature">
                        <figure class="icon">
                            @isset($aboutUs)
                                <img src="{{ asset('/storage/information/' . $aboutUs->img3) }}" alt="leading-feature" />
                            @endisset
                        </figure>

                        <div class="leading-feature-desc">
                            <h3>{{ $aboutUs->heading4 }}</h3>
                            <p>{{ $aboutUs->text3 }}</p>
                        </div>
                    </div>
                    <!-- /.leading-feature -->


                </div>
                <!-- /.leading-right leading-features -->
            </div>
        </div>
    </section>
    <!--/.leading-section -->
@endsection
