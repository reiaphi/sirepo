<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Tugas Akhir</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Biodata Mahasiswa</h6>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                        <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nim" value="<?= $mahasiswa->nim; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fullname" value="<?= $mahasiswa->name; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" value="<?= $mahasiswa->email; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-3 col-form-label">Fakultas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fakultas" value="<?= $mahasiswa->fakultas; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prodi" class="col-sm-3 col-form-label">Program Studi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="prodi" value="<?= $mahasiswa->program_studi; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-3 col-form-label">No. HP</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nohp" value="<?= $mahasiswa->no_hp; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tahun" value="<?= $mahasiswa->tahun; ?>" disabled>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Tugas Akhir</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-md-3 "><strong>Judul</strong></div>
                            <div class="col">
                                <h4><?= $ta->judul; ?></h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-md-3 "><strong>Pembimbing </strong></div>
                            <div class="col"><?= $ta->pembimbing; ?></div>
                        </div>
                        <div class="row">
                            <div class="col col-md-3 "><strong>Intisari</strong></div>
                            <div class="col"><?= $ta->intisari; ?></div>
                        </div>
                        <div class="row">
                            <div class="col col-md-3 "><strong>Abstract</strong></div>
                            <div class="col"><em><?= $ta->abstract; ?></em></div>
                        </div>
                        <div class="row">
                            <div class="col col-md-3 "><strong>Kata Kunci</strong></div>
                            <div class="col"><?= $ta->kata_kunci; ?></div>
                        </div>
                        <div class="row">
                            <a href="#" class="btn btn-warning btn-icon-split m-2">
                                <span class="icon text-white-50">
                                    <i class="fas fa-exclamation-triangle "></i>
                                </span>
                                <span class="text">Declined</span>
                            </a>
                            <form method="POST" action="<?= base_url('admin/aprove/') . $ta->id; ?>">
                                <button type="submit" class="btn btn-success btn-icon-split m-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check "></i>
                                    </span>
                                    <span class="text">Aprove</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">File Laporan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardExample2">
                    <div class="card-body">
                        <div class="row">
                            <ul class="list-group text-left m-3">
                                <?php foreach ($file as $files) :
                                ?>
                                    <li class="list-group-item">
                                        <?php
                                        echo $files['name'];
                                        ?>
                                        <a href="<?php echo base_url('publik/preview/') .  $files['id']; ?>"> <i class=" fas fa-fw fa-eye"></i></a>
                                    <?php endforeach;
                                    ?>
                            </ul>
                        </div>
                        <div class="row">
                            <form method="POST" action="<?= base_url('admin/send_email/') . $files['ta_id']; ?>">
                                <button type="submit" class="btn btn-warning btn-icon-split m-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle "></i>
                                    </span>
                                    <span class="text">Declined</span>
                                </button>
                            </form>
                            <p> <?= $files['ta_id']; ?> </p>
                            <form method="POST" action="<?= base_url('admin/aprove_file/') . $files['ta_id']; ?>">
                                <button type="submit" class="btn btn-success btn-icon-split m-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check "></i>
                                    </span>
                                    <span class="text">Aprove</span>
                                </button>
                            </form>



                            <!-- Modal -->
                            <div class="modal fade" id="mosalPublish" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Some text in the modal.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>