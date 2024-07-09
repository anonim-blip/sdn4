<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SDN 4 TENGGULI</title>
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $username; ?></h2>
            </div>
          </div>
          <br />
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <hr>
              <ul class="nav side-menu">
                <li><a href="admin"><i class="fa fa-home"></i> Home </a></li>
                <li><a href="guru"><i class="fa fa-chalkboard-teacher"></i> Data Guru</a></li>
                <li><a href="siswa"><i class="fa fa-user-graduate"></i> Data Siswa </a></li>
                <li><a href="kelas"><i class="fa fa-school"></i> Data Kelas</a></li>
                <li><a href="matapelajaran"><i class="fa fa-book"></i> Data Mata Pelajaran</a></li>
                <li><a href="nilai"><i class="fa fa-file-alt"></i> Data Nilai</a></li>
                <li><a><i class="fa fa-bar-chart-o"></i> Laporan Rapor <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="laporan">Lihat Laporan Nilai</a></li>
                    <li><a href="tambahlaporan"> Tambah Laporan Nilai</a></li>
                  </ul>
                </li>
                <li><a href="login/logout"><i class="fa fa-sign-out-alt pull-right"></i> Log Out </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
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
      <div class="right_col" role="main">
        <div class="row tile_count">
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Jumlah Siswa</span>
            <div class="count"><?php echo count($siswa); ?></div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Jumlah Guru</span>
            <div class="count green"><?php echo count($guru); ?></div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Jumlah Kelas</span>
            <div class="count"><?php echo count($kelas); ?></div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Rata-rata Nilai</span>
              <div class="count"><?php echo isset($nilai) && count($nilai) > 0 ? number_format($total_nilai / count($nilai), 2) : '0.00'; ?></div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
              <div class="row x_title">
                <img src="images/sd.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="pull-right">
          Surianti Hadori - 2024 || UAS PBO </a>
        </div>
        <div class="clearfix"></div>
      </footer>
    </div>
  </div>
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="vendors/fastclick/lib/fastclick.js"></script>
  <script src="vendors/nprogress/nprogress.js"></script>
  <script src="vendors/Chart.js/dist/Chart.min.js"></script>
  <script src="vendors/gauge.js/dist/gauge.min.js"></script>
  <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="vendors/iCheck/icheck.min.js"></script>
  <script src="vendors/skycons/skycons.js"></script>
  <script src="vendors/Flot/jquery.flot.js"></script>
  <script src="vendors/Flot/jquery.flot.pie.js"></script>
  <script src="vendors/Flot/jquery.flot.time.js"></script>
  <script src="vendors/Flot/jquery.flot.stack.js"></script>
  <script src="vendors/Flot/jquery.flot.resize.js"></script>
  <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="vendors/flot.curvedlines/curvedLines.js"></script>
  <script src="vendors/DateJS/build/date.js"></script>
  <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <script src="vendors/moment/min/moment.min.js"></script>
  <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="build/js/custom.min.js"></script>
</body>
</html>