<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DAK Irigasi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/pu.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/pu.png') ?>" type="image/png">
    <link href="<?php echo base_url('assets/img/pu.png') ?>" rel="icon">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/animate/animate.min.css') ?>" />
    <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

    <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/css2/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/css2/style.css') ?>" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <!-- Libraries Stylesheet -->




    <style>
        .header-container {
            position: relative;
            height: 100vh;
            background: url('<?php echo base_url('assets/img/irigasi2.jpg') ?>') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            color: white;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: rgba(101, 100, 100, 0.5); */
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .header-content h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .separator {
            width: 50%;
            height: 5px;
            background-color: yellow;
            margin: 10px auto;
        }

        .header-content p {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .subtext {
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="border-end border-warning pe-3">
                            <a href="https://maps.app.goo.gl/Qvda6ZZSLauQYo3V7" class="text-muted small"><i
                                    class="fas fa-map-marker-alt text-warning me-2"></i>Find A Location</a>
                        </div>
                        <div class="ps-3">
                            <a href="mailto:pfidirigasi@gmail.com" class="text-muted small"><i
                                    class="fas fa-envelope text-warning me-2"></i>pfidirigasi@pu.go.id</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex border-end border-warning pe-3">
                            <a class="btn p-0 text-warning me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn p-0 text-warning me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn p-0 text-warning me-3" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn p-0 text-warning me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="<?php echo base_url('/') ?>" class="navbar-brand p-0">
                    <img src="<?php echo base_url('assets/img/pupr2.png') ?>" class="navbar-brand fa-2x" style="width: 140px; height: 140%;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="<?php echo base_url('/') ?>" class="nav-item nav-link active">Home</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Profil</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="<?php echo base_url('Home/dak') ?>" class="dropdown-item">Stuktur Organisasi</a>
                                <a href="<?php echo base_url('Home/dak') ?>" class="dropdown-item">Informasi Organisasi</a>
                                <a href="<?php echo base_url('Home/pejabat') ?>" class="dropdown-item">Informasi Pejabat</a>
                               
                            </div>
                        </div> -->
                        <a href="service.html" class="nav-item nav-link">Monev</a>
                        <a href="<?php echo base_url('Home/timeline') ?>" class="nav-item nav-link">Timeline</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">DAK</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="<?php echo base_url('Home/dak') ?>" class="dropdown-item">DAK TA.2025</a>
                                <a href="<?php echo base_url('Home/dak') ?>" class="dropdown-item">DAK TA.2024</a>
                                <!-- <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                <a href="404.html" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Publikasi</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="<?php echo base_url('Home/galeri') ?>" class="dropdown-item">Galeri</a>
                                <a href="<?php echo base_url('Home/berita') ?>" class="dropdown-item">Berita</a>
                                <a href="<?php echo base_url('Home/produkHukum') ?>" class="dropdown-item">Produk Hukum</a>
                                <!-- <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                <a href="404.html" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="<?php echo base_url('Home/contact') ?>" class="nav-item nav-link">Contact</a>
                        <a href="<?php echo base_url('Auth/index') ?>" class="btn-search btn btn-warning flex-shrink-0 ">Login</a>
                        <div class="nav-btn px-3">
                            <button class="btn-search btn btn-warning btn-md-square rounded-circle flex-shrink-0"
                                data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                    class="fas fa-search"></i></button>
                            <!-- <a href="#" class="btn btn-warning rounded-pill py-2 px-4 ms-3 flex-shrink-0"> Get a
                                Quote</a> -->
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                    <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
                        data-wow-delay=".9s">
                        <i class="fa fa-phone-alt fa-2x"></i>
                        <div class="position-absolute" style="top: 7px; right: 12px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                    <div class="d-flex flex-column ms-3">
                        <span>More information</span>
                        <a href="mailto:pfidirigasi@gmail.com" class="text-dark">psdapfid@gmail.com</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-warning">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                                class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>