</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Berita PSDA</h3>
                    <p class="text-subtitle text-muted">Silahkan edit berita.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-5">
            <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('Admin/show_home') ?>" class="btn btn-secondary px-3 pt-2 me-2">
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
        <?php foreach ($berita as $k) : ?>
            <form method="post" action="<?php echo base_url('Admin/' . $k['id'] . '/update_berita') ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= session()->getFlashdata('pesan'); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sunting Berita</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-1">
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Judul</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="Judul Berita" id="judul" name="judul" value="<?= $k['judul']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Provinsi</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="Provinsi" id="prov" name="prov" value="<?= $k['prov']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Kabupaten</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="Kabupaten" id="kab" name="kab" value="<?= $k['kab']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <div class="form-group mandatory ">
                                            <div class="position-relative">
                                                <label for="body" class="form-label">Deskripsi</label>
                                                <div class="form-outline  mb-4">
                                                    <textarea class="form-control form-control-lg" id="deskripsi" name="deskripsi" rows="5"><?= $k['deskripsi']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 col-12 mb-1">
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Nama Penulis</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="Nama Penulis" id="name" name="name" value="<?= $k['name']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Nama D.I.</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="Nama D.I," id="nm_di" name="nm_di" value="<?= $k['nm_di']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Tanggal</label>
                                        <div class="position-relative">
                                            <input type="date" class="form-control py-2" placeholder="Tanggal" id="tanggal" name="tanggal" value="<?= $k['tanggal']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group has-icon-left">
                                        <div class="form-group ">
                                            <div class="custom-file">
                                                <div class="position-relative">
                                                    <label for="image" class="form-label custom-file-input"><img width="100px" class="img-thumbnail" src="<?= base_url() . "/assets/images/berita/" . $k['image']; ?>"></label>
                                                    <!-- File uploader with image preview -->
                                                    <input type="file" class="image-preview-filepond" id="image" name="image" />
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br><br>

                                <div class="d-flex justify-left-end mt-6">
                                    <button type="submit" name="submit" class="btn btn-success mb-2 btn-pill">Ubah Data</button>
                                    &nbsp;&nbsp;
                                    <a href="<?php echo base_url('Admin/show_home') ?>" class="btn btn-danger mb-2 btn-pill ">Batal</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        <?php endforeach; ?>
    </div>