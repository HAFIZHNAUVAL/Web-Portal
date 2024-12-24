<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sispaldeba</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/images/logo/logo5.png" rel="icon">
    <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="asset/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jun 19 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php foreach ($home as $k) : ?>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="<?php echo base_url('/') ?>" class="logo d-flex align-items-center">

                    <span>Sispaldeba</span>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#features">Alur Layanan</a></li>
                        <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                        <!-- <li><a class="nav-link scrollto" href="<?php echo base_url('/layanan') ?>">Layanan</a></li> -->
                        <!-- <li><a class="nav-link scrollto" href="#team">Struktur Desa</a></li>
                        <li><a class="nav-link scrollto" href="#team">Lembaga</a></li> -->

                        <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        <li><a class="nav-link scrollto" href="<?php echo base_url('Auth/index') ?>">Login</a></li>

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up"><?= $k['judul']; ?></h1>
                        <h2 data-aos="fade-up" data-aos-delay="400"><?= $k['judul1']; ?></h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-center text-lg-start">
                                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Get Started</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/images/logo/cloud storage.png" class=img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id=" main">
            <!-- ======= About Section ======= -->
            <section id="about" class="counts">

                <div class="container" data-aos="fade-up">
                    <div class="row gx-5">

                        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="content">
                                <h3>Apa itu Sispaldeba ?</h3>
                                <!-- <h2>Sistem Pengajuan Permohonan dan Pengaduan Masyarakat Online.</h2> -->
                                <p><?= $k['judul2']; ?></p>
                                <br>
                                <p>
                                    Dengan dibuatnya aplikasi ini masyarakat dapat mengajukan permohonan layanan online dan berani menyampaikan aduan terkait insfraktruktur dan layanan desa .
                                </p>
                                <div class="text-center text-lg-start">
                                    <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <!-- <span>Read More</span> -->
                                        <button class="btn btn-primary">Read More <i class="bi bi-arrow-right"></i></button>
                                        <!-- <i class="bi bi-arrow-right"></i> -->
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                            <img src="assets/images/logo/about.png" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>

            </section><!-- End About Section -->

            <!-- ======= Values Section ======= -->
            <!-- <section id="values" class="values">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h2>Our Values</h2>
                        <p>Odit est perspiciatis laborum et dicta</p>
                    </header>

                    <div class="row">

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="box">
                                <img src="asset/img/values-1.png" class="img-fluid" alt="">
                                <h3>Ad cupiditate sed est odio</h3>
                                <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                            <div class="box">
                                <img src="asset/img/values-2.png" class="img-fluid" alt="">
                                <h3>Voluptatem voluptatum alias</h3>
                                <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                            <div class="box">
                                <img src="asset/img/values-3.png" class="img-fluid" alt="">
                                <h3>Fugit cupiditate alias nobis.</h3>
                                <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </section> -->
            <!-- End Values Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">

                    <div class="row gy-4">

                        <div class="col-lg-3 col-md-6">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="<?= $k['jumlah_penduduk']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Jumlah Penduduk</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="<?= $k['laki']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Laki-Laki</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="count-box">
                                <i class="bi bi-person" style="color: #bb0852;"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="<?= $k['prempuan']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Prempuan</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="count-box">
                                <i class="bi bi-people" style="color: #15be56;"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="<?= $k['jumlah_kk']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Jumlah Kepala Keluarga</p>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </section><!-- End Counts Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <p>Alur Pengajuan Layanan</p>
                    </header>

                    <div class="row">

                        <div class="col-lg-6">
                            <img src="asset/img/features.png" class="img-fluid" alt="">

                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check">1</i>
                                        <h3>Login</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check">2</i>
                                        <h3>Pilih pengajuan layanan</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check">3</i>
                                        <h3>Input data</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check">4</i>
                                        <h3>Kirim Layanan</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check">5</i>
                                        <h3>Proses Verifikasi</h3>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check">6</i>
                                        <h3>TIndak lanjut</h3>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="800">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check">7</i>
                                        <h3>Dapat Tanggapan</h3>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="900">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check">8</i>
                                        <h3>Selesai</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- / row -->

                    <!-- Feature Tabs -->
                    <!-- <div class="row feture-tabs" data-aos="fade-up">
                        <div class="col-lg-6">
                            <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3> -->

                    <!-- Tabs -->
                    <!-- <ul class="nav nav-pills mb-3">
                                <li>
                                    <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
                                </li>
                            </ul> -->
                    <!-- End Tabs -->

                    <!-- Tab Content -->
                    <!-- <div class="tab-content">

                                <div class="tab-pane fade show active" id="tab1">
                                    <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                                    </div>
                                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                    </div>
                                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                                </div> End Tab 1 Content -->

                    <!-- <div class="tab-pane fade show" id="tab2">
                                    <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                                    </div>
                                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                    </div>
                                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                                </div> -->
                    <!-- End Tab 2 Content -->

                    <!-- <div class="tab-pane fade show" id="tab3">
                                    <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                                    </div>
                                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                    </div>
                                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                                </div> -->
                    <!-- End Tab 3 Content -->
                    <!-- 
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <img src="asset/img/features-2.png" class="img-fluid" alt="">
                        </div>

                    </div> -->
                    <!-- End Feature Tabs -->

                    <!-- Feature Icons -->
                    <div class="row feature-icons" data-aos="fade-up">
                        <h3>Alur Aduan</h3>

                        <div class="row">

                            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                                <img src="asset/img/features-3.png" class="img-fluid p-4" alt="">
                            </div>

                            <div class="col-xl-8 d-flex content">
                                <div class="row align-self-center gy-4">

                                    <div class="col-md-6 icon-box" data-aos="fade-up">
                                        <i>1</i>
                                        <div>
                                            <h4>Tulis Laporan</h4>
                                            <p>Tuliskan laporan aduan anda secara menyeluruh.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                        <i>2</i>
                                        <div>
                                            <h4>Kirim Aduan</h4>
                                            <p>Setelah aduan anda dinputkan semua, maka selanjutnya kirim dengan menekan tombol submit.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                        <i>3</i>
                                        <div>
                                            <h4>Proses Verifikasi</h4>
                                            <p>Laporan kamu akan diverifikasi dan diteruskan.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                        <i>4</i>
                                        <div>
                                            <h4>Tindak Lanjut</h4>
                                            <p>Petugas akan menindak-lanjuti laporan aduan anda.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                        <i>5</i>
                                        <div>
                                            <h4>Dapat Tanggapan</h4>
                                            <p>Laporan aduan anda akan di tanggapi oleh petugas.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                        <i>6</i>
                                        <div>
                                            <h4>Selesai</h4>
                                            <p>Selamat, laporan aduan anda sudah terselesaikan. Terima kasih</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div><!-- End Feature Icons -->

                </div>

            </section><!-- End Features Section -->



            <!-- ======= Services Section ======= -->
            <section id="services" class="services">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">

                        <p>Keuntungan Menggunakan Sispaldeba</p>
                    </header>

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-box blue">
                                <i class="bi-eye-slash bi-bounc icon"></i>
                                <h3>Privasi Terjaga</h3>
                                <p><?= $k['keuntungan1']; ?>.</p>
                                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-box orange">
                                <i class="bi-solid bi-lock icon"></i>
                                <h3>Pengajuan layanan dan Aduan dengan Aman</h3>
                                <p><?= $k['keuntungan2']; ?>.</p>
                                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-box green">
                                <i class="ri-discuss-line icon"></i>
                                <h3>Ditanggapi Secara Cepat</h3>
                                <p><?= $k['keuntungan3']; ?>.</p>
                                <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Asperiores Commodi</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Velit Doloremque.</h3>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Dolori Architecto</h3>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div> -->

                    </div>

                </div>

            </section><!-- End Services Section -->



            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h2>F.A.Q</h2>
                        <p>Pertanyaan terkait pengajuan layanan dan aduan</p>
                    </header>

                    <div class="row">
                        <div class="col-lg-6">
                            <!-- F.A.Q List 1-->
                            <div class="accordion accordion-flush" id="faqlist1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                            Apa itu sispaldeba?
                                        </button>
                                    </h2>
                                    <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Sispaldeba merupakan sistem informasi Desa Bandungsari dalam melayani masyarakat seperti pengajuan permohonan layanan, kritik dan saran.


                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                            Bagaimana caranya untuk pengajuan layanan dan pengaduan?
                                        </button>
                                    </h2>
                                    <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Anda harus mempunyai akun terlebih dahulu dengan cara registrasi akun baru, selanjutnya masuk dengan akun yang sudah terdaftar dan masuk pada menu layanan.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                            Bagaimana cara melihat status pengajuan layanan dan aduan?
                                        </button>
                                    </h2>
                                    <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Login terlebih dahulu dengan akun yang sudah terdaftar, selanjutnya arahkan pada menu status, maka sistem akan menampilkan status layanan dan aduan.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">

                            <!-- F.A.Q List 2-->
                            <div class="accordion accordion-flush" id="faqlist2">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                            Apakah data terkait pengajuan layanan akan aman dan terjaga privasinya?
                                        </button>
                                    </h2>
                                    <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                        <div class="accordion-body">
                                            Aplikasi ini didesain untuk menjaga kerahasiaan informasi pribadi anda.Dengan demikian, anda dapat merasa tenang dan percaya diri saat menggunakan aplikasi ini, karena privasi anda menjadi prioritas utama.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                            Bagaimana cara mendaftar akun baru?
                                        </button>
                                    </h2>
                                    <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                        <div class="accordion-body">
                                            Masuk ke form registrasi akun, selanjut isi form data registrasi, lalu submit. Kemudian anda dapat login ke menu pengajuan.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                            Apakah Sispaldeba ini bisa diakses dengan handphone?
                                        </button>
                                    </h2>
                                    <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                        <div class="accordion-body">
                                            Aplikasi Sispaldeba ini sudah responsive dan dirancang agar semua pengguna dapat diakses dengan handphone atau pc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section><!-- End F.A.Q Section -->
        <?php endforeach; ?>

        <!-- ======= Portfolio Section ======= -->
        <!-- <section id="portfolio" class="portfolio">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h2>Portfolio</h2>
                        <p>Check our latest work</p>
                    </header>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-card">Card</li>
                                <li data-filter=".filter-web">Web</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 2</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 2</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 1</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 3</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="asset/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="asset/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section> -->
        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->


        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Testimonials</h2>
                    <p>Apa kata Mereka Terkait SISPALDEBA?</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimoni as $k) : ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <?= $k['testimoni']; ?>
                                    </p>
                                    <div class="profile mt-auto">
                                        <img src="<?= base_url() . "/assets/images/testimonial/" . $k['image']; ?>" class="testimonial-img" alt="">
                                        <h3><?= $k['nama']; ?></h3>
                                        <!-- <h4>Ceo &amp; Founder</h4> -->
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        <?php endforeach; ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->


        <!-- ======= Team Section ======= -->
        <!-- <section id="team" class="team">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h2>Team</h2>
                        <p>Struktur Desa</p>
                    </header>

                    <div class="row gy-4">

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="asset/img/team/team-1.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <div class="member">
                                <div class="member-img">
                                    <img src="asset/img/team/team-2.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="member">
                                <div class="member-img">
                                    <img src="asset/img/team/team-3.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                            <div class="member">
                                <div class="member-img">
                                    <img src="asset/img/team/team-4.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section> -->

        <!-- End Team Section -->



        <!-- ======= Recent Blog Posts Section =======
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="asset/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Tue, September 15</span>
                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="asset/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Fri, August 28</span>
                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="asset/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Mon, July 11</span>
                            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>Desa Bandungsari,<br>Kec Banjaharjo, Kab Brebes</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>0813-9067-0707<br>0877-7188-8856</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>pemdesbandungsari50@gmail.com <br><br><br><br></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Senin - Kamis<br>8:30AM - 14:00PM <br>Juma'at<br>08.00 - 11.30</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger" role="alert">
                                <h4>Periksa Entrian Form</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?= session()->getFlashdata('pesan'); ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url('Testimonial/create_testimoni') ?>" method="post" role="form" enctype="multipart/form-data">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Your Name">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="testimoni" id="testimoni" rows="6" placeholder="Pesan"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="position-relative">
                                        <label for="image" class="form-label">Foto</label>
                                        <!-- File uploader with image preview -->
                                        <input type="file" class="image-preview-filepond" name="image" id="image" />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">

                                    <button type="submit" name="submit" class="btn btn-primary mb-2 btn-pill">Buat Testimonial</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-newsletter">

            </div>

            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                            <a href="" class="logo d-flex align-items-center">
                                <!-- <img src="assets/images/logo/sispaldeba.png" alt=""> -->
                                <span>Sispaldeba</span>
                            </a>
                            <br><br>
                            <p>Terima kasih atas kunjungan Anda. Semoga dapat bermanfaat <br>dan mari kibarkan terus semangat dalam memajukan desa !!! <br>Desa Berdaya, Desa Berjaya, Warga Sejahtera !!! MERDESA !!!.</p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Alur Layanan</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Layanan</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Contact Us</a></li>
                            </ul>
                        </div>



                        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                            <h4>Contact Us</h4>
                            <p>
                                Jalan Desa Bandungsari <br>
                                Kec Banjaharjo Kab Brebes, Jawa Tengah<br>
                                <br><br>
                                <strong>Phone:</strong> 0813-9067-0707<br>
                                <strong>Email:</strong> pemdesbandungsari50@gmail.com<br>
                            </p>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright 2023 <strong><span>Sispaldeba</span></strong>. All Rights Reserved
                </div>

            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="asset/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="asset/vendor/aos/aos.js"></script>
        <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="asset/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="asset/js/main.js"></script>

</body>

</html>