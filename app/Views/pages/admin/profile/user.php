</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Profil Anda</h3>
                    <p class="text-subtitle text-muted">Berikut profil anda</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Input SKTP -->
        <div class="page-heading">

            <hr>
            <div class="mb-5">
                <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('Admin/dashboard') ?>" class="btn btn-secondary px-3 pt-2 me-2">
                    <span class="fa-fw fa-lg select-all fas text-white"><i class="bi-arrow-left text-white"></i></span>
                </a>
                <?php foreach ($edit as $k) : ?>
                    <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('Admin/' . $k['user_id'] . '/edit_profile') ?>" class=" btn btn-warning px-3 pt-2 me-2">
                        <span class="fa-fw fa-lg select-all fas text-white"><i class="bi- bi-person-fill"></i></span>
                        <i class="fa-user-edit"></i>
                    </a>
                <?php endforeach; ?>
            </div>

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= session()->getFlashdata('success'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h3>Pengguna</h3>
                    </div>
                    <section class="section">
                        <div class="card mb-5">
                            <div class="card-body">
                                <?php if ($avatarData) : ?>
                                    <div class="text-center mb-3">
                                        <img width="150px" class="img-thumbnail " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">

                                        <h4 class="mt-4"><?= session('username'); ?></h4>
                                        <small class="text-muted"><?= session('email'); ?></small>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">
                                        </div>
                                        <div class="divider-text"></div>
                                    </div>
                                    <div class="container text-center justify-content-center">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="">
                                                    <h6>NIK: <?= $avatarData['nik']; ?><span class="text-muted"></span></h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="">
                                                    <h6>Email: <?= session('email'); ?><span class="text-muted"></span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="">
                                                    <h6>Gender: <?= $avatarData['gender']; ?><span class="text-muted"></span></h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="">
                                                    <h6>Status: <?php
                                                                $role = session('role');

                                                                if ($role === '0') {
                                                                    echo 'Masyarakat';
                                                                } elseif ($role === '1') {
                                                                    echo 'Admin';
                                                                }
                                                                ?> <span class="text-muted"></span></h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="">
                                                    <h6>Tempat Tanggal Lahir : <?= $avatarData['tempat_lahir']; ?>, <?= $avatarData['tanggal_lahir']; ?><span class="text-muted"></span></h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="">
                                                    <h6>Alamat : <?= $avatarData['alamat']; ?><span class="text-muted"></span></h6>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="alert alert-warning" role="alert">
                                                <h4 class="alert-heading">Tidak Ada Data Profile User</h4>
                                                <p>Silahkan Inputkan Data Profile Anda Terlebih Dahulu. </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </div>
</div>
</div>