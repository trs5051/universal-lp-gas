@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            About Us Management
            <small>Edit About Us</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Edit About Us</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

    <form method="POST" action="{{route('aboutUs.store')}}" accept-charset="UTF-8" class="form-horizontal" role="form" id="edit-aboutUs"
            enctype="multipart/form-data">
            @csrf
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-pencil-square"></i> Edit About Us</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body setting-block">
                    <!-- Nav tabs -->
                    <ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">First Part</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" aria-controls="1" role="tab" data-toggle="tab">Second Part</a>
                        </li>
                        <!-- <li role="presentation">
                            <a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">Social Network</a>
                        </li> -->

                    </ul>

                    <!-- Tab panes -->
                    <div id="myTabContent" class="tab-content setting-tab">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <div class="form-group">
                                <label for="heading1" class="col-lg-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Heading1" rows="2" name="heading1"
                                        type="text"  id="heading1" value="{{ $aboutUs->heading1 }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description1" class="col-lg-2 control-label">Description1</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="Description1" rows="2" name="description1"
                                        cols="50" id="description1">{{ $aboutUs->description1 }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description2" class="col-lg-2 control-label">Description2</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="Description2" rows="2" name="description2"
                                        cols="50" id="description2">{{ $aboutUs->description2 }}</textarea>
                                </div>
                            </div>

                        </div>
                        <!-- end-tab1 -->

                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="img1" class="col-lg-2 control-label">Image 1</label>

                                    <div class="col-lg-10">
                                        <div class="preview-aboutUs">
                                            @isset($aboutUs)
                                            <img src="{{ asset('/storage/information/' . $aboutUs->img1) }}" width="40"/>
                                            @endisset
                                        </div>
                                        <br>
                                        <div class="custom-file-input">
                                            <input class="form-control inputfile inputfile-1" name="img1" type="file"
                                                id="img1">
                                            <label for="img1">
                                                <i class="fa fa-upload"></i>
                                                <span>Choose a image</span>
                                            </label>
                                        </div>
                                        <div class="img-remove-img1">
                                        </div>
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <!--form control-->
                                <div class="form-group">
                                    <label for="heading2" class="col-lg-2 control-label">Heading 1</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Heading2" name="heading2" type="text"
                                             value="{{ $aboutUs->heading2 }}" id="heading2">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <!--form control-->
                                <div class="form-group">
                                    <label for="text1" class="col-lg-2 control-label">Text 1</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Text1" name="text1" type="text"
                                             value="{{ $aboutUs->text1 }}" id="text1">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-group">
                                    <label for="img2" class="col-lg-2 control-label">Image 2</label>

                                    <div class="col-lg-10">
                                        <div class="preview-aboutUs">
                                            @isset($aboutUs)
                                            <img src="{{ asset('/storage/information/' . $aboutUs->img2) }}" width="40"/>

                                            @endisset
                                        </div>
                                        <br>
                                        <div class="custom-file-input">
                                            <input class="form-control inputfile inputfile-1" name="img2" type="file"
                                                id="img2">
                                            <label for="img2">
                                                <i class="fa fa-upload"></i>
                                                <span>Choose a image</span>
                                            </label>
                                        </div>
                                        <div class="img-remove-img2">
                                        </div>
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <!--form control-->
                                <div class="form-group">
                                    <label for="heading3" class="col-lg-2 control-label">Heading 2</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="heading3" name="heading3" type="text"
                                             value="{{ $aboutUs->heading3 }}" id="heading3">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <!--form control-->
                                <div class="form-group">
                                    <label for="text2" class="col-lg-2 control-label">Text 2</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Text2" name="text2" type="text"
                                             value="{{ $aboutUs->text2 }}" id="text2">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <!--form control-->
                                <div class="form-group">
                                    <label for="img3" class="col-lg-2 control-label">Image 3</label>

                                    <div class="col-lg-10">
                                        <div class="preview-aboutUs">
                                            @isset($aboutUs)
                                            <img src="{{ asset('/storage/information/' . $aboutUs->img3) }}" width="40"/>

                                            @endisset
                                        </div>
                                        <br>
                                        <div class="custom-file-input">
                                            <input class="form-control inputfile inputfile-1" name="img3" type="file"
                                                id="img3">
                                            <label for="img3">
                                                <i class="fa fa-upload"></i>
                                                <span>Choose a image</span>
                                            </label>
                                        </div>
                                        <div class="img-remove-img3">
                                        </div>
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <!--form control-->
                                <div class="form-group">
                                    <label for="heading4" class="col-lg-2 control-label">Heading 3</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="heading4" name="heading4" type="text"
                                             value="{{ $aboutUs->heading4 }}" id="heading4">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <!--form control-->
                                <div class="form-group">
                                    <label for="text3" class="col-lg-2 control-label">Text 3</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Meta Title" name="text3" type="text"
                                             value="{{ $aboutUs->text3 }}" id="text3">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <!--form control-->
                                <br>
                                <hr>
                                <br>


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

            <input type="hidden" name="information Id" value="{{ $aboutUs->id }}">
        </form>
    </section>
    <!-- /.content -->

@endsection
