<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/summernote/summernote-bs4.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url();
                                    'asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
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
                <span class="brand-text font-weight-light">BKK Online</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url() . 'asset/images/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image' ?>">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <?php $this->load->view('menu/v_sidebar.php'); ?>
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
                            <h1>Data Pengguna</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Site Settings</li>
                            </ol>
                        </div>
                    </div>
                    <?php
                    //$this->view('menu/alert'); 
                    ?>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!--card -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Site Info</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Setting</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
                                    </ul>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <?php $this->load->view('menu/alert'); ?>
                                        <div class="tab-pane active" id="tab_1">
                                            <?php foreach ($data->result_array() as $site) : ?>
                                                <div class="callout callout-info">
                                                    <label for=""> Site Title <a href="#myTitle" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_judul'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Site Description <a href="#myDesc" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_desc'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Site Header <a href="#myHeader" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_head'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Text Header <a href="#myText" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_text'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Content Title <a href="#myConTitle" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_content_title'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <label for=""> Content Value <a href="#myConValue" data-toggle="modal"><i class="fa fa-cog"></i></a></label>
                                                    <div class="col-sm-10">
                                                        <p> <?php echo $site['site_content_value'] ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptate omnis quas illum sequi necessitatibus optio similique,
                                                quasi laudantium quidem enim voluptatem maxime nostrum provident nobis amet hic esse! Alias,
                                                illum?</p>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                        <!-- /.tab-pane -->
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
        <div class="modal fade" id="myTitle">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/setting/set_title'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label"> Site Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Website   " required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary toastrDefaultSuccess">Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal add -->
        <div class="modal fade bd-example-modal-lg" id="myDesc" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/setting/set_desc'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label"> Site Title</label>
                                    <div class="col-sm-10 pad">
                                        <textarea class="textarea" name="desc" placeholder="Tulis Deskripsi Website " style="width: 100px; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; "></textarea>
                                        <p class="text-sm mb-0">
                                            <a href="#">
                                                Tuliskan Deskripsi Website.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary toastrDefaultSuccess">Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="myHeader">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/setting/set_header'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label"> Header Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="head" id="head" placeholder="Header Website   " required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary toastrDefaultSuccess">Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade bd-example-modal-lg" id="myText" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/setting/set_text'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label"> Site Description</label>
                                    <div class="col-sm-10 pad">
                                        <textarea class="textarea" name="headtext" placeholder="Tulis Deskripsi Website " style="width: 100px; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; "></textarea>
                                        <p class="text-sm mb-0">
                                            <a href="#">
                                                Tuliskan Deskripsi Company.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary toastrDefaultSuccess">Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="myConTitle">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/setting/set_content_title'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label"> Content Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="contenttitle" id="head" placeholder="Content Title   " required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary toastrDefaultSuccess">Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade bd-example-modal-lg" id="myConValue" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/setting/set_content_value'; ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-5 col-form-label"> Company Desc</label>
                                    <div class="col-sm-10 pad">
                                        <textarea class="textarea" name="contentvalue" placeholder="Tulis Deskripsi Company " style="width: 100px; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; "></textarea>
                                        <p class="text-sm mb-0">
                                            <a href="#">
                                                Tuliskan Deskripsi Company.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary toastrDefaultSuccess">Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- Begin Modal Edit -->
        <?php

        ?>

        <div class="modal fade" id="myEdit<?php  ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Pengguna</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() . 'Admin/user/edit_user'; ?>" class="form-horizontal" enctype="multipart/form-data">
                            <div class="card-body">
                                <input name="id" type="hidden" value="<?php ?>">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" id="inputEmail3" value="<?php  ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="userpass" id="inputPassword3" placeholder="New Password..." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fullname" id="inputEmail3" value="<?php  ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address" id="inputEmail3" value="<?php  ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" id="inputEmail3" value="<?php  ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="inputEmail3" value="<?php  ?>" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary toastrDefaultSuccess" data-toastrDefaultSuccess="toastrDefaultSuccess">Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <?php  ?>
        <!-- End Modal edit -->
        <!-- Begin Modal hapus -->

        <!-- End Modal Hapus -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
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
    <!-- DataTables -->
    <script src="<?php echo base_url() . 'asset/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'asset/plugins/summernote/summernote-bs4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>
    <!-- page script -->
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
        });
    </script>
    <script type="text/javascript">
        const toastrDefaultSuccess = $('toastrDefaultSuccess').data('toastrDefaultSuccess');
    </script>
</body>

</html>