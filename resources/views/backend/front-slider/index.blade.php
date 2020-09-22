@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Front Slider Management
            <small>Edit Front Slider</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Front Slider</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('front-slider.store') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="edit-settings" enctype="multipart/form-data">
            @csrf

            <div class="box box-info">

                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-table" aria-hidden="true"></i> Front Slider Management</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-backdrop='static' data-keyboard='false' data-whatever="@add"><i class="fa fa-plus-square"></i> Add New Slider Image</button>
                    </div>
                </div>


                <div class="box-body">
                    <div class="table-responsive data-table-wrapper">

                        <table id="slider-table" class="datatable table table-condensed table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="75%">image</th>
                                    {{-- <th width="55%">Title</th>
                                    --}}
                                    {{-- <th>Serial</th> --}}
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($frontSliders as $key => $item)
                                    <tr id="tr_{{ $item->id }}">
                                        <th>{{ $key + 1 }}</th>
                                        <td><span><img src="{!!  asset('/storage/sliderImage/' . $item->img) !!}"
                                                    width="100px"></span> <br> {!! $item->img ?? '' !!}</td>
                                        {{-- <td>
                                            <h4> {!! $item->title ?? '' !!}</h4>
                                        </td> --}}
                                        <td>

                                            <a id="delete_slider_img" data-id="{{ $item->id }}"
                                                class="btn btn-danger text-white"><i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    {{-- <th>Title</th> --}}

                                    {{-- <th>Serial</th> --}}
                                    <th>Action</th>
                                </tr>
                            </tfoot>


                        </table>
                    </div>

                </div>
            </div>

        </form>
        {{-- Add Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <form method="POST" action="#" accept-charset="UTF-8" class="form-horizontal" role="form"
                    id="add_product_form" enctype="multipart/form-data">
                    @csrf
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-plus-square"></i> Add New Slider Image</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div><br>

                        <!-- /.box-header -->
                        <div class="box-body setting-block">



                            <div class="form-group">
                                <label for="image" class="col-lg-2 control-label">Front Slider Image</label>
                                <div class="col-lg-10">
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="image" type="file"
                                            id="image">
                                        <label for="image">
                                            <i class="fa fa-upload"></i>
                                            <span id="img_span">Choose an image</span>
                                        </label>
                                    </div>
                                    <span id="image_errors"></span>
                                </div>
                            </div>
                            <br>

                            <!--form control-->
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-lg-offset-2 col-lg-10 footer-btn">
                                    <input class="btn btn-primary btn-md " type="button" data-dismiss="modal" value="Close">

                                    <button class="btn btn-primary btn-md " id="add_product">Add</button>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--box-->

                    <!-- hidden setting id variable -->

                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('js')

<script>
    $(document).ready(function() {
        $("#exampleModal").on("hidden.bs.modal", function() {
            $('#image_errors').empty();
            $('#img_span').empty().append('Choose an image');
            $("#add_product_form").trigger("reset");
        });
        $(document).on('submit', '#add_product_form', function(e) {
            e.preventDefault();
            $('#image_errors').empty();
            var table = $('#slider-table').DataTable();
            var sl = table.rows().count();

            $.ajax({
                url: "{{ route('front-slider.store') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log('Submission was successful.');
                    console.log(data);
                    swal('Congratulation!', 'New Image Added successfully', 'success')
                    var id = data['id'];
                    var image = data['img'];

                    var img = '<span><img src="{{ asset('/storage/sliderImage') }}/' +
                        image + '" width="100px"></span>';


                    var btn = '<a id="delete_slider_img"  data-id="' + id +
                        '"class="btn btn-danger text-white">Delete</a>';

                    table.row.add([
                        sl + 1,
                        img,
                        btn,
                    ]).node().id = 'tr_' + id;
                    table.draw(false);

                    $("#add_product_form").trigger("reset");

                    $('#img_span').empty().append('Choose an image');
                    $('#exampleModal').modal('toggle');
                },

                error: function(xhr) {
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        if (key == 'image') {
                            $('#image_errors').empty().append(
                                '<strong style="color:red;">' + value +
                                '</strong');
                        }

                    });
                },

            });
        });

        $(document).on('click', '#delete_slider_img', function(e) {
            e.preventDefault();
            var table = $('#slider-table').DataTable();
            var id = $(this).data('id');
            swal({
                    title: "Are you sure!",
                    text: "Once clicked, this will be deleted!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                },
                function() {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('front-slider.destroy') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            var tr_id = data['id'];
                            swal('Congratulation!',
                                'Requested Image deleted successfully', 'success')
                            table.row("tr#tr_" + tr_id).remove().draw();
                        }
                    });
                });
        });
    });

</script>

@endsection
