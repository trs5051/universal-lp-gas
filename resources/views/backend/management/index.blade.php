@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Management
            <small>Edit </small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active"></li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">

            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-table" aria-hidden="true"></i>  Management</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-backdrop='static' data-keyboard='false' data-whatever="@add"><i class="fa fa-plus-square"></i> Add New Member</button>
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive data-table-wrapper">

                    <table id="management_table" class="datatable table table-condensed table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Post</th>
                                <th>text</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($managements as $key => $item)
                                <tr id="tr_{{ $item->id }}">
                                    <th>{{ $key + 1 }}</th>
                                    <td><span><img src="{!!  asset('/storage/managementImage/' . $item->img) !!}" width="100px"></span> </td>
                                    <td><h4> {!! $item->name ?? '' !!}</h4> </td>
                                    <td>{!! $item->designation ?? '' !!}</td>
                                    <td>{!! $item->managementCategory->title ?? '' !!}</td>
                                    <td>{!! $item->text ?? '' !!}</td>
                                    <td>
                                        <a id="edit_management" data-id="{{ $item->id }}" data-toggle="modal"
                                            data-target="#editModal" data-backdrop='static' data-keyboard='false'
                                            class="btn btn-primary text-white"><i class="fa fa-pencil-square"></i> Edit</a>
                                        <a id="delete_management" data-id="{{ $item->id }}"
                                            class="btn btn-danger text-white"><i class="fa fa-trash"></i> Delete</a>
                                    </td>

                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Post</th>
                                <th>text</th>
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
                    id="add_management_form" enctype="multipart/form-data">
                    @csrf
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-plus-square"></i> Add New Member </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div><br>

                        <!-- /.box-header -->
                        <div class="box-body setting-block">
                            <div class="form-group">
                                <label for="image" class="col-lg-2 control-label">image</label>
                                <div class="col-lg-10">
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="img" type="file" id="image">
                                        <label for="image">
                                            <i class="fa fa-upload"></i>
                                            <span id="img_span">Choose an image</span>
                                        </label>
                                    </div>
                                    <span id="image_errors"></span>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <!--form control-->
                            <br>
                            <div class="form-group">
                                <label for="name" class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="name" rows="2" name="Name" type=""
                                        style="max-width: 75% ;">
                                    <span id="Management_Name_errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="designation" class="col-lg-2 control-label">Designation</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="designation" rows="2" name="designation"
                                        type="" style="max-width: 75% ;">
                                    <span id="Management_Name_errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="post" class="col-lg-2 control-label required">Post</label>

                                <div class="col-lg-10">
                                    <select class="form-control select2 post box-size" required="required" id="post" name="post">

                                       @forelse ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                       @empty

                                       @endforelse

                                    </select>
                                </div>
                                <!--col-lg-3-->
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                <label for="text" class="col-lg-2 control-label">Text</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="text" rows="2" name="text" cols="500"
                                        id="text" style="max-width: 75% ; min-height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-lg-2 control-label">Phone</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="phone" rows="2" name="phone" type=""
                                        style="max-width: 75% ;">
                                    <span id="Management_Phone_errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-lg-2 control-label">E-mail</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="email" rows="2" name="email" type=""
                                        style="max-width: 75% ;">
                                    <span id="Management_email_errors"></span>
                                </div>
                            </div>

                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-lg-offset-2 col-lg-10 footer-btn">
                                    <input class="btn btn-primary btn-md " type="button" data-dismiss="modal" value="Close">

                                    <button class="btn btn-primary btn-md " id="add_management">Add</button>
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
        {{-- Edit Modal --}}
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <form method="POST" action="#" accept-charset="UTF-8" class="form-horizontal" role="form"
                    id="edit_management_form" enctype="multipart/form-data">
                    @csrf
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-pencil-square"></i> Edit Member Details </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div><br>

                        <!-- /.box-header -->
                        <div class="box-body setting-block">
                            <div class="form-group">
                                <label for="edit_image" class="col-lg-2 control-label">image</label>
                                <div class="col-lg-10">
                                    <div class="preview-img">
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="image" type="file"
                                            id="edit_image">
                                        <label for="edit_image">
                                            <i class="fa fa-upload"></i>
                                            <span id="img_span">Update image</span>
                                        </label>
                                    </div>
                                    <span id="update_image_errors"></span>

                                </div>
                                <!--col-lg-10-->
                            </div>
                            <!--form control-->
                            <br>
                            <div class="form-group">
                                <label for="name" class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-10">
                                <input class="form-control" placeholder="name" rows="2" name="Name" id="edit_member_name" value=""
                                        style="max-width: 75% ;">
                                    <span id="Management_Name_errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="designation" class="col-lg-2 control-label">Designation</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="designation" rows="2" name="designation" id="edit_designation" value=""
                                        type="" style="max-width: 75% ;">
                                    <span id="Management_Name_errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="post" class="col-lg-2 control-label required">Post</label>

                                <div class="col-lg-10">
                                    <select class="form-control select2 post box-size" required="required" id="edit_post" name="post">

                                       @forelse ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                       @empty

                                       @endforelse

                                    </select>
                                </div>
                                <!--col-lg-3-->
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                <label for="text" class="col-lg-2 control-label">Text</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="text" rows="2" name="text" cols="500"
                                        id="edit_text" style="max-width: 75% ; min-height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-lg-2 control-label">Phone</label>
                                <div class="col-lg-10">
                                <input class="form-control" placeholder="phone" rows="2" name="phone" type="" value="" id="edit_phone"
                                        style="max-width: 75% ;">
                                    <span id="Management_Phone_errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-lg-2 control-label">E-mail</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="email" rows="2" name="email" type="" value="" id="edit_email"
                                        style="max-width: 75% ;">
                                    <span id="Management_email_errors"></span>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-lg-offset-2 col-lg-10 footer-btn">
                                    <input class="btn btn-primary btn-md " type="button" data-dismiss="modal" value="Close">
                                    <button class="btn btn-primary btn-md " id="update_management">Update</button>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--box-->
                    <!-- hidden setting id variable -->
                    <input type="hidden" id="management_id" name="Management Id">

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
            $('#Management_Name_errors').empty();
            $('#img_span').empty().append('Choose an image');
            $("#add_management_form").trigger("reset");
        });


        $(document).on('submit', '#add_management_form', function(e) {
            e.preventDefault();
            $('#image_errors').empty();
            $('#Management_Name_errors').empty();
            var table = $('#management_table').DataTable();
            var sl = table.rows().count();

            $.ajax({
                url: "{{ route('management.store') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log('Submission was successful.');
                    console.log(data);
                    swal('Congratulation!', 'New Management Added successfully', 'success')
                    var id = data[0]['id'];
                    var image = data[0]['img'];

                    var img = '<span><img src="{{ asset('/storage/managementImage') }}/' +
                        image + '" width="100px"></span>';

                    var btn = '<a id="edit_management" data-id="' + id +
                        '" class="btn btn-primary text-white">Edit</a>' +
                        ' <a id="delete_management"  data-id="' + id +
                        '"  class="btn btn-danger text-white">Delete</a>';

                    table.row.add([
                        sl + 1,
                        img,
                        data[0]['name'],
                        data[0]['designation'],
                        data[1]['title'],
                        data[0]['text'],
                        btn,
                    ]).node().id = 'tr_' + id;
                    table.draw(false);

                    $("#add_management_form").trigger("reset");

                    $('#img_span').empty().append('Choose an image');
                    $('#exampleModal').modal('toggle');
                },

                error: function(xhr) {
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        if (key == 'img') {
                            $('#image_errors').empty().append(
                                '<strong style="color:red;">' + value +
                                '</strong');
                        }
                        if (key == 'Name') {
                            $('#Management_Name_errors').empty().append(
                                '<strong style="color:red;">' + value +
                                '</strong');
                        }
                    });
                },

            });
        });

        $(document).on('click', '#edit_management', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var table = $('#management_table').DataTable();
            $.ajax({
                type: "get",
                url: "{{ route('findOne.management') }}",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data);
                    var id = data['id'];
                    var image = data['img'];
                    var name = data['name'];
                    var designation = data['designation'];
                    var text = data['text'];
                    var phone = data['phone'];
                    var email = data['email'];

                    var img = '<span><img src="{{ asset('/storage/managementImage') }}/' +
                        image + '" width="200px"></span>';

                    var btn = '<a id="edit_management" data-id="' + id +
                        '" class="btn btn-primary text-white">Edit</a>' +
                        '<a id="delete_management"  data-id="' + id +
                        '"  class="btn btn-danger text-white">Delete</a>';


                    $('#management_id').empty().val(id);
                    $('.preview-img').empty().append(img);
                    $('#edit_member_name').empty().val(name);
                    $('#edit_designation').empty().val(designation);
                    $('#edit_phone').empty().val(phone);
                    $('#edit_email').empty().val(email);
                    $('#edit_text').empty().append(text);

                }
            });
        });

        $(document).on('submit', '#edit_management_form', function(e) {
            e.preventDefault();
            $('#image_errors').empty();
            $('#Management_Name_errors').empty();
            var table = $('#management_table').DataTable();
            var sl = table.rows().count();

            $.ajax({
                url: "{{ route('management.update') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log('Submission was successful.');
                    console.log(data);
                    swal('Congratulation!', 'Management Updated successfully', 'success')
                    var id = data['id'];
                    var image = data['img'];

                    var img = '<span><img src="{{ asset('/storage/managementImage ') }}/' +
                        image + '" width="100px"></span>';

                    var btn = '<a id="edit_management" data-id="' + id +
                        '" class="btn btn-primary text-white">Edit</a>' +
                        ' <a id="delete_management"  data-id="' + id +
                        '"  class="btn btn-danger text-white">Delete</a>';

                    $("#edit_management_form").trigger("reset");

                    $('#img_span').empty().append('Choose an image');
                    $('#editModal').modal('toggle');
                    location.reload();

                },

                error: function(xhr) {
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        if (key == 'image') {
                            $('.#update_image_errors').empty().append(
                                '<strong style="color:red;">' + value +
                                '</strong');
                        }
                        if (key == 'Management_Name') {
                            $('#update_Management_Name_errors').empty().append(
                                '<strong style="color:red;">' + value +
                                '</strong');
                        }
                    });
                },

            });
        });


        $(document).on('click', '#delete_management', function(e) {
            e.preventDefault();
            var table = $('#management_table').DataTable();
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
                        url: "{{ route('management.destroy') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            var tr_id = data['id'];
                            swal('Congratulation!',
                                'Requested management deleted successfully',
                                'success')
                            table.row("tr#tr_" + tr_id).remove().draw();
                        }
                    });

                });
        });
    });

</script>

@endsection
