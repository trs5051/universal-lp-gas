@extends('backend.layouts.lp-admin')
@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Header & Footer Management
        <small>Edit Header & Footer</small>
    </h1>
    <!-- Breadcrumbs would render from routes/breadcrumb.php -->
    <ol class="breadcrumb">
        <li><a href="{{route('backend-home')}}">Dashboard</a></li>
        <li class="active">Edit Header & Footer</li>
    </ol>

</section>

<!-- Main content -->
<section class="content">

    <form method="POST" action="{{route('update-hearder-footer')}}" accept-charset="UTF-8" class="form-horizontal" role="form" id="edit-settings" enctype="multipart/form-data">
        @csrf
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Edit Header & Footer</h3>
            <input type="hidden" name="Settings Id" value="{{$settings->id}}">
            </div>
            <!-- /.box-header -->
            <div class="box-body setting-block">
                <!-- Nav tabs -->
                <ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Logo & Icon</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab2" aria-controls="1" role="tab" data-toggle="tab">Company Contact Details</a>
                    </li>
                    <!-- <li role="presentation">
                        <a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">Social Network</a>
                    </li> -->

                </ul>

                <!-- Tab panes -->
                <div id="myTabContent" class="tab-content setting-tab">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="form-group">
                            <label for="logo" class="col-lg-2 control-label">Site Logo</label>

                            <div class="col-lg-10">
                            <div class="preview-logo">
                                    <img src="{{ asset('/storage/logo/' . $settings->logo) }}" width="200"/>
                                </div>
                                <br>

                                <div class="custom-file-input">
                                    <input class="form-control inputfile inputfile-1" name="logo" type="file" id="logo">
                                    <label for="logo">
                                        <i class="fa fa-upload"></i>
                                        <span>Change logo</span>
                                    </label>
                                </div>

                            </div>
                            <!--col-lg-10-->
                        </div>
                        <!--form control-->
                        <br>

                        <div class="form-group">
                            <label for="favicon" class="col-lg-2 control-label">Fav Icon</label>

                            <div class="col-lg-10">
                                <div class="preview-favicon">
                                    <img src="{{ asset('/storage/favicon/' . $settings->favicon) }}" width="40"/>
                                </div>
                                <br>
                                <div class="custom-file-input">
                                    <input class="form-control inputfile inputfile-1" name="favicon" type="file" id="favicon">
                                    <label for="favicon">
                                        <i class="fa fa-upload"></i>
                                        <span>Choose a file</span>
                                    </label>
                                </div>
                                <div class="img-remove-favicon">
                                </div>
                            </div>
                            <!--col-lg-10-->
                        </div>
                        <!--form control-->
                        <!-- <div class="form-group">
                            <label for="seo_title" class="col-lg-2 control-label">Meta Title</label>
                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Meta Title" name="seo_title" type="text" value="Laravel 6.0 AdminPanel" id="seo_title">
                            </div>
                        </div> -->
                        <!--form control-->
                    </div>
                    <!-- end-tab1 -->

                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <div class="form-group">
                            <label for="company_address" class="col-lg-2 control-label">Company Address</label>

                            <div class="col-lg-10">
                                {{-- <textarea class="form-control" placeholder="Company Address" rows="2" name="company_address" cols="50" id="company_address"  >{{$settings->address}}</textarea> --}}
                                <input class="form-control" placeholder="Address 1st part " rows="2" name="Company Address First Part" type="text" maxlength="45" value="{{$settings->address_first_part}}">
                                <input class="form-control" placeholder="Address 2nd part " rows="2" name="Company Address Second Part" type="text" maxlength="45" value="{{$settings->address_second_part}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_contact" class="col-lg-2 control-label">Contact Number</label>

                            <div class="col-lg-10">
                            <input class="form-control" placeholder="Contact Number" rows="2" name="company_contact" type="text" maxlength="15" id="company_contact" value="{{$settings->contact}}">
                            </div>
                        </div>
                        <!--form control-->
                        <div class="form-group">
                            <label for="company_email" class="col-lg-2 control-label">Company Email</label>

                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Company Email" rows="2" name="company_email" type="email" maxlength="34" id="company_email" value="{{$settings->email}}">
                            </div>
                        </div>
                        <!--form control-->
                    </div>

                    <div role="tabpanel" class="tab-pane" id="tab3">

                        <div class="form-group">
                            <label for="instagram" class="col-lg-2 control-label">Instagram</label>
                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Instragram" rows="2" name="instagram" type="text" id="instagram">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="facebook" class="col-lg-2 control-label">Facebook</label>
                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Facebook" rows="2" name="facebook" type="text" id="facebook">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="twitter" class="col-lg-2 control-label">Twitter</label>
                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Twitter" rows="2" name="twitter" type="text" id="twitter">
                            </div>
                        </div>

                        <!--form control-->
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
        <input type="hidden" data-id="1" id="setting">
    </form>
</section>
<!-- /.content -->

@endsection
