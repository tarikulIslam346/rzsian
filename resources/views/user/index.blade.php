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
				<div class="row clearfix">
					<div class="col-md-2 _r_left_side">
						@include('user.user-sidebar')
					</div>
					<div class="col-md-7">
					@if(isset($profile_page))
					@include('user.blog-profile')
					@else 
					@include('user.blog-body')
					@endif
						<div class="row clearfix user_body_wrap">
						@if(isset($user))
						@foreach($user as $u)
							<div class="col-md-4">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
									@if($u->profile_pic)
					                    <img class="card-img-top" src="images/user_profile/{{$u->profile_pic}}" alt="Card image">
									@else
									<img src="/images/user_profile/abc.jpg">
									@endif
									</div>
					                <div class="content">
					                    <p>{{$u->name}} <br>
					                       </p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Details</button></p>
					                </div>
					            </div>
							</div>
							<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
							        <div class="modal-content">
							            <div class="modal-body text-center mb-1">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                    <span aria-hidden="true" style="color:#000">&times;</span>
							                </button>
							                <h5>{{$u->name}}</h5>
							                <p>{{$u->phone}}</p>
							                <p>intoiit bangladesh LTD</p>
							                <p>Dhaka, Mirpur</p>
							                <p>B+</p>
							            </div>
							      	 </div>
							    	</div>
								</div>
								@endforeach
								@endif
							</div>
						</div>
					<div class="col-md-3">
					@include('user.blog-right-sidebar')
					</div>
				</div>
			</div>
			@include('user.footer')
		</div>
	</div>

 <script type="text/javascript" src="3rd-party/js/mdb.min.js"></script>
</body>
</html>