<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SICP | Novalan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="views/dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SI</b>CP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Novalan</b>SICP</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="views/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú principal</li>
        <!-- Optionally, you can add icons to the links 
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Diseño</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="articulos.php">Artículo</a></li>
            <li><a href="diseño.php">Diseño</a></li>
		<li><a href="colores.php">Colores</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consulta de artículos
        <small>Consulta / Modifica | Artículos </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Nivel </a></li>
        <li class="active">Artículo | Alta </li>
      </ol>
    </section>

    <!-- Main content -->
	
    <section class="content container-fluid">
	<form method="get" action="">
    <label>
        Artículo
    </label>
    <input type = "text" name="c">
    <input type = "submit" value="Crear diseño">
</form>  

<?php
if($_GET["c"]==null) die();
$html1 = file_get_contents("http://192.11.11.1:8080/novalanRP/serv/art/buscar?id=".$_GET["c"]);
$json1 = json_decode($html1);
$kArticulo = $json1->kArticulo;
$luchasReales = $json1->luchasReales;
$luchasFueraTelar = $json1 ->luchasFueraTelar;
$mtsUrdido = $json1->mtsUrdido;
$mtsTejido = $json1->mtsTejido;
$mtsAcabado = $json1->mtsAcabdo;
$grGrasa = $json1->grGrasa;
$mtsGrasa =$json1->mtsGrasa;
$grAcabado = $json1->grAcabado;
$mtsAcabado1 = $json1->mtsAcabado1;
$divisor = $json1->divisor;
$anchoTelar = $json1->anchoTelar;
$prioridad = $json1->prioridad;
$temporada = $json1->temporada;
$kClaseTela = $json1->kClaseTela;
$kSalaTejido = $json1->kSalaTejido;
?>

	<form action="json.php" method="post">
	  <fieldset>
	<legend>Artículo</legend>
	Artículo: <input type="text" name="kArticulo" placeholder="Artículo" value ="<?php echo $kArticulo;?>" autofocus required pattern="[A-Za-z0-9]{1,15}" title="El artículo debe contener un  máximo: 15" />
	Luchas :  <input type="text" name="luchasReales" placeholder="Luchas" value ="<?php echo $luchasReales;?>"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
        Luchas fuera :  <input type="text" name="luchasFueraTelar" placeholder="Luchas fuera" value ="<?php echo  $luchasFueraTelar;?>" autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	<br/>
	 Clase :
             <select id = "kClaseTela" name="kClaseTela" value ="<?php echo  $kClaseTela;?>" requiered>
               <option value = "P">P</option>
               <option value = "C">C</option>
             </select>
	   Sala tejido :
             <select id = "kSalaTejido" name="kSalaTejido" requiered>
              <option value = "0001">0001</option>
              <option value = "0002">0002</option>
		<option value = "0003">0003</option>
              <option value = "0004">0004</option>
		<option value = "0005">0005</option>
              <option value = "0006">0006</option>
		<option value = "0007">0007</option>
              <option value = "0010">0010</option>
		<option value = "0096">0096</option>
              <option value = "D2">D2</option>
                <option value = "D4">D4</option>
              <option value = "G6">G6</option>
                <option value = "L8">L8</option>
              <option value = "SIE">S1E</option>
                <option value = "S1M4">S1M4</option>
              <option value = "S2">S2</option>
		<option value = "S2M2">S2M2</option>
              <option value = "S2M4">S2M4</option>
                <option value = "S2M6">S2M6</option>
              <option value = "S3M6">S3M6</option>
                 <option value = "S4">S4</option>
              <option value = "S4M6">S4M6</option>
                 <option value = "S6">S6</option>
         </select>
	  Divisor :  <input type="text" name="divisor" placeholder="Divisor" value ="<?php echo  $divisor;?>"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
        <br/><br>
	<legend>Grasa</legend>
	  Gramos:  <input type="text" name="grGrasa" placeholder="Gramos"  value ="<?php echo  $grGrasa;?>"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
          Metros:  <input type="text" name="mtsGrasa" placeholder="Metros" value ="<?php echo  $mtsGrasa;?>" autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	<br/><br>
	  <legend>Acabado</legend>
          Gramos:  <input type="text" name="grAcabado" placeholder="Gramos" value ="<?php echo  $grAcabado;?>"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
          Metros:  <input type="text" name="mtsAcabado1" placeholder="Metros" value ="<?php echo  $mtsAcabado1;?>"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	<br>
	<legend>Complementos</legend>
          Ancho: <input type="text" name="anchoTelar" placeholder="ancho" value ="<?php echo $anchoTelar;?>" autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
          Metros urdido: <input type="text" name="mtsUrdido" placeholder="Metros" value ="<?php echo  $mtsUrdido;?>"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	 Metros tejido: <input type="text" name="mtsTejido" placeholder="Metros"  value ="<?php echo  $mtsTejido;?>" autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	<br>
	Metros acabado: <input type="text" name="mtsAcabdo" placeholder="Metros" value ="<?php echo  $mtsAcabado;?>"  autofocus required pattern="[0-9]{1,4}" title="Solo se permiten números enteros" />
	Temporada:
             <select id = "temporada" name="temporada" value ="<?php echo  $temporada;?>" requiered>
               <option value = "P">Primavera</option>
               <option value = "V">Verano</option>
		<option value = "O">Otoño</option>
		<option value = "I">Invierno</option>

             </select>
</fieldset>
	<input type="submit" value="Guardar" />
	</p>
	<!-- Barra de progreso
  	<progress max="100" value="95">
	-->
	</fieldset>
	</form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Novalan | SICP
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a target="_blank" href="http://novalanfabrics.com.mx">Novalan</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="views/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>

