@extends('frontend.layouts.admin-frontend')
@section('content')
     <!-- page-header-section -->
     <section class="page-header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <h3>Universal Group</h3>
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
                        <img src="{{url('frontend/assets/images/mission-vission/mission-vission.jpg')}}" alt="mission-vission">
                    </figure>
                </div>
                <!-- /.mission-vission-left -->

                <!-- mission-vission-left -->
                <div class="col-md-7 mission-vission-right">
                    <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Universal Group</h4>

                    <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">
                        Universal Group is one of the reputed business houses in Bangladesh. The Group is currently engaged in the business of Petroleum & Petroleum products (i.e. LPG, Bitumen, Lube Oil etc.), Power & Energy (Refuelling Station.Construction Material (Stone Chips) etc. The business of the group within these sectors is performed through both trading, distribution and industrial supports. Mr. Md. Shahjahan Shaju, is the promoter and founding Managing Director of Universal Group.
                    </p>

                    <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.2s">
                        Universal group presently has following entity under its name:Universal Agency
                        M.S Enterprise,
Universal Gas & Gas Cylinder Ltd.
AMB Traders Pvt. Ltd.
US Energy & Power Pvt. Ltd.
Global Survey & Inspection Company,
Universal Refuelling Station.
Together with these concerns the annual turnover of the company was very much favourable in last year which is expected to rise in manifold in upcoming year with the commercial operation of the LPG import & storage terminal which is all set and started its commercial operation since June 2019.

                    </p>
                </div>
                <!-- /.mission-vission-left -->
            </div>
        </div>
    </section>
    <!--/.mission-vission-section -->

@endsection
