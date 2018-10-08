@extends('layouts.master')
@section('content')
  <!-- Start your project here-->


  <section id="_r_rzsian_home">
  @if(session('registration'))
        <div class="alert  alert-success fade show" role="alert">
           {{ session('registration') }} 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif 
    @if(count($errors))
        <div class="form-group">
                    
                        @foreach($errors->all() as $error)
                            <div class="alert  alert-danger fade show" role="alert">
                              {{ $error }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endforeach
        </div>
    @endif 
    <div class="container-fluid">
      <div class="row justify-content-md-center">
      <div class="col-md-12">
        <div class="_r_rzsian_sitelogo_wrap">
          <div class="_r_rzsian_sitelogo">
            <img src="img/main_logo.png">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="_r_rzsian_sitetitle_wrap">
          <div class="_r_rzsian_sitetitle">
            <h3>We are rzsians family</h3>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="_r_rzsian_allsite_wrap">
          <div class="_r_rzsian_allsite">
              <a href="" data-toggle="modal" data-target=".modalLRForm">
                <div class="_r_rzsian_site btn btn-default btn-rounded">
                    <img src="img/rzs.png">
                    <p>Database</p>
                </div>
              </a>
              <a href="" data-toggle="modal" data-target=".modalLRForm">
                <div class="_r_rzsian_site btn btn-default btn-rounded">
                    <img src="img/rzs.png">
                    <p>Database</p>
                </div>
              </a>
              <a href="" data-toggle="modal" data-target=".modalLRForm">
                <div class="_r_rzsian_site btn btn-default btn-rounded">
                    <img src="img/rzs.png">
                    <p>Database</p>
                </div>
              </a>
              @if(auth()->check())
              <a href="/user">
                <div class="_r_rzsian_site btn btn-default btn-rounded">
                    <img src="img/rzs.png">
                    <p>Database</p>
                </div>
              </a>
              @endif
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

<!-- register with login -->
<!--Modal: Login / Register Form-->
@if(!auth()->check())
<div class="modal fade modalLRForm" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body mb-1">
                        <form  method="POST" action="/login">
                            @csrf
                            <input type="hidden" name="status" value=0>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="modalLRInput10" class="form-control form-control-sm validate" name="name">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your Name</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="password">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>
                             <input type="hidden" name="status" value="0">
                            <div class="text-center mt-2">
                                <button class="btn btn-info" type="submit">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                        
                        <!--Body-->
                        <div class="modal-body">
                     
                        <form  method="POST" action="/register" enctype="multipart/form-data">
                            @csrf
                             <input type="hidden" name="status" value=0>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="name">
                                <label data-error="wrong" data-success="right" for="modalLRInput15">Your Name</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email">
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                            </div>
                             <div class="md-form form-sm mb-5">
                                <i class="fa fa-image prefix"></i>
                                <input type="file" id="modalLRInput16" class="form-control form-control-sm validate" name="profile_pic">
                                
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="password">
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" name="password_confirmation">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                            </form>
                     
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                       
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
@endif
@endsection
