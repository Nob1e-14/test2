<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from colorlib.com/polygon/gentelella/form_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 22:36:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registro de pasteles</title>

<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

<link href="../build/css/custom.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body class="nav-md">
  <div class="container body">
  <div class="main_container">
  <div class="col-md-3 left_col">
  <div class="left_col scroll-view">
  <div class="navbar nav_title" style="border: 0;">
  <!--a href="index.html"--><a class="site_title"><img src="../img/cake.png" width="20%"></i> <span>Gentelella Alela!</span></a>
  </div>
  <div class="clearfix"></div>

  <div class="profile clearfix">
  <div class="profile_pic">
  <img src="images/img.jpg" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
  <span>Welcome,</span>
  <h2>John Doe</h2>
  </div>
  </div>

  <br />

  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
  <h3>General</h3>
  <ul class="nav side-menu">
  <li><a> Pasteles <span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
  <li><a href="{{route('tabcake')}}">Tabla</a></li>
  <li><a href="{{route('regcake')}}">Registro</a></li>
  </ul>
  </li>
  <li><a> Tipos <span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
  <li><a href="{{route('tabtype')}}">Tabla</a></li>
  <li><a href="{{route('regtype')}}">Registro</a></li>
  </ul>
  </li>
  </div>
  <div class="menu_section">
  </div>
  </div>
  <div class="sidebar-footer hidden-small">
  </div>
  </div>
  </div>
  <div class="top_nav">
  <div class="nav_menu">
  <div class="nav toggle">
  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
  </div>
  <nav class="nav navbar-nav">
  <ul class=" navbar-right">
  <li class="nav-item dropdown open" style="padding-left: 15px;">
  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
  <img src="images/img.jpg" alt="">John Doe
  </a>
  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="javascript:;"> Profile</a>
  <a class="dropdown-item" href="javascript:;">
  <span class="badge bg-red pull-right">50%</span>
  <span>Settings</span>
  </a>
  <a class="dropdown-item" href="javascript:;">Help</a>
  <a class="dropdown-item" href="login.html"--><a><i class="fa fa-sign-out pull-right"></i> Log Out</a>
  </div>
  </li>
  <li role="presentation" class="nav-item dropdown open">
  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
  <i class="fa fa-envelope-o"></i>
  <span class="badge bg-green">6</span>
  </a>
  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
  <li class="nav-item">
  <a class="dropdown-item">
  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
  <span>
  <span>John Smith</span>
  <span class="time">3 mins ago</span>
  </span>
  <span class="message">
  Film festivals used to be do-or-die moments for movie makers. They were where...
  </span>
  </a>
  </li>
  <li class="nav-item">
  <a class="dropdown-item">
  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
  <span>
  <span>John Smith</span>
  <span class="time">3 mins ago</span>
  </span>
  <span class="message">
  Film festivals used to be do-or-die moments for movie makers. They were where...
  </span>
  </a>
  </li>
  <li class="nav-item">
  <a class="dropdown-item">
  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
  <span>
  <span>John Smith</span>
  <span class="time">3 mins ago</span>
  </span>
  <span class="message">
  Film festivals used to be do-or-die moments for movie makers. They were where...
  </span>
  </a>
  </li>
  <li class="nav-item">
  <a class="dropdown-item">
  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
  <span>
    <span>John Smith</span>
    <span class="time">3 mins ago</span>
  </span>
  <span class="message">
    Film festivals used to be do-or-die moments for movie makers. They were where...
  </span>
  </a>
  </li>
  <li class="nav-item">
  <div class="text-center">
  <a class="dropdown-item">
  <strong>See All Alerts</strong>
  <i class="fa fa-angle-right"></i>
  </a>
  </div>
  </li>
  </ul>
  </li>
  </ul>
  </nav>
  </div>
  </div>
  <div class="right_col" role="main">
  <div class="">
  <div class="page-title">
  <div class="title_left">
  <h3>Form Validation</h3>
  </div>
  <div class="title_right">
  <div class="col-md-5 col-sm-5 form-group pull-right top_search">
  <div class="input-group">
  <input type="text" class="form-control" placeholder="Search for...">
  <span class="input-group-btn">
  <button class="btn btn-default" type="button">Go!</button>
  </span>
  </div>
  </div>
  </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
  <div class="col-md-12 col-sm-12">
  <div class="x_panel">
  <div class="x_title">
  <h2>Vista Administrador <small>"[@user]"</small></h2>
  <ul class="nav navbar-right panel_toolbox">
  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
  </li>
  <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="#">Settings 1</a>
  <a class="dropdown-item" href="#">Settings 2</a>
  </div>
  </li>
  <li><a class="close-link"><i class="fa fa-close"></i></a>
  </li>
  </ul>
  <div class="clearfix"></div><a href="{{route('tabcake')}}"><button class="btn btn-primary">Pasteles Registrados</button></a>
  <div class="clearfix"></div><a href="{{route('tabtype')}}"><button class="btn btn-primary">Tipos de pastel</button></a>
  </div>
  <div class="x_content">
  <!--Contenido-->
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com/">Colorlib</a>
      </div>
    <div class="clearfix"></div>
  </footer>
  </div>
  </div>
  <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../vendors/validator/multifield.js"></script>
  <script src="../vendors/validator/validator.js"></script>
  <script>
      // initialize a validator instance from the "FormValidator" constructor.
      // A "<form>" element is optionally passed as an argument, but is not a must
      var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
      // on form "submit" event
      document.forms[0].onsubmit = function (e) {
        var submit = true,
          validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
      };
      // on form "reset" event
      document.forms[0].onreset = function (e) {
        validator.reset();
      };
      // stuff related ONLY for this demo page:
      $('.toggleValidationTooltips').change(function () {
        validator.settings.alerts = !this.checked;
        if (this.checked)
          $('form .alert').remove();
      }).prop('checked', false);
    </script>

  <script src="../vendors/jquery/dist/jquery.min.js"></script>

  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <script src="../vendors/fastclick/lib/fastclick.js"></script>

  <script src="../vendors/nprogress/nprogress.js"></script>



  <script src="../build/js/custom.min.js"></script>
</body>

<!-- Mirrored from colorlib.com/polygon/gentelella/form_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 22:36:40 GMT -->
</html>