@extends('backend.layouts.lp-admin')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Compliance Management
            <small>Edit Compliance</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Edit Compliance</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('compliance.update') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="edit-compliance" enctype="multipart/form-data">
            @csrf
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Edit Compliance</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body setting-block">

                    <br>
                    <div class="form-group">
                        <label for="img1" class="col-lg-2 control-label">image 1</label>

                        <div class="col-lg-10">
                            <div class="preview-image">
                                @isset($compliance)
                                    <img src="{{ asset('/storage/information/' . $compliance->img1) }}" alt="Site image"
                                        width="200" />
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
                        <label for="heading1" class="col-lg-2 control-label">Heading 1</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Heading1" rows="2" name="heading1" type="text"
                                style="max-width: 75% ;" value="{{ $compliance->heading1 }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="col-lg-2 control-label">Text1</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="text1" rows="2" name="text1" cols="500" id="text1"
                                style="max-width: 75% ; min-height: 70px;">{{ $compliance->text1 }}</textarea>
                        </div>
                    </div>
                    <br>
                    <hr>
                    {{-- part 2 --}}
                    <div class="form-group">
                        <label for="img2" class="col-lg-2 control-label">image 2</label>

                        <div class="col-lg-10">
                            <div class="preview-image">
                                @isset($compliance)
                                    <img src="{{ asset('/storage/information/' . $compliance->img2) }}" alt="Site image"
                                        width="200" />
                                @endisset
                            </div>
                            <br>

                            <div class="custom-file-input">
                                <input class="form-control inputfile inputfile-1" name="img2" type="file" id="img2">
                                <label for="img2">
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
                        <label for="heading2" class="col-lg-2 control-label">Heading 2</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Heading2" rows="2" name="heading2" type="text"
                                style="max-width: 75% ;" value="{{ $compliance->heading2 }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text2" class="col-lg-2 control-label">Text 2</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" placeholder="text2" rows="2" name="text2" cols="500" id="text2"
                                style="max-width: 75% ; min-height: 70px;">{{ $compliance->text2 }}</textarea>
                        </div>
                    </div>
                    <br>


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

            <input type="hidden" name="information Id" value="{{ !empty($compliance->id) ? $compliance->id : '' }}">
        </form>
    </section>
    <!-- /.content -->

@endsection
