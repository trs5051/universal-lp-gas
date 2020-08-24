@extends('backend.layouts.lp-admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Contact Management
            <small>Edit Contact</small>
        </h1>
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        <ol class="breadcrumb">
            <li><a href="{{ route('backend-home') }}">Dashboard</a></li>
            <li class="active">Edit Contact</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <form method="POST" action="{{ route('contact.update') }}" accept-charset="UTF-8" class="form-horizontal"
            role="form" id="edit-settings" enctype="multipart/form-data">
            @csrf
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Edit Contact</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body setting-block">
                    <!-- Nav tabs -->
                    <ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Head Office</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" aria-controls="1" role="tab" data-toggle="tab">Dhaka Office</a>
                        </li>
                        <!-- <li role="presentation">
                                <a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">Social Network</a>
                            </li> -->

                    </ul>

                    <!-- Tab panes -->
                    <div id="myTabContent" class="tab-content setting-tab">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <div class="form-group">
                                <label for="office_name" class="col-lg-2 control-label">Title</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Contact Number" rows="2" name="office_name"
                                        type="text" maxlength="15" id="office_name"
                                        value="{{ !empty($headOffice->office_name) ? $headOffice->office_name : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_address" class="col-lg-2 control-label">Company Address</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" style="min-height: 100px"
                                        placeholder="Company Address" rows="2" name="company_address" cols="50"
                                        id="company_address">{{ $headOffice->address }}</textarea>


                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_contact" class="col-lg-2 control-label">Contact Number</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Contact Number" rows="2" name="company_contact"
                                        type="text"  id="company_contact"
                                        value="{{ !empty($headOffice->land_line) ? $headOffice->land_line : '' }}">
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                <label for="company_email" class="col-lg-2 control-label">Company Email</label>

                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Company Email" rows="2" name="company_email"
                                        type="email" maxlength="34" id="company_email"
                                        value="{{ !empty($headOffice->email) ? $headOffice->email : '' }}">
                                </div>
                            </div>
                            <!--form control-->


                        </div>
                        <!-- end-tab1 -->

                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <div class="form-group">
                                <label for="company_address" class="col-lg-2 control-label">Company Address</label>

                                <div class="col-lg-10">
                                    {{-- <textarea class="form-control"
                                        placeholder="Company Address" rows="2" name="company_address" cols="50"
                                        id="company_address">{{ $settings->address }}</textarea>
                                    --}}
                                    <input class="form-control" placeholder="Address 1st part " rows="2"
                                        name="Company Address First Part" type="text" maxlength="45"
                                        value="{{ !empty($settings->address_first_part) ? $settings->address_first_part : '' }}">
                                    <input class="form-control" placeholder="Address 2nd part " rows="2"
                                        name="Company Address Second Part" type="text" maxlength="45"
                                        value="{{ !empty($settings->address_second_part) ? $settings->address_second_part : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_contact" class="col-lg-2 control-label">Contact Number</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Contact Number" rows="2" name="company_contact"
                                        type="text" maxlength="15" id="company_contact"
                                        value="{{ !empty($settings->contact) ? $settings->contact : '' }}">
                                </div>
                            </div>
                            <!--form control-->
                            <div class="form-group">
                                <label for="company_email" class="col-lg-2 control-label">Company Email</label>

                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Company Email" rows="2" name="company_email"
                                        type="email" maxlength="34" id="company_email"
                                        value="{{ !empty($settings->email) ? $settings->email : '' }}">
                                </div>
                            </div>
                            <!--form control-->
                        </div>

                        <div role="tabpanel" class="tab-pane" id="tab3">

                            <div class="form-group">
                                <label for="instagram" class="col-lg-2 control-label">Instagram</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Instragram" rows="2" name="instagram"
                                        type="text" id="instagram">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="facebook" class="col-lg-2 control-label">Facebook</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Facebook" rows="2" name="facebook" type="text"
                                        id="facebook">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="twitter" class="col-lg-2 control-label">Twitter</label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="Twitter" rows="2" name="twitter" type="text"
                                        id="twitter">
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

            <input type="hidden" name="Settings Id" value="{{ !empty($settings->id) ? $settings->id : '' }}">
        </form>
    </section>
    <!-- /.content -->

@endsection
