</div>
<div id="main">
    <header class="mb-3">

    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Ganti Password</h3>
                    <p class="text-subtitle text-muted">Silahkan ganti password demi keamanan pengguna.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ganti password</li>
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
        <!-- Change Password -->

        <?php if (session()->has('errors')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php foreach (session('errors') as $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->has('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p><?= session('error') ?></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->has('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= session('success'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>




        <form method="post" action="<?php echo base_url('Admin/changePassword') ?>" class="form-horizontal" role="form">
            <section class="section">
                <div class="card mb-5">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h3 class="card-title">Password</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <div class="form-group has-icon-left">
                                    <label for="current_password" class="form-label">Password Saat Ini</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control py-2" placeholder="password lama" id="password" name="password" maxlength="255" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-key py-2"></i>
                                        </div>
                                        <div class="invalid-feedback d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <div class="form-group has-icon-left ">
                                    <label for="new_password" class="form-label">Password Baru</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control py-2" placeholder="password baru" id="new_password" name="new_password" maxlength="255" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-key-fill py-2"></i>
                                        </div>
                                        <div class="invalid-feedback d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-1">
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
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="show_change_pw">
                                    <label class="form-check-label" id="label-show_pw" for="show_change_pw">
                                        Tampilkan Password
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3 d-flex justify-content-start">
                                <button type="submit" value="Change Password" class="btn btn-success mb-2 btn-pill">
                                    Submit
                                </button>
                                &nbsp;&nbsp;
                                <a href="<?php echo base_url('Admin/dashboard') ?>" class="btn btn-danger mb-2 btn-pill ">Batal</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>