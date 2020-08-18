@extends('backend.layouts.lp-admin')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Our Business Concern Management
            <small>Edit Our Business Concern</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Edit Our Business Concern</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('our-business-concern.update') }}" accept-charset="UTF-8"
            class="form-horizontal" role="form" id="edit-information" enctype="multipart/form-data">
            @csrf
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Edit Our Business Concern</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body setting-block">
                    <div class="form-group">
                        <label for="buseness_concern" class="col-lg-2 control-label">Text</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="buseness_concern" rows="2"  name="buseness_concern"
                                cols="500" id="buseness_concern" style="max-width: 75% ; min-height: 100px;">{{ $information->text1 }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-10 footer-btn">
                            <input class="btn btn-primary btn-md" type="submit" value="Update">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--box-->

            <!-- hidden setting id variable -->

            <input type="hidden" name="information Id" value="{{ !empty($information->id) ? $information->id : '' }}">
        </form>
    </section>
    <!-- /.content -->

@endsection
