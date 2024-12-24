</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Tampilan Beranda</h3>
                    <p class="text-subtitle text-muted">Berikut data beranda.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('http://www.w3.org/2000/svg') ?>index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Beranda</li>
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
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= session()->getFlashdata('pesan'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h3>Sunting Beranda</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th widht="50%">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($home as $k) : ?>
                                <tr>
                                    <td><?= $k['id']; ?></td>
                                    <td><?= $k['judul']; ?></td>
                                    <td><?= $k['kategori']; ?></td>
                                    <td><?= $k['update_at']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Admin/' . $k['id'] . '/edit_home') ?>"> <span class="btn btn-warning btn-s"><i class="bi bi-pencil-square"></i></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= session()->getFlashdata('success'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h3>Daftar Berita</h3>
                </div>
                <div class="card-header">
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <form action="" method="">
                                <div class="col-5">

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Masukan keyword pencarian" name="cari">
                                        <button class="btn btn-outline-primary" type="submit" name="submit">Cari</button>
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Judul</th>
                                        <th widht="50%">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;

                                    ?>
                                    <?php foreach ($berita as $j) : ?>

                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $j['name']; ?></td>
                                            <td><img width="100px" class="img-thumbnail" src="<?= base_url() . "/assets/images/berita/" . $j['image']; ?>"></td>
                                            <td><?= $j['judul']; ?></td>


                                            <?php
                                            $i++;
                                            ?>
                                            <td>

                                                <a href="<?php echo base_url('Admin/' . $j['id'] . '/edit_berita') ?>"> <span class="btn btn-warning btn-s"><i class="bi bi-pencil-square"></i></span></a>
                                                <form action="<?php echo base_url('Admin/' . $j['id'] . '/delete_berita') ?>" method="post" class="d-inline" onclick="return confirm('Apakah anda ingin menghapus data layanan ?');">
                                                    <? csrf_field(); ?>
                                                    <input type="hidden" value="Delete" name="_method">
                                                    <button type="submit" class="btn btn-danger btn-s"><i class="bi bi-x"></i></button>
                                                </form>


                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </form>
                        </table>
                        <?= $pager->links('testimoni', 'daftar_pagination'); ?>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
</div>
</body>