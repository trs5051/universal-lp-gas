@extends('backend.layouts.lp-admin')
@section('content')
<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Settings Management
        <small>Edit Settings</small>
    </h1>
    <!-- Breadcrumbs would render from routes/breadcrumb.php -->
    <ol class="breadcrumb">
        <li><a href="http://localhost:8001/admin/dashboard">Dashboard</a></li>
        <li class="active">Edit Settings</li>
    </ol>

</section>

<!-- Main content -->
<section class="content">
    <!-- Flash Message Vue component -->
    <flash message="" type="" dont-hide=""></flash>
    <form method="POST" action="http://localhost:8001/admin/settings/1" accept-charset="UTF-8" class="form-horizontal" role="form" id="edit-settings" enctype="multipart/form-data"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="QOaKT1NbhKhzlHd04NkmDYxgEyexFy3CIj8rdFPT">

        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Edit Settings</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body setting-block">
                <!-- Nav tabs -->
                <ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">SEO Settings</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab2" aria-controls="1" role="tab" data-toggle="tab">Company Contact Details</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">Mail Settings</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab4" aria-controls="3" role="tab" data-toggle="tab">Footer Settings</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab5" aria-controls="4" role="tab" data-toggle="tab">Terms and Condition Settings</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab6" aria-controls="5" role="tab" data-toggle="tab">Google Analytics Track Code</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div id="myTabContent" class="tab-content setting-tab">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="form-group">
                            <label for="logo" class="col-lg-2 control-label">Site Logo</label>

                            <div class="col-lg-10">

                                <div class="custom-file-input">
                                    <input class="form-control inputfile inputfile-1" name="logo" type="file" id="logo">
                                    <label for="logo">
                                        <i class="fa fa-upload"></i>
                                        <span>Choose a file</span>
                                    </label>
                                </div>
                                <div class="img-remove-logo">
                                </div>
                            </div>
                            <!--col-lg-10-->
                        </div>
                        <!--form control-->

                        <div class="form-group">
                            <label for="favicon" class="col-lg-2 control-label">Fav Icon</label>

                            <div class="col-lg-10">
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
                        <div class="form-group">
                            <label for="seo_title" class="col-lg-2 control-label">Meta Title</label>

                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Meta Title" name="seo_title" type="text" value="Laravel 6.0 AdminPanel" id="seo_title">
                            </div>
                            <!--col-lg-10-->
                        </div>
                        <!--form control-->

                        <div class="form-group">
                            <label for="seo_keyword" class="col-lg-2 control-label">Meta Keyawords</label>

                            <div class="col-lg-10">
                                <textarea class="form-control" placeholder="Meta Keyawords" rows="2" name="seo_keyword" cols="50" id="seo_keyword"></textarea>
                            </div>
                            <!--col-lg-3-->
                        </div>
                        <!--form control-->

                        <div class="form-group">
                            <label for="seo_description" class="col-lg-2
					control-label">Meta Description</label>

                            <div class="col-lg-10">
                                <textarea class="form-control" placeholder="Meta Description" rows="2" name="seo_description" cols="50" id="seo_description"></textarea>
                            </div>
                            <!--col-lg-3-->
                        </div>
                        <!--form control-->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <div class="form-group">
                            <label for="company_address" class="col-lg-2
					control-label">Company Address</label>

                            <div class="col-lg-10">
                                <textarea class="form-control" placeholder="Company Address" rows="2" name="company_address" cols="50" id="company_address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_contact" class="col-lg-2 control-label">Contact Number</label>

                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Contact Number" rows="2" name="company_contact" type="text" id="company_contact">
                            </div>
                        </div>
                        <!--form control-->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        <div class="form-group">
                            <label for="from_name" class="col-lg-2 control-label">From Name</label>

                            <div class="col-lg-10">
                                <input class="form-control" placeholder="From Name" rows="2" name="from_name" type="text" id="from_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="from_email" class="col-lg-2 control-label">From Email</label>

                            <div class="col-lg-10">
                                <input class="form-control" placeholder="From Email" rows="2" name="from_email" type="text" id="from_email">
                            </div>
                        </div>
                        <!--form control-->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        <div class="form-group">
                            <label for="footer_text" class="col-lg-2 control-label">Footer Text</label>

                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Footer Text" rows="2" name="footer_text" type="text" id="footer_text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="copyright_text" class="col-lg-2
					control-label">Copyright Text</label>

                            <div class="col-lg-10">
                                <input class="form-control" placeholder="Copyright Text" rows="2" name="copyright_text" type="text" id="copyright_text">
                            </div>
                        </div>
                        <!--form control-->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab5">
                        <div class="form-group">
                            <label for="terms" class="col-lg-2 control-label">Terms &amp; Condition</label>

                            <div class="col-lg-10">
                                <textarea class="form-control" placeholder="Terms &amp; Condition" name="terms" cols="50" rows="10" id="terms"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="disclaimer" class="col-lg-2
					control-label">Disclaimer</label>

                            <div class="col-lg-10">
                                <textarea class="form-control" placeholder="Disclaimer" name="disclaimer" cols="50" rows="10" id="disclaimer"></textarea>
                            </div>
                        </div>
                        <!--form control-->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab6">
                        <div class="form-group">
                            <label for="google_analytics" class="col-lg-2
					control-label">Google Analytics</label>

                            <div class="col-lg-10">
                                <textarea class="form-control" placeholder="Google Analytics" name="google_analytics" cols="50" rows="10" id="google_analytics"></textarea>
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
</section><!-- /.content -->

@endsection