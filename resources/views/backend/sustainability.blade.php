@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sustainability Management
            <small>Edit Sustainability</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Edit Sustainability</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

    <form method="POST" action="{{route('ourproud.store')}}" accept-charset="UTF-8" class="form-horizontal" role="form" id="edit-ourProud"
            enctype="multipart/form-data">
            @csrf
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Edit Sustainability</h3>

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
                                <label for="our_proud_heading" class="col-lg-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Heading" rows="2" name="heading1"
                                        type="text" value="{{ $ourProud->heading }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="our_proud_text" class="col-lg-2 control-label">Text</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="Text" rows="2" name="description1"
                                        cols="50" id="our_proud_text">{{ $ourProud->description }}</textarea>
                                </div>
                            </div>

                        </div>
                        <!-- end-tab1 -->

                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <div class="form-group">
                                <label for="our_proud_heading" class="col-lg-2 control-label">Heading</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Heading" rows="2" name="heading2"
                                        type="text"  value="{{ $ourProud->heading2 }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="our_proud_text" class="col-lg-2 control-label">Text</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" placeholder="Text" rows="2" name="description2"
                                        cols="50" id="our_proud_text">{{ $ourProud->description2 }}</textarea>
                                </div>
                            </div>
                            <br>
                                <hr>
                                <br>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="img1" class="col-lg-2 control-label">Image 1</label>

                                    <div class="col-lg-10">
                                        <div class="preview-ourProud">
                                            @isset($ourProud)
                                            <img src="{{ asset('/storage/ourProud/' . $ourProud->img1) }}" width="40"/>
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
                                    <label for="text1" class="col-lg-2 control-label">Text 1</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Text1" name="text1" type="text"
                                             value="{{ $ourProud->text1 }}" id="text1">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="form-group">
                                    <label for="img2" class="col-lg-2 control-label">Image 2</label>

                                    <div class="col-lg-10">
                                        <div class="preview-ourProud">
                                            @isset($ourProud)
                                            <img src="{{ asset('/storage/ourProud/' . $ourProud->img2) }}" width="40"/>

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
                                    <label for="text2" class="col-lg-2 control-label">Text 2</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Text2" name="text2" type="text"
                                             value="{{ $ourProud->text2 }}" id="text2">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <!--form control-->
                                <div class="form-group">
                                    <label for="img3" class="col-lg-2 control-label">Image 3</label>

                                    <div class="col-lg-10">
                                        <div class="preview-ourProud">
                                            @isset($ourProud)
                                            <img src="{{ asset('/storage/ourProud/' . $ourProud->img3) }}" width="40"/>

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
                                    <label for="text3" class="col-lg-2 control-label">Text 3</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Meta Title" name="text3" type="text"
                                             value="{{ $ourProud->text3 }}" id="text3">
                                    </div>
                                    <!--col-lg-10-->
                                </div>
                                <!--form control-->
                                <br>
                                <hr>
                                <br>
                                <div class="form-group">
                                    <label for="img4" class="col-lg-2 control-label">Image 4</label>

                                    <div class="col-lg-10">
                                        <div class="preview-ourProud">
                                            @isset($ourProud)
                                            <img src="{{ asset('/storage/ourProud/' . $ourProud->img4) }}" width="40"/>

                                            @endisset
                                        </div>
                                        <br>
                                        <div class="custom-file-input">
                                            <input class="form-control inputfile inputfile-1" name="img4" type="file"
                                                id="img4">
                                            <label for="img4">
                                                <i class="fa fa-upload"></i>
                                                <span>Choose a image</span>
                                            </label>
                                        </div>
                                        <div class="img-remove-img4">
                                        </div>
                                    </div>
                                    <!--col-lg-10-->
                                </div>

                                <!--form control-->
                                <div class="form-group">
                                    <label for="text4" class="col-lg-2 control-label">Text 4</label>

                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Meta Title" name="text4" type="text"
                                             value="{{ $ourProud->text4 }}" id="text4">
                                    </div>
                                    <!--col-lg-10-->
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

            <input type="hidden" name="ourProud Id" value="{{ $ourProud->id }}">
        </form>
    </section>
    <!-- /.content -->

@endsection
