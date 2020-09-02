@extends('frontend.layouts.admin-frontend')
@section('content')
    <!-- page-header-section -->
    <section class="page-header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <h3>{{ $event->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.page-header-section -->

    <!-- tauhid -->
    <!-- tauhid -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
            padding: 20px;
            font-family: Arial;
        }

        /* Center website */
        .main {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            font-size: 50px;
            word-break: break-all;
        }

        .row {
            margin: 8px -16px;
        }

        /* Add padding BETWEEN each column */
        .row,
        .row>.column {
            padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 25%;
        }

        /* Clear floats after rows */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Content */
        .content {
            background-color: white;
            padding: 10px;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
            .column {
                width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }

    </style>
    <!-- tauhid -->

    <!-- mission-vission-section -->
    <section class="mission-vission-section sp">
        <div class="container">
            <div class="row">
                <!-- mission-vission-left -->
                <div class="col-md-5 mission-vission-left">
                    <figure class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <img src="{{ asset('/storage/eventImage/' . $event->main_img) }}" alt="mission-vission">
                    </figure>
                </div>
                <!-- /.mission-vission-left -->

                <!-- mission-vission-left -->
                <div class="col-md-7 mission-vission-right">
                    <h4 class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">{{ $event->title }}</h4>

                    <p class="wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">{{ $event->text1 }}</p>
                </div>
                <!-- /.mission-vission-left -->
            </div>
        </div>
    </section>
    <!--/.mission-vission-section -->

    <br>

    <!-- galary (Center website) -->
    <div class="main">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header text-center wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <h3>Picture Gallery ({{ $event->title }})</h3>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
            @forelse ($event->eventPictures as $img)
                <div class="column">
                    <div class="content">
                        <img src="{{ asset('/storage/eventImage/' . $img->img) }}" alt="Mountains" style="width:100%">

                    </div>
                </div>

            @empty

            @endforelse

        </div>
        <!-- END GRID -->
    </div>
    <br><br><br><br>
    <!-- Portfolio Gallery Grid -->

    <!-- tauhid -->
@endsection
