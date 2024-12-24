</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Sunting Tampilan Beranda</h3>
                    <p class="text-subtitle text-muted">Silahkan sunting tampilan beranda.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sunting beranda</li>
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

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sunting Tampilan Beranda</h4>
                </div>
                <?php foreach ($home as $k) : ?>
                    <form method="post" action="<?php echo base_url('Admin/' . $k['id'] . '/update_home') ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?= session()->getFlashdata('pesan'); ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-1">
                                    <div class="form-group has-icon-left">
                                        <div class="form-group mandatory ">
                                            <div class="position-relative">
                                                <label for="body" class="form-label">Judul</label>
                                                <div class="form-outline  mb-4">
                                                    <textarea class="form-control form-control-lg" id="judul" name="judul" rows="5"><?= $k['judul']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <div class="form-group mandatory ">
                                            <div class="position-relative">
                                                <label for="body" class="form-label">Judul 1</label>
                                                <div class="form-outline  mb-4">
                                                    <textarea class="form-control form-control-lg" id="judul1" name="judul1" rows="5"><?= $k['judul1']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <div class="form-group mandatory ">
                                            <div class="position-relative">
                                                <label for="body" class="form-label">Judul 2</label>
                                                <div class="form-outline  mb-4">
                                                    <textarea class="form-control form-control-lg" id="judul2" name="judul2" rows="5"><?= $k['judul2']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <div class="form-group has-icon-left">
                                        <div class="form-group mandatory ">
                                            <div class="position-relative">
                                                <label for="body" class="form-label">Pertanyaan 1</label>
                                                <div class="form-outline  mb-4">
                                                    <textarea class="form-control form-control-lg" id="faq1" name="faq1" rows="5" placeholder="Data Kosong"><?= $k['faq1']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <div class="form-group mandatory ">
                                            <div class="position-relative">
                                                <label for="body" class="form-label">Pertanyaan 2</label>
                                                <div class="form-outline  mb-4">
                                                    <textarea class="form-control form-control-lg" id="faq2" name="faq2" rows="5" placeholder="Data Kosong"><?= $k['faq2']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <div class="form-group mandatory ">
                                            <div class="position-relative">
                                                <label for="body" class="form-label">Pertanyaan 3</label>
                                                <div class="form-outline  mb-4">
                                                    <textarea class="form-control form-control-lg" id="faq3" name="faq3" rows="5" placeholder="Data Kosong"><?= $k['faq3']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>


                                <br><br><br>
                                <div class="d-flex justify-left-end mt-6">
                                    <button type="submit" name="submit" class="btn btn-success mb-2 btn-pill">Ubah Data</button>
                                    &nbsp;&nbsp;
                                    <a href="<?php echo base_url('Admin/show_home') ?>" class="btn btn-danger mb-2 btn-pill ">Batal</a>
                                </div>
                                <br>
                            </div>
                        </div>
                    </form>
            </div>
        </section>
    <?php endforeach; ?>
    </div>
</div>
</div>