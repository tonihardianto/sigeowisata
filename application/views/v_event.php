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

    <title>Event Geo Wisata Jogja</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/assets/css/custom.css' ?>">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fullcalendar/main.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fullcalendar-daygrid/main.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fullcalendar-timegrid/main.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fullcalendar-bootstrap/main.min.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?php echo base_url() . '' ?>" class="navbar-brand">
                    <!-- <img src="<?php echo base_url() . 'asset/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                    <span class="brand-text font-weight-light"><b>Geo Wisata Jogja</b></span>
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
                                <li class="breadcrumb-item active">Event</a></li>
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
                                    <h3 class="card-title">Kalender Event</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="card card-primary">
                                                    <div class="card-body p-0">
                                                        <!-- THE CALENDAR -->
                                                        <div id="calendar"></div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.container-fluid -->
                                        </section>
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
            <strong>Copyright &copy; <?php echo date('Y');?> Geo Wisata Jogja</strong> All rights reserved.
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
    <!-- fullCalendar 2.2.5 -->
    <script src="<?php echo base_url() . 'asset/plugins/moment/moment.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/fullcalendar/main.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/fullcalendar-daygrid/main.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/fullcalendar-timegrid/main.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/fullcalendar-interaction/main.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/fullcalendar-bootstrap/main.min.js' ?>"></script>

    <script>
        $(function() {

            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');


            var calendar = new Calendar(calendarEl, {
                plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                'themeSystem': 'bootstrap',
                //Random default events

                events: '<?php echo base_url() . 'event/getData' ?>',
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                        // if so, remove the element from the "Draggable Events" list
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                },

                eventClick: function(e) {
                    e.jsEvent.preventDefault();

                    if (e.event.url) {
                        window.open(e.event.url);
                    }
                },

            });

            calendar.render();

        });
    </script>


</body>

</html>