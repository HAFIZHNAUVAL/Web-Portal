</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Sunting Register Pengguna</h3>
                    <p class="text-subtitle text-muted">Silahkan ubah data register pengguna.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sunting register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-5">
            <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('Admin/all_user') ?>" class="btn btn-secondary px-3 pt-2 me-2">
                <span class="fa-fw fa-lg select-all fas text-white"><i class="bi-arrow-left text-white"></i></span>
            </a>
        </div>
        <?php foreach ($register as $k) : ?>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= session()->getFlashdata('pesan'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo base_url('Admin/' . $k['id'] . '/update_register') ?>" class="form-horizontal" role="form">
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ubah Data Register Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?= $k['username']; ?>" required>
                                    </div>
                                    <br>
                                    <div class="col-12 mb-2">
                                        <div class="form-group mandatory ">
                                            <label for="status" class="form-label" value="<?= $k['role']; ?>">Jenis User</label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="role" id="role" value="1">
                                                    <label class=" form-check-label" for="process">
                                                        Admin
                                                    </label>
                                                </div>
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="role" id="role" value="0">
                                                    <label class=" form-check-label" for="done">
                                                        Masyarakat
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= $k['email']; ?>" required>
                                    </div>
                                    <br>
                                </div>
                                <br><br><br><br>
                                <div>
                                    <div class="d-flex justify-left-end mt-8">
                                        <button type="submit" name="submit" class="btn btn-success mb-2 btn-pill">Edit Register</button>
                                        &nbsp;&nbsp;
                                        <a href="<?php echo base_url('Admin/all_user') ?>" class="btn btn-danger mb-2 btn-pill ">Batal</a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        <?php endforeach; ?>
    </div>