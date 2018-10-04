<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>rzsian</title>

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->


  <section id="_r_rzsian_home">
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
              <a href="all_batch_student">
                <div class="_r_rzsian_site btn btn-default btn-rounded">
                    <img src="img/rzs.png">
                    <p>Database</p>
                </div>
              </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

<!-- register with login -->
<!--Modal: Login / Register Form-->
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
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
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
                        @if(session('responseText'))
                            <div class="alert  alert-success fade show" role="alert">
                               {{ session('responseText') }} 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endif  
                        <form  id="registeruser"  method="POST" action="/register">
                            @csrf
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="name">
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your Name</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email">
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
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
                            @section('script') <script type="text/javascript">
                            $('#registeruser').on('submit', function(e){
                            var registerForm = $("#registeruser");
                            var formData = registerForm.serialize();

                            $.ajaxSetup({
                            header:$('meta[name="_token"]').attr('content')
                            })
                                e.preventDefault(e);
                            $.ajax({
                                url: $(this).attr('action'),
                                type:'POST',
                                data:formData,
                                dataType: 'json',
                                success:function(data) {
                                    console.log(data);
                                },
                                error: function(data)
                                {

                                }
                            });
                            });
                            </script>
                            @endsection 
                            @if(count($errors))
                            <div class="form-group">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            </div>
                           @endif
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



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
