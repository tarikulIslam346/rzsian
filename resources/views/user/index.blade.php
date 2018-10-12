<!DOCTYPE html>
<html>
<head>
	@include('user.head')
</head>
<body>
	@include('user.user-header')
	

	<div class="container">
		<div class="container-wrap">
	

	 @if(session('user_update'))
        <div class="alert  alert-success fade show" role="alert">
           {{ session('user_update') }} 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>                   
       @endif  
		<div>
			<!-- <div class="min-height-200px"> -->
				<div class="row clearfix">
					<div class="col-md-2 _r_left_side">
						@include('user.user-sidebar')
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="row clearfix user_body_wrap">
							<div class="col-md-4">
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
							<div class="col-md-4">
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
							<div class="col-md-4">
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
							<div class="col-md-4">
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
							<div class="col-md-4">
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
							<div class="col-md-4">
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
							            <div class="modal-header d-flex">
							            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                    <span aria-hidden="true">&times;</span>
							                </button>
											<img src="img/imran.jpg" alt="avatar" class="rounded-circle img-responsive">
							            </div>
							            <!--Body-->
							            <div class="modal-body text-center mb-1">
							                <h5>Mohammad Imran</h5>
							                <p>01723535363</p>
							                <p>intoiit bangladesh LTD</p>
							                <p>Dhaka, Mirpur</p>
							                <p>B+</p>
							            </div>
							      	 </div>
							    	</div>
								</div>
							</div>
						</div>
					<div class="col-md-3" style="box-shadow: -2px 0px 10px rgba(0, 0, 0, 0.4);padding: 0px">
						<div class="right_sidebar">
							<div class="customscroll all-batch">
								<ul>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
									<a href="#">
										<li>
											<p>Batch: 2007</p>
										</li>
									</a>
								</ul>
							</div>
						</div>
						<div class="mx-h-350" style="margin-top:40px;background-color: #000 ">
							<a href=""><img src="img/add.jpg" style="width: 100%"></a>
						</div>
					</div>
				</div>
			<!-- </div> -->
			@include('user.footer')
		</div>
		</div>
	</div>

</body>
</html>