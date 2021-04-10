<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/favicon.ico" type="image/ico" />
<title>Pastelerias Rosette! | </title>
<link href="{{asset('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('/vendors/nprogress/nprogress.css" type="text/css" rel="stylesheet')}}">
<link href="{{asset('/vendors/iCheck/skins/flat/green.css" type="text/css" rel="stylesheet')}}">
<link href="{{asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('/vendors/jqvmap/dist/jqvmap.min.css" type="text/css" rel="stylesheet')}}" />
<link href="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('/build/css/custom.min.css')}}" type="text/css" rel="stylesheet">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="nav-md">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Pastelerias Rosette!</span></a>
</div>
<div class="clearfix"></div>
<div class="profile clearfix">
<div class="profile_pic">
<img src="images/img.jpg" alt="..." class="img-circle profile_img">
</div>
<div class="profile_info">
<span>Bienvenido,</span>
<h2>ADMIN</h2>
</div>
</div>

<br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
<h3>General</h3>
<ul class="nav side-menu">
<li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="#">Inicio</a></li>
</ul>
</li>
<li><a><i class="fa fa-edit"></i> Formularios <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="{{route('altasucursal')}}">Alta Sucursales</a></li>
<li><a href="{{route('regtype')}}">Alta Tipos</a></li>
<li><a href="{{route('regcake')}}">Alta Pasteles</a></li>
</ul>
</li>
<li><a><i class="fa fa-table"></i> Reportes <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="{{route('reportesucursales')}}">Reporte Sucursales</a></li>
<li><a href="{{route('tabtype')}}">Reporte Tipos</a></li>
<li><a href="{{route('tabcake')}}">Reporte Pasteles</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="sidebar-footer hidden-small">
<a data-toggle="tooltip" data-placement="top" title="Settings">
<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="FullScreen">
<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Lock">
<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
</a>
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
<img src="images/img.jpg" alt="">ADMIN
</a>
<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="javascript:;"> Profile</a>
<a class="dropdown-item" href="javascript:;">
<span class="badge bg-red pull-right">50%</span>
<span>Settings</span>
</a>
<a class="dropdown-item" href="javascript:;">Help</a>
<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
<span>Alfredo</span>
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
<span>Alfredo</span>
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
<span>Alfredo</span>
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
<span>Alfredo</span>
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

<div id="contenido">
    @yield('contenido')
</div>

<script src="{{asset('/vendors/jquery/dist/jquery.min.js')}}"></script>

<script src="{{asset('/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('/vendors/fastclick/lib/fastclick.js')}}"></script>

<script src="{{asset('/vendors/nprogress/nprogress.js')}}"></script>

<script src="{{asset('/vendors/Chart.js/dist/Chart.min.js')}}"></script>

<script src="{{asset('/vendors/gauge.js/dist/gauge.min.js')}}"></script>

<script src="{{asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>

<script src="{{asset('/vendors/iCheck/icheck.min.js')}}"></script>

<script src="{{asset('/vendors/skycons/skycons.js')}}"></script>

<script src="{{asset('/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('/vendors/Flot/jquery.flot.resize.js')}}"></script>

<script src="{{asset('/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('/vendors/flot.curvedlines/curvedLines.js')}}"></script>

<script src="{{asset('/vendors/DateJS/build/date.js')}}"></script>

<script src="{{asset('/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>

<script src="{{asset('/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('/build/js/custom.min.js')}}"></script>

<script type="text/javascript">
        $('#image-file').bind('change', function() {
            alert('This file size is: ' + this.files[0].size/800/800 + "MB");
        });
  </script>
  <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../vendors/validator/multifield.js"></script>
  <script src="../vendors/validator/validator.js"></script>
  <script>
      var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
      document.forms[0].onsubmit = function (e) {
        var submit = true,
          validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
      };
      document.forms[0].onreset = function (e) {
        validator.reset();
      };
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
</html>
