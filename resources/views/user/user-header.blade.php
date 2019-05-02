<div class="container-fluid">
 <div class="row">
   <div class="col-md-12 manu_primary_top"></div>
   <div class="col-md-12 manu_primary_middle">
     <div class="brand_logo"><img src="/img/logo.png"></div>
   </div>
   <div class="col-md-12 manu_primary_right">
      <nav class="navbar navbar-expand-lg navbar-dark manu_primary_manu">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
        <ul class="nav navbar-nav mr-auto manu_primary_manu_ul">
          <li class="nav-item active">
            <a class="nav-link waves-effect waves-light" href="/user">Home
              <span class="sr-only">(current)</span>
            </a> 
            
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="/user_profile">Profile
              <span class="sr-only">(current)</span>
            </a> 
            
          </li>
          
          
          <li class="nav-item">
          <form class="form-inline search_post">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
            <i class="fa fa-search"></i>
          </form>
          </li>
          <!-- <a class="nav-link waves-effect waves-light"> -->
              
            <!-- </a> -->
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
              <div class="dropdown-menu dropdown-menu-right dropdown-cyan" id="comment_notification" aria-labelledby="navbarDropdownMenuLink-4">
                  <a class="dropdown-item"><i class="fa fa-bell" style="margin-right: 1%;"></i>Mohammad Imran comment on your post</a>
              </div>
          </li> -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i></a>
              <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                  <a class="dropdown-item" href="modal" data-toggle="modal" data-target="#change-password-modal"><i class="fa fa-edit"></i> Settings</a>
                  <a class="dropdown-item" href="/logout_user"><i class="fa fa-sign-out" style="color:red"></i> Log out</a>
              </div>
          </li>
        </ul>
      </div>
    </nav>
   </div>
 </div>
</div>

<div class="modal fade" id="change-password-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <!-- <div class="modal-header d-flex"> -->
            	<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                    <!-- <span aria-hidden="true">&times;</span> -->
                <!-- </button> -->
                <!-- @if(\Auth::user()->profile_pic)
				<img src="/images/user_profile/{{\Auth::user()->profile_pic}}" alt="avatar" class="rounded-circle img-responsive">
                @else
                <img src="/images/user_profile/abc.jpg" alt="avatar" class="rounded-circle img-responsive">
                @endif -->

            <!-- </div> -->
            <!--Body-->
            <div class="modal-body text-center mb-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #000;">&times;</span>
                </button>
                <form action="/user_update/{{\Auth::id()}}" method="POST">
        					@csrf
                  <!-- <div class="md-form ml-0 mr-0">
                    <input type="text" name="name" id="edit_name" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="edit_name" class="ml-0">Change Name</label>
                  </div>
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="email" id="edit_uName" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="edit_uName" class="ml-0">Change Email</label>
                  </div> -->
                  <div class="md-form ml-0 mr-0">
                    <input type="password" name="password" id="edit_password" class="form-control form-control-sm validate ml-0">
                    <input type="hidden" name="name" value="{{\Auth::user()->name}}" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="edit_password" class="ml-0">Current Password</label>
                  </div>
                  <div class="md-form ml-0 mr-0">
                    <input type="password" name="new_password" id="new_password" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="new_password" class="ml-0">New Password</label>
                  </div>
                  <div class="md-form ml-0 mr-0">
                    <input type="password" name="retype_password" id="retype_password" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="retype_password" class="ml-0">Re-type Password</label>
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

<!-- dont delete -->
<!-- <li class="nav-item dropdown rzs-menu-overlap">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others
            </a>
            <div class="dropdown-menu dropdown-default rzs-mega-menu" aria-labelledby="navbarDropdownMenuLink-3">
               <ul class="mega-ul">
                <li class="mega-li">
                  <ul>
                    <h5>Cricket</h5>
                    <li><a href="">2017</a></li>
                    <li><a href="">2018</a></li>
                    <li><a href="">2019</a></li>
                    <li><a href="">2020</a></li>
                  </ul>
                </li>
                <li class="mega-li">
                  <ul>
                    <h5>Cricket</h5>
                    <li><a href="">2017</a></li>
                    <li><a href="">2018</a></li>
                    <li><a href="">2019</a></li>
                    <li><a href="">2020</a></li>
                  </ul>
                </li>
                <li class="mega-li">
                  <ul>
                    <h5>Cricket</h5>
                    <li><a href="">2017</a></li>
                    <li><a href="">2018</a></li>
                    <li><a href="">2019</a></li>
                    <li><a href="">2020</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </li> -->
    