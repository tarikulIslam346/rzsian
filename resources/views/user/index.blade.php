<!DOCTYPE html>
<html>
<head>
	@include('user.head')
</head>
<body>
	@include('user.user-header')
	@include('user.user-sidebar')

	<div class="main-container">
		 @if(session('user_update'))
                            <div class="alert  alert-success fade show" role="alert">
                               {{ session('user_update') }} 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                                  
           @endif  
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row clearfix">
					<div class="col-lg-9 col-md-9">
						<div class="row clearfix">
							<div class="col-md-3 col-sm-12">
									<a href="#" class="btn-block" data-backdrop="static" data-toggle="modal" data-target="#user_info" type="button">
										<img src="user-view-element/images/modal-img2.jpg" alt="modal">
									</a>
									<div class="modal fade" id="user_info" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="login-box bg-white box-shadow pd-ltr-20 border-radius-5">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<form>
														<div class="input-group custom input-group-lg">
															<input type="text" class="form-control" placeholder="Username">
															<div class="input-group-append custom">
																<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
															</div>
														</div>
														<div class="input-group custom input-group-lg">
															<input type="password" class="form-control" placeholder="**********">
															<div class="input-group-append custom">
																<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
															</div>
														</div>
														<div class="input-group custom input-group-lg">
															<input type="password" class="form-control" placeholder="**********">
															<div class="input-group-append custom">
																<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
															</div>
														</div>
														<div class="input-group custom input-group-lg">
															<input type="password" class="form-control" placeholder="**********">
															<div class="input-group-append custom">
																<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
															</div>
														</div>
														<div class="input-group custom input-group-lg">
															<input type="password" class="form-control" placeholder="**********">
															<div class="input-group-append custom">
																<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
															</div>
														</div>
														<div class="input-group custom input-group-lg">
															<input type="password" class="form-control" placeholder="**********">
															<div class="input-group-append custom">
																<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
															</div>
														</div>
														<div class="input-group custom input-group-lg">
															<input type="password" class="form-control" placeholder="**********">
															<div class="input-group-append custom">
																<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
															</div>
														</div>
														<div class="input-group custom input-group-lg">
															<input type="password" class="form-control" placeholder="**********">
															<div class="input-group-append custom">
																<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
															</div>
														</div>
														<!-- <div class="row">
															<div class="col-sm-12">
																<div class="input-group">
																	<a class="btn btn-primary btn-lg btn-block" href="index.php">Sign In</a>
																</div>
															</div>
														</div> -->
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<div class="col-md-3" style="box-shadow: -2px 0px 10px rgba(0, 0, 0, 0.4)">
						<div class="mx-h-350 customscroll">
							<ul>
								<a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a>
								<a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
			@include('user.footer')
		</div>
	</div>
	@include('user.script')
</body>
</html>