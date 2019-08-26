<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="assets/img/sass.jpg">
  <title>Surat Keterangan Pendamping Ijazah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/font-awesome.min.css">
 	<!-- Ionicons -->
 	<link rel="stylesheet" href="dist/css/ionicons.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skin-blue.min.css">
  <link rel="stylesheet" href="dist/css/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    
    <a href="?page=home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SKPI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SKPI</b> STIKes</span>
    </a>
   

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
    
      
        
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span><b>&laquo; Geser &raquo; </b>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?page=dashboard">Dashboard</a></li>
            <li><a href="?page=pengaturan">Pengaturan</a></li>
           
            <li><a href="logout.php">Logout &nbsp;&nbsp; <span class="glyphicon glyphicon-off"></span></a></li>
            <table><tr><td></td><td></td><td></td><td></td><td></td></tr></table>
          </ul></div>
          <!-- Messages: style can be found in dropdown.less-->
         
          
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
         <img src="assets/img/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href="?page=profil_user"><i class="glyphicon glyphicon-user">  Admin</i></a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="?page=cari_buku" method="post" class="sidebar-form" accept-charset="utf.8">
        <div class="input-group">
          <input type="text" name="pencarian" class="form-control" placeholder="Cari Buku...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="glyphicon glyphicon-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="?page=home"><i class="glyphicon glyphicon-home"></i> <span>Home</span></a></li>
            
            <li><a href="?page=pengguna"><i class="glyphicon glyphicon-shopping-cart"></i> <span>Pengguna</span></a></li>
            
            <li><a href="?page=distributor"><i class="glyphicon glyphicon-briefcase"></i> <span>Mahasiswa</span></a></li>
            <li><a href="?page=pasok"><i class="glyphicon glyphicon-log-in"></i> <span>Program Studi</span></a></li>
       		
            
        <li><a href="?page=kaprodi"><i class="glyphicon glyphicon-tasks"></i> <span>Laporan</span>
        	<span class="pull-right-container">
              <i class="glyphicon glyphicon-triangle-bottom"></i>
            </span>
            
        	 <ul class="treeview-menu">
            <li><a href="?page=laporan_penjualan"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laporan</a></li>
            <li><a href="?page=print_file"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Print</a></li>
          </ul>
        </li>
        <li class="treeview">
        	<a href="?page=home"><i class="glyphicon glyphicon-book"></i> <span>Aktivitas</span>
            <span class="pull-right-container">
              <i class="glyphicon glyphicon-triangle-bottom"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            	<li><a href="?page=semua_buku&halaman=1">Penghargaan</a></li>
            	<li><a href="?page=buku_fantasi">Pelatihan</a></li>
                <li><a href="?page=buku_aksi">Organisasi</a></li>
                <li><a href="?page=buku_romansa">Keahlian</a></li>
                <li><a href="?page=buku_thriller">Praktek Klinik</a></li>
                <li><a href="?page=buku_gayahidup">Skripsi</a></li>
                
            </ul>
            </li>
        
        </a>       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <?php
		$page=@$_GET['page']; 
		if($page==""){
			$page="dashboard";
		}
		include "$page.php";
	?>
    
    </section>

  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Follow Me @ReshaSanchez (Instagram, Twitter, ask.FM)
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy;  2016 <a href="www.instagram.com/reshasanchez">@ReshaSanchez</a>.</strong> All rights reserved.
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
   
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="dist/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>

</html>
