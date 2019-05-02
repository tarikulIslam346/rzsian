<div class="left-side-deco">
    <div class="card hovercard">
    	<a href="modal" data-toggle="modal" data-target="#login-modal" class="edit-avatar btn btn-primary btn-twitter btn-sm">
    		<i class="fa fa-edit"></i>
    	</a>

        <div class="cardheader">

        </div>
        <div class="avatar">
        @if(\Auth::user()->profile_pic)
				<img src="/images/user_profile/{{\Auth::user()->profile_pic}}" alt="avatar" class="rounded-circle img-responsive">
                @else
                <img src="/images/user_profile/abc.jpg" alt="avatar" class="rounded-circle img-responsive">
                @endif
        </div>
        <div class="info">
            <div class="title">
                <a target="_blank" href="https://scripteden.com/">{{\Auth::user()->name}}</a>
            </div>
            <div class="desc">{{\Auth::user()->email}}</div>
            <div class="desc">{{\Auth::user()->phone}}</div>
            @if(\Auth::user()->blood)
            <div class="desc">{{\Auth::user()->blood}}</div>
            @endif
        </div>
        <!-- do not delete -->
        <!-- <div class="bottom">
            <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                <i class="fa fa-twitter"></i>
            </a>
            <a class="btn btn-danger btn-sm" rel="publisher"
               href="https://plus.google.com/+ahmshahnuralam">
                <i class="fa fa-google-plus"></i>
            </a>
            <a class="btn btn-primary btn-sm" rel="publisher"
               href="https://plus.google.com/shahnuralam">
                <i class="fa fa-facebook"></i>
            </a>
            <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                <i class="fa fa-behance"></i>
            </a>
        </div> -->
    </div>
</div>
		<!-- <div class="profile-photo"> -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header d-flex">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @if(\Auth::user()->profile_pic)
				<img src="/images/user_profile/{{\Auth::user()->profile_pic}}" alt="avatar" class="rounded-circle img-responsive">
                @else
                <img src="/images/user_profile/abc.jpg" alt="avatar" class="rounded-circle img-responsive">
                @endif

            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">
                <form action="/user_update/{{\Auth::id()}}" method="POST">
        					@csrf
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="name" id="edit_name" value="{{ old('name', \Auth::user()->name) }}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="edit_name" class="ml-0">Change Name</label>
                  </div>
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="phone" id="phone" value="{{ old('phone', \Auth::user()->phone) }}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="phone" class="ml-0">Update Phone</label>
                  </div>
                  @if(\Auth::user()->blood)
                  <p>Blood Group : {{\Auth::user()->blood}} </p>
                  @else
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="blood" id="blood" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="blood" class="ml-0">Add Blood Group</label>
                  </div>
                  @endif
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