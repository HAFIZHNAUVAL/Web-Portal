<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DAK SDA - Masuk</title>

    <link rel="icon" href="<?= base_url(); ?>assets/admin/favicon.ico" type="image/x-icon">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/Ite/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/Ite/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/Ite/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">



    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }


        .boxLog {
            display: block;
            z-index: 1040;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            overflow: auto;
            padding-left: 2px;
            background-color: rgba(0, 0, 0, 0.3);
            /* Overlay abu-abu pudar dengan transparansi */
            /* background-image: url('./assets/img/photo1.png'); */
            background-image: url('/assets/img/sulut19.png');
            background-size: cover;
            background-position: center;
            /* background-blend-mode: exclusion; */
            /* Menggabungkan overlay dengan gambar */
        }

        body {
            background: #ecf0f3;
        }

        .wrapper {
            max-width: 400px;
            min-height: 550px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 4px 4px 7px #cbced1, -4px -4px 7px #fff;
        }

        .logo {
            width: 70px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 70px;
            object-fit: scale-down;

            box-shadow: 0px 0px 3px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaa7,
                -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px;
            /* border: 1px solid red; */
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .wrapper .form-field .fas {
            color: #555;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 25px;
            box-shadow: 2px 2px 2px #b1b1b1,
                -2px -2px 2px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        .wrapper a:hover {
            color: #039BE5;
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }
    </style>

</head>


<div class="boxLog">
    <div class="wrapper">
        <div class="logo">
            <img src="<?php echo base_url('assets/img/pu-icon.png'); ?>" alt="">
        </div>
        <div class="text-center mt-3 name">
            Silahkan Login ke Web Portal PSDA
        </div>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?= session()->getFlashdata('error'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= session()->getFlashdata('pesan'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <form class="p-3 mt-3 kt-form" method="post" action="<?= base_url('Auth/login'); ?>" role="form">
            <?= csrf_field() ?>
            <label for="">User ID</label>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="idpengguna">
            </div>
            <label for="">Password</label>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button class="btn mt-2" type="submit" name="submit">Login</button>
            <!-- <a href="<?php echo base_url('Auth/regis') ?>">Registrasi</a>
            <div class="text-center fs-6">
                <a href="https://drive.google.com/drive/folders/11j4x9Xs36TJNPIIw4rygQ3-bhLxZnFKN?usp=sharing" target="_blank">DOWNLOAD USER MANUAL SIISD</a>
            </div> -->
        </form>
        <!-- <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div> -->


    </div>
</div>

</html>