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

    <title>Peta Wisata</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/assets/css/custom.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="<?php echo base_url() . 'cluster/dist/MarkerCluster.css'?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'cluster/dist/MarkerCluster.Default.css'?>">
</head>

<body class="hold-transition layout-top-nav fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?php echo base_url() ?>" class="navbar-brand">
                    <!-- <img src="<?php echo base_url() . 'asset/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                    <span class="brand-text font-weight-light"><b>Geo Wisata</b></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url().'map' ?>" class="nav-link">Map</a>
                        </li>
                        
                    </ul>

                    <!-- SEARCH FORM -->
                    <!-- <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->
                </div>

                <!-- Right navbar links -->

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0 text-dark"> Informasi <small>Lowongan Kerja</small></h1> -->
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Map</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Clustering Peta Wisata</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Content MAP-->
                                        <div id="map" style="height: 500px; width: 100%;">
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer"></div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
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
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; <?php echo date('Y') ?> <a href="https://adminlte.io">Geo Wisata</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


    <!-- jQuery -->
    <script src="<?php echo base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url().'cluster/dist/leaflet.markercluster-src.js'?>"></script>

    <script>
        // var wisata = L.layerGroup();
        // Data Semua Wisata
        

        // Mapbox
        var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        var grayscale = L.tileLayer(mbUrl, {
                id: 'mapbox/light-v9',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            }),
            streets = L.tileLayer(mbUrl, {
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            }),
            satellite = L.tileLayer(mbUrl, {
                id: 'mapbox/satellite-streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            }),
        googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var map = L.map('map').setView([-7.875625027464621, 110.41397094726562], 8).addLayer(googleTerrain);

        $.getJSON("<?= base_url('asset/geojson/yogyakarta.geojson') ?>", function(data) {
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

        var cluster = L.markerClusterGroup();

        <?php foreach ($data->result_array() as $map) :
            $id = $map['wisata_id'];
            $lat = $map['det_wisata_latitude'];
            $long = $map['det_wisata_longitude'];
            $nama = $map['wisata_nama'];
            $kategori = $map['kategori_nama'];
            $tiket = $map['det_wisata_tiket'];
            $marker = $map['kategori_marker'];
            $desc = $map['det_wisata_desc'];
        ?>
            var icon = L.icon({
                iconUrl: '<?php echo base_url('asset/marker/' . $marker) ?>',
                iconSize: [65, 50],
                iconAnchor: [22, 65],
                popupAnchor: [-3, -55]
            });

            var marker = L.marker([<?php echo $lat ?>, <?php echo $long ?>], {
                icon: icon
            }).bindPopup('<h6><b><?php echo $nama; ?></b></h6><br><h6><?php echo $desc; ?></h6><br><a class="btn btn-default" style="align: center" href="<?php echo base_url() . 'Informasi/wisata' ?>?id=<?php echo $id;  ?>"> More Info</a>');
            // .addTo(wisata);
            cluster.addLayer(marker);
            map.addLayer(cluster);
            // map.fitBounds(cluster.getBounds());
        <?php endforeach ?>

    </script>

</body>

</html>