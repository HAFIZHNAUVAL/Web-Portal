<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">D.I. Alor Mendukung Produktivitas Pertanian Jawa Tengah</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html<?php echo base_url('/'); ?>">Berita</a></li>
            <li class="breadcrumb-item active text-warning">Selasa 03 November 2024</li>
            <!-- <li class="breadcrumb-item active text-warning">Berita</li> -->
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Feature Start -->
<style>
    .card-img-top {
        max-height: 400px;
        object-fit: cover;
    }

    .card-body p {
        font-size: 0.95rem;
        line-height: 1.6;
    }

    .list-group-item {
        border: none;
        padding: 0.8rem 1rem;
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .list-group-item strong {
        display: block;
        font-size: 1rem;
        margin-bottom: 0.2rem;
    }

    .sidebar .animate {
        transform: translateY(50px);
        opacity: 0;
        transition: transform 0.6s ease-out, opacity 0.6s ease-out;
    }

    .sidebar .animate:hover {
        transform: translateY(0);
        opacity: 1;
        transition: transform 0.3s ease-out, opacity 0.3s ease-out;
        background-color: #f8f9fa;
    }

    /* On page load animation */
    .sidebar .animate {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Rounded images */
    .sidebar img {
        border: 2px solid #ddd;
        transition: transform 0.3s ease;
    }

    .sidebar img:hover {
        transform: scale(1.1);
        border-color: #007bff;
    }
</style>
<div class="container my-5">
    <div class="row">
        <!-- Left Content -->
        <div class="col-lg-8 mb-4">
            <div class="card">
                <img src="<?php echo base_url('assets/img/sulut3.jpg') ?>" class="card-img-top" alt="Event Image">
                <div class="card-body">
                    <p class="text-muted">— Berita_sda</p>
                    <p>
                        Pembelajaran tidak hanya bisa dilakukan di dalam kelas, tetapi juga bisa dilakukan di luar kelas.
                        Inilah yang menjadi dasar pelaksanaan Magang Program Kampus Merdeka di Direktorat Jenderal Sumber Daya Air (Ditjen SDA).
                    </p>
                    <p>
                        “Mudah-mudahan adik-adik mendapatkan banyak ilmu selama magang di Ditjen SDA. Tidak hanya ilmu tetapi juga wawasan
                        dan pengetahuan. Karena adik-adik berkesempatan untuk melihat langsung infrastruktur sumber daya air yang mewakili pilar
                        SDA, yaitu konservasi, pendayagunaan dan pengendalian daya rusak air,” jelas Direktur Jenderal Sumber Daya Air Bob
                        Arthur Lombogia saat Pelepasan Mahasiswa Magang Program Kampus Merdeka dari Universitas Sam Ratulangi (Unsrat) di Jakarta (29/11).
                    </p>
                </div>
            </div>
        </div>
        <!-- Right Sidebar -->
        <div class="col-lg-4 mx-auto">
            <div class="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action shadow-sm animate">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url('assets/img/sulut7.jpg') ?>" alt="News 1" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <small class="text-muted">Sabtu, 30 November 2024</small>
                                <h6 class="mb-0">Dirjen SDA Lepas 40 Mahasiswa Magang Program Kampus Merdeka</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action shadow-sm animate">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url('assets/img/sulut8.jpg') ?>" alt="News 2" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <small class="text-muted">Minggu, 24 November 2024</small>
                                <h6 class="mb-0">Bendungan Semantok Mendukung Produktivitas Pertanian Jawa Timur</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action shadow-sm animate">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url('assets/img/sulut3.jpg') ?>" alt="News 3" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <small class="text-muted">Sabtu, 23 November 2024</small>
                                <h6 class="mb-0">Modernisasi DI Siman Tingkatkan IP Hingga 260 Persen</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Feature End -->