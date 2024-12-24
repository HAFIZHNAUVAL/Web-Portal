</div>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail All User</h3>
                    <p class="text-subtitle text-muted">Berikut detail user yang telah melakukan registrasi</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/all_user') ?>">Dashboard</a></li>
                            <li class=" breadcrumb-item active" aria-current="page">Detail All user</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div class="mb-5">
            <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('Admin/all_user') ?>" class="btn btn-secondary px-3 pt-2 me-2">
                <span class="fa-fw fa-lg select-all fas text-white"><i class="bi-arrow-left text-white"></i></span>
            </a>
        </div>

        <!-- Input SKTP -->

        <?php foreach ($alluser as $i) : ?>
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="card-title d-inline-block">Detai All User</h3> <small class="text-muted"></small>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <h4></h4>
                        <h6 class="text-muted">
                        </h6>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <div class="card mb-5">
                            <p>
                                <?php if ($avatarData) : ?>
                                    <img width="150" class="rounded-circle " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">
                                <?php else : ?>
                                    <img src="<?php echo base_url('assets/images/profile/default.jpg') ?>">
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <div class="me-5">
                            <p>
                                <span class="fw-bold">Username : <?= $i['username']; ?></span>
                            </p>
                            <p>
                                <span class="fw-bold">Email : <?= $i['email']; ?></span>
                            </p>

                        </div>
                        <div class="me-5">

                            <p>
                                <span class="fw-bold me-1">Status :
                                    <?php


                                    if ($i['role'] == '1') {
                                        echo "<span class='badge bg-success'>";
                                        echo 'Admin';
                                        echo "</span>";
                                    } elseif ($i['role'] == '0') {
                                        echo "<span class='badge bg-primary'>";
                                        echo 'Masyarakat';
                                        echo "</span>";
                                    }

                                    ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="px-5 py-3 d-flex justify-content-center">
                        <div class="modal fade text-left" id="imageDetail" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel17">
                                            Foto
                                        </h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-center">

                                            <img class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#imageDetail" src="{{ asset("storage/$complaint->image") }}" alt="{{ $complaint->category->name }}">

                                            <img class="img-fluid rounded" data-bs-toggle="modal" data-bs-target="#imageDetail" src="{{ asset('images/no-image-2.jpg') }}" alt="{{ $complaint->category->name }}">

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>

                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>