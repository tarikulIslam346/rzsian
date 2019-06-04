<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
				<h4 class="mb-30">Fixture Create</h4>
				<div class="row">
					<div class="col-md-12">
					<form  method="POST" action="/fixture/create" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="coach_name">Match date</label>
							<input type="date" class="form-control" id="match_date" name="match_date" placeholder="Enter match date">
						</div><br>

						<div class="form-group">
							<label for="coach_name">Match date</label>
							<input type="text" class="form-control" id="match_date" name="match_time" placeholder="Enter match time">
						</div><br>

						<div class="input-group-prepend">
							<label class="input-group-text" for="team1">Team 1</label>

						@if(isset($teams))
						<select class="custom-select" id="team1" name="team_id[]">
						<option selected>Choose team 1</option>
						@foreach($teams as $t)
							
							<option value="{{$t->team_id}}">{{$t->team_name}}</option>
							@endforeach

						</select>
					
						@endif
						</div><br>

						<div class="input-group-prepend">
							<label class="input-group-text" for="team1">Team 2</label>
							@if(isset($teams))
							<select class="custom-select" id="team2" name="team_id[]">
							<option selected>Choose team 2</option>
								@foreach($teams as $t)
									
									<option value="{{$t->team_id}}">{{$t->team_name}}</option>
								@endforeach
							</select>						
							@endif
						</div><br>

					
						
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>


                @if(isset($fixtures))
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Team 1</th>
                    <th scope="col">Team 2</th>
                    <th scope="col">Team1 score</th>
                    <th scope="col">Team2 score</th>
                    <th scope="col">match_time</th>
                    <th scope="col">match_date</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($fixtures as $f)
                        <tr>

                        <td>{{$f->team1}}</td>
                        <td> {{$f->team2}}</td>
                        <td> {{$f->team1_score}}</td>
                        <td> {{$f->team2_score}}</td>
                        <td> {{$f->match_time}}</td>
                        <td> {{$f->match_date}}</td>
                            </tr>
                    @endforeach
                 
                </tbody>
                </table>

									
				@endif
			</div>