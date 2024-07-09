<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SDN 4 TENGGULI</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>SDN 4 Tengguli</span> Sistem Informasi Akademik Nilai Siswa </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                 <h2><?php echo $username; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section"><hr>
                <ul class="nav side-menu">
                  <li><a href="admin"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="guru"><i class="fa fa-chalkboard-teacher"></i> Data Guru</a></li>
                  <li><a href="siswa"><i class="fa fa-user-graduate"></i> Data Siswa </a></li>
                  <li><a href="kelas"><i class="fa fa-school"></i> Data Kelas</a></li>
                  <li><a href="matapelajaran"><i class="fa fa-book"></i> Data Mata Pelajaran</a></li>
                  <li><a href="nilai"><i class="fa fa-file-alt"></i> Data Nilai</a></li>
                  <li><a ><i class="fa fa-bar-chart-o"></i> Laporan Rapor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="laporan">Lihat Laporan Nilai</a></li>
                      <li><a href="tambahlaporan"> Tambah Laporan Nilai</a></li>
                    </ul>
                  </li>
                  <li><a href="login/logout"><i class="fa fa-sign-out-alt pull-right"></i> Log Out </a></li>
                </ul>
              </div>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.png" alt=""><?php echo $username; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
               <h3><center> SDN 4 Tengguli <br>Sistem Informasi Akademik Nilai Siswa </center></span></h3>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->