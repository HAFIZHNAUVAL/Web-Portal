<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sispaldeba</title>
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

                    <h6 class="auth-title">Forget Password</h6>

                    <?php if (session()->has('error')) : ?>
                        <p style="color: red;"><?= session('error') ?></p>
                    <?php endif; ?>

                    <?php if (session()->has('success')) : ?>
                        <p style="color: green;"><?= session('success') ?></p>
                    <?php endif; ?>
                    <form action="<?php echo base_url('Auth/forgotPassword') ?>" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email" required>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Remember your account? <a href="<?php echo base_url('Auth/index') ?>" class="font-bold">Log in</a>.
                        </p>
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