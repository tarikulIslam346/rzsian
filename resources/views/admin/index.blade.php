<!DOCTYPE html>
<html>
<head>
	@include('admin.head')
</head>
<body>
	@include('admin.header')
	@include('admin.admin-sidebar')
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-briefcase"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24">40</span>
								<p class="weight-400 font-18">My Earnings</p>
							</div>
						</div>
						<div class="project-info-progress">
							<div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>
							</div>
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-handshake-o"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24">50</span>
								<p class="weight-400 font-18">Business Captured</p>
							</div>
						</div>
						<div class="project-info-progress">
							<div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Target</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>
							</div>
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-list-alt"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24">2 Lakhs</span>
								<p class="weight-400 font-18">Projects Complete</p>
							</div>
						</div>
						<div class="project-info-progress">
							<div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Review</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">Good</div>
							</div>
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-purple text-white">
									<i class="fa fa-podcast"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-purple weight-500 font-24">5.1 Lakhs</span>
								<p class="weight-400 font-18">Pending Business</p>
							</div>
						</div>
						<div class="project-info-progress">
							<div class="row clearfix">
								<div class="col-sm-6 text-muted weight-500">Review</div>
								<div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>
							</div>
							<div class="progress" style="height: 10px;">
								<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- Create game -->

			<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
				<h4 class="mb-30">Team Create</h4>
				<div class="row">
					<div class="col-md-12">
					<form  method="POST" action="/team/create" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="team_name">Team Name</label>
							<input type="text" class="form-control" id="team_name" name="team_name" placeholder="Enter team name">
						</div>
						<div class="form-group">
							<label for="batch">Batch</label>
							<input type="number" class="form-control" id="batch" name="batch" placeholder="Enter batch">
						</div>
						<div class="form-group">
							<label for="team_year">Year</label>
							<input type="number" class="form-control" id="team_year " name="team_year" placeholder="Enter team_year ">
						</div>
						<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="coach">Coach</label>
						</div>
						@if(isset($coaches))
						<select class="custom-select" id="coach" name="coach_id">
						<option selected>Choose...</option>
						@foreach($coaches as $c)
							
							<option value="{{$c->coach_id}}">{{$c->coach_name}}</option>
							@endforeach

						</select>
					
						@endif
						</div>
						<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="manager">Manager</label>
						</div>
						@if(isset($mangers))
						<select class="custom-select" id="manager" name="manager_id">
						<option selected>Choose...</option>
						@foreach($mangers as $m)
							
							<option value="{{$m->manager_id}}">{{$m->manager_name}}</option>
							@endforeach

						</select>

						@endif
						</div>
						<div class="form-group">
							<label for="coach_image">Coach imagee</label>
							<input type="file" class="form-control" id="coach_image" name="file" placeholder="Enter your image">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>

						
					</div>
				</div>

				@if(isset($teams))
				@foreach($teams as $t)

				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="/uploads/teams/{{$t->logo}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{$t->team_name}}</h5>
						<p class="card-text">{{$t->batch}} </p>
						<a href="modal" data-toggle="modal" data-target="#team_{{$t->team_id}}" class="edit-avatar btn btn-primary btn-twitter btn-sm">
    		<i class="fa fa-plus"></i>
    	</a>
					</div>
				</div>


<!-- modal -->
<div class="modal fade" id="team_{{$t->team_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header d-flex">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @if($t->logo)
				<img src="/uploads/teams/{{$t->logo}}" alt="avatar" class="rounded-circle img-responsive">
                @else
                <img src="/images/user_profile/abc.jpg" alt="avatar" class="rounded-circle img-responsive">
                @endif

            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">
                <form action="/team/edit" method="POST" enctype="multipart/form-data">
        					@csrf
							<input type="hidden" name="team_id" value="{{$t->team_id}}">
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="team_name" id="team_name" value="{{ old('team_name', $t->team_name) }}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="team_name" class="ml-0">Change Name</label>
                  </div>
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="batch" id="batch" value="{{ old('batch', $t->batch) }}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="batch" class="ml-0">Update batch</label>
                  </div>
				  <div class="form-group">
							<label for="logo">Team logo</label>
							<input type="file" class="form-control" id="logo" name="file" placeholder="Enter logo">
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
			<!-- modal -->





				@endforeach
				@endif
			</div>

			
			<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
				<h4 class="mb-30">Player Create</h4>
				<div class="row">
					<div class="col-md-12">
					<form  method="POST" action="/player/create" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="player_name">Player Name</label>
							<input type="text" class="form-control" id="player_name" name="player_name" placeholder="Enter player name">
						</div>

						<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="team_id">Team</label>
						</div>
						@if(isset($teams))
						<select class="custom-select" id="team_id" name="team_id">
						<option selected>Choose...</option>
						@foreach($teams as $t)
							
							<option value="{{$t->team_id}}">{{$t->team_name}}</option>
							@endforeach

						</select>
					
						@endif
						</div>	

						<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="position">Position</label>
						</div>
						<select class="custom-select" id="position" name="position">
							<option selected>Choose...</option>							
							<option value="batsman">batsman</option>
							<option value="baller">baller</option>
							<option value="all-rounder">all-rounder</option>
						</select>					
						</div>					

						<div class="form-group">
							<label for="coach_image">Player imagee</label>
							<input type="file" class="form-control" id="coach_image" name="file" placeholder="Enter your image">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
						
					</div>

					@if(isset($players))
				@foreach($players as $p)
					<div class="col-md-3">
					<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="/uploads/players/{{$p->player_image}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{$p->player_name}}</h5>
						<!-- <p class="card-text">{{$t->batch}} </p> -->
						<a href="modal" data-toggle="modal" data-target="#player_{{$p->player_id}}" class="edit-avatar btn btn-primary btn-twitter btn-sm">
    		<i class="fa fa-plus"></i>
    	</a>
					</div>
				</div>
					</div>



