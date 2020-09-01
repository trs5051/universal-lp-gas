@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            News & Event
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
                <h3 class="box-title"> News & Event</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-primary" href="{{ route('event.create') }}">Add New Event</a>
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive data-table-wrapper">

                    <table id="event_table" class="datatable table table-condensed table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>image</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($events as $key => $item)
                                <tr id="tr_{{ $item->id }}">
                                    <th>{{ $key + 1 }}</th>
                                    <td><span><img src="{!!  asset('/storage/eventImage/' . $item->main_img) !!}"
                                                width="100px"></span> </td>
                                    <td>
                                        <h4> {!! $item->title ?? '' !!}</h4>
                                    </td>

                                    <td>
                                    <a href="{{Route('event.edit',$item->id)}}" id="edit_event" data-id="{{ $item->id }}"
                                            class="btn btn-primary text-white">Edit</a>
                                        <a id="delete_event" data-id="{{ $item->id }}"
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
                                <th>Title</th>
                                <th>Action</th>
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


        $(document).on('click', '#delete_event', function(e) {
            e.preventDefault();
            var table = $('#event_table').DataTable();
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
                        url: "{{ route('event.destroy') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            var tr_id = data['id'];
                            swal('Congratulation!',
                                'Requested event deleted successfully',
                                'success')
                            table.row("tr#tr_" + tr_id).remove().draw();
                        }
                    });

                });
        });
    });

</script>

@endsection
