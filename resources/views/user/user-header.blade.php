	<div class="pre-loader"></div>
	
	<nav class="mb-1 navbar navbar-expand-lg fixed-top navbar-dark default-color">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
        <ul class="navbar-nav mr-auto">
         <!--  <li class="nav-item active">
            <a class="nav-link waves-effect waves-light menu-icon" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Dropdown
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-3">
              <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
              <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
              <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
            </div>
          </li> -->

          <li class="nav-item">
            <form class="form-inline">
              <div class="md-form my-0">
                <input class="form-control mr-sm-2" placeholder="Search" aria-label="Search" type="text">
              </div>
            </form>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
              <i class="fa fa-twitter"></i>Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-user"></i>{{\Auth::user()->name}}
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
              <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
              <a class="dropdown-item waves-effect waves-light" href="/logout_user">Log Out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>