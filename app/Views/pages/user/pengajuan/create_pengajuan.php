<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="<?php

                                        use CodeIgniter\Filters\CSRF;

                                        echo base_url('User/dashboard') ?>">Sispaldeba</a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="<?php echo base_url('http://www.w3.org/2000/svg') ?>" xmlns:xlink="<?php echo base_url('http://www.w3.org/1999/xlink') ?>" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="<?php echo base_url('http://www.w3.org/2000/svg') ?>" xmlns:xlink="<?php echo base_url('http://www.w3.org/1999/xlink') ?>" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item  ">
                            <a href="<?php echo base_url('User/dashboard') ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-title">Layanan</li>
                        <li class="sidebar-item active ">
                            <a href="<?php echo base_url('User/show_layanan') ?>" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Pengajuan</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="<?php echo base_url('User/aduan') ?>" class='sidebar-link'>
                                <i class="bi bi-chat-heart-fill"></i>
                                <span>Aduan</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Informasi</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-info-circle"></i>
                                <span>Status</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('User/status_layanan') ?>">Layanan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('User/status_aduan') ?>">Aduan</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-receipt"></i>
                                <span>Riwayat</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('User/riwayat_layanan') ?>">Layanan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('User/riwayat_aduan') ?>">Aduan</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Settings</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Account</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('User/profile') ?>">Profile</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('User/settings_profile') ?>">Settings</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('User/change_password') ?>">Change Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"> <?= session('username'); ?></h6>
                                            <p class="mb-0 text-sm text-gray-600"><?php
                                                                                    $role = session('role');

                                                                                    if ($role === '0') {
                                                                                        echo 'Masyarakat';
                                                                                    } elseif ($role === '1') {
                                                                                        echo 'Admin';
                                                                                    }
                                                                                    ?></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <?php if ($avatarData) : ?>
                                                    <img width="150" class="rounded-circle " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">
                                                <?php else : ?>
                                                    <img src="<?php echo base_url('assets/images/profile/default.jpg') ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Hello, <?= session('username'); ?></h6>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('User/profile') ?>"><i class="icon-mid bi bi-person me-2"></i> Profile Saya</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('User/settings_profile') ?>"><i class="icon-mid bi bi-gear me-2"></i>
                                            Pengaturan Akun</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('User/change_password') ?>"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Change Password</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Keluar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <div id="main">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Pengajuan Layanan</h3>
                            <p class="text-subtitle text-muted">Silahkan input form pengajuan layanan dibawah ini.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('User/dashboard') ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form pengajuan layanan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-5">
                    <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('User/show_layanan') ?>" class="btn btn-secondary px-3 pt-2 me-2">
                        <span class="fa-fw fa-lg select-all fas text-white"><i class="bi-arrow-left text-white"></i></span>
                    </a>
                </div>
                <!-- Input SKTP -->
                <br><br>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?php echo base_url('User/upload_pengajuan') ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?= session()->getFlashdata('success'); ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pengajuan Layanan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php if ($avatarData) : ?>
                                                <label for="provinsi">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $avatarData['nama']; ?>">
                                            <?php else : ?>
                                                <label for="nik">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap harus diisi">
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <?php if ($avatarData) : ?>
                                                <label for="nik">Jenis Kelamin</label>
                                                <input type="text" class="form-control" id="gender" name="gender" value="<?= $avatarData['gender']; ?>" readonly>
                                            <?php else : ?>
                                                <label for="nik">Jenis Kelamin</label>
                                                <input type="text" class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin harus diisi" readonly>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <?php if ($avatarData) : ?>
                                                <label for="nik">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $avatarData['tempat_lahir']; ?>" readonly>
                                            <?php else : ?>
                                                <label for="nik">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir harus diisi" readonly>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <?php if ($avatarData) : ?>
                                                <label for="nik">Negara</label>
                                                <input type="text" class="form-control" id="negara" name="negara" value="<?= $avatarData['negara']; ?>" readonly>
                                            <?php else : ?>
                                                <label for="nik">Negara</label>
                                                <input type="text" class="form-control" id="negara" name="negara" placeholder="Negara harus diisi" readonly>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="kk">Pekerjaan</label>
                                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Enter Pekerjaan" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select name="agama" class="form-control" autofocus>
                                                <option value="">--- Pilih Agama ---</option>
                                                <option>Islam</option>
                                                <option>Kristen Protestan</option>
                                                <option>Kristen Katolik</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Konghuchu</option>
                                            </select>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php if ($avatarData) : ?>
                                                <label for="nik">Nik</label>
                                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $avatarData['nik']; ?>" readonly>
                                            <?php else : ?>
                                                <label for="nik">Nik</label>
                                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK harus diisi" readonly>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <?php if ($avatarData) : ?>
                                                <label for="nik">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $avatarData['alamat']; ?>" readonly>
                                            <?php else : ?>
                                                <label for="nik">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat harus diisi" readonly>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <?php if ($avatarData) : ?>
                                                <label for="nik">Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $avatarData['tanggal_lahir']; ?>" readonly>
                                            <?php else : ?>
                                                <label for="nik">Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir harus diisi" readonly>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="Status_Perkawinan">Status Perkawinan</label>
                                            <select name="status_perkawinan" class="form-control">
                                                <option value="">--- Pilih Status Perkawinan ---</option>
                                                <option>Kawin</option>
                                                <option>Belum Kawin</option>
                                                <option>Cerai Hidup</option>
                                                <option>Cerai Mati</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Jenis Pengajuan">Jenis Pengajuan</label>
                                            <select name="jenis_pengajuan" class="form-control">
                                                <option value="">--- Pilih Jenis Pengajuan ---</option>
                                                <option>Surat Pengantar KTP</option>
                                                <option>SKCK</option>
                                                <option>Surat Ketarangan Usaha</option>
                                                <option>Surat Ketarangan Umum</option>
                                                <option>Surat Kehilangan</option>
                                                <option>Surat Keterangan Tidak Mampu</option>
                                                <option>Surat Kuasa KK</option>
                                                <option>Surat Ijin Keluarga</option>
                                                <option>Surat Keterangan Usaha ke Bank</option>
                                                <option>Surat Keterangan Ahli Waris</option>
                                                <option>Surat Keterangan Domisili</option>
                                                <option>Surat Ijin Keluarga</option>
                                                <option>Surat Keterangan Tanah Tidak Sengketa</option>
                                                <option>Surat Keterangan Penghasilan Orangtua</option>
                                                <option>Surat Keterangan Pengaktifan BPJS</option>
                                                <option>Surat Pengajuan Dishub</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="position-relative">
                                                <label for="image" class="form-label">Foto Kartu Keluarga</label>
                                                <!-- File uploader with image preview -->
                                                <input type="file" class="image-preview-filepond" name="image" id="image" />
                                                <div class="invalid-feedback">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <br><br>

                                    <div class="d-flex justify-left-end mt-6">
                                        <button type="submit" name="submit" class="btn btn-success mb-2 btn-pill">Submit</button>
                                        &nbsp;&nbsp;
                                        <a href="<?php echo base_url('User/show_layanan') ?>" class="btn btn-danger mb-2 btn-pill">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>


            </div>