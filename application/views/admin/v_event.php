<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Tamu</title>
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


    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' ?>">
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
                            <h1>Data Event</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Event</li>
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
                            <div class="card">
                                <div class="card-header">
                                    <div class="btn-group">
                                        <a href="#" data-toggle="modal" data-target="#myEvent"><button class="btn btn-primary">Tambah Event <i class="fas fa-plus"></i></button></a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Event</th>
                                                <th>Tempat</th>
                                                <th>Mulai</th>
                                                <th>Berakhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data->result_array() as $key) :
                                                $id = $key['event_id'];
                                            ?>
                                                <tr>
                                                    <td style="text-align:center;"><?php echo $no++; ?></td>
                                                    <td><?php echo $key['event_nama']; ?></td>
                                                    <td><?php echo $key['event_alamat']; ?></td>
                                                    <td><?php echo $key['event_start']; ?></td>
                                                    <td><?php echo $key['event_end']; ?></td>
                                                    <td style="text-align:center;">
                                                        <a href="#myEdit<?php echo $id; ?>" class="btn btn-xs btn-warning" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                                                        <a class="btn btn-xs btn-danger" href="#myDelete<?php echo $id; ?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash-alt"></span> Hapus</a>

                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                            </tfoot>
                                    </table>
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

        <div class="modal fade" id="myEvent">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                    </div>
                    <form method="post" action="<?php echo base_url() . 'Admin/Event/tambah'; ?>" id="form_sample_1" class="form-horizontal">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-5 col-control-label">Nama Event</label>
                                <div class="col-sm-11">
                                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Event" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat" class="col-sm-5 col-control-label">Tempat</label>
                                <div class="col-sm-11">
                                    <input class="form-control" type="text" name="tempat" id="tempat" placeholder="Tempat Event" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-5 col-control-label">Mulai</label>
                                <div class="col-sm-11">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" name="mulai" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask="" im-insert="false">
                                    </div>
                                    <small class="text-danger">Contoh: 2021/01/28</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-5 col-control-label">Selesai</label>
                                <div class="col-sm-11">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" name="akhir" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask="" im-insert="false">
                                    </div>
                                    <small class="text-danger">Contoh: 2021/01/28</small>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary"><i class="icon-remove icon-white"></i>Simpan</button>
                        </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </form>
        </div>

        <!-- Modal Edit -->
        <?php foreach ($edit->result_array() as $i) :

            $id = $i['event_id'];
            $nama = $i['event_nama'];
            $tempat = $i['event_alamat'];
            $mulai = $i['event_start'];
            $selesai = $i['event_end'];

        ?>
            <div class="modal fade" id="myEdit<?php echo $id ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <form method="post" action="<?php echo base_url() . 'Admin/Event/edit'; ?>" id="form_sample_1" class="form-horizontal">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-5 col-control-label">Nama Event</label>
                                    <div class="col-sm-11">
                                        <input type="hidden" name="id" id="id">
                                        <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $nama ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat" class="col-sm-5 col-control-label">Tempat</label>
                                    <div class="col-sm-11">
                                        <input class="form-control" type="text" name="tempat" id="tempat" value="<?php echo $tempat ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-5 col-control-label">Mulai</label>
                                    <div class="col-sm-11">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="text" name="mulai" value="<?php echo $mulai ?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask="" im-insert="false">
                                        </div>
                                        <small class="text-danger">Contoh: 2021/01/28</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-5 col-control-label">Selesai</label>
                                    <div class="col-sm-11">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="text" name="akhir" value="<?php echo $selesai ?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask="" im-insert="false">
                                        </div>
                                        <small class="text-danger">Contoh: 2021/01/28</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="icon-remove icon-white"></i>Simpan</button>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </form>
            </div>
        <?php endforeach ?>
        <!-- Begin Modal hapus -->
        <?php foreach ($del->result_array() as $key) {
            $id = $key['event_id'];
            $nama = $key['event_nama'];
        ?>

            <div class="modal fade" id="myDelete<?php echo $id; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Peringatan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <form method="post" action="<?php echo base_url() . 'Admin/Event/delete'; ?>" id="form_sample_1" class="form-horizontal">
                            <div class="modal-body">
                                <p>Yakin ingin menghapus tamu <b><?php echo $nama; ?></b>..?</p>
                                <input name="id" type="hidden" value="<?php echo $id; ?>">
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-warning"><i class="icon-remove icon-white"></i>Hapus</button>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </form>
            </div>
        <?php } ?>
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
    <script src="<?php echo base_url() . 'asset/plugins/select2/js/select2.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/toastr/toastr.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/plugins/inputmask/min/jquery.inputmask.bundle.min.js' ?>"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'asset/dist/js/demo.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/dist/js/myscript.js' ?>"></script>
    <!-- page script -->
    <script>
        $(function() {
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
            $('#datemask').inputmask('yyyy/mm/dd', {
                'placeholder': 'yyyy/mm/dd'
            });
            $('[data-mask]').inputmask()
        });
    </script>
    <script type="text/javascript">
        const toastrDefaultSuccess = $('toastrDefaultSuccess').data('toastrDefaultSuccess');
    </script>
</body>

</html>