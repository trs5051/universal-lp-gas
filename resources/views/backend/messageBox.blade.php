@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Message Box Management
            <small>Edit Message Box</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Message Box</li>
        </ol>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Message Box Management</h3>
            </div>
            <div class="box-body">
                <div class="table-responsive data-table-wrapper">

                    <table id="plant_table" class="datatable table table-condensed table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th width = "15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($messageBox as $key => $item)
                                <tr id="tr_{{ $item->id }}">
                                    <th>{{ $key + 1 }}</th>
                                    <td>
                                        <h4> {!! $item->name ?? '' !!}</h4>
                                    </td>
                                    <td>{!! $item->email ?? '' !!}</td>
                                    <td>{!! $item->message ?? '' !!}</td>

                                    <td>
                                        <a id="delete_plant" data-id="{{ $item->id }}"
                                            class="btn btn-danger text-white"><i class="fa fa-trash"></i> Delete</a>
                                    </td>

                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th width = "15%">Action</th>
                            </tr>
                        </tfoot>

                    </table>
                </div>

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
            $('#Plant_Name_errors').empty();
            $('#img_span').empty().append('Choose an image');
            $("#add_plant_form").trigger("reset");
        });



        $(document).on('click', '#delete_plant', function(e) {
            e.preventDefault();
            var table = $('#plant_table').DataTable();
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
                        url: "{{ route('message.destroy') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            var tr_id = data['id'];
                            swal('Congratulation!',
                                'Requested plant deleted successfully', 'success')
                            table.row("tr#tr_" + tr_id).remove().draw();
                        }
                    });

                });
        });
    });

</script>

@endsection
