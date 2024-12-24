</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Response Status Pengajuan Layanan</h3>
                    <p class="text-subtitle text-muted">Silahkan tanggapi status pengajuan layanan.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Response pengajuan</li>
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
        <!-- Input SKTP -->
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert">
                <h4>Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <?php foreach ($layanan as $i) : ?>
            <form method="post" action="<?php echo base_url('Admin/' . $i['id'] . '/update_layanan') ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
                <input type="hidden" name="gambarlama" value="<?= $i['image']; ?>">
                <?= csrf_field(); ?>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= session()->getFlashdata('pesan'); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Respons Status Layanan</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="provinsi">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama Lengkap" value="<?= $i['nama']; ?>" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select name="gender" class="form-control">
                                            <option><?= $i['gender']; ?></option>
                                            <option>Laki-Laki</option>
                                            <option>Prempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Enter Tempat Lahir" value="<?= $i['tempat_lahir']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelurahan">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Enter Tanggal Lahir" value="<?= $i['tanggal_lahir']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan">Negara</label>
                                        <input type="text" class="form-control" id="negara" name="negara" placeholder="Enter Kewargaanegara" value="<?= $i['negara']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" class="form-control">
                                            <option><?= $i['agama']; ?> </option>
                                            <option>Islam</option>
                                            <option>Kristen Protestan</option>
                                            <option>Kristen Katolik</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Konghuchu</option>
                                        </select>
                                    </div>

                                    <div class="form-group mandatory ">
                                        <label for="status" class="form-label">Status</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status" value="1">
                                            <label class=" form-check-label" for="process">
                                                Sedang diproses
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status" value="2">
                                            <label class=" form-check-label" for="done">
                                                Selesai
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Status_Perkawinan">Status Perkawinan</label>
                                        <select name="status_perkawinan" class="form-control">
                                            <option><?= $i['status_perkawinan']; ?> </option>
                                            <option>Kawin</option>
                                            <option>Belum Kawin</option>
                                            <option>Cerai Hidup</option>
                                            <option>Cerai Mati</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nik</label>
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Enter nama" value="<?= $i['nik']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="kk">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Enter Pekerjaan" value="<?= $i['pekerjaan']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat" value="<?= $i['alamat']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Jenis Pengajuan">Jenis Pengajuan</label>
                                        <select name="jenis_pengajuan" class="form-control">
                                            <option><?= $i['jenis_pengajuan']; ?> </option>
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
                                    <div class="form-group has-icon-left">
                                        <div class="form-group ">
                                            <div class="custom-file">
                                                <div class="position-relative">
                                                    <img width="100px" class="img-thumbnail" src="<?= base_url() . "/assets/images/pengajuan/" . $i['image']; ?>">
                                                    <label for="image" class="form-label custom-file-input"></label>
                                                    <!-- File uploader with image preview -->
                                                    <input type="file" class="image-preview-filepond" id="image" name="image" />
                                                    <div class="invalid-feedback">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-icon-left">
                                    <div class="form-group mandatory ">
                                        <div class="position-relative">
                                            <label for="body" class="form-label">Isi Tanggapan</label>
                                            <div class="form-outline  mb-4">
                                                <textarea class="form-control" id="tanggapan" name="tanggapan" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <div class="position-relative">
                                        <label for="berkas" class="form-label">Upload Berkas</label>
                                        <!-- File uploader with image preview -->
                                        <input type="file" class="image-preview-filepond" name="berkas" id="berkas" />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="d-flex justify-left-end mt-6">
                                    <button type="submit" name="submit" class="btn btn-success mb-2 btn-pill">Submit</button>
                                    &nbsp;&nbsp;
                                    <a href="<?php echo base_url('Admin/dashboard') ?>" class="btn btn-danger mb-2 btn-pill">Batal</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </form>
        <?php endforeach; ?>

    </div>