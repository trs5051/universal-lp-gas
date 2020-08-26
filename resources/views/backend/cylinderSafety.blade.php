@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cylinder Safety Management
            <small>Edit Cylinder Safety</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Edit Cylinder Safety</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('cylinderSafety.update') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="edit-cylinderSafety" enctype="multipart/form-data">
            @csrf
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Edit Cylinder Safety</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body setting-block">
                    <!-- Nav tabs -->
                    <ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#tab1" aria-controls="1" role="tab" data-toggle="tab">Safety Tips</a>
                        </li>
                         <li role="presentation">
                                <a href="#tab2" aria-controls="2" role="tab" data-toggle="tab">Attach Cylinders</a>
                        </li>
                         <li role="presentation">
                                <a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">Leakage</a>
                        </li>
                         <li role="presentation">
                                <a href="#tab4" aria-controls="2" role="tab" data-toggle="tab">Safely Store</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div id="myTabContent" class="tab-content setting-tab">


                        <div role="tabpanel" class="tab-pane active" id="tab1">

                            <div class="form-group">
                                <label for="safety_tips_img1" class="col-lg-2 control-label">Image 1</label>
                                <div class="col-lg-10">
                                    <div class="preview-logo">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->safety_tips_img1) }}" alt="Site Logo"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="safety_tips_img1" type="file" id="safety_tips_img1">
                                        <label for="safety_tips_img1">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <div class="form-group">
                                <label for="safety_tips_img2" class="col-lg-2 control-label">Image 2</label>
                                <div class="col-lg-10">
                                    <div class="preview-logo">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->safety_tips_img2) }}" alt="Site Logo"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="safety_tips_img2" type="file" id="safety_tips_img2">
                                        <label for="safety_tips_img2">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>

                            <div class="form-group">
                                <label for="safety_tips_heading" class="col-lg-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Contact Number" rows="2" name="safety_tips_heading"
                                        type="text" id="safety_tips_heading"
                                        value="{{ !empty($cylinderSafety->safety_tips_heading) ? $cylinderSafety->safety_tips_heading : '' }}">
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                <label for="safety_tips_text" class="col-lg-2 control-label">Text</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control"
                                        placeholder="Company Address" rows="2" name="safety_tips_text" cols="50"
                                        id="safety_tips_text">{{ $cylinderSafety->safety_tips_text }}</textarea>
                                    </div>
                            </div>
                            <!--form control-->
                        </div>

                        <div role="tabpanel" class="tab-pane" id="tab2">

                            <div class="form-group">
                                <label for="stove_img1" class="col-lg-2 control-label">Image 1</label>
                                <div class="col-lg-10">
                                    <div class="preview-logo">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->stove_img1) }}" alt="Site Logo"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="stove_img1" type="file" id="stove_img1">
                                        <label for="stove_img1">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <div class="form-group">
                                <label for="stove_text1" class="col-lg-2 control-label">Text</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Twitter" rows="2" name="stove_text1" type="text"
                                id="stove_text1" value="{{$cylinderSafety->stove_text1}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stove_img2" class="col-lg-2 control-label">Image 2</label>
                                <div class="col-lg-10">
                                    <div class="preview-logo">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->stove_img2) }}" alt="Site Logo"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="stove_img2" type="file" id="stove_img2">
                                        <label for="stove_img2">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <div class="form-group">
                                <label for="stove_text2" class="col-lg-2 control-label">Text</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Twitter" rows="2" name="stove_text2" type="text"
                                        id="stove_text2" value="{{$cylinderSafety->stove_text2}}">
                                </div>
                            </div>


                            <!--form control-->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">

                            <div class="form-group">
                                <label for="leakage_img1" class="col-lg-2 control-label">Image 1</label>
                                <div class="col-lg-10">
                                    <div class="preview-leakage_img1">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->leakage_img1) }}" alt="Site leakage_img1"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="leakage_img1" type="file" id="leakage_img1">
                                        <label for="leakage_img1">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <div class="form-group">
                                <label for="leakage_text1" class="col-lg-2 control-label">Text 1</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Twitter" rows="2" name="leakage_text1" type="text"
                                        id="leakage_text1" value="{{$cylinderSafety->leakage_text1}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="leakage_img2" class="col-lg-2 control-label">Image 2</label>
                                <div class="col-lg-10">
                                    <div class="preview-leakage_img2">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->leakage_img2) }}" alt="Site leakage_img2"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="leakage_img2" type="file" id="leakage_img2">
                                        <label for="leakage_img2">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <div class="form-group">
                                <label for="leakage_text2" class="col-lg-2 control-label">Text 2</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Twitter" rows="2" name="leakage_text2" type="text"
                                        id="leakage_text2"  value="{{$cylinderSafety->leakage_text2}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="leakage_img3" class="col-lg-2 control-label">Image 3</label>
                                <div class="col-lg-10">
                                    <div class="preview-leakage_img3">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->leakage_img3) }}" alt="Site leakage_img3"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="leakage_img3" type="file" id="leakage_img3">
                                        <label for="leakage_img3">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <div class="form-group">
                                <label for="leakage_text3" class="col-lg-2 control-label">Text 3</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Twitter" rows="2" name="leakage_text3" type="text"
                                        id="leakage_text3"  value="{{$cylinderSafety->leakage_text3}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="leakage_img4" class="col-lg-2 control-label">Image 4</label>
                                <div class="col-lg-10">
                                    <div class="preview-leakage_img4">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->leakage_img4) }}" alt="Site leakage_img4"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="leakage_img4" type="file" id="leakage_img4">
                                        <label for="leakage_img4">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <div class="form-group">
                                <label for="leakage_text4" class="col-lg-2 control-label">Text 4</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Twitter" rows="2" name="leakage_text4" type="text"
                                        id="leakage_text4"  value="{{$cylinderSafety->leakage_text4}}">
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab4">
                            <div class="form-group">
                                <label for="safely_img1" class="col-lg-2 control-label">Image 1</label>
                                <div class="col-lg-10">
                                    <div class="preview-safely_img1">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->safely_img1) }}" alt="Site safely_img1"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="safely_img1" type="file" id="safely_img1">
                                        <label for="safely_img1">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
                            </div>
                            <div class="form-group">
                                <label for="safely_img2" class="col-lg-2 control-label">Image 2</label>
                                <div class="col-lg-10">
                                    <div class="preview-safely_img2">
                                        @isset($cylinderSafety)
                                            <img src="{{ asset('/storage/cylinderSafety/' . $cylinderSafety->safely_img2) }}" alt="Site safely_img2"
                                                width="200" />
                                        @endisset
                                    </div>
                                    <br>
                                    <div class="custom-file-input">
                                        <input class="form-control inputfile inputfile-1" name="safely_img2" type="file" id="safely_img2">
                                        <label for="safely_img2">
                                            <i class="fa fa-upload"></i>
                                            <span>Change Image</span>
                                        </label>
                                    </div>
                                </div>
                                <!--col-lg-10-->
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

            <input type="hidden" name="cylinderSafety Id" value="{{ !empty($cylinderSafety->id) ? $cylinderSafety->id : '' }}">
        </form>
    </section>
    <!-- /.content -->

@endsection
