@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Front Slider Management
            <small>Add New Front Slider</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Add New Front Slider</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('front-slider.store') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="" enctype="multipart/form-data">
            @csrf

            <div class="box box-info">

                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-plus-square"></i> Add New Front Slider</h3>
                    <div class="box-tools pull-right">

                        <a class="btn btn-primary" href="{{ route('backend.front-slider') }}">View All Front Slider</a>
                    </div>
                </div>


                <div class="box-body">

                    <div class="form-group">
                        <label for="slider_img" class="col-lg-2 control-label required">Slider Image</label>
                        <div class="col-lg-10">
                            <div class="custom-file-input">
                                <input class="form-control inputfile inputfile-1" name="Slider Image" type="file" id="slider_img">
                                <label for="slider_img">
                                    <i class="fa fa-upload"></i>
                                    <span>Choose a image</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label for="slider_title" class="col-lg-2 control-label">SliderTitle</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Slider Title" rows="2" name="Slider Title" type="text"
                                maxlength="15" id="slider_title">
                        </div>
                    </div> --}}

                </div>
                <div class="edit-form-btn">
                <a href="{{URL::previous()}}" class="btn btn-danger btn-md">Cancel</a>
                <input type="submit" value="Add" class="btn btn-primary btn-md">
                    <div class="clearfix"></div>
                </div>
            </div>

        </form>
    </section>
    <!-- /.content -->

@endsection
