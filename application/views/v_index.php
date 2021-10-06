<!DOCTYPE html>
<html lang="en">
<?php
foreach ($home->result_array() as $site) :
    $title = $site['site_judul'];
    $desc = $site['site_desc'];
    $header = $site['site_head'];
    $text = $site['site_text'];
    $contenttitle = $site['site_content_title'];
    $contentvalue = $site['site_content_value'];
?>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Template Mo">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <title>Geowisata Jogja</title>
        <!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/assets/css/bootstrap.min.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/assets/css/font-awesome.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/assets/css/templatemo-art-factory.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/assets/css/owl-carousel.css' ?>">

        <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
    </head>

    <body onload=" myFunction()">
        <!-- ***** Preloader Start ***** 
            -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->


        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="<?php echo base_url() . 'home'; ?>" class="logo"><?php echo $title;  ?></a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="#about" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="#about">Wisata</a></li>
                                <li class="scroll-to-section"><a href="<?php echo base_url().'event' ?>">Event</a></li>
                                <li class=""> <a href="<?php echo base_url() . 'map' ?>">Peta Wisata</a></li>
                                <!-- <li class=""><a href="#myTamu1" data-toggle="modal">Buku Tamu</a></li> -->
                                <!-- <li class="scroll-to-section"><a href="#frequently-question">Frequently Questions</a></li>
                                <li class="submenu">
                                    <a href="javascript:;">Drop Down</a>
                                    <ul>
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Features</a></li>
                                        <li><a href="">FAQ's</a></li>
                                        <li><a href="">Blog</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="<?php echo base_url() . 'Member/Login' ?>">Login</a></li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->


        <!-- ***** Welcome Area Start ***** -->
        <!-- <div class="welcome-area" id="welcome"> -->

        <!-- ***** Header Text Start ***** -->
        <!-- <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <h1><?php echo $header; ?></h1>
                            <p><?php echo $text; ?></p>
                            <a href="<?php echo base_url() . 'applicant/register'; ?>" class="main-button-slider">Daftar</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="<?php echo base_url() . 'asset/assets/images/slider-icon.png' ?>" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- ***** Header Text End ***** -->
        <!-- </div> -->
        <!-- ***** Welcome Area End ***** -->


        <!-- ***** Features Big Item Start ***** -->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <img src="<?php echo base_url() . 'asset/assets/images/left.png' ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                    <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                        <div class="left-heading">
                            <h5><?php echo $contenttitle; ?></h5>
                        </div>
                        <div class="left-text">
                            <p><?php echo $contentvalue; ?>.</p>
                            <a href="#about2" class="main-button">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hr"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Big Item End ***** -->


        <!-- ***** Features Big Item Start ***** -->
        <!-- <section class="section" id="about2">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                        <div class="left-heading">
                            <h5>Curabitur aliquam eget tellus id porta</h5>
                        </div>
                        <p>Proin justo sapien, posuere suscipit tortor in, fermentum mattis elit. Aenean in feugiat purus.</p>
                        <ul>
                            <li>
                                <img src="<?php echo base_url() . 'asset/assets/images/about-icon-01.png' ?>" alt="">
                                <div class="text">
                                    <h6>Nulla ultricies risus quis risus</h6>
                                    <p>You can use this website template for commercial or non-commercial purposes.</p>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url() . 'asset/assets/images/about-icon-02.png' ?>" alt="">
                                <div class="text">
                                    <h6>Donec consequat commodo purus</h6>
                                    <p>You have no right to re-distribute this template as a downloadable ZIP file on any website.</p>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url() . 'asset/assets/images/about-icon-03.png' ?>" alt="">
                                <div class="text">
                                    <h6>Sed placerat sollicitudin mauris</h6>
                                    <p>If you have any question or comment, please <a rel="nofollow" href="https://templatemo.com/contact">contact</a> us on TemplateMo.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="<?php echo base_url() . 'asset/assets/images/right-image.png' ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                </div>
            </div>
        </section> -->
        <!-- ***** Features Big Item End ***** -->


        <!-- ***** Features Small Start ***** -->
        <section class="section" id="services">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($kat->result_array() as $k) : ?>
                            <div class="item service-item">
                                <div class="icon">
                                    <i><img src="<?php echo base_url() . 'asset/marker/' . $k['kategori_marker'] ?>" alt=""></i>
                                </div>
                                <h5 class="service-title"><?php echo $k['kategori_nama'] ?></h5>
                                <!-- <p>Pellentesque vitae urna ut nisi viverra tristique quis at dolor. In non sodales dolor, id egestas quam. Aliquam erat volutpat. </p> -->
                                <a href="<?php echo base_url().'Map' ?>" class="main-button">Discover More</a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Small End ***** -->


        <!-- ***** Frequently Question Start ***** -->
        <section class="section" id="frequently-question">
            <div class="container">
                <!-- ***** Section Title Start ***** -->
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Buku Tamu</h2>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <div class="section-heading">
                            <p>Buku tamu membantu kami menganalisa kebiasaan pengunjung di dalam website ini</p>
                        </div>

                    </div>
                </div> -->
                <!-- ***** Section Title End ***** -->
                <div class="row">

                </div>
            </div>
        </section>
        <!-- ***** Frequently Question End ***** -->

        <div class="modal modal-info fade" id="myTamu" data-backdrop="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Silahkan Isi Buku Tamu</h4>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <form id="form-tamu" method="post" action="" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-5 col-form-label">Nama Anda</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-5 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-5 col-form-label">Kepentingan</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="pesan" id="pesan" cols="10" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Nanti</button> -->
                        <button class="btn btn-warning" type="submit" id="btn-simpan">Submit</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- ***** Contact Us Start ***** -->
        
        <!-- ***** Contact Us End ***** -->


        <!-- ***** Footer Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <p class="copyright">Copyright &copy; 2020 Geo Wisata Yogyakarta

                            <!--    . Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p> -->
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="<?php echo base_url() . 'asset/assets/js/jquery-2.1.0.min.js' ?>"></script>

        <!-- Bootstrap -->
        <script src="<?php echo base_url() . 'asset/assets/js/popper.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/bootstrap.min.js' ?>"></script>

        <!-- Plugins -->
        <script src="<?php echo base_url() . 'asset/assets/js/owl-carousel.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/scrollreveal.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/waypoints.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/jquery.counterup.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/assets/js/imgfix.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/plugins/jquery-validation/jquery.validate.min.js' ?>"></script>

        <!-- Global Init -->
        <script src="<?php echo base_url() . 'asset/assets/js/custom.js' ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // setTimeout(function() {
                //     $('#myTamu').modal('show');
                // }, 10000);

                // setTimeout(function() {
                //     $('#myTamu').modal('show');
                // }, 59000)
            // });
        </script>

        <!-- <script type="text/javascript">
            $('#btn-simpan').on('click', function() {
                var data = $('#form-tamu').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('Tamu/simpan') ?>",
                    dataType: "JSON",
                    data: data,
                    success: function(data) {
                        $('[name="nama"]').val("");
                        $('[name="email"]').val("");
                        $('[name="pesan"]').val("");
                        $('#myTamu').modal("hide");
                        Swal.fire('Terima kasih telah mengisi buku tamu :)')
                    }
                });
                return false;
            });
        </script> -->


        <script type="text/javascript">
            $(document).ready(function() {
                // $.validator.setDefaults({
                //     submitHandler: function() {
                //         $("#form-tamu").submit(function(e) {
                //             e.preventDefault();
                //             var data = $('#form-tamu').serialize();
                //             $.ajax({
                //                 type: "POST",
                //                 url: "<?php echo base_url('Tamu/simpan') ?>",
                //                 dataType: "JSON",
                //                 data: data,
                //                 success: function(data) {
                //                     $('[name="nama"]').val("");
                //                     $('[name="email"]').val("");
                //                     $('[name="pesan"]').val("");
                //                     $('#myTamu').modal("hide");
                //                     Swal.fire('Terima kasih telah mengisi buku tamu :)')
                //                 }
                //             });
                //             return false;
                //         })

                //     }
                // })


                $('#form-tamu').validate({
                    rules: {
                        nama: {
                            required: true
                        },
                        email: {
                            required: true
                        },
                        pesan: {
                            required: true,
                        },
                    },
                    messages: {
                        nama: {
                            required: "Email tidak boleh kosong!",
                            type: "Email menggunakan @"
                        },
                        email: {
                            required: "Mohon isi email anda!",
                            type: "Email menggunakan @",
                        },
                        pesan: {
                            required: "Mohon masukkan pesan anda!"
                        },
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
<?php endforeach ?>

</html>