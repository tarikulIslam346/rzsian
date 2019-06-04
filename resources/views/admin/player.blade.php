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
					<img class="card-img-top" width="100" height="100" src="/uploads/players/{{$p->player_image}}" alt="Card image cap">
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
                                <img src="/uploads/players/{{$p->player_image}}" width="100" height="100" alt="avatar" class="rounded-circle img-responsive">
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