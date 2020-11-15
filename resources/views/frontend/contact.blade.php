@extends('frontend.layouts.admin-frontend')
@section('content')
<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>Contact Details</h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.page-header-section -->

<!-- page-content-wrapper -->
<section class="page-content-wrapper sp">
    <div class="container">
        <div class="row">
            <!-- page-content -->
            <div class="col-lg-12 page-content">
                <!-- content-header -->
                <h2 class="content-header">
                    Contact Details
                </h2>

                <!-- head-office -->
                <div class="row head-office office-1 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                    <!-- head-office-info -->
                    <div class="col-md-5 head-office-info">
                        <h3>{{ !empty($headOffice->office_name) ? $headOffice->office_name : '' }}</h3>

                        <p>{{ $headOffice->address }}</p>

                        <p>Land Line : {{ !empty($headOffice->land_line) ? $headOffice->land_line : '' }}</p>

                        <p>Email : {{ !empty($headOffice->email) ? $headOffice->email : '' }}</p>

                        <p class="d-none" >
                            <a href="#" class="btn btn-lpg">Get Notification <i class="fa fa-arrow-right"></i></a>
                            <a href="{{Route('frontend.contact')}}" class="btn btn-lpg alt">Contact Us <i class="fa fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <!-- /.head-office-info -->

                    <!-- head-office-location -->
                    <div class="col-md-7 head-office-location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.76150000301!2d91.79871754840059!3d22.362632606025723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8fa4cf866f9%3A0x52151c21d392cace!2sRose%20Valley%20Residential%20Area%2C%20Chattogram!5e0!3m2!1sen!2sbd!4v1605457519217!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14681.86096850902!2d91.34677919665384!3d23.08005887915131!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753660fcbdbdef5%3A0xdb2f1fc464fa4ada!2sUniversal+LP+Gas!5e0!3m2!1sen!2sbd!4v1557041322325!5m2!1sen!2sbd"  frameborder="0" style="border:0; width:100%;height:100%" allowfullscreen ></iframe> --}}
                    </div>
                    <!-- /.head-office-location -->
                </div>
                <!-- /.head-office -->

                <hr>

                <!-- head-office -->
                <div class="row head-office office-2 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                    <!-- head-office-info -->
                    <div class="col-md-5 head-office-info">
                        <h3>{{ !empty($dhakaOffice->office_name) ? $dhakaOffice->office_name : '' }}</h3>

                        <p>{{ $dhakaOffice->address }}</p>
                        <p>{{ !empty($dhakaOffice->land_line) ? $dhakaOffice->land_line : '' }}</p>
                        <p>{{ !empty($dhakaOffice->email) ? $dhakaOffice->email : '' }}</p>

                        <p>
                            <b>Plant 1 :</b> <br>
                            Kaichutty, chowddogram, comilla, bangladesh.
                        </p>

                        <p>
                            <b>Plant 2 :</b> <br>
                            Nadalia, Barabkunda, Sitakunda, Chitagong, Bangladesh.
                        </p>

                        <p>
                            <b>Plant 3 :</b> <br>
                            Brahmondi, Araihajar, Narayanganj, Bangladesh.
                        </p>

                        <p class="d-none">
                            <a href="#" class="btn btn-lpg">Get Notification <i class="fa fa-arrow-right"></i></a>
                            <a href="{{Route('frontend.contact')}}" class="btn btn-lpg alt">Contact Us <i class="fa fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <!-- /.head-office-info -->

                    <!-- head-office-location -->
                    <div class="col-md-7 head-office-location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.28756833775!2d90.27937101057701!3d23.780628607924317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1efe97f35863a57!2sUniversal%20Gas%20%26%20Gas%20Cylinder%20Ltd.!5e0!3m2!1sen!2sbd!4v1605456620145!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14681.86096850902!2d91.34677919665384!3d23.08005887915131!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753660fcbdbdef5%3A0xdb2f1fc464fa4ada!2sUniversal+LP+Gas!5e0!3m2!1sen!2sbd!4v1557041322325!5m2!1sen!2sbd"  frameborder="0" style="border:0; width:100%;height:100%" allowfullscreen ></iframe> --}}
                    </div>
                    <!-- /.head-office-location -->
                </div>
                <!-- /.head-office -->

            </div>
            <!-- /.page-content -->
        </div>
    </div>
</section>
<!-- /.page-content-wrapper -->
@endsection
