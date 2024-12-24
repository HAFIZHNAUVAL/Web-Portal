</div>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Settings Profile</h3>
                    <p class="text-subtitle text-muted">Edit Profile Anda</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Setting profile</li>
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
        <form method="post" action="<?php echo base_url('Admin/upload_profile') ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= session()->getFlashdata('success'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Inputkan Data Profil User</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput">Nik</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Enter Nik">
                                </div>

                                <div class="form-group">
                                    <label for="register">Jenis Kelamin</label>
                                    <select name="gender" class="form-control">
                                        <option value="">--- Pilih Jenis Gender ---</option>
                                        <option>Laki-Laki</option>
                                        <option>Prempuan</option>
                                    </select>
                                </div>
                                <div class="form-group has-icon-left">
                                    <div class="form-group mandatory ">
                                        <div class="position-relative">
                                            <label for="body" class="form-label">Alamat Lengkap</label>
                                            <div class="form-outline  mb-4">
                                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Enter tempat lahir">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Enter tanggal lahir">
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="position-relative">
                                        <label for="image" class="form-label">Foto Profil</label>
                                        <!-- File uploader with image preview -->
                                        <input type="file" class="image-preview-filepond" name="image" id="image" />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <br><br>
                            <div class="d-flex justify-left-end mt-6">
                                <button type="submit" name="submit" class="btn btn-success mb-2 btn-pill">Ubah Profile</button>
                                &nbsp;&nbsp;
                                <a href="<?php echo base_url('Admin/dashboard') ?>" class="btn btn-danger mb-2 btn-pill ">Batal</a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>