<!-- modal -->
<div class="modal fade" id="player_{{$p->player_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header d-flex">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @if($p->player_image)
				<img src="/uploads/players/{{$p->player_image}}" alt="avatar" class="rounded-circle img-responsive">
                @else
                <img src="/images/user_profile/abc.jpg" alt="avatar" class="rounded-circle img-responsive">
                @endif

            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">
                <form action="/player/edit" method="POST" enctype="multipart/form-data">
        					@csrf
							<input type="hidden" name="player_id" value="{{$p->player_id}}">
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="player_name" id="player_name" value="{{ old('player_name', $p->player_name) }}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="player_name" class="ml-0">Change Name</label>
                  </div>

                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="total_run" id="total_run" value="{{ old('total_run', $p->total_run) }}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="total_run" class="ml-0">Update total_run</label>
                  </div>

				  <div class="md-form ml-0 mr-0">
                    <input type="text" name="total_wicket" id="total_wicket" value="{{ old('total_wicket', $p->total_wicket) }}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="total_wicket" class="ml-0">Update total_wicket</label>
                  </div>

				  <div class="md-form ml-0 mr-0">
                    <input type="text" name="total_match" id="total_match" value="{{ old('total_match', $p->total_match) }}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="total_match" class="ml-0">Update total_match</label>
                  </div>

				  
				  <div class="form-group">
							<label for="player_image">Player Image</label>
							<input type="file" class="form-control" id="player_image" name="file" placeholder="Enter player_image">
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
			<!-- modal -->





				@endforeach
				@endif


				</div>
			</div>

			<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
				<h4 class="mb-30">Coach Create</h4>
				<div class="row">
					<div class="col-md-12">
					<form  method="POST" action="/coach/create" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="coach_name">Coach Name</label>
							<input type="coach_name" class="form-control" id="coach_name" name="coach_name" placeholder="Enter coach name">
						</div>
						<div class="form-group">
							<label for="coach_image">Coach imagee</label>
							<input type="file" class="form-control" id="coach_image" name="file" placeholder="Enter your image">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>

			<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
				<h4 class="mb-30">Manager Create</h4>
				<div class="row">
					<div class="col-md-12">
					<form  method="POST" action="/manager/create" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="manager_name">Manager name</label>
							<input type="manager_name" class="form-control" id="manager_name" name="manager_name" placeholder="Enter manager name">
						</div>
						<div class="form-group">
							<label for="manager_image">Manager imagee</label>
							<input type="file" class="form-control" id="manager_image" name="file" placeholder="Enter your image">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>

