<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.2s">Daerah Irigasi</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('/Home/galeri'); ?>">Galeri</a></li>
            <li class="breadcrumb-item active text-warning">Daerah Irigasi</li>
        </ol>
    </div>
</div>
<!-- Galeri Detail -->
<style>
    .gallery img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .gallery-item {
        border-radius: 15px;
        overflow: hidden;
    }

    .popup-image {
        max-width: 100%;
        /* Lebar maksimum sesuai container */
        max-height: 80vh;
        /* Tinggi maksimum sesuai viewport */
        object-fit: contain;
        /* Mempertahankan aspek rasio */
        margin: 0 auto;
        /* Pusatkan gambar */
    }
</style>
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="row g-3 gallery">
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="<?php echo base_url('assets/img/sulut77.jpg') ?>" class="img-fluid" alt="Gallery Item" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://via.placeholder.com/300">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="<?php echo base_url('assets/img/jateng11.jpg') ?>" class="img-fluid" alt="Gallery Item" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://via.placeholder.com/300">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="<?php echo base_url('assets/img/sulut44.jpg') ?>" class="img-fluid" alt="Gallery Item" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://via.placeholder.com/300">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="<?php echo base_url('assets/img/sulut44.jpg') ?>" class="img-fluid" alt="Gallery Item" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://via.placeholder.com/300">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="<?php echo base_url('assets/img/sulut22.jpg') ?>" class="img-fluid" alt="Gallery Item" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://via.placeholder.com/300">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="<?php echo base_url('assets/img/sulut88.jpg') ?>" class="img-fluid" alt="Gallery Item" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://via.placeholder.com/300">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mx-auto py-3">
            <div class="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action shadow-sm animate">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url('assets/img/sulut2.jpg') ?>" alt="News 1" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <small class="text-muted">Galeri</small>
                                <h6 class="mb-0">Daerah Irigasi</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action shadow-sm animate">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url('assets/img/sulut8.jpg') ?>" alt="News 2" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <small class="text-muted">Galeri</small>
                                <h6 class="mb-0">Daerah Irigasi Rawa</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action shadow-sm animate">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url('assets/img/sulut44.jpg') ?>" alt="News 3" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <small class="text-muted">Galeri</small>
                                <h6 class="mb-0">Daeerah Irigasi Tambak</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action shadow-sm animate">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url('assets/img/sulut7.jpg') ?>" alt="News 3" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <small class="text-muted">Galeri</small>
                                <h6 class="mb-0">Daeerah Irigasi Air Tanah</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action shadow-sm animate">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url('assets/img/sulut3.jpg') ?>" alt="News 3" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <small class="text-muted">Galeri</small>
                                <h6 class="mb-0">Daeerah Irigasi Pompa</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Tambahkan kelas custom untuk kontrol ukuran -->
                <img src="" id="modalImage" class="popup-image" alt="Popup Image">
            </div>
        </div>
    </div>
</div>

<script>
    const imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget; // Tombol yang membuka modal
        const imageUrl = button.getAttribute('data-bs-image'); // Ambil URL dari atribut data-bs-image
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageUrl; // Setel URL gambar
    });
</script>





<!-- Contact End -->