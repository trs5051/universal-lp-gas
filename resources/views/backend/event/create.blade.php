@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

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

        <form method="POST" action="{{ route('event.store') }}" accept-charset="UTF-8" class="form-horizontal" role="form"
            id="" enctype="multipart/form-data">
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
                                <input class="form-control inputfile inputfile-1" name="Event Image" type="file"
                                    id="event_img">
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
                            <input class="form-control" placeholder="Event Title" rows="2" name="Event Title" type="text"
                                style="max-width: 75%;" maxlength="15" id="event_title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="Description" rows="2" name="text1" cols="500"
                                id="text1" style="max-width: 75% ; min-height: 150px;"></textarea>
                        </div>
                    </div>

                    {{-- event-img --}}
                    <div class="form-group">
                        <label for="Event_pic" class="col-lg-2 control-label required">Event Pictures</label>
                        <div class="col-lg-10">
                            <div class="custom-file-input">
                                <input class="form-control inputfile inputfile-1" name="Event_pic[]" type="file"
                                    id="Event_pic" multiple>
                                <label for="Event_pic" >
                                    <i class="fa fa-upload"></i>
                                    <span>Choose  images</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    {{-- event-img --}}

                </div>
                <div class="edit-form-btn">
                    <a href="{{ Route('backend.event') }}" class="btn btn-danger btn-md">Cancel</a>
                    <input type="submit" value="Add" class="btn btn-primary btn-md">
                    <div class="clearfix"></div>
                </div>
            </div>

        </form>
    </section>
    <!-- /.content -->

@endsection

@section('js')

    <script>
        $(document).ready(function() {



        });

    </script>

@endsection
