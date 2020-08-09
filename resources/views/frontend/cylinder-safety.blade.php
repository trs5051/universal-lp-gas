@extends('frontend.layouts.admin-frontend')
@section('content')
<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>User Safety</h3>
                    <div class="page-subtitle">
                        Universal LP Gas is the First WLPGA Member and so, safety is of paramount concern to all involved in the LPG business, from producers through the supply, storage, handling and distribution chain, through to the consumers.
                    </div>
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

                <div class="cylinder-safety-section">
                    <div class="row">
                        <div class="col-lg-12 cylinder-safety section-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3 class="text-center"><span class="colored">USER GUIDELINE</span> SAFETY TIPS</h3>
                        </div>
                    </div>

                    <div class="row factors-section wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <div class="col-lg-5 offset-lg-1 col-md-5 factors-left">
                            <figure>
                                <img src="{{url('frontend/assets/images/3cylinder.jpg')}}" alt="3cylinder">
                            </figure>
                        </div>

                        <div class="col-lg-5 col-md-6 offset-md-1   factors-right">
                            <figure class="rounded">
                                <img src="{{url('frontend/assets/images/user-tips-1.jpg')}}" alt="user-tips">
                            </figure>

                            <h3>
                                Factors to consider before purchasing an LPG Cylinder.
                            </h3>

                            <p>

                                Thermo-seal is in the appropriat e place. Safety Cap is in the appropriate place. LPG will cause natural rubber and some plastics to deteriorate. Only use hoses and other equipment specifically designed for LPG
                            </p>

                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-12 section-header style-2 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3 class="text-center">Guideline to attach cylinders to the stove</h3>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-6 cylinder-user-guide-style-1">
                            <!-- cylinder-user-guide -->
                            <div class="cylinder-user-guide left wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                <div class="cylinder-user-guide-desc">
                                    LP Gas must be stored beneath the stove on an adjacent level.
                                </div>

                                <figure>
                                    <img src="{{url('frontend/assets/images/guide-to-attach-1.jpg')}}" alt="guide-to-attach">
                                </figure>
                            </div>
                            <!-- /.cylinder-user-guide -->
                        </div>

                        <div class="col-md-6 cylinder-user-guide-style-1">
                            <!-- cylinder-user-guide -->
                            <div class="cylinder-user-guide right wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                                <div class="cylinder-user-guide-desc">
                                    LP Gas cylinders must be checked for leakage with soap water, keeping the regulator attached.
                                </div>

                                <figure>
                                    <img src="{{url('frontend/assets/images/guide-to-attach-2.jpg')}}" alt="guide-to-attach">
                                </figure>
                            </div>
                            <!-- /.cylinder-user-guide -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 section-header style-2 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3 class="text-center">Actions to avoid during an LP Gas leakage</h3>
                        </div>
                    </div>

                    <div class="row mb-5 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <div class="col-lg-3 col-md-4 col-sm-6 cylinder-user-guide-style-2">
                            <!-- cylinder-user-guide -->
                            <div class="cylinder-user-guide style-2">
                                <div class="cylinder-user-guide-desc">
                                    Never test a leakage with lighting fire.
                                </div>

                                <figure>
                                    <img src="{{url('frontend/assets/images/action-to-avoid-1.jpg')}}" alt="user-tips">
                                </figure>
                            </div>
                            <!-- /.cylinder-user-guide -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 cylinder-user-guide-style-2">
                            <!-- cylinder-user-guide -->
                            <div class="cylinder-user-guide style-2">
                                <div class="cylinder-user-guide-desc">
                                    Avoid smoking anywhere around the suspected leakage area.
                                </div>

                                <figure>
                                    <img src="{{url('frontend/assets/images/action-to-avoid-2.jpg')}}" alt="user-tips">
                                </figure>
                            </div>
                            <!-- /.cylinder-user-guide -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 cylinder-user-guide-style-2">
                            <!-- cylinder-user-guide -->
                            <div class="cylinder-user-guide style-2">
                                <div class="cylinder-user-guide-desc">
                                    Avoid candle anywhere around the suspected leakage area.
                                </div>

                                <figure>
                                    <img src="{{url('frontend/assets/images/action-to-avoid-3.jpg')}}" alt="user-tips">
                                </figure>
                            </div>
                            <!-- /.cylinder-user-guide -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 cylinder-user-guide-style-2">
                            <!-- cylinder-user-guide -->
                            <div class="cylinder-user-guide style-2">
                                <div class="cylinder-user-guide-desc">
                                    Avoid switching mobile phones or electric switches on and off.
                                </div>

                                <figure>
                                    <img src="{{url('frontend/assets/images/action-to-avoid-4.jpg')}}" alt="user-tips">
                                </figure>
                            </div>
                            <!-- /.cylinder-user-guide -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 section-header style-2 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3 class="text-center">Tips to safely store LPG Cylinders</h3>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <div class="col-md-4 offset-md-2 col-sm-6">
                            <!-- cylinder-user-guide -->
                            <div class="cylinder-user-guide style-3">
                                <figure>
                                    <img src="{{url('frontend/assets/images/tips-to-safety-1.jpg')}}" alt="user-tips">
                                </figure>
                            </div>
                            <!-- /.cylinder-user-guide -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <!-- cylinder-user-guide -->
                            <div class="cylinder-user-guide style-3">
                                <figure>
                                    <img src="{{url('frontend/assets/images/tips-to-safety-2.jpg')}}" alt="user-tips">
                                </figure>
                            </div>
                            <!-- /.cylinder-user-guide -->
                        </div>
                    </div>

                    <hr>

                    <div class="row mt-5">
                        <div class="col-lg-12 section-header style-2 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3 class="text-center">Safety Tips For Commercial & Industrial LPG - Do’s & Don’ts</h3>
                        </div>
                    </div>

                    <!-- do-donot-section -->
                    <div class="row do-donot-section wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <!-- do -->
                        <div class="col-md-6 do">
                            <h3>Do</h3>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Use LPG in Ventilated Area</p>
                            </div>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Before connecting, check for LPG leakage</p>
                            </div>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Close the regulator knob once you finish cooking</p>
                            </div>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Always keep the cylinder vertical, upright during usage and storage</p>
                            </div>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Always install LPG pipeline above ground level</p>
                            </div>
                        </div>
                        <!-- /.do -->

                        <!-- donot -->
                        <div class="col-md-6 do donot">
                            <h3>Don't</h3>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do-dont/dont-do-1.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Don’t place cylinders in closed areas.</p>
                            </div>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do-dont/dont-do-1.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Do not use any flammable objects near or over the burner</p>
                            </div>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do-dont/dont-do-1.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Do not switch on or off any lights or electrical equipment, smoke or use naked flames incase of leakage</p>
                            </div>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do-dont/dont-do-1.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Do not roll the cylinder</p>
                            </div>

                            <div class="single-do">
                                <figure>
                                    <img src="{{url('frontend/assets/images/do-dont/dont-do-1.jpg')}}" alt="user-tips">
                                </figure>

                                <p>Never store LPG in basement cellar, elevated platforms</p>
                            </div>
                        </div>
                        <!-- /.donot -->
                    </div>
                    <!-- /.do-donot-section -->


                </div>
            </div>
            <!-- /.page-content -->
        </div>
    </div>
</section>
<!--/.page-content-wrapper -->
@endsection
