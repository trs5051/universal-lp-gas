@extends('backend.layouts.lp-admin')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Why LPG Management
            <small>Edit Why LPG</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Edit Why LPG</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('whyLPG.update') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="edit-whyLPG" enctype="multipart/form-data">
            @csrf
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Edit Why LPG</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body setting-block">

                    <br>
                    <div class="form-group">
                        <label for="img1" class="col-lg-2 control-label">image</label>

                        <div class="col-lg-10">
                            <div class="preview-image">
                                @isset($whyLPG)
                                    <img src="{{ asset('/storage/information/' . $whyLPG->img1) }}" alt="Site image"
                                        width="300" />
                                @endisset
                            </div>
                            <br>

                            <div class="custom-file-input">
                                <input class="form-control inputfile inputfile-1" name="img1" type="file" id="img1">
                                <label for="img1">
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
                        <label for="heading1" class="col-lg-2 control-label">Heading </label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Heading1" rows="2" name="heading1" type="text"
                                style="max-width: 75% ;" value="{{ $whyLPG->heading1 }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="col-lg-2 control-label">Text1</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="text1" rows="2" name="text1" cols="500" id="text1"
                                style="max-width: 75% ; min-height: 150px;">{{ $whyLPG->text1 }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text2" class="col-lg-2 control-label">Text 2</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="text2" rows="2" name="text2" cols="500" id="text2"
                                style="max-width: 75% ; min-height: 150px;">{{ $whyLPG->text2 }}</textarea>
                        </div>
                    </div>
                    <br>
                    <hr>


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

            <input type="hidden" name="information Id" value="{{ !empty($whyLPG->id) ? $whyLPG->id : '' }}">
        </form>
    </section>
    <!-- /.content -->

@endsection
