</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Register User</h3>
                    <p class="text-subtitle text-muted">Silahkan inputkan data register anda.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register user</li>
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
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert">
                <h4>Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo base_url('Admin/regis') ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Register User</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                </div>

                                <div class="form-group has-icon-left">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control py-2" placeholder="Enter password" id="password" name="password" maxlength="255" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-key py-2"></i>
                                        </div>
                                        <div class="invalid-feedback d-block">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="register">Jenis User</label>
                                    <select name="role" class="form-control">
                                        <option value="">--- Pilih Jenis User ---</option>
                                        <option value="0">Masyarakat</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                                <br>

                                <br>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group has-icon-left ">
                                    <label for="new_password" class="form-label">Konfirmasi Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control py-2" placeholder="konfirmasi password" id="confirm_password" name="confirm_password" maxlength="255" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-key-fill py-2"></i>
                                        </div>
                                        <div class="invalid-feedback d-block">
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>
                            <br><br>
                            <div class="d-flex justify-left-end mt-6">
                                <button type="submit" name="submit" class="btn btn-success mb-2 btn-pill">Tambah User</button>
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