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
                    <div class="auth-logo">
                        <a href="index.html"><img src="<?php echo base_url('assets/images/logo/logo.svg') ?>" alt="Logo"></a>
                    </div>
                    <h6 class="auth-title">Forget Password</h6>


                    <form method="post" action="<?= site_url('/Auth/resetPassword' . $token) ?>">
                        <div class="form-group position-relative has-icon-left mb-4">


                            <label for="new_password">New Password</label>
                            <input type="password" name="new_password" required>

                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Reset Password</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Remember your account? <a href="<?php echo base_url('Auth/index') ?>" class="font-bold">Log in</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>