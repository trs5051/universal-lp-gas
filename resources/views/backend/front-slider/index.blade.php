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

        <form method="POST" action="{{ route('update-hearder-footer') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="edit-settings" enctype="multipart/form-data">
            @csrf

            <div class="box box-info">

                <div class="box-header with-border">
                    <h3 class="box-title">Front Slider Management</h3>
                    <div class="box-tools pull-right">

                        <a class="btn btn-primary" href="{{ route('front-slider.create') }}">Add New Front Slider</a>
                    </div>
                </div>


                <div class="box-body">
                    <div class="table-responsive data-table-wrapper">

                        <table id="menus-table" class="datatable table table-condensed table-hover table-bordered">
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
                                    <tr>
                                        <th>{{ $key + 1 }}</th>
                                        <td><span><img src="{!!  asset('/storage/sliderImage/' . $item->img) !!}"
                                                    width="100px"></span> <br> {!! $item->img ?? '' !!}</td>
                                        {{-- <td>
                                            <h4> {!! $item->title ?? '' !!}</h4>
                                        </td> --}}
                                        <td>
                                            {{-- <button class="btn btn-sm btn-danger"
                                                id="delete">Delete</button> --}}

                                            <a id="delete_slider_img" data-id="{{ $item->id }}"
                                                class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                @empty

                                    <h1>No data Here

                                    </h1>

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
    </section>
    <!-- /.content -->
@endsection

@section('js')

<script>
    $(document).ready(function() {

        $(document).on('click', '#delete_slider_img', function(e) {
            e.preventDefault();
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







                        }
                    });
                });
        });
    });

</script>

@endsection
