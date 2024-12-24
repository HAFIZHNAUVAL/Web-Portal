<style>
    .roadmap-carousel {
        position: relative;
    }

    .roadmap-carousel::before {
        position: absolute;
        content: "";
        height: 0;
        width: 100%;
        top: 20px;
        left: 0;
        border-top: 2px dashed #999;
    }

    .roadmap-carousel .roadmap-item {
        position: relative;
        padding-top: 150px;
        text-align: center;
    }

    .roadmap-carousel .roadmap-item .roadmap-point {
        position: absolute;
        width: 30px;
        height: 30px;
        top: 6px;
        left: 50%;
        margin-left: -15px;
        background: rgb(23, 124, 255);
        border: 2px solid #000;
        transform: rotate(45deg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .roadmap-carousel .roadmap-item .roadmap-point span {
        display: block;
        width: 18px;
        height: 18px;
        background: rgb(23, 124, 255);
        transform: rotate(-45deg);
    }

    .roadmap-carousel .roadmap-item::before {
        position: absolute;
        content: "";
        width: 0;
        height: 115px;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        border-right: 2px dashed #999;
    }

    .roadmap-carousel .roadmap-item::after {
        position: absolute;
        content: "";
        width: 14px;
        height: 14px;
        top: 111px;
        left: 50%;
        margin-left: -7px;
        transform: rotate(45deg);
        background: rgb(23, 124, 255);
    }

    .roadmap-carousel h5 {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
        color: #000;
    }

    .roadmap-carousel span {
        font-size: 14px;
        color: #666;
    }

    .roadmap-carousel .owl-nav {
        margin-top: 40px;
        display: flex;
        justify-content: center;
    }

    .roadmap-carousel .owl-nav .owl-prev,
    .roadmap-carousel .owl-nav .owl-next {
        margin: 0 12px;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 22px;
        color: #fff;
        background: rgb(23, 124, 255);
        transition: .5s;
    }

    .roadmap-carousel .owl-nav .owl-prev:hover,
    .roadmap-carousel .owl-nav .owl-next:hover {
        color: rgb(23, 124, 255);
        background: #000;
    }
</style>
<!-- Carousel Start -->
<?php foreach ($home as $k) : ?>
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-warning">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Portal DAK Irigasi</h4>
                                <h1 class="display-1 text-white mb-4"><?= $k['judul']; ?></h1>
                                <p class="mb-5 fs-5"><?= $k['judul1']; ?></p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <!-- Tombol untuk membuka modal -->
                                    <button class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" data-bs-toggle="modal" data-bs-target="#videoModal">
                                        <i class="fas fa-play-circle me-2"></i> Watch Video
                                    </button>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="<?php echo base_url('assets/img/irigasi.png') ?>" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item header-container">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft"></div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Portal PSDA PFID</h4>
                                <h1 class="display-1 text-white mb-4">Dana Alokasi Khusus</h1>
                                <p class="mb-5 fs-5">Portal PSDA PFID ini adalah portal yang berisikan kegiatan dan
                                    informasi terkait PSDA PFID.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <!-- Iframe untuk video -->
                        <iframe id="videoIframe" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videoModal = document.getElementById('videoModal');
            const videoIframe = document.getElementById('videoIframe');

            videoModal.addEventListener('show.bs.modal', function() {
                // URL video YouTube yang akan ditampilkan
                videoIframe.src = "https://www.youtube.com/embed/1q0ViNFt08A?autoplay=1";
            });

            videoModal.addEventListener('hide.bs.modal', function() {
                // Menghapus src untuk menghentikan video saat modal ditutup
                videoIframe.src = "";
            });
        });
    </script>

    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid bg-light about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item-content bg-white rounded p-5 h-100">
                        <h4 class="text-warning">ABOUT US</h4>
                        <h1 class="display-4 mb-4">PSDA PFID</h1>
                        <p style="text-align:justify"><?= $k['judul2']; ?>
                        </p>
                        <p>
                        </p>
                        <p class="text-dark"><i class="fa fa-check text-warning me-3"></i>We can save your money.</p>
                        <p class="text-dark"><i class="fa fa-check text-warning me-3"></i>Production or trading of good
                        </p>
                        <p class="text-dark mb-4"><i class="fa fa-check text-warning me-3"></i>Our life insurance is
                            flexible</p>
                        <a class="btn btn-warning rounded-pill py-3 px-5" href="#">More Information</a>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-5 h-100">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="rounded bg-light">
                                    <img src="<?php echo base_url('assets/img/sulut8.jpg') ?>" class="img-fluid rounded w-100" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-warning fs-2 fw-bold" data-toggle="counter-up">129</span>
                                        <span class="h1 fw-bold text-warning">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Insurance Policies</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-warning fs-2 fw-bold" data-toggle="counter-up">99</span>
                                        <span class="h1 fw-bold text-warning">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Awards WON</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-warning fs-2 fw-bold" data-toggle="counter-up">556</span>
                                        <span class="h1 fw-bold text-warning">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Skilled Agents</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-warning fs-2 fw-bold" data-toggle="counter-up">967</span>
                                        <span class="h1 fw-bold text-warning">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Team Members</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- About End -->

