</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Data Pengajuan Layanan User</h3>
                    <p class="text-subtitle text-muted">Berikut data pengajuan layanan user.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Pengajuan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-5">
            <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('Admin/dashboard') ?>" class="btn btn-secondary px-3 pt-2 me-2">
                <span class="fa-fw fa-lg select-all fas text-white"><i class="bi-arrow-left text-white"></i></span>
            </a>
        </div>

        <!-- Input SKTP -->
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert">
                <h4>Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <?php foreach ($layanan as $i) : ?>
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="card-title d-inline-block">Detail Pengajuan Layanan</h3> <small class="text-muted"></small>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <h4></h4>
                        <h6 class="text-muted">
                        </h6>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <div class="me-4">
                            <p>
                                <span class="fw-bold">Nama Lengkap : <?= $i['nama']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Jenis Kelamin : <?= $i['gender']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Tampat lahir : <?= $i['tempat_lahir']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Tanggal lahir : <?= $i['tanggal_lahir']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Negara : <?= $i['negara']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Agama : <?= $i['agama']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold me-1">Status :
                                    <?php


                                    if ($i['status'] == 0) {
                                        echo "<span class='badge bg-danger'>";
                                        echo 'Belum diproses';
                                        echo "</span>";
                                    } elseif ($i['status'] == 1) {
                                        echo "<span class='badge bg-primary'>";
                                        echo 'Sedang diproses';
                                        echo "</span>";
                                    } elseif ($i['status'] == 2) {
                                        echo "<span class='badge bg-success'>";
                                        echo 'Selesai, Ambil <br>';
                                        echo 'Berkas Anda di Desa';
                                        echo "</span>";
                                    }

                                    ?>
                                </span>
                            </p>
                        </div>
                        <div class="me-4">
                            <p>
                                <span class="fw-bold">Status Perkawinan : <?= $i['status_perkawinan']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Nik : <?= $i['nik']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Pekerjaan : <?= $i['pekerjaan']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Alamat : <?= $i['alamat']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Jenis Pengajuan : <?= $i['jenis_pengajuan']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Foto KK :
                                    <a href="#" class="view-image" data-toggle="modal" data-target="#imageModal" data-image="<?= base_url() . "/assets/images/pengajuan/" . $i['image']; ?>">
                                        <img width="100px" class="img-thumbnail" src="<?= base_url() . "/assets/images/pengajuan/" . $i['image']; ?>">
                                    </a>
                                </span>
                            </p>
                            <!-- Modal Container -->
                            <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imageModalLabel">Gambar Besar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img id="modal-image" class="img-fluid" src="" alt="Gambar Besar">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $('.view-image').on('click', function() {
                                        var imageSrc = $(this).data('image');
                                        $('#modal-image').attr('src', imageSrc);
                                    });
                                });
                            </script>


                        </div>
                    </div>
                    <div class="px-5 py-3 d-flex justify-content-center">
                        <div class="modal fade text-left" id="imageDetail" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel17">
                                            Foto
                                        </h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-center">

                                            <img class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#imageDetail" src="{{ asset("storage/$complaint->image") }}" alt="{{ $complaint->category->name }}">

                                            <img class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#imageDetail" src="{{ asset('images/no-image-2.jpg') }}" alt="{{ $complaint->category->name }}">

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>

                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>