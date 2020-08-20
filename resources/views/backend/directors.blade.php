@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Board Of Directors Management
            <small>Edit Board Of Directors</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Edit Board Of Directors</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('directors.update') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="edit-directors" enctype="multipart/form-data">
            @csrf
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Edit Board Of Directors</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body setting-block">
                    <!-- Nav tabs -->
                    <ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Chairman</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" aria-controls="1" role="tab" data-toggle="tab">Managing Director</a>
                        </li>
                        <!-- <li role="presentation">
                                <a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">Social Network</a>
                            </li> -->

                    </ul>

                    <!-- Tab panes -->
                    <div id="myTabContent" class="tab-content setting-tab">
                        <div role="tabpanel" class="tab-pane active" id="tab1">

                            <div class="form-group">
                                <label for="image" class="col-lg-2 control-label">image</label>

                                <div class="col-lg-10">
                                    <div class="preview-image">
                                        @isset($directors)
                                            <img src="{{ asset('/storage/information/' . $directors->img1) }}" alt="Site image"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>

                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="img1" type="file" id="image1">
                                        <label for="image1">
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
                                <label for="heading1" class="col-lg-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Heading" rows="2" name="heading1" type="text"
                                        style="max-width: 75% ;" value="{{ $directors->heading1 }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text1" class="col-lg-2 control-label">Text1</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="text1" rows="2" name="text1" cols="500"
                                        id="text1"
                                        style="max-width: 75% ; min-height: 150px;">{{ $directors->text1 }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text2" class="col-lg-2 control-label">Text2</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="text2" rows="2" name="text2" cols="500"
                                        id="text2"
                                        style="max-width: 75% ; min-height: 150px;">{{ $directors->text2 }}</textarea>
                                </div>
                            </div>

                        </div>
                        <!-- end-tab1 -->

                        <div role="tabpanel" class="tab-pane" id="tab2">

                            <div class="form-group">
                                <label for="image" class="col-lg-2 control-label">image</label>

                                <div class="col-lg-10">
                                    <div class="preview-image">
                                        @isset($directors)
                                            <img src="{{ asset('/storage/information/' . $directors->img2) }}" alt="Site image"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>

                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="img2" type="file" id="image2">
                                        <label for="image2">
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
                                <label for="heading2" class="col-lg-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Heading2" rows="2" name="heading2" type="text"
                                        style="max-width: 75% ;" value="{{ $directors->heading2 }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text3" class="col-lg-2 control-label">Text1</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="text3" rows="2" name="text3" cols="500"
                                        id="text3"
                                        style="max-width: 75% ; min-height: 150px;">{{ $directors->text3 }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text4" class="col-lg-2 control-label">Text2</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="text4" rows="2" name="text4" cols="500"
                                        id="text4"
                                        style="max-width: 75% ; min-height: 150px;">{{ $directors->text4 }}</textarea>
                                </div>
                            </div>
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

            <input type="hidden" name="information Id" value="{{ $directors->id }}">
        </form>
    </section>
    <!-- /.content -->

@endsection
