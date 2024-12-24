</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Response Status Aduan User</h3>
                    <p class="text-subtitle text-muted">Silahkan tanggapi status aduan user.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Response aduan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-5">
            <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('Admin/aduan') ?>" class="btn btn-secondary px-3 pt-2 me-2">
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
        <?php foreach ($aduan as $k) : ?>
            <form method="post" action="<?php echo base_url('Admin/' . $k['id'] . '/update_aduan') ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
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
                            <h4 class="card-title">Response Status Aduan User</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-1">
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Judul</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="Judul keluhan" id="judul" name="judul" value="<?= $k['judul']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Katagori</label>
                                        <div class="position-relative">
                                            <select name="kategori" class="form-control" id="kategori">
                                                <option><?= $k['kategori']; ?></option>
                                                <option>Insfraktruktur</option>
                                                <option>Pelayanan</option>
                                                <option>Lainnya</option>
                                            </select>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <div class="form-group ">
                                            <div class="custom-file">
                                                <div class="position-relative">
                                                    <label for="image" class="form-label custom-file-input"><img width="100px" class="img-thumbnail" src="<?= base_url() . "/assets/images/aduan/" . $k['image']; ?>"></label>
                                                    <!-- File uploader with image preview -->
                                                    <input type="file" class="image-preview-filepond" id="image" name="image" />
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Nama</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="Nama Pengadu" id="nama" name="nama" value="<?= $k['nama']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">RT/RW</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="RT/RW" id="alamat" name="alamat" value="<?= $k['alamat']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left ">
                                        <label for="title" class="form-label">Nik</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control py-2" placeholder="NIK" id="nik" name="nik" value="<?= $k['nik']; ?>" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading py-2"></i>
                                            </div>
                                            <div class="parsley-error filled" id="parsley-id-1" aria-hidden="false">
                                                <span class="parsley-required"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group has-icon-left">
                                    <div class="form-group mandatory ">
                                        <div class="position-relative">
                                            <label for="body" class="form-label">Isi Keluhan</label>
                                            <div class="form-outline  mb-4">
                                                <textarea class="form-control form-control-lg" id="body" name="body" rows="5"><?= $k['body']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <!-- <div class="col-12 mb-2">
                                            <div class="form-group mandatory ">
                                                <label for="status" class="form-label">Status</label>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="status" value="1">
                                                    <label class=" form-check-label" for="process">
                                                        Sedang diproses
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="status" value="2">
                                                    <label class=" form-check-label" for="done">
                                                        Selesai
                                                    </label>
                                                </div>

                                            </div>
                                        </div> -->
                                <div class="form-group has-icon-left">
                                    <div class="form-group mandatory ">
                                        <div class="position-relative">
                                            <label for="body" class="form-label">Isi Tanggapan</label>
                                            <div class="form-outline  mb-4">
                                                <textarea class="form-control" id="tanggapan" name="tanggapan" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="d-flex justify-left-end mt-6">
                                    <button type="submit" name="submit" class="btn btn-success mb-2 btn-pill">Ubah Data</button>
                                    &nbsp;&nbsp;
                                    <a href="<?php echo base_url('Admin/aduan') ?>" class="btn btn-danger mb-2 btn-pill ">Batal</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        <?php endforeach; ?>
    </div>