<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Penelitian dan Pengabdian</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="skin-blue">
	<div class="wrapper">
		<header class="main-header">
		  <!-- Logo -->
		  <a href="index.php" class="logo"><b>Admin</b> PKM</a>
		  <!-- Header Navbar: style can be found in header.less -->
		  <nav class="navbar navbar-static-top" role="navigation">
		    <!-- Sidebar toggle button-->
		    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		      <span class="sr-only">Toggle navigation</span>
		    </a>
		    <div class="navbar-custom-menu">
		      <ul class="nav navbar-nav">
		        <!-- User Account: style can be found in dropdown.less -->
		        <li class="dropdown user user-menu">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
		            <span class="hidden-xs">Fulan Fulan</span>
		          </a>
		          <ul class="dropdown-menu">
		            <!-- User image -->
		            <li class="user-header">
		              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
		              <p>
		                Fulan Fulan - Web Developer
		                <small>Member since Nov. 2012</small>
		              </p>
		            </li>
		            <!-- Menu Body -->
		            <li class="user-body">
		              <div class="col-xs-4 text-center">
		                <a href="#">Followers</a>
		              </div>
		              <div class="col-xs-4 text-center">
		                <a href="#">Sales</a>
		              </div>
		              <div class="col-xs-4 text-center">
		                <a href="#">Friends</a>
		              </div>
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
		      </ul>
		    </div>
		  </nav>
		</header>
		<aside class="main-sidebar">
		  <section class="sidebar">
		    <div class="user-panel">
		      <div class="pull-left image">
		        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
		      </div>
		      <div class="pull-left info">
		        <p>Fulan Fulan</p>
		        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		      </div>
		    </div>
		    <form action="#" method="get" class="sidebar-form">
		      <div class="input-group">
		        <input type="text" name="q" class="form-control" placeholder="Search..."/>
		        <span class="input-group-btn">
		          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
		        </span>
		      </div>
		    </form>
		    <ul class="sidebar-menu">
		      <li class="active">
		        <a href="connector.php?page=dashboard">
		          <i class="fa fa-dashboard"></i> Dashboard
		        </a>
		      </li>
		      <li class="treeview">
		        <a href="#">
		          <i class="fa fa-edit"></i>
		          <span>Kelola Data</span>
		          <i class="fa fa-angle-left pull-right"></i>
		        </a>
		        <ul class="treeview-menu">
		          <li><a href="connector.php?page=kelola-kurikulum"><i class="fa fa-circle-o"></i> Data Kurikulum</a></li>
		          <li><a href="connector.php?page=kelola-prestasi-dosen"><i class="fa fa-circle-o"></i> Data Prestasi Dosen</a></li>
		          <li><a href="connector.php?page=kelola-prestasi-mahasiswa"><i class="fa fa-circle-o"></i> Data Prestasi Mahasiswa</a></li>
		          <li><a href="connector.php?page=kelola-pengabdian-masyarakat"><i class="fa fa-circle-o"></i> Data Pengabdian Masyarakat</a></li>
		          <li><a href="connector.php?page=kelola-penelitian"><i class="fa fa-circle-o"></i> Data Penelitian</a></li>
		          <li><a href="connector.php?page=kelola-hasil-kerjasama"><i class="fa fa-circle-o"></i> Data Hasil Kerjasama</a></li>
		        </ul>
		      </li>
		      <li>
		        <a href="connector.php?page=kurikulum">
		          <i class="fa fa-table"></i> Kurikulum
		        </a>
		      </li>
		      <li class="treeview">
		        <a href="#">
		          <i class="fa fa-trophy"></i>
		          <span>Prestasi</span>
		          <i class="fa fa-angle-left pull-right"></i>
		        </a>
		        <ul class="treeview-menu">
		          <li><a href="connector.php?page=prestasi-dosen"><i class="fa fa-circle-o"></i> Prestasi Dosen</a></li>
		          <li><a href="connector.php?page=prestasi-mahasiswa"><i class="fa fa-circle-o"></i> Prestasi Mahasiswa</a></li>
		        </ul>
		      </li>
		      <li>
		        <a href="connector.php?page=pengabdian-masyarakat">
		          <i class="fa fa-users"></i> Pengabdian Masyarakat
		        </a>
		      </li>
		      <li>
		        <a href="connector.php?page=penelitian">
		          <i class="fa fa-book"></i> Penelitian
		        </a>
		      </li>
		      <li>
		        <a href="connector.php?page=hasil-kerjasama">
		          <i class="fa fa-gears"></i> Hasil Kerjasama
		        </a>
		      </li>
		    </ul>
		  </section>
		</aside>
		<div class="content-wrapper">
			<?php include 'pages/static/content-header.php'; ?>
			<?php include 'homepage.php'; ?>
		</div>
		<?php include 'pages/static/footer.php'; ?>
	</div>
	<!-- jQuery 2.1.3 -->
	<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<!-- jQuery UI 1.11.2 -->
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	    $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
	<!-- Morris.js charts -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="plugins/morris/morris.min.js" type="text/javascript"></script>
	<!-- Sparkline -->
	<script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
	<!-- jvectormap -->
	<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
	<sczipt src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
	<!-- daterangepicker -->
	<script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
	<!-- datepicker -->
	<script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
	<!-- iCheck -->
	<script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
	<!-- Slimscroll -->
	<script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- FastClick -->
	<script src='plugins/fastclick/fastclick.min.js'></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js" type="text/javascript"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js" type="text/javascript"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js" type="text/javascript"></script>
</body>
</html>