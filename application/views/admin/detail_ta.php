<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/data_mahasiswa') ?>">Data Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <h1 class="h3 mb-0 text-gray-800">Detail Tugas Akhir</h1>

    <div class="row">
        <div class="col">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Biodata Mahasiswa</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-md-1">Nim</div>
                        <div class="col">: <?= $mahasiswa->nim; ?></div>
                        <div class="col col-md-2">Fakultas</div>
                        <div class="col">: <?= $mahasiswa->fakultas; ?></div>
                    </div>
                    <div class="row">
                        <div class="col col-md-1">Nama</div>
                        <div class="col">: <?= $mahasiswa->name; ?></div>
                        <div class="col col-md-2">Program Studi</div>
                        <div class="col">: <?= $mahasiswa->program_studi; ?></div>
                    </div>
                    <div class="row">
                        <div class="col col-md-1">Email</div>
                        <div class="col">: <?= $mahasiswa->email; ?></div>
                        <div class="col col-md-2">Tahun</div>
                        <div class="col">: <?= $mahasiswa->tahun; ?></div>

                    </div>
                    <div class="row">
                        <div class="col col-md-1">No HP</div>
                        <div class="col">: <?= $mahasiswa->no_hp; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Tugas Akhir</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardExample">
                    <div class="card-body">

                        <?php if ($ta) : ?>
                            <div class="row">
                                <div class="col col-md-2 "><strong>Judul</strong></div>
                                <div class="col">
                                    <h4><?= $ta->judul; ?></h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-2 "><strong>Pembimbing </strong></div>
                                <div class="col"><?= $ta->pembimbing; ?></div>
                            </div>
                            <div class="row">
                                <div class="col col-md-2 "><strong>Intisari</strong></div>
                                <div class="col"><?= $ta->intisari; ?></div>
                            </div>
                            <div class="row">
                                <div class="col col-md-2 "><strong>Abstract</strong></div>
                                <div class="col"><em><?= $ta->abstract; ?></em></div>
                            </div>
                            <div class="row">
                                <div class="col col-md-2 "><strong>Kata Kunci</strong></div>
                                <div class="col"><?= $ta->kata_kunci; ?></div>
                            </div>
                            <div class="row">
                                <?php if ($ta->status_id == 1) : ?>
                                    <form method="POST" action="<?= base_url('admin/action_ta/') . $ta->id; ?>">
                                        <input type="submit" name="action" value="aprove" class="btn btn-success btn-icon-split m-2" />
                                        <input type="submit" name="action" value="declined" class="btn btn-danger btn-icon-split m-2" />

                                    </form>
                                <?php endif; ?>
                            </div>
                        <?php else : ?>
                            <p>Tidak ada data</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#dataLaporan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">File Laporan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="dataLaporan">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nama File</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Akses</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aprove</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php if (!empty($file)) : ?>
                                    <?php foreach ($file as $files) :
                                    ?>
                                        <tr>
                                            <td><?= $files['name']; ?>
                                                <a href="<?php echo base_url('publik/preview/') .  $files['id']; ?>"> <i class=" fas fa-fw fa-eye"></i></a>
                                            </td>
                                            <td><?= $files['kategori']; ?></td>
                                            <td><?php if ($files['kategori'] == 2 || $files['kategori'] == 3 || $files['kategori'] == 6) {
                                                    echo "Publik";
                                                } else {
                                                    echo "Private";
                                                } ?></td>
                                            <td><?= $files['status']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/aprove_file/') . $files['id']; ?>" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                                <a href="<?= base_url('admin/decline_file/') . $files['id']; ?>" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Sending Email</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardExample2">
                    <div class="card-body">

                        <form method="POST" action="<?= base_url('admin/send_email/') . $mahasiswa->id; ?>">
                            <fieldset disabled="disabled">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email">to:</span>
                                    </div>
                                    <input type="text" class="form-control disable" id="disabledTextInput" placeholder="<?php echo $mahasiswa->email; ?>" aria-label="Username" aria-describedby="email">
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <textarea name="messageEmail" class="form-control" aria-label="With textarea" style="height: 300px;" placeholder="ketik sesuatu .."></textarea>
                            </div>

                            <button type="submit" class="btn btn-warning btn-icon-split m-2">
                                <span class="icon text-white-50">
                                    <i class="fas fa-envelope "></i>
                                </span>
                                <span class="text">send email</span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>