<!-- Blog Start -->

<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-warning">Index Berita</h4>
            <h1 class="display-4 mb-4">Berita Terkini</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $delay = 0.2; // Mulai dari 0.2 detik
            $counter = 0; // Inisialisasi penghitung
            foreach ($berita as $k) :
                if ($counter >= 3) break; // Batasi hingga 3 data
            ?>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="<?= $delay; ?>s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?= base_url() . "/assets/images/berita/" . $k['image']; ?>" class="img-fluid rounded-top w-100" alt="">

                            <div class="blog-categiry py-2 px-4">
                                <span>Event</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-warning"> </span> <?= $k['name']; ?></div>
                                <div class="small"><span class="fa fa-calendar text-warning"> </span> <?= $k['tanggal']; ?></div>
                                <div class="small"><span class="fa fa-comment-alt text-warning"></span> 6 Comments</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3"> <?= $k['judul']; ?></a>
                            <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                $delay += 0.2; // Tambahkan 0.2s untuk setiap iterasi
                $counter++; // Tingkatkan penghitung
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>




<!-- Blog End -->

<!-- Team Start -->
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-warning">Wadah Informasi</h4>
            <h1 class="display-4 mb-4">Jurnal SDA</h1>
            <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p> -->
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo base_url('assets/img/jateng2.jpg') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon">
                            <!-- <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a> -->
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-0" href=""><i
                                    class="fas fa-globe"></i></a>
                        </div>
                    </div>
                    <div class="team-title p-4">
                        <h4 class="mb-0">Jurnal Irigasi</h4>
                        <p class="mb-0">Selengkapnya</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo base_url('assets/img/jabar1.jpg') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon">
                            <!-- <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a> -->
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-0" href=""><i
                                    class="fas fa-globe"></i></a>
                        </div>
                    </div>
                    <div class="team-title p-4">
                        <h4 class="mb-0">Jurnal Irigasi</h4>
                        <p class="mb-0">Selengkapnya</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo base_url('assets/img/sulut7.jpg') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon">
                            <!-- <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a> -->
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-0" href=""><i
                                    class="fas fa-globe"></i></a>
                        </div>
                    </div>
                    <div class="team-title p-4">
                        <h4 class="mb-0">Jurnal Irigas</h4>
                        <p class="mb-0">Selengkapnya</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo base_url('assets/img/sulut7.jpg') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon">
                            <!-- <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a> -->
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-0" href=""><i
                                    class="fas fa-globe"></i></a>
                        </div>
                    </div>
                    <div class="team-title p-4">
                        <h4 class="mb-0">Jurnal Irigasi</h4>
                        <p class="mb-0">Selengkapnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<div class="container-fluid py-5 justify-content-center">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-warning">Roadmap</h4>
            <h1 class="display-4 mb-4">Roadmap Event</h1>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="owl-carousel roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Januari 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Februari 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Maret 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>April 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Mei 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Juni 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Juli 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Agustus 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>September 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Oktober 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>November 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>Desember 2025</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Service Start -->
<!-- <div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-warning">Our Services</h4>
            <h1 class="display-4 mb-4">We Provide Best Services</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/blog-1.png') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3">
                            <i class="fa fa-users fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Life Insurance</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                eum!</p>
                            <a class="btn btn-warning rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/blog-2.png') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3">
                            <i class="fa fa-hospital fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Health Insurance</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                eum!</p>
                            <a class="btn btn-warning rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/blog-3.png') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3">
                            <i class="fa fa-car fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Car Insurance</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                eum!</p>
                            <a class="btn btn-warning rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/blog-4.png') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Home Insurance</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                eum!</p>
                            <a class="btn btn-warning rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-warning rounded-pill py-3 px-5" href="#">More Services</a>
            </div>
        </div>
    </div>
</div> -->
<!-- Service End -->


