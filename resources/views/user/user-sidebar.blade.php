<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="left-side-bar">
		<div class="menu-block customscroll">
			<div class="pd-20 bg-white border-radius-4 box-shadow">
				<div class="profile-photo">
					<a href="modal" data-toggle="modal" data-target="#login-modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
					<img src="/images/user_profile/{{\Auth::user()->profile_pic}}" alt="" class="avatar-photo">	
					<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="login-box bg-white box-shadow pd-ltr-20 border-radius-5">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<img src="user-view-element/images/photo2.jpg" alt="login" class="login-img">
									<form action="/user_update/{{\Auth::id()}}" method="POST">
										@csrf
										<div class="input-group custom input-group-lg">
											<input type="text" class="form-control" placeholder="Name" name="name">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
											</div>
										</div>
										<div class="input-group custom input-group-lg">
											<input type="email" class="form-control" placeholder="Username" name="email">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="fa fa-envelope aria-hidden="true"></i></span>
											</div>
										</div>
										<div class="input-group custom input-group-lg">
											<input type="password" class="form-control" placeholder="**********" name="password">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="input-group">
													<button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>



				</div>
				<h5 class="text-center">{{\Auth::user()->name}}</h5>
				<p class="text-center text-muted">Batch</p>
				<p class="text-center text-muted">working at:</p>
				<p class="text-center text-muted">Phone:</p>
				<p class="text-center text-muted">Email:</p>
				<p class="text-center text-muted">Address:</p>
				<p class="text-center text-muted">Blood Group:</p>
				<div class="profile-social">
					<ul class="clearfix">
						<li><a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i></a></li>
						<li><a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>