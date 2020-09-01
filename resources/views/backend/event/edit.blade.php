@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Event Management
            <small>Update Event</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">{{$event->title}}</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('event.update') }}" accept-charset="UTF-8" class="form-horizontal" role="form"
            id="" enctype="multipart/form-data">
            @csrf

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"> {{$event->title}}</h3>
                    <div class="box-tools pull-right">
                        <a class="btn btn-primary" href="{{ route('backend.event') }}">View All Event</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="event_img" class="col-lg-2 control-label required">Event Main Image</label>
                        <div class="col-lg-10">
                            <div class="preview-logo ">

                                @isset($event)
                                    <img src="{{ asset('/storage/eventImage/' . $event->main_img) }}" alt="Site Logo"
                                        width="200" />
                                @endisset
                            </div>
                            <br>
                            <div class="custom-file-input">
                                <input class="form-control inputfile inputfile-1" name="Event Image" type="file"
                                    id="event_img">
                                <label for="event_img">
                                    <i class="fa fa-upload"></i>
                                    <span>Update image</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="event_title" class="col-lg-2 control-label">Event Title</label>
                        <div class="col-lg-10">
                        <input class="form-control" placeholder="Event Title" rows="2" name="Event Title" type="text" value="{{$event->title}}"
                                style="max-width: 75%;"  id="event_title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="Description" rows="2" name="text1" cols="500"
                        id="text1" style="max-width: 75% ; min-height: 150px;">{{$event->text1}}</textarea>
                        </div>
                    </div>


                    {{-- event-img --}}
                    <div class="form-group">
                        <label for="Event_pic" class="col-lg-2 control-label">Event Pictures</label>
                        <div class="col-lg-10">
                            <div class="img-preview ">

                                @forelse ($event->eventPictures as $img)
                                <div class="prev-item">                                
                                    <img src="{{ asset('/storage/eventImage/' . $img->img) }}" alt="Event Pictures"/>
                                    <span class="remove-img">X</span>
                                </div>

                                @empty

                                @endforelse

                            </div>
                            <br>
                            <div class="custom-file-input">
                                <input class="form-control inputfile inputfile-1" name="Event_pic[]" type="file"
                                    id="Event_pic" multiple>
                                <label for="Event_pic" >
                                    <i class="fa fa-upload"></i>
                                    <span>Update images</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- event-img --}}

                </div>
                <div class="edit-form-btn">
                    <a href="{{ Route('backend.event') }}" class="btn btn-danger btn-md">Cancel</a>
                    <input type="submit" value="Update" class="btn btn-primary btn-md">
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
