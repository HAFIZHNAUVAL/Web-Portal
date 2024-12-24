</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Response Aduan User</h3>
                    <p class="text-subtitle text-muted">Keseluruhan Data Aduan User.</p>
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
                    <h3>Data Aduan User</h3>
                </div>
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <div class="col-5">
                                <form action="" method="">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Masukan keyword pencarian" name="keyword">
                                        <button class="btn btn-outline-primary" type="submit" name="submit">Cari</button>
                                    </div>
                                </form>
                            </div>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                    <th>Aduan</th>
                                    <th>Tanggapan</th>
                                    <th widht="50%">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                ?>
                                <?php foreach ($aduan as $k) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $k['nama']; ?></td>
                                        <td><img width="100px" class="img-thumbnail" src="<?= base_url() . "/assets/images/aduan/" . $k['image']; ?>"></td>
                                        <td><?= $k['create_at']; ?></td>
                                        <td><?= $k['judul']; ?></td>
                                        <?php
                                        echo "<td>";
                                        if ($k['tanggapan']) {
                                            echo "<span class='badge bg-primary'>";
                                            echo $k['tanggapan'];
                                            echo "</span>";
                                        } else {
                                            echo "<span class='badge bg-danger'>";
                                            echo 'Belum ditanggapi';
                                            echo "</span>";
                                        }

                                        echo "</td>";
                                        $i++;
                                        ?>

                                        <td>

                                            <a href="<?php echo base_url('Admin/' . $k['id'] . '/lihat_aduan') ?>"> <span class="btn btn-info text-white"><i class="bi bi-eye-fill"></i></span></a>
                                            <a href="<?php echo base_url('Admin/' . $k['id'] . '/edit_aduan') ?>"> <span class="btn btn-warning btn-s"><i class="bi bi-pencil-square"></i></span></a>
                                            <form action="<?php echo base_url('Admin/' . $k['id'] . '/delete_aduan') ?>" method="post" class="d-inline" onclick="return confirm('Apakah anda ingin menghapus data aduan ?');">
                                                <? csrf_field(); ?>
                                                <input type="hidden" value="Delete" name="_method">
                                                <button type="submit" class="btn btn-danger btn-s"><i class="bi bi-x"></i></button>
                                            </form>


                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <br>
                        <?= $pager->links('aduan', 'daftar_pagination'); ?>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
</div>