<!-- FAQs Start -->
<?php foreach ($home as $k) : ?>
    <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-100">
                        <div class="mb-5">
                            <h4 class="text-warning">Some Important FAQ's</h4>
                            <h1 class="display-4 mb-0">Pertanyaan Umum yang Sering Diajukan</h1>
                        </div>
                        <div class="accordion" id="accordionExample" style="text-align: justify;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Q: Bagaimana cara untuk mengusulkan Irigasi?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show active"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body rounded">
                                        A: <?= $k['faq1']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Bagaimana cara untuk menginput URK di SIISD?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: <?= $k['faq2']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Q: Bagaimana cara untuk input dana penunjang di aplikasi SIISD?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: <?= $k['faq3']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <img src="<?php echo base_url('assets/img/jateng2.jpg') ?>" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->
<?php endforeach; ?>

<!-- Blog Start -->
<!-- <div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-warning">From Blog</h4>
            <h1 class="display-4 mb-4">News And Updates</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php echo base_url('assets/img/blog-1.png') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="blog-categiry py-2 px-4">
                            <span>Business</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between mb-3">
                            <div class="small"><span class="fa fa-user text-warning"></span> Martin.C</div>
                            <div class="small"><span class="fa fa-calendar text-warning"></span> 30 Dec 2025</div>
                            <div class="small"><span class="fa fa-comment-alt text-warning"></span> 6 Comments</div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Which allows you to pay down insurance bills</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                            impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php echo base_url('assets/img/blog-2.png') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="blog-categiry py-2 px-4">
                            <span>Business</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between mb-3">
                            <div class="small"><span class="fa fa-user text-warning"></span> Martin.C</div>
                            <div class="small"><span class="fa fa-calendar text-warning"></span> 30 Dec 2025</div>
                            <div class="small"><span class="fa fa-comment-alt text-warning"></span> 6 Comments</div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Leverage agile frameworks to provide</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                            impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php echo base_url('assets/img/blog-3.png') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="blog-categiry py-2 px-4">
                            <span>Business</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between mb-3">
                            <div class="small"><span class="fa fa-user text-warning"></span> Martin.C</div>
                            <div class="small"><span class="fa fa-calendar text-warning"></span> 30 Dec 2025</div>
                            <div class="small"><span class="fa fa-comment-alt text-warning"></span> 6 Comments</div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Leverage agile frameworks to provide</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                            impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Blog End -->

<!-- Team Start -->
<!-- <div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-warning">Our Team</h4>
            <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo base_url('assets/img/team-1.jpg') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-title p-4">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo base_url('assets/img/team-2.jpg') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-title p-4">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo base_url('assets/img/team-3.jpg') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-title p-4">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo base_url('assets/img/team-4.jpg') ?>" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-warning btn-sm-square rounded-pill mb-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-title p-4">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Team End -->

<!-- Testimonial Start -->
<!-- <div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-warning">Testimonial</h4>
            <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-item bg-light rounded">
                <div class="row g-0">
                    <div class="col-4  col-lg-4 col-xl-3">
                        <div class="h-100">
                            <img src="<?php echo base_url('assets/img/testimonial-1.jpg') ?>" class="img-fluid h-100 rounded"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-8 col-lg-8 col-xl-9">
                        <div class="d-flex flex-column my-auto text-start p-4">
                            <h4 class="text-dark mb-0">Client Name</h4>
                            <p class="mb-3">Profession</p>
                            <div class="d-flex text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error
                                molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded">
                <div class="row g-0">
                    <div class="col-4  col-lg-4 col-xl-3">
                        <div class="h-100">
                            <img src="<?php echo base_url('assets/img/testimonial-2.jpg') ?>" class="img-fluid h-100 rounded"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-8 col-lg-8 col-xl-9">
                        <div class="d-flex flex-column my-auto text-start p-4">
                            <h4 class="text-dark mb-0">Client Name</h4>
                            <p class="mb-3">Profession</p>
                            <div class="d-flex text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                            <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error
                                molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded">
                <div class="row g-0">
                    <div class="col-4  col-lg-4 col-xl-3">
                        <div class="h-100">
                            <img src="<?php echo base_url('assets/img/testimonial-3.jpg') ?>" class="img-fluid h-100 rounded"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-8 col-lg-8 col-xl-9">
                        <div class="d-flex flex-column my-auto text-start p-4">
                            <h4 class="text-dark mb-0">Client Name</h4>
                            <p class="mb-3">Profession</p>
                            <div class="d-flex text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                            <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error
                                molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Testimonial End -->


<!-- Footer Start -->