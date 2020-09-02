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
            <li class="active">{{ $event->title }}</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('event.update') }}" accept-charset="UTF-8" class="form-horizontal" role="form"
            id="" enctype="multipart/form-data">
            @csrf

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"> {{ $event->title }}</h3>
                    <div class="box-tools pull-right">
                        <a class="btn btn-primary" href="{{ route('backend.event') }}"><i class="fa fa-list-alt"></i> All Events</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="event_img" class="col-lg-2 control-label required">Event Main Image</label>
                        <div class="col-lg-10">
                            <div class="main-img main-img-preview">
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
                    <input type="hidden" name="event_id" value="{{$event->id}}">
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Event Title" rows="2" name="Event Title" type="text"
                                value="{{ $event->title }}" style="max-width: 75%;" id="event_title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="Description" rows="2" name="text1" cols="500"
                                id="text1" style="max-width: 75% ; min-height: 150px;">{{ $event->text1 }}</textarea>
                        </div>
                    </div>



                    {{-- event-img --}}
                    <div class="form-group">
                        <label for="Event_pic" class="col-lg-2 control-label ">Event Pictures</label>
                        <div class="col-lg-10">

                            <div class="img-preview ">
                                @forelse ($event->eventPictures as $img)
                                    <div class="prev-item" id="event_img_{{ $img->id }}">
                                        <img src="{{ asset('/storage/eventImage/' . $img->img) }}" alt="Event Pictures" />
                                        <a class="delete_event_img" data-img="{{ asset('/storage/eventImage/' . $img->img) }}"
                                            data-id="{{ $img->id }}"><span class="remove-img">X</span> </a>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                            <br><hr>

                            <div class="gallery-adm img-preview"></div>
                            <hr>

                            <div class="custom-file-input">
                                <input class="form-control inputfile inputfile-1" name="Event_pic[]" type="file"
                                    id="Event_pic" multiple>
                                <label for="Event_pic">
                                    <i class="fa fa-upload"></i>
                                    <span>Add images</span>
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
        // Multiple images preview in browser

        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                            placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#event_img').on('change', function() {
            $('div.main-img').empty();
            imagesPreview(this, 'div.main-img');
        });
        $('#Event_pic').on('change', function() {
            $('div.gallery-adm').empty();
            imagesPreview(this, 'div.gallery-adm');
        });


        $(document).on('click', '.delete_event_img', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var img = $(this).data('img');
            swal({
                    imageUrl: img,
                    imageAlt: 'Custom image',
                    title: "Are you sure!",
                    text: "Once clicked, this will be deleted!",
                    confirmButtonColor: '#944644',
                    confirmButtonText: 'Yes, delete it!',
                    confirmButtonClass: "btn-danger",
                    showCancelButton: true,
                },
                function() {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('eventOneimg.delete') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            var div_id = data['id'];
                            console.log(id);
                            $("#event_img_" + id).remove();
                        }
                    });

                });
        });
    });

</script>

@endsection
