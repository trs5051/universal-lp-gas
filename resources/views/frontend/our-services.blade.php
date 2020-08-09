@extends('frontend.layouts.admin-frontend')
@section('content')
<!-- page-header-section -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>Our Services</h3>
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

                <!-- services-section -->
                <div class="row services-section">
                    <!-- left-sidebar service-sidebar -->
                    <div class="col-lg-4 left-sidebar service-sidebar">

                        <!-- single-widget -->
                        <div class="single-widget service-navtabs-wrapper wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="service-1-tab" data-toggle="tab" href="#service-1" role="tab" aria-controls="service-1"
                                    aria-selected="true">Universal Gas & Gas Cylinder</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="service-2-tab" data-toggle="tab" href="#service-2" role="tab" aria-controls="service-2"
                                    aria-selected="false">US Energy & Power </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="service-3-tab" data-toggle="tab" href="#service-3" role="tab" aria-controls="service-3"
                                    aria-selected="false">AMB Traders</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="service-3-tab" data-toggle="tab" href="#service-3" role="tab" aria-controls="service-3"
                                    aria-selected="false">Universal Agency</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="service-3-tab" data-toggle="tab" href="#service-3" role="tab" aria-controls="service-3"
                                    aria-selected="false">M.S Enterprise</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="service-3-tab" data-toggle="tab" href="#service-3" role="tab" aria-controls="service-3"
                                    aria-selected="false">Universal CNG & Autogas</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.single-widget -->

                        <!-- single-widget -->
                        <div class="single-widget download-pdf-widget wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <figure>
                                <img src="{{url('frontend/assets/images/pdf-file-preview.png')}}" alt="pdf-file-preview">
                            </figure>

                            <div class="download-pdf-text">
                                Download<br>
                                our company Broucher
                            </div>
                        </div>
                        <!-- /.single-widget -->

                        <!-- single-widget -->
                        <div class="single-widget download-pdf-widget wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <figure>
                                <img src="{{url('frontend/assets/images/pdf-file-preview.png')}}" alt="pdf-file-preview">
                            </figure>

                            <div class="download-pdf-text">
                                Download<br>
                                our company Broucher
                            </div>
                        </div>
                        <!-- /.single-widget -->

                        <!-- single-widget -->
                        <div class="single-widget address-widget wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                            <h3 class="widget-title text-center">Visit our office</h3>

                            <address>
                                <h4>Address</h4>
                                <p>
                                    House : #493/3 (1st Floor) <br>
                                    Road # 9, DOHS,m Baridhara <br>
                                    Dhaka, Bangladesh.
                                </p>
                                <p>
                                    Cell :  <strong>+880312566601-02</strong>
                                </p>
                            </address>
                        </div>
                        <!-- /.single-widget -->

                    </div>
                    <!-- /.left-sidebar service-sidebar -->

                    <!-- content-secion sevices-right -->
                    <div class="col-lg-8 content-secion sevices-right">

                        <!-- service-tabcontent-wrapper -->
                        <div class="tab-content service-tabcontent-wrapper wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s" id="myTabContent">
                            <!-- .tab-pane -->
                            <div class="tab-pane fade show active" id="service-1" role="tabpanel" aria-labelledby="service-1-tab">
                                <h3>Building Staffs</h3>
                                <p>
                                    We have a long and proud history givin em phasis to environment social and economic outcomes to deliver the places that respond too the complex global forces shaping our future including the rapid urbanisation, climate and change, inequality and resource stress.
                                </p>

                                <figure>
                                    <img src="{{url('frontend/assets/images/services/service-1.jpg')}}" alt="service-1">
                                </figure>

                                <h3 class="text-center">Project Management:</h3>
                                <p class="text-center">
                                    We have a long and proud history givin emphs to environment social and economic outcomes to deliver the place that respond complex and global forces shaping
                                </p>


                                <h3 class="text-center">Solutions</h3>
                                <p class="text-center">
                                    We have a long and proud history givin emphs to environment social and economic outcomes to deliver the place that respond
                                </p>
                            </div>
                            <!-- /.tab-pane -->

                            <!-- .tab-pane -->
                            <div class="tab-pane fade show" id="service-2" role="tabpanel" aria-labelledby="service-2-tab">
                                <h3>Building Staffs</h3>
                                <p>
                                    We have a long and proud history givin em phasis to environment social and economic outcomes to deliver the places that respond too the complex global forces shaping our future including the rapid urbanisation, climate and change, inequality and resource stress.
                                </p>

                                <figure>
                                    <img src="{{url('frontend/assets/images/services/service-1.jpg')}}" alt="service-1">
                                </figure>

                                <h3 class="text-center">Project Management:</h3>
                                <p class="text-center">
                                    We have a long and proud history givin emphs to environment social and economic outcomes to deliver the place that respond complex and global forces shaping
                                </p>


                                <h3 class="text-center">Solutions</h3>
                                <p class="text-center">
                                    We have a long and proud history givin emphs to environment social and economic outcomes to deliver the place that respond
                                </p>
                            </div>
                            <!-- /.tab-pane -->

                            <!-- .tab-pane -->
                            <div class="tab-pane fade show" id="service-3" role="tabpanel" aria-labelledby="service-3-tab">
                                <h3>Building Staffs</h3>
                                <p>
                                    We have a long and proud history givin em phasis to environment social and economic outcomes to deliver the places that respond too the complex global forces shaping our future including the rapid urbanisation, climate and change, inequality and resource stress.
                                </p>

                                <figure>
                                    <img src="{{url('frontend/assets/images/services/service-1.jpg')}}" alt="service-1">
                                </figure>

                                <h3 class="text-center">Project Management:</h3>
                                <p class="text-center">
                                    We have a long and proud history givin emphs to environment social and economic outcomes to deliver the place that respond complex and global forces shaping
                                </p>


                                <h3 class="text-center">Solutions</h3>
                                <p class="text-center">
                                    We have a long and proud history givin emphs to environment social and economic outcomes to deliver the place that respond
                                </p>
                            </div>
                            <!-- /.tab-pane -->

                        </div>
                        <!-- /.service-tabcontent-wrapper -->
                    </div>
                    <!-- /.content-secion sevices-right -->
                </div>
                <!-- /.services-section -->
            </div>
            <!-- /.page-content -->
        </div>
    </div>
</section>
<!--/.page-content-wrapper -->

@endsection
