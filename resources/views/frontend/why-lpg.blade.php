@extends('frontend.layouts.admin-frontend')
@section('content')
        <!-- page-header-section -->
        <section class="page-header-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3>Why LP Gas?</h3>
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
                            <img src="{{url('frontend/assets/images/whylpg.jpg')}}" alt="mission-vission">
                        </figure>
                    </div>
                    <!-- /.mission-vission-left -->

                    <!-- mission-vission-left -->
                    <div class="col-md-7 mission-vission-right">
                        <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Universal Agency</h4>

                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                            The benefits of LPG begin from your kitchen and keep going on.
                        </p>

                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">
                            Here is a fuel with limitless possibilities
                        </p>
                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">
                            LPG is a highly efficient cooking fuel. It is economical and its excellent heating capacity helps you cook your food in less time, saving you a lot on fuel cost. It undergoes complete combustion, produces no residue and particulate matter, which means minimum maintenance cost and lesser carbon footprint. And that’s just some of its benefits that you can count on your fingers
                        </p>
                        <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">
                            LPG has a plethora of benefits which can be a life-changing experience for its users. It’s good for your health, your kitchen and our environment. Paying a little attention while working with LPG can make it even more beneficial, so you can save enough to plan your long-awaited road trip to your favorite destination.
                        </p>
                    </div>
                    <!-- /.mission-vission-left -->
                </div>
            </div>
        </section>
        <!--/.mission-vission-section -->
@endsection
