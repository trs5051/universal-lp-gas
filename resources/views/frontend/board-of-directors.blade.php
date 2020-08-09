@extends('frontend.layouts.admin-frontend')
@section('content')
       <!-- page-header-section -->
       <section class="page-header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <h3>Board Of Directors</h3>
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
                        <img src="{{url('frontend/assets/images/management/chairman.jpg')}}" alt="management">
                    </figure>
                </div>
                <!-- /.single-managemant-left -->

                <!-- single-managemant-right -->
                <div class="col-lg-7 offset-lg-1 mission-vission-right single-managemant-right">
                    <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Chairman</h4>

                    <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                        Mrs. Rezvin Akther, wife of Mr. Md. Shahjahan Shaju is the Chairman of the Group. Born in 1973 at Noakhali Mrs. Akther completed her Graduation from National University, Bangladesh. As Chairman of the company she looks after the Branding, Administration and Marketing of the company. Mrs. Akther is a social person and she is the member of Feni Samity, Chittagong. Mrs. Akther also visited Singapore, Malaysia, Thailand, India, Dubai etc.
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
                    <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Managing Director</h4>

                    <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                       Mr. Md. Shahjahan Shaju is the founder Managing Director of the Group. Mr. Shaju born in 1967 in a prominent family of Feni. He completed his graduation in Management from National University, Bangladesh. Mr. Shaju is the key person of the group and the leading man. He actively participate in the overall activities of the company. With his active participation and leadership the company is growing to become a conglomerate.<br>
                           Mr. Shaju is an well travelled businessperson, he visited Canada, Singapore, Thailand, Malaysia, Abu-Dhabi, India, China for various business purposes. Apart from business Mr. Shaju actively participate in various social activities. <br>
                          He is serving as Director to Dutch Bangla Chamber of Commerce & Industry & also a life member of the Shadharan Shangshad Foundation [Founder: Dr. MA Wazed Meah, Husband of PM – Sheikh Hasina]. Besides these he is an active member of Dhaka Club, Dhaka; Gulshan Club, Dhaka; Chittagong Club, Chittagong; Golf Club, Bhatiary, Chittagong; Boat Club, Chittagong; Chittagong Chamber of Commerce & Industry; General Secretary of Rose Velly Residential Area, Kulshi, Ctg & Sports Secretary, Feni Samity, Chittagong.
                    </p>
                </div>
                <!-- /.single-managemant-right -->
                <!-- single-managemant-left -->
                <div class="col-lg-4 offset-lg-1 mission-vission-left single-managemant-left">
                    <figure class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <img src="{{url('frontend/assets/images/management/md.jpg')}}" alt="management">
                    </figure>
                </div>
                <!-- /.single-managemant-left -->
            </div>
        </div>
    </section>
    <!--/.single-managemant-section -->
    @endsection
