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
                        <?php if (isset($ta)) {
                            echo "<p>Data tidak ditemukan</p>";
                        } ?>
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
                                    <th scope="col">Aprove</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (isset($file)) {
                                    echo "<tr><td>Data tidak ditemukan<td></tr>";
                                } ?>
                                <?php foreach ($file as $files) :
                                ?>
                                    <tr>
                                        <td><?= $files['name']; ?>
                                            <a href="<?php echo base_url('publik/preview/') .  $files['id']; ?>"> <i class=" fas fa-fw fa-eye"></i></a>
                                        </td>
                                        <td>Absta</td>
                                        <td>@mdo</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>



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
                    <h6 class="m-0 font-weight-bold text-primary">File Laporan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardExample2">
                    <div class="card-body">

                        <?php if ($file) : ?>
                            <?php foreach ($file as $files) :
                            ?>
                                <div class="row">
                                    <div class="col">
                                        <?= $files['name']; ?>
                                        <a href="<?php echo base_url('publik/preview/') .  $files['id']; ?>"> <i class=" fas fa-fw fa-eye"></i></a>
                                    </div>
                                    <div class="col align-items-center">
                                        <input type="checkbox" name="check" value="Public">Publik </input>
                                        <input type="submit" name="action" value="aprove" class="btn btn-success btn-icon-split m-2" />
                                        <input type="submit" name="action" value="declined" class="btn btn-danger btn-icon-split m-2" />
                                    </div>


                                    <!-- <?php if ($files['status'] == 1) : ?>
                                                <form method="POST" action="<?= base_url('admin/action_file/') . $files['id']; ?>">
                                                    <div class="input-group mb-3">
                                                        ? -->
                                    <!-- <select class="custom-select" id="inputGroupSelect01" name="kategori_file">
                                                            <option selected>Choose...</option>
                                                            <option value="1">Judul</option>
                                                            <option value="2">Abstrak/Intisari & Abstact</option>
                                                            <option value="3">Daftar Isi</option>
                                                            <option value="4">Pendahuluan</option>
                                                            <option value="5">Penutup/Kesimpulan</option>
                                                            <option value="6">Daftar Pustaka</option>
                                                            <option value="7">Fulltext</option>
                                                        </select> -->
                                    <!-- </div> -->

                                    <!-- </form> -->
                                <?php endif; ?>
                                </div>
                            <?php endforeach;
                            ?>
                        <?php elseif (!$file) : ?>
                            <p>tidak ada data</p>
                        <?php endif; ?>


                        <div class="row">
                            <?= $mahasiswa->id; ?>
                            <form method="POST" action="<?= base_url('admin/send_email/') . $mahasiswa->id; ?>">
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
</div>