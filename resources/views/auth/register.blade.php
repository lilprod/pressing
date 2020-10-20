<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{config('app.name', 'PRESSING')}} | Page d'inscription</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css') }}">
  <!-- Material Design -->
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap-material-design.min.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/ripples.min.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/MaterialAdminLTE.min.css') }}">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css"> -->
    <!-- Material ScrollTop stylesheet -->
  <link rel="stylesheet" href="{{asset('bower_components/material-scrolltop-master/src/material-scrolltop.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/all-md-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition green layout-top-nav">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
      <a href="/" class="navbar-brand">SPARK <b>PRESSING</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
         
              @guest
                  <li class="">
                      <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li class="active">
                      @if (Route::has('register'))
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      @endif
                  </li>
              @else
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                @if(auth()->user()->profil_image == '')
                  <img src="/storage/cover_images/avatar.png" class="user-image" alt="User Image">
                @else
                  <img src="/storage/cover_images/{{ auth()->user()->profil_image}}" class="user-image" alt="User Image">
                @endif
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{ auth()->user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                    @if(auth()->user()->profil_image == '')
                      <img src="/storage/cover_images/avatar.png" class="img-circle" alt="User Image">
                    @else
                      <img src="/storage/cover_images/{{ auth()->user()->profil_image}}" class="img-circle" alt="User Image">
                    @endif

                    <p>
                      {{ auth()->user()->name }} - {{ auth()->user()->user_profession }}
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Sign out</a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li>
              </ul>
            </li>
            <li class="dropdown user user-menu">
                <li><a href="dashboard">Dashboard</a></li>
            </li>
              @endguest

          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
 
  <div class="register-box">
    <div class="register-logo">
      <a href="/">SPARK <b>PRESSING</b></a>
    </div>
  <!-- /.login-logo -->
    <div class="register-box-body">

      <p class="login-box-msg">Inscription</p>
      @include('inc.messages')
      <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nom" name="name">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>

          @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Prénom" name="firstname">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>

          @if ($errors->has('firstname'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('firstname') }}</strong>
              </span>
          @endif
        </div>


        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif

        </div>

        <div class="form-group has-feedback">
          <input type="text" name="phone_number" class="form-control" placeholder="Numéro de Téléphone">
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>

          @if ($errors->has('phone_number'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('phone_number') }}</strong>
              </span>
          @endif

        </div>


        <div class="form-group has-feedback">
          <input type="text" name="city" class="form-control" placeholder="Ville de résidence">
          <span class="fa fa-suitcase form-control-feedback"></span>

          @if ($errors->has('city'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('city') }}</strong>
              </span>
          @endif

        </div>


        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Mot de passe">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>

          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>


        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Resaisir le mot de passe">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-7">
            <div class="checkbox">
              <label>
                <input type="checkbox"> 
              </label>
              <a href="#" class="text-center">J'accepte les conditions</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-5">
            <button type="submit" class="btn btn-primary btn-raised btn-block btn-flat">S'inscrire</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('login') }}" class="text-center">Je suis déjà inscris</a>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->


  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2019 <a href="#">Developpé par</a> <a href="#">SPARK CORPORATION</a>.</strong> Tous Droits Reservés.
    </div>
    <!-- /.container -->
  </footer>

  <!-- material-scrolltop button -->
  <button class="material-scrolltop bg-olive" type="button"></button>

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Material Design -->
<script src="{{asset('dist/js/material.min.js') }}"></script>
<script src="{{asset('dist/js/ripples.min.js') }}"></script>
<script>
    $.material.init();
</script>
<!-- material-scrolltop plugin -->
<script src="{{asset('bower_components/material-scrolltop-master/src/material-scrolltop.js ') }}"></script>

<!-- Initialize material-scrolltop with (minimal) -->
<script>
    $('body').materialScrollTop();
</script>
<!-- iCheck -->
<!-- <script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });-->
</script>
</body>
</html>
