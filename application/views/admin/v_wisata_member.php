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
            <?php $this->load->view('menu/v_top_bar'); ?>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
         <?php $this->load->view('menu/main-sidebar.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Member</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Member</li>
                            </ol>
                        </div>
                    </div>
                    <?php $this->view('menu/alert'); ?>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!--card -->
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Data Wisata</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Data Penginapan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Wisata</th>
                                                            <th>Kategori</th>
                                                            <th>Longitude</th>
                                                            <th>Latitude</th>
                                                            <th>Alamat</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($data->result_array() as $key) :
                                                            $id = $key['w_id'];
                                                        ?>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                                                <td><?php echo $key['w_nama']; ?></td>
                                                                <td><?php echo $key['kategori_nama']; ?></td>
                                                                <td><?php echo $key['w_long']; ?></td>
                                                                <td><?php echo $key['w_lat']; ?></td>
                                                                <td><?php echo $key['w_alamat']; ?></td>
                                                                <td style="text-align:center;">
                                                                    <a href="#myApprove<?php echo $id ?>" data-toggle="modal" class="btn btn-xs btn-info" title="Approve"><span class="fa fa-check"> Terima</span></a>
                                                                    <!-- <a class="btn btn-xs btn-success" href="#myDelete<?php echo $id; ?>" data-toggle="modal" title="Hapus"><span class="fa fa-check-square"></span> Approve</a> -->
                                                                    <a class="btn btn-xs btn-danger" href="#myReject<?php echo $id; ?>" data-toggle="modal" title="Tolak"><span class="fa fa-times"> Tolak</span></a>

                                                                </td>
                                                            </tr>
                                                        <?php endforeach ?>
                                                        </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Penginapan</th>
                                                            <th>Kategori</th>
                                                            <th>Longitude</th>
                                                            <th>Latitude</th>
                                                            <th>Alamat</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($inap->result_array() as $key) :
                                                            $id = $key['inap_id'];
                                                        ?>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                                                <td><?php echo $key['inap_nama']; ?></td>
                                                                <td><?php echo $key['inap_kategori']; ?></td>
                                                                <td><?php echo $key['inap_longitude']; ?></td>
                                                                <td><?php echo $key['inap_latitude']; ?></td>
                                                                <td><?php echo $key['inap_alamat']; ?></td>
                                                                <td style="text-align:center;">
                                                                    <a href="#myApprove1<?php echo $id ?>" data-toggle="modal" class="btn btn-xs btn-info" title="Approve"><span class="fa fa-check"> Terima</span></a>
                                                                    <!-- <a class="btn btn-xs btn-success" href="#myDelete<?php echo $id; ?>" data-toggle="modal" title="Hapus"><span class="fa fa-check-square"></span> Approve</a> -->
                                                                    <a class="btn btn-xs btn-danger" href="#myReject1<?php echo $id; ?>" data-toggle="modal" title="Tolak"><span class="fa fa-times"> Tolak</span></a>

                                                                </td>
                                                            </tr>
                                                        <?php endforeach ?>
                                                        </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
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
        <!-- Modal Tolak -->
        <?php foreach ($tolak->result_array() as $i) : ?>
            <div class="modal fade" id="myReject<?php echo $i['w_id'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Peringatan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <form method="post" action="<?php echo base_url() . 'Admin/Wisata/reject'; ?>" id="form_sample_1" class="form-horizontal">
                            <div class="modal-body">
                                <p>Tolak Data <b><?php echo $i['w_nama'] ?></b>..?</p>
                                <input name="id" type="hidden" value="<?php echo $i['w_id']  ?>">
                                <!-- <input name="id1" type="hidden" value="<?php  ?>"> -->
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-warning"><i class="icon-remove icon-white"></i>Tolak</button>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </form>
            </div>
        <?php endforeach ?>


        <!-- Begin Modal reject inap -->
        <?php foreach ($re->result_array() as $i) : ?>
            <div class="modal fade" id="myReject1<?php echo $i['inap_id'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Peringatan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <form method="post" action="<?php echo base_url() . 'Admin/Penginapan/reject'; ?>" id="form_sample_1" class="form-horizontal">
                            <div class="modal-body">
                                <p>Tolak Penginapan <b><?php echo $i['inap_nama'] ?></b>..?</p>
                                <input name="id" type="hidden" value="<?php echo $i['inap_id']  ?>">
                                <!-- <input name="id1" type="hidden" value="<?php  ?>"> -->
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-warning"><i class="icon-remove icon-white"></i>Tolak</button>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </form>
            </div>
        <?php endforeach ?>
        <!-- /.modal add -->
        <?php foreach ($in->result_array() as $i) : ?>
            <div class="modal fade" id="myApprove1<?php echo $i['inap_id'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Peringatan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <form method="post" action="<?php echo base_url() . 'Admin/Penginapan/approve'; ?>" id="form_sample_1" class="form-horizontal">
                            <div class="modal-body">
                                <p>Approve Penginapan <b><?php echo $i['inap_nama'] ?></b>..?</p>

                                <input name="id" type="hidden" value="<?php echo $i['inap_id'] ?>">
                                <input name="nama" type="hidden" value="<?php echo $i['inap_nama'] ?>">
                                <input name="kategori" type="hidden" value="<?php echo $i['inap_kategori'] ?>">
                                <input name="fasilitas" type="hidden" value="<?php echo $i['inap_fasilitas'] ?>">
                                <input name="lat" type="hidden" value="<?php echo $i['inap_latitude'] ?>">
                                <input name="long" type="hidden" value="<?php echo $i['inap_longitude'] ?>">
                                <input name="alamat" type="hidden" value="<?php echo $i['inap_alamat'] ?>">
                                <input name="desc" type="hidden" value="<?php echo $i['inap_desc'] ?>">
                                <input name="member" type="hidden" value="<?php echo $i['member_id'] ?>">
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-warning"><i class="icon-remove icon-white"></i>Approve</button>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </form>
            </div>
        <?php endforeach ?>
        <!-- Begin Modal Edit -->
        <!-- End Modal edit -->
        <!-- Begin Modal hapus -->
        <?php foreach ($ap->result_array() as $i) : ?>
            <div class="modal fade" id="myApprove<?php echo $i['w_id'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Peringatan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <form method="post" action="<?php echo base_url() . 'Admin/Wisata/approve'; ?>" id="form_sample_1" class="form-horizontal">
                            <div class="modal-body">
                                <p>Approve Data <b><?php echo $i['w_nama'] ?></b>..?</p>
                                <input name="id" type="hidden" value="<?php echo $i['w_id']  ?>">
                                <input name="nama" type="hidden" value="<?php echo $i['w_nama'] ?>">
                                <input name="kategori" type="hidden" value="<?php echo $i['w_kategori'] ?>">
                                <input name="tiket" type="hidden" value="<?php echo $i['w_tiket'] ?>">
                                <input name="long" type="hidden" value="<?php echo $i['w_long'] ?>">
                                <input name="lat" type="hidden" value="<?php echo $i['w_lat'] ?>">
                                <input name="alamat" type="hidden" value="<?php echo $i['w_alamat'] ?>">
                                <input name="desc" type="hidden" value="<?php echo $i['w_desc'] ?>">
                                <input name="member" type="hidden" value="<?php echo $i['w_member_id'] ?>">
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-warning"><i class="icon-remove icon-white"></i>Approve</button>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </form>
            </div>
        <?php endforeach ?>
        <!-- End Modal Hapus -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; <?php echo date('Y') ?> Geo Wisata Jogja</a>.</strong> All rights
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
    <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $("#example3").DataTable({
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