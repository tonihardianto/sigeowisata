<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'asset/dist/css/adminlte.min.css' ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Register</b> Form</a>
        </div>

        <div class="card" style="border-radius: 15px">
            <div class="card-body register-card-body" style="border-radius: 20%">
                <p class="login-box-msg">Register a new membership</p>

                <form id="quickForm" action="<?php echo base_url() . 'Member/Signup/signup' ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-at"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama Lengkap" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-signature"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="" disabled selected>-- Pilih Gender --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-venus-mars"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" onkeypress="return numOnly(event)" maxlength="15" id="telepon" name="telepon" class="form-control" placeholder="Telepon" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="input-group mb-3">
                        <textarea class="form-control" name="alamat" id="alamat" cols="48" rows="3"></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div> -->

                <a href="<?php echo base_url().'member/login' ?>" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url() . 'asset/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'asset/dist/js/adminlte.min.js' ?>"></script>
    <!-- jquery-validation -->
    <script src="<?php echo base_url() . 'asset/plugins/jquery-validation/jquery.validate.min.js' ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // $("#quickForm").submit(function(e) {
            //     e.preventDefault();
            //     var url = '<?php echo base_url() . 'applicant/login' ?>'
            //     $.ajax({
            //         url: '<?php echo base_url('applicant/register/add_applicant'); ?>',
            //         type: 'post',
            //         data: $(this).serialize(),
            //         success: function(data) {
            //             toastr.info(
            //                 'Pendaftaran Anda Sedang Kami diproses.'
            //             );
            //             //document.getElementById("quickForm").reset();
            //             <?php
                            //             //$this->session->set_flashdata('success', 'Silahkan Cek Email Anda Untuk Info Login!');
                            //             
                            ?>
            //             window.location.href= url;
            //             toastr.info('Pendaftaran Anda Sedang Kami diproses.');
            //         }

            //     })
            // });
            $('#quickForm').validate({
                rules: {
                    email: {
                        type: email,
                        required: true
                    },
                    username: {
                        required: true
                    },
                    fullname: {
                        required: true,
                    },
                    gender: {
                        required: true,
                    },
                    telepon: {
                        required: true,
                    },
                    agreeTerms: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "Email tidak boleh kosong!",
                        type: "Email menggunakan @"
                    },
                    username: {
                        required: "Username tidak boleh kosong!"
                    },
                    fullname: {
                        required: "Nama lengkap tidak boleh kosong!"
                    },
                    gender: {
                        required: "Silahkan pilih gender!"
                    },
                    telepon: {
                        required: "Telepon harus di isi."
                    },
                    agreeTerms: "Terima ketentuan kami"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

</body>

</html>