<!-- Create game -->

			<!-- <div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
				<h4 class="mb-30">Area Spline Chart</h4>
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-9 xs-mb-20">
						<div id="areaspline-chart" style="min-width: 210px; height: 400px; margin: 0 auto"></div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3">
						<h5 class="mb-30 weight-500">Top Campaign Performance</h5>
						<div class="mb-30">
							<p class="mb-5 font-18">John Campaign</p>
							<div class="progress border-radius-0" style="height: 10px;">
								<div class="progress-bar bg-orange" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="mb-30">
							<p class="mb-5 font-18">Jane Campaign</p>
							<div class="progress border-radius-0" style="height: 10px;">
								<div class="progress-bar bg-light-orange" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="mb-30">
							<p class="mb-5 font-18">Johnny Campaign</p>
							<div class="progress border-radius-0" style="height: 10px;">
								<div class="progress-bar bg-light-purple" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="mb-30 font-18">
							<p class="mb-5">Daniel Campaign</p>
							<div class="progress border-radius-0" style="height: 10px;">
								<div class="progress-bar bg-light-green" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- <div class="row clearfix">
				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<h4 class="mb-30">Devices Managed</h4>
						<div class="device-manage-progress-chart">
							<ul>
								<li class="clearfix">
									<div class="device-name">Window</div>
									<div class="device-progress">
										<div class="progress">
											<div class="progress-bar window border-radius-8" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
											</div>
										</div>
									</div>
									<div class="device-total">60</div>
								</li>
								<li class="clearfix">
									<div class="device-name">Mac</div>
									<div class="device-progress">
										<div class="progress">
											<div class="progress-bar mac border-radius-8" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
											</div>
										</div>
									</div>
									<div class="device-total">20</div>
								</li>
								<li class="clearfix">
									<div class="device-name">Android</div>
									<div class="device-progress">
										<div class="progress">
											<div class="progress-bar android border-radius-8" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
											</div>
										</div>
									</div>
									<div class="device-total">30</div>
								</li>
								<li class="clearfix">
									<div class="device-name">Linux</div>
									<div class="device-progress">
										<div class="progress">
											<div class="progress-bar linux border-radius-8" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
											</div>
										</div>
									</div>
									<div class="device-total">10</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<h4 class="mb-30">Device Usage</h4>
						<div class="clearfix device-usage-chart">
							<div class="width-50-p pull-left">
								<div id="device-usage" style="min-width: 180px; height: 200px; margin: 0 auto"></div>
							</div>
							<div class="width-50-p pull-left">
								<table style="width: 100%;">
									<thead>
										<tr>
											<th class="weight-500"><p>Device</p></th>
											<th class="text-right weight-500"><p>Usage</p></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td width="70%"><p class="weight-500 mb-5"><i class="fa fa-square text-yellow"></i> IE</p></td>
											<td class="text-right weight-400">10%</td>
										</tr>
										<tr>
											<td width="70%"><p class="weight-500 mb-5"><i class="fa fa-square text-green"></i> Chrome</p></td>
											<td class="text-right weight-400">40%</td>
										</tr>
										<tr>
											<td width="70%"><p class="weight-500 mb-5"><i class="fa fa-square text-orange-50"></i> Firefox</p></td>
											<td class="text-right weight-400">30%</td>
										</tr>
										<tr>
											<td width="70%"><p class="weight-500 mb-5"><i class="fa fa-square text-blue-50"></i> Safari</p></td>
											<td class="text-right weight-400">10%</td>
										</tr>
										<tr>
											<td width="70%"><p class="weight-500 mb-5"><i class="fa fa-square text-red-50"></i> Opera</p></td>
											<td class="text-right weight-400">10%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<h4 class="mb-30">Profile Completion</h4>
						<div class="clearfix device-usage-chart">
							<div class="width-50-p pull-left">
								<div id="ram" style="min-width: 160px; max-width: 180px; height: 200px; margin: 0 auto"></div>
							</div>
							<div class="width-50-p pull-left">
								<div id="cpu" style="min-width: 160px; max-width: 180px; height: 200px; margin: 0 auto"></div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- <div class="row clearfix">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<h4 class="mb-20">Recent Messages</h4>
						<div class="notification-list mx-h-450 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<h4 class="mb-30">To Do list</h4>
						<div class="to-do-list mx-h-450 customscroll">
							<ul>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck3">
										<label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck4">
										<label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck5">
										<label class="custom-control-label" for="customCheck5">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck6">
										<label class="custom-control-label" for="customCheck6">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck7">
										<label class="custom-control-label" for="customCheck7">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck8">
										<label class="custom-control-label" for="customCheck8">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck9">
										<label class="custom-control-label" for="customCheck9">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck10">
										<label class="custom-control-label" for="customCheck10">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck11">
										<label class="custom-control-label" for="customCheck11">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck12">
										<label class="custom-control-label" for="customCheck12">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck13">
										<label class="custom-control-label" for="customCheck13">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck14">
										<label class="custom-control-label" for="customCheck14">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck15">
										<label class="custom-control-label" for="customCheck15">Check this custom checkbox</label>
									</div>
								</li>
								<li>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck16">
										<label class="custom-control-label" for="customCheck16">Check this custom checkbox</label>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
		 @include('admin.footer')
		</div>
	</div>
	@include('admin.script')
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script type="text/javascript">
		Highcharts.chart('areaspline-chart', {
			chart: {
				type: 'areaspline'
			},
			title: {
				text: ''
			},
			legend: {
				layout: 'vertical',
				align: 'left',
				verticalAlign: 'top',
				x: 70,
				y: 20,
				floating: true,
				borderWidth: 1,
				backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
			},
			xAxis: {
				categories: [
					'Monday',
					'Tuesday',
					'Wednesday',
					'Thursday',
					'Friday',
					'Saturday',
					'Sunday'
				],
				plotBands: [{
					from: 4.5,
					to: 6.5,
				}],
				gridLineDashStyle: 'longdash',
                gridLineWidth: 1,
                crosshair: true
			},
			yAxis: {
				title: {
					text: ''
				},
				gridLineDashStyle: 'longdash',
			},
			tooltip: {
				shared: true,
				valueSuffix: ' units'
			},
			credits: {
				enabled: false
			},
			plotOptions: {
				areaspline: {
					fillOpacity: 0.6
				}
			},
			series: [{
				name: 'John',
				data: [0, 5, 8, 6, 3, 10, 8],
				color: '#f5956c'
			}, {
				name: 'Jane',
				data: [0, 3, 6, 3, 7, 5, 9],
				color: '#f56767'
			}, {
				name: 'Johnny',
				data: [0, 2, 5, 3, 2, 4, 0],
				color: '#a683eb'
			}, {
				name: 'Daniel',
				data: [0, 4, 7, 3, 0, 7, 4],
				color: '#41ccba'
			}]
		});


		// Device Usage chart
		Highcharts.chart('device-usage', {
			chart: {
				type: 'pie'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			credits: {
				enabled: false
			},
			plotOptions: {
				series: {
					dataLabels: {
						enabled: false,
						format: '{point.name}: {point.y:.1f}%'
					}
				},
				pie: {
					innerSize: 127,
					depth: 45
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
			},
			series: [{
				name: 'Brands',
				colorByPoint: true,
				data: [{
					name: 'IE',
					y: 10,
					color: '#ecc72f'
				}, {
					name: 'Chrome',
					y: 40,
					color: '#46be8a'
				}, {
					name: 'Firefox',
					y: 30,
					color: '#f2a654'
				}, {
					name: 'Safari',
					y: 10,
					color: '#62a8ea'
				}, {
					name: 'Opera',
					y: 10,
					color: '#e14e50'
				}]
			}]
		});

		// gauge chart
		Highcharts.chart('ram', {

			chart: {
				type: 'gauge',
				plotBackgroundColor: null,
				plotBackgroundImage: null,
				plotBorderWidth: 0,
				plotShadow: false
			},
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			pane: {
				startAngle: -150,
				endAngle: 150,
				background: [{
					borderWidth: 0,
					outerRadius: '109%'
				}, {
					borderWidth: 0,
					outerRadius: '107%'
				}, {
				}, {
					backgroundColor: '#fff',
					borderWidth: 0,
					outerRadius: '105%',
					innerRadius: '103%'
				}]
			},

			yAxis: {
				min: 0,
				max: 200,

				minorTickInterval: 'auto',
				minorTickWidth: 1,
				minorTickLength: 10,
				minorTickPosition: 'inside',
				minorTickColor: '#666',

				tickPixelInterval: 30,
				tickWidth: 2,
				tickPosition: 'inside',
				tickLength: 10,
				tickColor: '#666',
				labels: {
					step: 2,
					rotation: 'auto'
				},
				title: {
					text: 'RAM'
				},
				plotBands: [{
					from: 0,
					to: 120,
					color: '#55BF3B'
				}, {
					from: 120,
					to: 160,
					color: '#DDDF0D'
				}, {
					from: 160,
					to: 200,
					color: '#DF5353'
				}]
			},

			series: [{
				name: 'Speed',
				data: [80],
				tooltip: {
					valueSuffix: '%'
				}
			}]
		});
		Highcharts.chart('cpu', {

			chart: {
				type: 'gauge',
				plotBackgroundColor: null,
				plotBackgroundImage: null,
				plotBorderWidth: 0,
				plotShadow: false
			},
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			pane: {
				startAngle: -150,
				endAngle: 150,
				background: [{
					borderWidth: 0,
					outerRadius: '109%'
				}, {
					borderWidth: 0,
					outerRadius: '107%'
				}, {
				}, {
					backgroundColor: '#fff',
					borderWidth: 0,
					outerRadius: '105%',
					innerRadius: '103%'
				}]
			},

			yAxis: {
				min: 0,
				max: 200,

				minorTickInterval: 'auto',
				minorTickWidth: 1,
				minorTickLength: 10,
				minorTickPosition: 'inside',
				minorTickColor: '#666',

				tickPixelInterval: 30,
				tickWidth: 2,
				tickPosition: 'inside',
				tickLength: 10,
				tickColor: '#666',
				labels: {
					step: 2,
					rotation: 'auto'
				},
				title: {
					text: 'CPU'
				},
				plotBands: [{
					from: 0,
					to: 120,
					color: '#55BF3B'
				}, {
					from: 120,
					to: 160,
					color: '#DDDF0D'
				}, {
					from: 160,
					to: 200,
					color: '#DF5353'
				}]
			},

			series: [{
				name: 'Speed',
				data: [120],
				tooltip: {
					valueSuffix: ' %'
				}
			}]
		});
	</script>
</body>
</html>