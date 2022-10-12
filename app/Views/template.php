<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="/Assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="/Assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="/Assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="/Assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="/Assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="/Assets/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>BajuStoreID</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="/Assets/gentelella/production/images/img.jpg" alt="image" class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li>
                  <a href="/home"><i class="fa fa-home"></i> Home </a>
                  <!-- <a href="/home" class="nav-link">
                   <i class="nav-icon far fa-image"></i>
                    <p>
                      Jadwal Asisten
                    </p>
                  </a> -->
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->

          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- <div class="row" style="display: inline-block;"> -->
        <div class="content">
          <div class="container">
            <?= $this->renderSection('content') ?>
          </div><!-- /.container-fluid -->
        </div>
      </div>
      <br />

      <div class="row">

      </div>
    </div>
  </div>
  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      BajuStoreID - by <a href="https://colorlib.com">Kelompok Pencatatan Baju</a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>

  <!-- jQuery -->
  <script src="/Assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/Assets/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="/Assets/gentelella/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="/Assets/gentelella/vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="/Assets/gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- jQuery Sparklines -->
  <script src="/Assets/gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- morris.js -->
  <script src="/Assets/gentelella/vendors/raphael/raphael.min.js"></script>
  <script src="/Assets/gentelella/vendors/morris.js/morris.min.js"></script>
  <!-- gauge.js -->
  <script src="/Assets/gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="/Assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- Skycons -->
  <script src="/Assets/gentelella/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="/Assets/gentelella/vendors/Flot/jquery.flot.js"></script>
  <script src="/Assets/gentelella/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="/Assets/gentelella/vendors/Flot/jquery.flot.time.js"></script>
  <script src="/Assets/gentelella/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="/Assets/gentelella/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="/Assets/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="/Assets/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="/Assets/gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="/Assets/gentelella/vendors/DateJS/build/date.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="/Assets/gentelella/vendors/moment/min/moment.min.js"></script>
  <script src="/Assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="/Assets/gentelella/build/js/custom.min.js"></script>

</body>

</html>