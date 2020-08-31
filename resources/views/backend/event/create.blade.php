@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        }
    </style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Event Management
            <small>Add New Event</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Add New Event</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('event.store') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="" enctype="multipart/form-data">
            @csrf

            <div class="box box-info">

                <div class="box-header with-border">
                    <h3 class="box-title"> Add New Event</h3>
                    <div class="box-tools pull-right">

                        <a class="btn btn-primary" href="{{ route('backend.event') }}">View All Event</a>
                    </div>
                </div>


                <div class="box-body">

                    <div class="form-group">
                        <label for="event_img" class="col-lg-2 control-label required">Event Main Image</label>
                        <div class="col-lg-10">
                            <div class="custom-file-input">
                                <input class="form-control inputfile inputfile-1" name="Event Image" type="file" id="event_img">
                                <label for="event_img">
                                    <i class="fa fa-upload"></i>
                                    <span>Choose a image</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="event_title" class="col-lg-2 control-label">Event Title</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Event Title" rows="2" name="Event Title" type="text" style="max-width: 75%;"
                                maxlength="15" id="event_title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="Description" rows="2" name="text1" cols="500"
                                id="text1"
                                style="max-width: 75% ; min-height: 150px;"></textarea>
                        </div>
                    </div>

                    {{-- event-img --}}
                    <div class="container mt-5">
                        <h3 class="text-center mb-5">Image Upload in Laravel</h3>
                        <form action="{{route('imageUpload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="user-image mb-3 text-center">
                                <div class="imgPreview"> </div>
                            </div>

                            <div class="custom-file">
                                <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                                <label class="custom-file-label" for="images">Choose image</label>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                                Upload Images
                            </button>
                        </form>
                    </div>

                    {{-- event-img --}}

                </div>
                <div class="edit-form-btn">
                <a href="{{Route('backend.event')}}" class="btn btn-danger btn-md">Cancel</a>
                <input type="submit" value="Add" class="btn btn-primary btn-md">
                    <div class="clearfix"></div>
                </div>
            </div>

        </form>
    </section>
    <!-- /.content -->

@endsection


