@extends('frontend.layouts.admin-frontend')
@section('content')

    <style>
        .career-desc p {
            line-height: 1.7;
            word-spacing: 0.03em;
            letter-spacing: 0.03em;
            font-weight: 300;
            font-size: 18px;
        }

        .btn-read-more-career {
            color: #b10a0a;
        }



        section.career-section-2 {
            position: relative;
        }

        .career-teams {
            background-color: rgba(23, 34, 96, .85);
            position: absolute;
            padding: 50px;
            bottom: 0;
            left: 15%;
            right: 15%;
            color: #fff;
        }

        .team-figure {
            margin: 0;
        }

        .team-figure img {
            width: 100%;
        }

        .career-teams p {
            font-size: 16px;
            line-height: 1.7;
            word-spacing: 0.03em;
            letter-spacing: 0.03em;
            font-weight: 300;
        }

        .section-title {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 130px;
            height: 2px;
            background-color: #ed1c24;
            bottom: 0px;
            left: 50%;
            transform: translateX(-65px);
        }

        .career-form-wrapper p {
            line-height: 1.7;
            word-spacing: 0.03em;
            letter-spacing: 0.03em;
            font-weight: 300;
            font-size: 18px;
        }

        p.help-note {
            font-weight: 400;
            position: relative;
            font-style: italic;
            font-size: .9em;
            margin-top: -4px;
            opacity: .8;
            text-align: right;
            margin-bottom: 0;
            white-space: nowrap;
        }

        label.form-label {
            display: block;
            width: 100%;
            line-height: 1.45em;
            text-align: right;
            margin: 0;
        }

        .form-control {
            border-radius: 0;
        }

        button.btn.btn-info.waves-effect.waves-light {
            float: right;
            margin-right: 0px;
            overflow: hidden;
        }

        .career-form-inner {
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
            padding-bottom: 15px;
            padding-top: 15px;
            margin-top: 45px;
        }

        .career-form-inner h3 {
            margin-bottom: 30px;
        }

    </style>

    <!-- career-section-1 -->
    <section class="career-section-1 sp d-none">
        <div class="container">
            <div class="row">
                <!-- career-features -->
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                    <!-- career-feature -->
                    <div class="career-desc text-center">
                        <h3 class="section-title text-center">Career</h3>
                        <p>We are the largest operator in the LPG sector of Bangladesh. In partnership with European energy
                            giant BB Energy & Netherland’s FMO, the company has set up a state of the art LPG Import,
                            Storage, Bottling and Distribution Terminals in different locations of the Country. </p>

                        <p>We are on an exciting growth journey as LPG industry is the fastest growing industry from 2016
                            and beyond. There are plenty of opportunities for career progression and development. Working
                            hard is part of any career but we also believe that striking the correct work/life balance is
                            equally important and we support all our employees in achieving this. The atmosphere of our
                            organization is designed to foster personal, professional, and corporate growth.</p>

                        <p><a href="#" class="btn btn-inverse btn-read-more-career">Read More</a></p>
                    </div>
                    <!-- /.leading-feature -->
                </div>
                <!-- /.career-form -->
            </div>
        </div>
    </section>
    <!--/.career-section-1 -->

    <!-- career-section-1 -->
    <section class="career-section-2 d-none">
        <figure class="team-figure">
            <img src="https://omeralpg.com/wp-content/themes/omera/images/carreer.jpg" />
        </figure>
        <div class="container">
            <div class="row">
                <!-- career-features -->
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <!-- career-teams -->
                    <div class="career-teams">


                        <div class="career-teams-desc text-center">
                            <h1>Universal LP Group</h1>
                            <p>The abundant river-routes of Bangladesh that held huge possibilities of a seamlessly
                                brilliant distribution channel had never been explored before Universal Princess. OPL has
                                invested significantly in creating this self-propelled LPG carrying Barge in the name of
                                Universal Princess, based on European & Japanese technologies. The sole utility and
                                collaboration of such a facility in the industry has exemplified a revolution in itself.</p>
                        </div>
                    </div>
                    <!-- /.career-teams -->
                </div>
                <!-- /.career-form -->
            </div>
        </div>
    </section>
    <!--/.career-section-1 -->

    <!-- career-section-3 -->
    <section class="career-section-3 sp">
        <div class="container">
            <div class="row">
                <!-- career-features -->
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

                    <!-- career-form-wrapper -->
                    <div class="career-form-wrapper">

                        <div class="career-form-desc">
                            <h3 class="section-title text-center">SUBMIT YOUR CV</h3>
                            <p class="text-center">We are working hard to ensure healthy products for a perfect healthy life
                                of customer through innovation processes. We are devoted to investing in our people, our
                                company and the communities where we operate to help position the company for long-term,
                                sustainable growth.</p>
                        </div>

                        <div class="career-form">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 career-form-inner">
                                    <h3 class="text-center">Universal Job Application</h3>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ Route('cv.submit') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="name" class="form-label">Name<span
                                                            class="required">*</span></label>
                                                    <p class="help-note">YOUR FULL NAME</p>
                                                </div>

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ old('name') }}" id="name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="email" class="form-label">Email<span
                                                            class="required">*</span></label>
                                                    <p class="help-note">A VALID EMAIL</p>
                                                </div>

                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        value="{{ old('email') }}" placeholder="emaill@example.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-none">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="position" class="form-label">Position<span
                                                            class="required">*</span></label>
                                                    <p class="help-note">SELECT PREFERRED JOB</p>

                                                </div>

                                                <div class="col-sm-8">
                                                    <select class="form-control" id="position">
                                                        <option value="">Select Position</option>
                                                        <option value="Corporate Planning">Corporate Planning</option>
                                                        <option value="Operation & SHE">Operation & SHE</option>
                                                        <option value="Engineering">Engineering</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="phone" class="form-label">Phone Number<span
                                                            class="required">*</span></label>
                                                    <p class="help-note">VALID NUMBER</p>
                                                </div>

                                                <div class="col-sm-8">
                                                    <input type="phone" class="form-control" name="phone" id="phone"
                                                        value="{{ old('phone') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="cv" class="form-label">CV<span
                                                            class="required">*</span></label>
                                                    <p class="help-note">PDF OF RECENT CV</p>
                                                </div>

                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control-file" name="cv" id="cv">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.career-form-wrapper -->


                </div>
                <!-- /.career-form -->
            </div>
        </div>
    </section>
    <!--/.career-section-3 -->
@endsection
