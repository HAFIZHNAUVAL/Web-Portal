<h4>Hello <?= session('username'); ?>, Anda login sebagai
    <?php
    $role = session('role');

    if ($role === '0') {
        echo 'Masyarakat';
    } elseif ($role === '1') {
        echo 'Admin';
    }
    ?>
</h4>
<br>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Layanan</h6>
                                    <h6 class="font-extrabold mb-0"><?= $itemCount ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Keluahan</h6>
                                    <h6 class="font-extrabold mb-0"><?= $aduanCount ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">All User</h6>
                                    <h6 class="font-extrabold mb-0"><?= $alluserCount ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Response</h6>
                                    <h6 class="font-extrabold mb-0"><?= $totalItemCount ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= session()->getFlashdata('pesan'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>


            <?php foreach ($chart as $key => $value) {
                $bln[] = $value['bulan'];
                $jml[] = $value['jumlah'];
            }

            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Statistik Pengajuan Layanan</h3>
                        </div>

                        <div style="width: 80%; margin: auto;">
                            <canvas id="myChart" id="chart-profile-visit"></canvas>
                        </div>

                        <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar', // Ganti dengan jenis chart yang diinginkan, seperti 'line', 'bar', 'pie', dll.
                                data: {
                                    labels: <?php echo json_encode($bln) ?>,
                                    datasets: [{
                                        label: 'Pengajuan Layanan',
                                        data: <?php echo json_encode($jml) ?>, // Ganti dengan data Anda
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h3>Daftar Layanan</h3>
                    </div>
                    <div class="card-header">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <form action="" method="">
                                    <div class="col-5">

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Masukan keyword pencarian" name="cari">
                                            <button class="btn btn-outline-primary" type="submit" name="submit">Cari</button>
                                        </div>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Pengajuan Layanan</th>
                                            <th>Status</th>
                                            <th widht="50%">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;

                                        ?>
                                        <?php foreach ($pengajuan as $j) : ?>

                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $j['nama']; ?></td>
                                                <td><?= $j['jenis_pengajuan']; ?></td>

                                                <?php
                                                echo "<td>";

                                                if ($j['status'] == 0) {
                                                    echo "<span class='badge bg-danger'>";
                                                    echo 'Belum diproses';
                                                    echo "</span>";
                                                } elseif ($j['status'] == 1) {
                                                    echo "<span class='badge bg-primary'>";
                                                    echo 'Sedang diproses';
                                                    echo "</span>";
                                                } elseif ($j['status'] == 2) {
                                                    echo "<span class='badge bg-success'>";
                                                    echo 'Selesai, <br>';
                                                    echo 'Ambil Berkas Anda di Desa';
                                                    echo "</span>";
                                                }

                                                echo "</td>";
                                                $i++;
                                                ?>
                                                <td>
                                                    <a href="<?php echo base_url('Admin/' . $j['id'] . '/lihat_layanan') ?>"> <span class="btn btn-info text-white"><i class="bi bi-eye-fill"></i></span></a>
                                                    <!-- <a href="<?php echo base_url('Admin/' . $j['id'] . '/edit_layanan') ?>"> <span class="btn btn-warning btn-s"><i class="bi bi-pencil-square"></i></span></a> -->



                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </form>
                            </table>
                            <?= $pager->links('pengajuan', 'daftar_pagination'); ?>
                        </div>
                    </div>
                </div>

            </section>


            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h3>Daftar Aduan Masyarakat</h3>
                    </div>
                    <br>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <form action="" method="">
                                <div class="col-5">

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Masukan keyword pencarian" name="keyword">
                                        <button class="btn btn-outline-primary" type="submit" name="submit">Cari</button>
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aduan</th>
                                        <th>Status</th>
                                        <th widht="50%">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $j = 1;

                                    ?>
                                    <?php foreach ($aduan as $k) : ?>
                                        <tr>
                                            <td><?= $j; ?></td>
                                            <td><?= $k['nama']; ?></td>
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
                                            $j++;
                                            ?>
                                            <td>
                                                <a href="<?php echo base_url('Admin/' . $k['id'] . '/lihat_aduan') ?>"> <span class="btn btn-info text-white"><i class="bi bi-eye-fill"></i></span></a>
                                                <!-- <a href="<?php echo base_url('Admin/' . $k['id'] . '/edit_aduan') ?>"> <span class="btn btn-warning btn-s"><i class="bi bi-pencil-square"></i></span></a> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </form>
                        </table>
                        <?= $pager->links('aduan', 'daftar_pagination'); ?>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <?php if ($avatarData) : ?>
                                <img width="150" class="rounded-circle " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">
                            <?php else : ?>
                                <img src="<?php echo base_url('assets/images/profile/default.jpg') ?>">
                            <?php endif; ?>
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"><?= session('username'); ?></h5>
                            <h6 class="text-muted mb-0">@<?php
                                                            $role = session('role');

                                                            if ($role === '0') {
                                                                echo 'Masyarakat';
                                                            } elseif ($role === '1') {
                                                                echo 'Admin';
                                                            }
                                                            ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Registrasi Akun Terbaru</h4>
                </div>

                <div class="card-content pb-4">

                    <?php foreach ($alluser as $k) : ?>

                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="<?php echo base_url('assets/images/faces/4.jpg') ?>">

                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1"><?= $k['username']; ?></h5>
                                <h6 class="text-muted mb-0"> <?php


                                                                if ($k['role'] == '1') {
                                                                    echo "<span class='badge bg-success'>";
                                                                    echo 'Admin';
                                                                    echo "</span>";
                                                                } elseif ($k['role'] == '0') {
                                                                    echo "<span class='badge bg-primary'>";
                                                                    echo 'Masyarakat';
                                                                    echo "</span>";
                                                                }

                                                                ?></h6>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
            </div>
            <!-- <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div> -->
        </div>
    </section>
</div>
</div>
</div>