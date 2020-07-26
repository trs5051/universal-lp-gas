@extends('layouts.lp-admin')
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
							<li role="presentation" class="active" id="li-profile">
								<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" class="tabs">Profile</a>
							</li>

							<li role="presentation" id="li-edit">
								<a href="#edit" aria-controls="edit" role="tab" data-toggle="tab" class="tabs">Update Information</a>
							</li>

							<li role="presentation" id="li-password">
								<a href="#password" aria-controls="password" role="tab" data-toggle="tab" class="tabs">Change Password</a>
							</li>
						</ul>

						<div class="tab-content">

							<div role="tabpanel" class="tab-pane mt-30 active" id="profile">
								<table class="table table-striped table-hover">

									<tr>
										<th>First Name</th>
										<td>Admin</td>
									</tr>
									<tr>
										<th>Last Name</th>
										<td>admin</td>
									</tr>
									<tr>
										<th>E-mail</th>
										<td>admin@admin.com</td>
									</tr>
									<tr>
										<th>Created At</th>
										<td>2020-07-23 04:09:22 (6 hours ago)</td>
									</tr>
									<tr>
										<th>Last Updated</th>
										<td>2020-07-23 04:47:09 (5 hours ago)</td>
									</tr>
								</table>
							</div>
							<!--tab panel profile-->

							<div role="tabpanel" class="tab-pane mt-30" id="edit">
								<form method="POST" action="http://localhost:8001/profile/update" accept-charset="UTF-8" class="form-horizontal"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="EEK71c2icgitUO48rMzUJ443NSUlZyeF86xNRovh">

									<div class="form-group">
										<label for="first_name" class="col-md-4 control-label">First Name</label>
										<div class="col-md-6">
											<input class="form-control" placeholder="First Name" name="first_name" type="text" value="Admin" id="first_name">
										</div>
									</div>

									<div class="form-group">
										<label for="last_name" class="col-md-4 control-label">Last Name</label>
										<div class="col-md-6">
											<input class="form-control" placeholder="First Name" name="last_name" type="text" value="admin" id="last_name">
										</div>
									</div>


									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
											<input class="btn btn-primary" id="update-profile" type="submit" value="Update">
										</div>
									</div>

								</form>
							</div>
							<!--tab panel profile-->

							<div role="tabpanel" class="tab-pane mt-30" id="password">
								<form method="POST" action="http://localhost:8001/password/change" accept-charset="UTF-8" class="form-horizontal"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="EEK71c2icgitUO48rMzUJ443NSUlZyeF86xNRovh">

									<div class="form-group">
										<label for="old_password" class="col-md-4 control-label">Old Password</label>
										<div class="col-md-6">
											<input class="form-control" placeholder="Old Password" name="old_password" type="password" id="old_password">
										</div>
									</div>

									<div class="form-group">
										<label for="password" class="col-md-4 control-label">New Password</label>
										<div class="col-md-6">
											<input class="form-control" placeholder="New Password" name="password" type="password" id="password">
										</div>
									</div>

									<div class="form-group">
										<label for="password_confirmation" class="col-md-4 control-label">New Password Confirmation</label>
										<div class="col-md-6">
											<input class="form-control" placeholder="New Password Confirmation" name="password_confirmation" type="password" id="password_confirmation">
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
											<input class="btn btn-primary" id="change-password" type="submit" value="Update">
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
											<form method="POST" action="http://localhost:8001/profile-picture/update" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="EEK71c2icgitUO48rMzUJ443NSUlZyeF86xNRovh">
												<div class="form-group">
													<label for="profile_pic">
														<img src="http://localhost:8001/img/frontend/profile-picture/pic-1.png" height=80 width=80>
														<input name="profile_pic" type="radio" value="profile_pic">
													</label>
												</div>
												<div class="form-group">
													<label for="profile_pic">
														<img src="http://localhost:8001/img/frontend/profile-picture/pic-2.png" height=80 width=80>
														<input name="profile_pic" type="radio" value="profile_pic">
													</label>
												</div>
												<div class="form-group">
													<label for="profile_pic">
														<img src="http://localhost:8001/img/frontend/profile-picture/pic-3.png" height=80 width=80>
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
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
