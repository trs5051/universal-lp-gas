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
                            <ul class="nav nav-tabs" role="tablist1">
                                <li role="presentation1" class="active" id="li-edit1">
                                    <a href="#edit" aria-controls="edit" role="tab" data-toggle="tab" class="tabs">Update
                                        Information</a>
                                </li>
                                <li role="presentation" id="li-edit">
                                    <a href="#edit1" aria-controls="edit" role="tab" data-toggle="tab" class="tabs">Update
                                        Password</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane mt-30 active" id="edit">
                                    <form method="POST" action="{{ Route('profileinfo.update') }}" accept-charset="UTF-8" enctype="multipart/form-data"
                                        class="form-horizontal">
                                        @csrf

                                        @if (session()->has('successinfo'))
                                            <div class="alert alert-success">
                                                {{ session()->get('successinfo') }}
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="first_name" class="col-md-4 control-label">Profile Picture</label>
                                            <div class="col-md-6">
                                                <div class="preview-profile">
                                                    @isset($profile)
                                                        <img src="{{ asset('/storage/profile/' . $profile->img) }}"
                                                            alt="Site Logo" width="200" />
                                                    @endisset
                                                </div>
                                                <br>
                                                <div class="custom-file-input">
                                                    <input class="form-control inputfile inputfile-1" name="profile"
                                                        type="file" id="profile">
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
                                                <input class="form-control" placeholder="First Name" name="name" type="text"
                                                    value="{{ $profile->name }}" id="first_name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">Email</label>
                                            <div class="col-md-6">
                                                <input class="form-control" placeholder="First Name" name="email"
                                                    type="text" value="{{ $profile->email }}" id="email">
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

                                <div role="tabpanel1" class="tab-pane mt-30" id="edit1">
                                    <form method="POST" action="{{ Route('profile.update') }}" accept-charset="UTF-8"
                                        class="form-horizontal">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if (session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        @if (session()->has('error'))
                                            <div class="alert alert-error">
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif


                                        <div class="form-group">
                                            <label for="old_password" class="col-md-4 control-label">Current
                                                Password</label>
                                            <div class="col-md-6">
                                                <input class="form-control" placeholder="Current Password"
                                                    name="current_password" type="password" id="old_password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-md-4 control-label">New Password</label>
                                            <div class="col-md-6">
                                                <input class="form-control" placeholder="New Password" name="password"
                                                    type="password" id="password">
                                            </div>
                                        </div>

                                        <div class="form-group d-none">
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
