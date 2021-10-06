<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Geo Wisata | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url().'asset/plugins/fontawesome-free/css/all.min.css'?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() .'asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() .'asset/dist/css/adminlte.min.css'?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <?php $this->load->view('menu/v_top_bar'); ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('menu/main-sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-shield"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Data Pengguna</span>
                <!-- <span class="info-box-number">
                  
                  <!-- <small> Penguna</small> -->
                </span>
                <a href="<?php echo base_url().'Admin/user'; ?>"><span class="right badge badge-danger">Lihat Detail <i class="fas fa-arrow-circle-right"></i></span></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Wisata</span>
                <!-- <span class="info-box-number">41,410</span> -->
                  <a href="<?php echo base_url().'Admin/wisata'; ?>"><span class="right badge badge-danger">Lihat Detail <i class="fas fa-arrow-circle-right"></i></span></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penginapan</span>
                <!-- <span class="info-box-number">760</span> -->
                  <a href="<?php echo base_url().'Admin/penginapan' ?>"><span class="right badge badge-danger">Lihat Detail <i class="fas fa-arrow-circle-right"></i></span></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Event</span>
                <!-- <span class="info-box-number">2,000</span> -->
                  <a href="<?php echo base_url().'Admin/event'; ?>"><span class="right badge badge-danger">Lihat Detail <i class="fas fa-arrow-circle-right"></i></span></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        
        <!-- /.row -->

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url() .'asset/plugins/jquery/jquery.min.js'?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() .'asset/plugins/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() .'asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() .'asset/dist/js/adminlte.js'?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url() .'asset/dist/js/demo.js'?>"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url() .'asset/plugins/jquery-mousewheel/jquery.mousewheel.js'?>"></script>
<script src="<?php echo base_url() .'asset/plugins/raphael/raphael.min.js'?>"></script>
<script src="<?php echo base_url() .'asset/plugins/jquery-mapael/jquery.mapael.min.js'?>"></script>
<script src="<?php echo base_url() .'asset/plugins/jquery-mapael/maps/usa_states.min.js'?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() .'asset/plugins/chart.js/Chart.min.js'?>"></script>

<!-- PAGE SCRIPTS -->
<script src="<?php echo base_url() .'asset/dist/js/pages/dashboard2.js'?>"></script>
</body>
</html>
