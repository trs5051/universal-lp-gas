@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product Category
            <small>Edit Product Category</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Product Category</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">

            <div class="box-header with-border">
                <h3 class="box-title"> <i class="fa fa-table" aria-hidden="true"></i> Product Category</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-backdrop='static' data-keyboard='false' data-whatever="@add"><i class="fa fa-plus-square"></i>
                        Add New ProductCategory</button>
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive data-table-wrapper " id="table_data">

                    <table id="ProductCategory_table" class="datatable table table-condensed table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($productCategory as $key => $item)

                                <tr id="tr_{{ $item->id }}">

                                    <th>{{ $key + 1 }}</th>


                                    <td>
                                        <h4> {!! $item->title ?? '' !!}</h4>
                                    </td>

                                    <td>
                                        <a id="delete_ProductCategory" data-id="{{ $item->id }}"
                                            class="btn btn-danger text-white"><i class="fa fa-trash"></i> Delete</a>
                                    </td>

                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
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
                    id="add_ProductCategory_form" enctype="multipart/form-data">
                    @csrf
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-plus-square"></i> Add New ProductCategory </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div><br>

                        <!-- /.box-header -->
                        <div class="box-body setting-block">


                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label">Title</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="title" rows="2" name="Title" type=""
                                        style="max-width: 75% ;">
                                    <span id="ProductCategory_Name_errors"></span>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-lg-offset-2 col-lg-10 footer-btn">
                                    <input class="btn btn-primary btn-md " type="button" data-dismiss="modal" value="Close">

                                    <button class="btn btn-primary btn-md " id="add_ProductCategory">Add</button>
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
                    id="edit_ProductCategory_form" enctype="multipart/form-data">
                    @csrf
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-pencil-square"></i> Edit ProductCategory </h3>
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
                                <label for="heading" class="col-lg-2 control-label">ProductCategory Name</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="ProductCategory Name" rows="2"
                                        name="ProductCategory Name" type="text" id="edit_ProductCategory_name"
                                        style="max-width: 75% ;">
                                    <span id="update_ProductCategory_Name_errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text1" class="col-lg-2 control-label">Text1</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="text1" rows="2" name="text1" cols="500"
                                        id="edit_text1" style="max-width: 75% ; min-height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text2" class="col-lg-2 control-label">Text2</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="text2" rows="2" name="text2" cols="500"
                                        id="edit_text2" style="max-width: 75% ; min-height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-lg-offset-2 col-lg-10 footer-btn">
                                    <input class="btn btn-primary btn-md " type="button" data-dismiss="modal" value="Close">
                                    <button class="btn btn-primary btn-md " id="update_ProductCategory">Update</button>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--box-->

                    <!-- hidden setting id variable -->
                    <input type="hidden" id="ProductCategory_id" name="ProductCategory Id">

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
            $('#ProductCategory_Name_errors').empty();
            $('#img_span').empty().append('Choose an image');
            $("#add_ProductCategory_form").trigger("reset");
        });


        $(document).on('submit', '#add_ProductCategory_form', function(e) {
            e.preventDefault();
            $('#image_errors').empty();
            $('#ProductCategory_Name_errors').empty();
            var table = $('#ProductCategory_table').DataTable();
            var sl = table.rows().count();

            $.ajax({
                url: "{{ route('productCategory.store') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log('Submission was successful.');
                    console.log(data);
                    swal('Congratulation!', 'New ProductCategory Added successfully',
                        'success')
                    var id = data['id'];

                    var btn = ' <a id="delete_ProductCategory"  data-id="' + id +
                        '"  class="btn btn-danger text-white"><i class="fa fa-trash"></i> Delete</a>';

                    table.row.add([
                        sl + 1,
                        data['title'],
                        btn,
                    ]).node().id = 'tr_' + id;
                    table.draw(false);

                    $("#add_ProductCategory_form").trigger("reset");

                    $('#exampleModal').modal('toggle');
                },

                error: function(xhr) {
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        if (key == 'image') {
                            $('#image_errors').empty().append(
                                '<strong style="color:red;">' + value +
                                '</strong');
                        }
                        if (key == 'ProductCategory_Name') {
                            $('#ProductCategory_Name_errors').empty().append(
                                '<strong style="color:red;">' + value +
                                '</strong');
                        }
                    });
                },

            });
        });

        $(document).on('click', '#edit_ProductCategory', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var table = $('#ProductCategory_table').DataTable();
            $.ajax({
                type: "get",
                url: "{{ route('findOne.productCategory') }}",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data);
                    var id = data['id'];
                    var image = data['img'];
                    var ProductCategoryName = data['heading'];
                    var txt1 = data['text1'];
                    var txt2 = data['text2'];

                    var img = '<span><img src="{{ asset('/storage/ProductCategoryimage ') }}/' +
                        image + '" width="200px"></span>';

                    var btn = '<a id="edit_ProductCategory" data-id="' + id +
                        '" class="btn btn-primary text-white">Edit</a>' +
                        '<a id="delete_ProductCategory"  data-id="' + id +
                        '"  class="btn btn-danger text-white">Delete</a>';


                    $('#ProductCategory_id').empty().val(id);
                    $('.preview-img').empty().append(img);
                    $('#edit_ProductCategory_name').empty().val(ProductCategoryName);
                    $('#edit_text1').empty().append(txt1);
                    $('#edit_text12').empty().append(txt2);

                }
            });
        });

        $(document).on('submit', '#edit_ProductCategory_form', function(e) {
            e.preventDefault();
            $('#image_errors').empty();
            $('#ProductCategory_Name_errors').empty();
            var table = $('#ProductCategory_table').DataTable();
            var sl = table.rows().count();

            $.ajax({
                url: "{{ route('productCategory.update') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log('Submission was successful.');
                    console.log(data);
                    swal('Congratulation!', 'ProductCategory Updated successfully',
                        'success')
                    var id = data['id'];
                    var image = data['img'];

                    var img = '<span><img src="{{ asset('/storage/ProductCategoryimage ') }}/' +
                        image + '" width="100px"></span>';

                    var btn = '<a id="edit_ProductCategory" data-id="' + id +
                        '" class="btn btn-primary text-white">Edit</a>' +
                        ' <a id="delete_ProductCategory"  data-id="' + id +
                        '"  class="btn btn-danger text-white">Delete</a>';

                    $("#edit_ProductCategory_form").trigger("reset");

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
                        if (key == 'ProductCategory_Name') {
                            $('#update_ProductCategory_Name_errors').empty().append(
                                '<strong style="color:red;">' + value +
                                '</strong');
                        }
                    });
                },

            });
        });


        $(document).on('click', '#delete_ProductCategory', function(e) {
            e.preventDefault();
            var table = $('#ProductCategory_table').DataTable();
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
                        url: "{{ route('productCategory.destroy') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            var tr_id = data['id'];
                            swal('Congratulation!',
                                'Requested ProductCategory deleted successfully',
                                'success')
                            table.row("tr#tr_" + tr_id).remove().draw();
                        }
                    });

                });
        });
    });

</script>

@endsection
