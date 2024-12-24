<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-4 col-md-6">
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
                <div class="col-6 col-lg-4 col-md-6">
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
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Tanggapan</h6>
                                    <h6 class="font-extrabold mb-0"><?= $totalItemCount ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
            <?php if ($avatarData) : ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tanggapan Permohonan Layanan Terbaru</h3>
                        </div>
                        <?php foreach ($layananData as $j) : ?>
                            <div class="card mb-5">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img width="150" class="rounded-circle " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1"><?= session('username'); ?></h5>
                                        <h6 class="text-muted mb-0"><?= session('email'); ?></h6>
                                        <br>
                                        <p><?= $j['tanggapan']; ?></p>
                                    </div>

                                </div>

                                <hr>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>

            <?php else : ?>
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Data Tanggapan Pengajuan Layanan Terbaru Tidak Tersedia</h4>
                    <p>Silahkan Inputkan Data Permohonan Layanan dan Aduan Anda Terlebih Dahulu.</p>
                </div>

            <?php endif; ?>


            <?php if ($avatarData) : ?>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tanggapan Aduan Terbaru</h3>
                        </div>
                        <?php foreach ($aduanData as $j) : ?>
                            <div class="card mb-5">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img width="150" class="rounded-circle " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1"><?= session('username'); ?></h5>
                                        <h6 class="text-muted mb-0"><?= session('email'); ?></h6>
                                        <br>

                                        <p><?= $j['tanggapan']; ?></p>

                                    </div>
                                    <hr>
                                </div>
                                <hr>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Data Tanggapan Aduan Terbaru Tidak Tersedia</h4>
                    <p>Silahkan Inputkan Data Permohonan Layanan dan Aduan Anda Terlebih Dahulu.</p>
                </div>
            <?php endif; ?>


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
                                                            ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </section>
</div>