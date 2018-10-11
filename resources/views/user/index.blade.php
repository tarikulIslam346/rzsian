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
						<div class="row clearfix user_body_wrap">
							<div class="col-md-3">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-3">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-3">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-3">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-3">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-3">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>


								<!--Modal: Login with Avatar Form-->
							<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
							        <!--Content-->
							        <div class="modal-content">
							            <!--Header-->
							            <div class="modal-header">
							            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                    <span aria-hidden="true">&times;</span>
							                </button>
							                <img src="img/imran.jpg" alt="avatar" class="rounded-circle img-responsive" style="border: 1px solid rgba(0,0,30,0.8);">
							            </div>
							            <!--Body-->
							            <div class="modal-body text-center mb-1">
							                <h5 class="mt-1 mb-2">Mohammad Imran</h5>
							                <p class="mt-1 mb-2">01723535363</p>
							                <p class="mt-1 mb-2">intoiit bangladesh LTD</p>
							                <p class="mt-1 mb-2">Dhaka, Mirpur</p>
							                <p class="mt-1 mb-2">B+</p>
							            </div>
							      	 </div>
							    	</div>
								</div>
							</div>

						</div>
					<div class="col-md-3 mx-h-380" style="box-shadow: -2px 0px 10px rgba(0, 0, 0, 0.4)">
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
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
									<li>
										<h4>Batch: 2007</span></h3>
									</li>
								</a><a href="#">
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