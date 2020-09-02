@extends('backend.layouts.lp-admin')
@section('content')

    <div class="container">
        <!-- Flash Message Vue component -->
        <flash message="" type="" dont-hide=""></flash>
        <div class="row">

            <div class="col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading">My Account</div>

                    <div class="panel-body">

                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">


                                <li role="presentation" class="active" id="li-edit">
                                    <a href="#edit" aria-controls="edit" role="tab" data-toggle="tab" class="tabs">Update Information</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane mt-30 active" id="edit">
                                    <form method="POST" action="{{ Route('profile.update') }}" accept-charset="UTF-8"
                                        class="form-horizontal">
                                        @csrf
                                        <div class="form-group">
                                            <label for="first_name" class="col-md-4 control-label">Profile Picture</label>
                                            <div class="col-md-6">
                                                <div class="preview-profile">
                                                    @isset($profile)
                                                        <img src="{{ asset('/storage/profile/' . $profile->img) }}" alt="Site Logo"
                                                            width="200" />
                                                    @endisset
                                                </div>
                                                <br>
                                                <div class="custom-file-input">
                                                    <input class="form-control inputfile inputfile-1" name="profile" type="file" id="profile">
                                                    <label for="profile">
                                                        <i class="fa fa-upload"></i>
                                                        <span>Change profile</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!--form control-->
                                        <br>
                                        <div class="form-group">
                                            <label for="first_name" class="col-md-4 control-label">Name</label>
                                            <div class="col-md-6">
                                                <input class="form-control" placeholder="First Name" name="name"
                                            type="text" value="{{$profile->name}}" id="first_name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">Email</label>
                                            <div class="col-md-6">
                                                <input class="form-control" placeholder="First Name" name="email"
                                            type="text" value="{{$profile->email}}" id="email">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="old_password" class="col-md-4 control-label">Old Password</label>
                                            <div class="col-md-6">
                                                <input class="form-control" placeholder="Old Password" name="old_password"
                                                    type="password" id="old_password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-md-4 control-label">New Password</label>
                                            <div class="col-md-6">
                                                <input class="form-control" placeholder="New Password" name="password"
                                                    type="password" id="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation" class="col-md-4 control-label">New Password
                                                Confirmation</label>
                                            <div class="col-md-6">
                                                <input class="form-control" placeholder="New Password Confirmation"
                                                    name="password_confirmation" type="password" id="password_confirmation">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <input class="btn btn-primary" id="change-password" type="submit"
                                                    value="Update">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <!--tab panel change password-->

                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Select from Avtars or upload your photo</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="http://localhost:8001/profile-picture/update"
                                                    accept-charset="UTF-8" enctype="multipart/form-data"><input
                                                        name="_token" type="hidden"
                                                        value="EEK71c2icgitUO48rMzUJ443NSUlZyeF86xNRovh">
                                                    <div class="form-group">
                                                        <label for="profile_pic">
                                                            <img src="http://localhost:8001/img/frontend/profile-picture/pic-1.png"
                                                                height=80 width=80>
                                                            <input name="profile_pic" type="radio" value="profile_pic">
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profile_pic">
                                                            <img src="http://localhost:8001/img/frontend/profile-picture/pic-2.png"
                                                                height=80 width=80>
                                                            <input name="profile_pic" type="radio" value="profile_pic">
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profile_pic">
                                                            <img src="http://localhost:8001/img/frontend/profile-picture/pic-3.png"
                                                                height=80 width=80>
                                                            <input name="profile_pic" type="radio" value="profile_pic">
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" name="profile_picture" type="file">
                                                    </div>

                                                    <div class="form-group">
                                                        <input class="btn btn-primary" type="submit" value="Submit">
                                                        <input class="btn btn-primary" type="reset" value="Reset">
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--tab content-->

                        </div>
                        <!--tab panel-->

                    </div>
                    <!--panel body-->

                </div><!-- panel -->

            </div><!-- col-xs-12 -->

        </div><!-- row -->
    </div><!-- container -->
    <!-- Scripts -->



@endsection
