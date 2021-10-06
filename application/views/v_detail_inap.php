<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Geo Wisata</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/select2/css/select2.min.css' ?>">
    <!-- TempusDominus -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('apply/v_top_bar'); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active">Detail Penginapan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Alert -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <!-- <div class="col-lg-6"> -->
                            <div class="card card-primary card-outline " style="width: 100%;">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Map <?php  ?></h5>
                                </div>
                                <div class="card-body">
                                    <div id="map" style="height: 500px; width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php foreach ($data->result_array() as $i) : ?>
                                <div class="card card-primary card-outline " style="width: 100%;">
                                    <div class="card-header">
                                        <h5 class="card-title m-0">Detail <b><?php echo $i['inap_nama'] ?></b></h5>
                                    </div>

                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th width="150px">Nama Penginapan</th>
                                                    <td width="20px">:</td>
                                                    <td><?php echo $i['inap_nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Kategori</th>
                                                    <td width="20px">:</td>
                                                    <td><?php echo $i['inap_kategori'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Fasilitas</th>
                                                    <td width="20px">:</td>
                                                    <td><?php echo $i['inap_fasilitas'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Latitude</th>
                                                    <td width="20px">:</td>
                                                    <td><?php echo $i['inap_latitude'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Longitude</th>
                                                    <td width="20px">:</td>
                                                    <td><?php echo $i['inap_longitude'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td width="20px">:</td>
                                                    <td><?php echo $i['inap_alamat'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <td width="20px">:</td>
                                                    <td><?php echo $i['inap_desc'] ?></td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->

        </div>
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-block">
                Made with <i class="fa fa-heart" style="color: red;"></i> by Toni Hardianto
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; <?php echo date('Y') ?> Geo Wisata</a>.</strong> All rights
            reserved.
        </footer>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="<?php echo base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
        <!-- jquery-validation -->
        <script src="<?php echo base_url() . 'asset/plugins/jquery-validation/jquery.validate.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/plugins/jquery-validation/additional-methods.min.js' ?>"></script>
        <!-- Toastr -->
        <script src="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>
        <!-- input mask -->
        <script src="<?php echo base_url() . 'asset/plugins/inputmask/min/jquery.inputmask.bundle.min.js' ?>"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.full.min.js' ?>"></script>
        <!-- tempus dominus -->
        <script src="<?php echo base_url() . 'asset/plugins/moment/moment.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ?>">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>\<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <!-- Custom JS -->

        <script>
            <?php foreach ($map->result_array() as $map) :
                $lat = $map['inap_latitude'];
                $long = $map['inap_longitude'];
                $nama = $map['inap_nama'];
                $kategori = $map['inap_kategori'];
                $fas = $map['inap_fasilitas'];
                $desc = $map['inap_desc'];
            ?>
                var map = L.map('map').setView([<?php echo $lat ?>, <?php echo $long ?>], 18);

                var icon = L.icon({
                    iconUrl: '<?php echo base_url('asset/marker/inap.png') ?>',
                    iconSize: [65, 50],
                    iconAnchor: [22, 65],
                    popupAnchor: [-3, -55]
                });

                L.marker([<?php echo $lat ?>, <?php echo $long ?>], {
                    icon: icon
                }).bindPopup('<h6><b><?php echo $nama; ?></b></h6><br><h6><?php echo $desc; ?></h6><br>').openPopup().addTo(map);
            <?php endforeach ?>

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
            }).addTo(map);
        </script>

</body>

</html>