@extends('backend.layouts.lp-admin')
@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Plants Management
        <small>Edit Plants</small>
    </h1>
    <!-- Breadcrumbs would render from routes/breadcrumb.php -->
    <ol class="breadcrumb">
        <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
        <li class="active">Plants</li>
    </ol>

</section>

<!-- Main content -->
<section class="content">
    <div class="box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Plants Management</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@add">Add New Plant</button>
            </div>
        </div>


        <div class="box-body">
            <div class="table-responsive data-table-wrapper">

                <table id="slider-table" class="datatable table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>image</th>
                            <th>Plant Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($plants as $key => $item)
                        <tr id="tr_{{ $item->id }}">
                            <th>{{ $key + 1 }}</th>
                            <td><span><img src="{!!  asset('/storage/plantsimage/' . $item->img) !!}"
                                        width="100px"></span>
                            </td>
                            <td>
                                <h4> {!! $item->heading ?? '' !!}</h4>
                            </td>
                            <td>{{!! $item->text1 ?? '' !!}}</td>
                            <td>
                                <a id="edit_plant" data-id="{{ $item->id }}" class="btn btn-primary text-white">Edit</a>
                                <a id="delete_plant" data-id="{{ $item->id }}"
                                    class="btn btn-danger text-white">Delete</a>
                            </td>

                        </tr>
                        @empty

                        @endforelse

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>image</th>
                            <th>Plant Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>
            </div>

        </div>
    </div>
    {{-- Add Modal --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

            <form method="POST" action="#" accept-charset="UTF-8" class="form-horizontal" role="form"
                id="add_plant_form" enctype="multipart/form-data">
                @csrf
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Add New Plant</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <hr>
                    <!-- /.box-header -->
                    <div class="box-body setting-block">

                        <div class="form-group">
                            <label for="image" class="col-lg-2 control-label">image</label>

                            <div class="col-lg-10">
                                <div class="custom-file-input">
                                    <input class="form-control inputfile inputfile-1" name="image" type="file"
                                        id="image">
                                    <label for="image">
                                        <i class="fa fa-upload"></i>
                                        <span>Change image</span>
                                    </label>
                                </div>

                            </div>
                            <!--col-lg-10-->
                        </div>
                        <!--form control-->
                        <br>
                        <div class="form-group">
                            <label for="heading" class="col-lg-2 control-label">Heading</label>
                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Heading" rows="2" name="heading" type=""
                                    style="max-width: 75% ;">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text1" class="col-lg-2 control-label">Text1</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" placeholder="text1" rows="2" name="text1" cols="500"
                                    id="text1" style="max-width: 75% ; min-height: 150px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text2" class="col-lg-2 control-label">Text2</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" placeholder="text2" rows="2" name="text2" cols="500"
                                    id="text2" style="max-width: 75% ; min-height: 150px;"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-10 footer-btn">
                                <input class="btn btn-primary btn-md " type="button" data-dismiss="modal" value="Close">
                                {{-- <input class="btn btn-primary btn-md " type="button" id="add_plant" value="Add"> --}}
                                <button class="btn btn-primary btn-md " id="add_plant">Add</button>
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


        $(document).on('submit', '#add_plant_form', function(e) {
            e.preventDefault();
            var table = $('#slider-table').DataTable();
            var sl = table.rows().count();

            $.ajax({
                    url:"{{route('plants.store')}}",
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                console.log('Submission was successful.');
                console.log(data);
                swal('Congratulation!', 'New Plant Added successfully', 'success')
                var id = data['id'];
                var image = data['img'];

                var img = '<img src="{!!  asset(\'/storage/plantsimage/\' . '+image+') !!}" width="100px">';

                console.log(id);

                var myvar = '<a id="edit_plant" data-id="'+id+'" class="btn btn-primary text-white">Edit</a>'+
                '<a id="delete_plant"  data-id="'+id+'"  class="btn btn-danger text-white">Delete</a>';


                table.row.add( [
                    sl+1,
                    img,
                    data['heading'],
                    data['text1'],
                    myvar,
                        ] ).node().id = 'tr_'+id;
        table.draw( false );

        $('#exampleModal').modal('toggle');

            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
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
