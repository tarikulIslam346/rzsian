
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
					<img class="card-img-top" width="50" height="50" src="/uploads/teams/{{$t->logo}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{$t->team_name}}</h5>
						<p class="card-text">{{$t->batch}} </p>
						<a href="modal" data-toggle="modal" data-target="#team_{{$t->team_id}}" class="edit-avatar btn btn-primary btn-twitter btn-sm">
    		            <i class="fa fa-plus"></i>
    	                </a>
					</div>
				</div>

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
                                <img src="/uploads/teams/{{$t->logo}}" width="100" height="100" alt="avatar" class="rounded-circle img-responsive">
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
				@endforeach
				@endif
			</div>