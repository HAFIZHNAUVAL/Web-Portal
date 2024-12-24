<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User Sispaldeba</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main/app.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pages/auth.css') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/favicon.svg') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/favicon.png') ?>" type="image/png">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">

                    <h1 class="auth-title">Sign Up</h1>
                    <p class="auth-subtitle mb-3">Input your data to register to our website.</p>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?= session()->getFlashdata('success'); ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url('Auth/register') ?>" method="post" role="form">
                        <?= csrf_field() ?>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username" id="username" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" name="email" id="email" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="confirm_password" placeholder="Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>


                        <select name="role" id="roleSelect" class="form-control form-control-xl">

                            <option value="0"></option>
                        </select>

                        <script>
                            // Mengambil referensi elemen select
                            var roleSelect = document.getElementById("roleSelect");

                            // Mengubah properti display menjadi none untuk menyembunyikan elemen
                            roleSelect.style.display = "none";
                        </script>

                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="<?php echo base_url('Auth/index') ?>" class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <div class="d-lg pt-3 pt-sm-0 text-center">

                        <center>

                            <img src="<?php echo base_url('assets/images/logo/logo1.png') ?>" alt="logo" width="50%" />
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>