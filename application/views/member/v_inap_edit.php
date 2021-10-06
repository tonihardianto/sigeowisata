<!DOCTYPE html>
<html>
<?php

$lat = "";
$lng = "";
$alamat = "";
$kab = "";
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Pengguna</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/daterangepicker/daterangepicker.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2/css/select2.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/summernote/summernote-bs4.css' ?>">
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url() . 'asset/images/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle' ?>">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url() . 'asset/images/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3' ?>">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url() . 'asset/images/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3' ?>">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="<?php echo base_url() . 'asset/images/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>GEO WISATA JOGJA</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url() . 'asset/images/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image' ?>">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $this->session->userdata('member_name'); ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <?php $this->load->view('menu/v_m_sidebar.php'); ?>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1>Data Lowongan Kerja</h1> -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Koordinat Penginapan</li>
                            </ol>
                        </div>
                    </div>
                    <!-- Notification -->
                    <?php $this->view('menu/alert'); ?>
                </div><!-- /.container-fluid -->
            </section>
            <?php foreach ($data->result_array() as $i) :
                $kat = $i['inap_kategori'];
            ?>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-server"></i>
                                            Ubah Penginapan
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <form method="post" action="<?php echo base_url() . 'Member/penginapan/editInap' ?>">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-6 col-form-label">Nama Wisata</label>
                                                <div class="col-sm-11">
                                                    <input type="hidden" name="id" value="<?php echo $i['inap_id']; ?>">
                                                    <input type="text" class="form-control" name="nama" id="wisata" value="<?php echo $i['inap_nama'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kategori" class="col-sm-6 col-form-label">Kategori</label>
                                                <div class="col-sm-11">
                                                    <select class="form-control select2" name="kategori" id="kategori" data-placeholder="Pilih Kategori">
                                                        <option value="" disabled selected>Pilih Kategori</option>
                                                        <option value="Home Stay" <?php if ($kat == 'Home Stay') echo 'selected'; ?>>Home Stay</option>
                                                        <option value="Hotel" <?php if ($kat == 'Hotel') echo 'selected' ?>>Hotel</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tiket" class="col-sm-6 col-form-label"> Fasilitas</label>
                                                <div class="col-sm-11">
                                                    <textarea class="form-control" name="fasilitas" id="fasilitas" cols="auto" rows="3"><?php echo $i['inap_fasilitas'] ?></textarea>
                                                    <small class="form-text text-danger">
                                                        *Tuliskan Fasilitas Penginapan
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                            <label for="kabupaten" class="col-sm-6 col-form-label">Kabupaten</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" name="kab" value="<?php echo $kab ?>" id="longitude" placeholder="Longitude" required>
                                                <select class="form-control select" name="kabupaten" id="kabupaten">
                                                    <option value="" disabled selected>Pilih Kabupaten</option>
                                                    <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                                                    <option value="Sleman">Kab. Sleman</option>
                                                    <option value="Bantul">Kab. Bantul</option>
                                                    <option value="Kulon Progo">Kab. Kulon Progo</option>
                                                    <option value="Gunung Kidul">Kab. Gunung Kidul</option>
                                                </select>
                                            </div>
                                        </div> -->
                                            <div class="form-group row">
                                                <label for="longitude" class="col-sm-6 col-form-label">Longitude</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" name="lng" value="<?php echo $i['inap_longitude'] ?>" id="longitude" placeholder="Longitude" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="latitude" class="col-sm-6 col-form-label">Latitude</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" name="lat" value="<?php echo $i['inap_latitude'] ?>" id=" latitude" placeholder="Latitude" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat" class="col-sm-6 col-form-label">Alamat</label>
                                                <div class="col-sm-11">
                                                    <textarea class="form-control" name="alamat" id="alamat" cols="auto" rows="3"><?php echo $i['inap_alamat'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat" class="col-sm-6 col-form-label">Deskripsi</label>
                                                <div class="col-sm-11">
                                                    <textarea class="textarea form-control" name="desc" id="desc" cols="auto" rows="3" required><?php echo $i['inap_desc'] ?></textarea>
                                                    <small class="form-text text-danger">
                                                        *Tuliskan Deskripsi Penginapan
                                                    </small>
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <a href="<?php echo base_url() . 'Admin/wisata' ?>" class="btn btn-default"> Kembali</a>
                                                <button type="submit" class="btn btn-success float-right"> Simpan</button>
                                            </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    <?php endforeach ?>
                    <!-- /.col -->

                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-route"></i>
                                    Titik Lokasi
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <!-- <div class="callout callout-info">
                                    <h5>I am an info callout!</h5>

                                    <p>Follow the steps to continue to payment.</p>
                                </div> -->

                                <div id="map" style="height: 400px;">

                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Begin Modal Add -->

    <!-- /.modal add -->
    <!-- Begin Modal Edit -->

    <!-- End Modal edit -->
    <!-- Begin Modal hapus -->

    <!-- End Modal Hapus -->
    <!-- Begin Modal Detail -->

    <!-- End Modal Detail -->

    <!-- Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>Copyright &copy; 2021<a href="<?php echo base_url() ?> ">Geo Wisata Yogyakarta</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="<?= base_url('asset/js/leaflet.ajax.js') ?>"></script>
    <!-- DataTables -->
    <!-- Load Esri Leaflet Geocoder from CDN -->
    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@2.3.3/dist/esri-leaflet.js" integrity="sha512-cMQ5e58BDuu1pr9BQ/eGRn6HaR6Olh0ofcHFWe5XesdCITVuSBiBZZbhCijBe5ya238f/zMMRYIMIIg1jxv4sQ==" crossorigin=""></script>


    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.css" integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g==" crossorigin="">
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.js" integrity="sha512-8twnXcrOGP3WfMvjB0jS5pNigFuIWj4ALwWEgxhZ+mxvjF5/FBPVd5uAxqT8dd2kUmTVK9+yQJ4CmTmSg/sXAQ==" crossorigin=""></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="<?= base_url('asset/js/leaflet.ajax.js') ?>"></script>

    <script src="<?php echo base_url() . 'asset/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.full.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.full.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/inputmask/min/jquery.inputmask.bundle.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/bootstrap-switch/js/bootstrap-switch.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/daterangepicker/daterangepicker.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/summernote/summernote-bs4.min.js' ?>"></script>
    <!-- page script -->

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
    </script>

    <script type="text/javascript">
        function numOnly(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>

    <script>
        $(function() {
            $('.textarea').summernote();
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $('.select2').select2();
        });

        // MAP SETTING
        var latInput = document.querySelector("[name=lat]");
        var lngInput = document.querySelector("[name=lng]");
        var lokasiInp = document.querySelector("[name=alamat]");
        var kabInp = document.querySelector("[name=kab]");
        var geocodeService = L.esri.Geocoding.geocodeService();
        var marker;

        var map = L.map('map').setView([-7.7987588264809995, 110.37208557128906], 10);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(map);

        $.getJSON("<?= base_url('asset/geojson/yogya.geojson') ?>", function(data) {
            geoLayer = L.geoJson(data, {
                style: function(feature) {

                    var id = feature.properties.id;
                    if (id == 1) {
                        return {
                            opacity: 0.5,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 0.5,
                            fillColor: 'rgba(39,209,231,1.0)',
                            interactive: true,
                        };
                    } else if (id == 2) {
                        return {
                            opacity: 0.5,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 0.5,
                            fillColor: 'rgba(189,207,52,1.0)',
                            interactive: true,
                        };
                    } else if (id == 3) {
                        return {
                            opacity: 0.5,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 0.5,
                            fillColor: 'rgba(231,132,25,1.0)',
                            interactive: true,
                        };
                    } else if (id == 4) {
                        return {
                            opacity: 0.5,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 0.5,
                            fillColor: 'rgba(161,40,212,1.0)',
                            interactive: true,
                        };
                    } else if (id == 5) {
                        return {
                            opacity: 0.5,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 0.5,
                            fillColor: 'rgba(238,22,40,1.0)',
                            interactive: true,
                        };
                    } else if (id == 6) {
                        return {
                            opacity: 0.5,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 0.5,
                            fillColor: 'rgba(124,226,84,1.0)',
                            interactive: true,
                        };
                    }

                },
                onEachFeature: function(feature, layer) {

                }
            }).addTo(map);
        });

        var kabupaten = new L.GeoJSON.AJAX("<?= base_url() ?>asset/geojson/yogya.geojson").addTo(map);
        kabupaten.on("click", function(e) {


            // end geojson
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            if (!marker) {
                marker = L.marker(e.latlng).addTo(map)
            } else {
                marker.setLatLng(e.latlng);
            }


            latInput.value = lat;
            lngInput.value = lng;

            $.ajax({
                url: "https://nominatim.openstreetmap.org/reverse",
                data: "lat=" + lat +
                    "&lon=" + lng +
                    "&format=json",
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    lokasiInp.value = data.display_name
                    //kabInp.value = data.address.county;
                }
            })



            geocodeService.reverse().latlng(e.latlng).run(function(error, result) {
                if (error) {
                    return;
                }
                console.log(result);
                // lokasiInp.value=result.address.Match_addr;
                // kabInp.value = result.address.county;
            });
        });

        // draw
        // FeatureGroup is to store editable layers

        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        if ($("[name=polygon]").val() != "") {
            var latlngs = JSON.parse($("[name=polygon]").val());
            var polygon = L.polygon(latlngs, {
                color: 'red'
            }).addTo(drawnItems);
        }

        var drawControl = new L.Control.Draw({
            draw: {
                polyline: false,
                rectangle: false,
                circle: false,
                marker: false,
                circlemarker: false
            },
            edit: {
                featureGroup: drawnItems
            }
        });
        map.addControl(drawControl);
        map.on('draw:created', function(e) {
            console.log("Created")
            var type = e.layerType,
                layer = e.layer;
            var latLng = layer.getLatLngs();
            console.log(latLng);

            $("[name=polygon]").val(JSON.stringify(latLng));
            // if (type === 'marker') {
            //     // Do marker specific actions
            // }
            // Do whatever else you need to. (save to db; add to map etc)
            drawnItems.addLayer(layer);
        });

        map.on('draw:edited', function(e) {
            console.log('edited');
            var latLng = e.layers.getLayers()[0].getLatLngs();

            $("[name=polygon]").val(JSON.stringify(latLng));
        })
        map.on('draw:deleted', function(e) {
            console.log('deleted');

            $("[name=polygon]").val("");
        })
    </script>
    <!-- JSON Jurusan -->

</body>

</html>