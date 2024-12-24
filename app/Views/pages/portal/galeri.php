<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Galeri PSDA</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html<?php echo base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
            <li class="breadcrumb-item active text-warning">Galeri</li>
        </ol>
    </div>
</div>
<!-- Header End -->
<style>
    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* body-img {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
    } */

    .container-img {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }

    .card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: calc(25% - 20px);
        /* Adjust for responsive spacing */
        display: flex;
        flex-direction: column;
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .content {
        padding: 15px;
        text-align: center;
    }

    .content h3 {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 10px;
    }

    .btn1 {
        display: inline-block;
        color: #f39c12;
        font-weight: bold;
        text-decoration: none;
        margin-top: 10px;
    }

    .btn2 span {
        font-size: 1.2rem;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .card {
            width: calc(33.333% - 20px);
        }
    }

    @media (max-width: 768px) {
        .card {
            width: calc(50% - 20px);
        }
    }

    @media (max-width: 480px) {
        .card {
            width: 100%;
        }
    }
</style>
<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-warning">Galeri</h4>
            <h1 class="display-4 mb-4">Galeri Irigasi</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="container-img">
            <div class="card feature-item wow fadeInUp" data-wow-delay="0.2s">
                <img src="<?php echo base_url('assets/img/sulut7.jpg') ?>" alt="Air Tanah dan Air Baku">
                <div class="content">
                    <p class="mb-3">Daerah Irigasi Permukaan</p>
                    <a href="<?php echo base_url('/Home/detailGaleri') ?>" class="btn1">Selengkapnya <span>&#8594;</span></a>
                </div>
            </div>
            <div class="card feature-item wow fadeInUp" data-wow-delay="0.4s">
                <img src="<?php echo base_url('assets/img/sulut8.jpg') ?>" alt="Sungai dan Pantai">
                <div class="content">
                    <p class="mb-4">Daerah Irigasi Rawa</p>
                    <a href="#" class="btn1">Selengkapnya <span>&#8594;</span></a>
                </div>
            </div>
            <div class="card feature-item wow fadeInUp" data-wow-delay="0.6s">
                <img src="<?php echo base_url('assets/img/sulut2.jpg') ?>" alt="Irigasi dan Rawa">
                <div class="content">
                    <p class="mb-4">Daerah Irigasi Air Tanah</p>
                    <a href="#" class="btn1">Selengkapnya <span>&#8594;</span></a>
                </div>
            </div>
            <div class="card feature-item wow fadeInUp" data-wow-delay="0.8s">
                <img src="<?php echo base_url('assets/img/sulut3.jpg') ?>" alt="Bendungan dan Danau">
                <div class="content">
                    <p class="mb-4">Daerah Irigasi</p>
                    <a href="#" class="btn1">Selengkapnya <span>&#8594;</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->