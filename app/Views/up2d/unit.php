<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UP2D Lampung</title>
    <link rel="shortcut icon" href="<?= base_url("assets/images/logo_pln.png") ?>">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url("assets/img/favicon.png") ?>" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url("assets/vendor/aos/aos.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/glightbox/css/glightbox.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/swiper/swiper-bundle.min.css") ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="<?= base_url("assets/css/styles.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/css/tab.css") ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="#">UP2D</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#">Cari</a></li>
                    <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="#about">Keluar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="unit" class="unit section-bg"><br>
            <div class="container p-3 my-5">
                <!-- DataTable Code starts -->
                <div class="text-right">
                    <a href="<?= base_url("/admin/tambah_unit") ?>" class="btn btn-req border-dark" style="margin-bottom: 20px;">Tambah Data</a>
                </div>
                <table id="example" class="table" style="width:100%; margin-top: 20px;">
                    <thead>
                        <tr>
                            <th class="table-info">No</th>
                            <th class="table-info">Unit</th>
                            <th class="table-info">Nama Lama</th>
                            <th class="table-info">Nama Baru</th>
                            <th class="table-info">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td>
                                <a class="lihat" href="#">
                                    <img src="<?= base_url("assets/images/eye.png") ?>" alt="">

                                </a>
                                <a class="edit" href="<?= base_url("/admin/edit_unit") ?>">
                                    <img src="<?= base_url("assets/images/edit.png") ?>" alt="" style="width:30px; height:30px;">
                                </a>
                                <a class="hapus" href="#">
                                    <img src="<?= base_url("assets/images/delete.png") ?>" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tanjung Karang</td>
                            <td>HUJAN</td>
                            <td>P013</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <!-- End Why Us Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright 2024 <strong><span>PLN UP2D LAMPUNG</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="<?= base_url("assets/vendor/aos/aos.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/glightbox/js/glightbox.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/swiper/swiper-bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/waypoints/noframework.waypoints.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/php-email-form/validate.js") ?>"></script>

    <!-- DataTable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url("assets/js/main.js") ?>"></script>
    <script src="<?= base_url("assets/js/script.js") ?>"></script>
</body>

</html>