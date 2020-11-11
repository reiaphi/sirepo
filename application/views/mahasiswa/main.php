<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-info">Berkembangan Proses Tugas Akhir</h1>
    <!-- Basic Card Example -->

    <!-- <div id="accordion"> -->
    <div class="widget-timeline">
        <div class="widget-timeline-section bg-info text-white font-weight-semibold">Alur</div>
        <div class="widget-timeline-item">
            <div class="widget-timeline-info">
                <div class="widget-timeline-icon bg-warning"><b>1</b></div>
            </div>
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardOne" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardOne">
                    <h6 class="m-0 font-weight-bold text-info">Data Mahasiswa</h6>

                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardOne" data-parent="#accordion">
                    <?php if ($this->session->flashdata('save')) : ?>
                        <div class="alert alert-success" role="alert">
                            This is a success alert—check it out!
                        </div>
                    <?php endif; ?>
                    <div class="card-body ">
                        <?php if (isset($mahasiswa) == null) : ?>
                            <form id="yourFormId" name="yourFormId" action="<?= base_url() . 'mahasiswa/insert_to_mahasiswa'; ?>" method="POST">
                                <div class="form-group row">
                                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM Lengkap">
                                    </div>
                                </div>
                                <div class=" form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                                    <div class="col-sm-10">

                                        <select class="custom-select mr-sm-2" id="fakultas" name="fakultas">
                                            <option selected>Choose...</option>
                                            <option value="Matematika dan Ilmu Alam">Mipa</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="program_studi" class="col-sm-2 col-form-label">Program Studi</label>
                                    <div class="col-sm-10">

                                        <select class="custom-select mr-sm-2" id="program_studi" name="program_studi" value="<?php echo $mahasiswa->program_studi; ?>">
                                            <option selected>Choose...</option>
                                            <option value="S1 Ilmu Komputer">Ilmu Komputer</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="08xxxxxxxx" value="<?php echo $mahasiswa->no_hp; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="2020" value="<?php echo $mahasiswa->name; ?>">
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <button type="submit" class="btn btn-success btn-icon-split align-right">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Simpan dan Lanjutkan</span>
                                    </button>
                                </div>
                            </form>
                        <?php endif; ?>
                        <?php if ($mahasiswa) : ?>
                            <!-- Tasks Card Example -->
                            <div class="card border-left-danger mb-2 p">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        Anda Sudah pernah mengisi form ini!
                                    </div>
                                </div>
                            </div>

                            <form id="yourFormId" name="yourFormId" action="<?= base_url() . 'mahasiswa/insert_to_mahasiswa'; ?>" method="POST">
                                <fieldset disabled="disabled">
                                    <div class="form-group row">
                                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nim" name="nim" placeholder="<?= $mahasiswa->nim; ?>">
                                        </div>
                                    </div>
                                    <div class=" form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama lengkap">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                                        <div class="col-sm-10">

                                            <select class="custom-select mr-sm-2" id="fakultas" name="fakultas">
                                                <option selected>Choose...</option>
                                                <option value="Matematika dan Ilmu Alam">Mipa</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="program_studi" class="col-sm-2 col-form-label">Program Studi</label>
                                        <div class="col-sm-10">

                                            <select class="custom-select mr-sm-2" id="program_studi" name="program_studi" value="<?php echo $mahasiswa->program_studi; ?>">
                                                <option selected>Choose...</option>
                                                <option value="S1 Ilmu Komputer">Ilmu Komputer</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="08xxxxxxxx" value="<?php echo $mahasiswa->no_hp; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="2020" value="<?php echo $mahasiswa->name; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <button type="submit" class="btn btn-success btn-icon-split align-right">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Simpan dan Lanjutkan</span>
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Karya Tulis Ilmiah -->
        <div class="widget-timeline-item">
            <div class="widget-timeline-info">
                <div class="widget-timeline-icon bg-warning"><b>2</b></div>
            </div>
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardTwo" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardTwo">
                    <h6 class="m-0 font-weight-bold text-info">Karya Tulis Akhir</h6>

                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardTwo" data-parent="#accordion">
                    <div class="card-body">
                        <?php if ($mahasiswa) : ?>
                            <!-- Tasks Card Example -->
                            <div class="card border-left-danger mb-2 p">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        Anda Sudah pernah mengisi form ini! Silakan lihat di bagian "Tugas Akhir saya".
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($ta_saya) == null) : ?>
                            <form action="<?= base_url() . 'mahasiswa/insert_to_tugas_akhir'; ?>" method="POST">
                                <div class="form-group row">
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Judul</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="judul" name="judul" class="form-control"></input>
                                        </div>
                                    </div>

                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Abstrak/Intisari</span>
                                            </div>
                                        </div>
                                        <div class="col">

                                            <textarea class="form-control" name="intisari" aria-label="With textarea" style="height: 300px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Abstract</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <textarea class="form-control" name="abstract" aria-label="With textarea" style="height: 300px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Pembimbing</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="pembimbing" class="form-control"></input>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Kata Kunci</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="kata_kunci" class="form-control"></input>
                                        </div>
                                    </div>

                                    <div class="form-group row m-3 ">
                                        <button type="submit" class="btn btn-success btn-icon-split align-right">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Simpan dan Lanjutkan</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Collapsable Card Example -->
        <div class="widget-timeline-item">
            <div class="widget-timeline-info">
                <div class="widget-timeline-icon bg-warning"><b>3</b></div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardThree" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardThree">
                    <h6 class="m-0 font-weight-bold text-info">Unggah File</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row-inline">
                            <div class="alert alert-danger" role="alert">
                                <p>Pastikan ada 7 file dengan nama yang sudah sesuai ketentuan!</p>
                                <p> Tahun-NIM(6 digit)-namafile</p>
                                <p>contoh:2020-123456-abstract.pdf</p>
                            </div>
                        </div>

                        <div class="row">
                            <ul class="list-group text-left m-3">
                                <p>file yang sudah terunggah:</p>
                                <?php if (is_array($file) || is_object($file)) : ?>
                                    <?php foreach ($file as $files) :                                ?>
                                        <?php if ($files && $files['status'] != '2') : ?>
                                            <?php if (count($files) < 7 || isset($file) == null) : ?>
                                                <li class="list-group-item">
                                                    <?= $files['name']; ?>

                                                    <a href="<?php echo base_url('publik/preview/') .  $files['id']; ?>"> <i class=" fas fa-fw fa-eye"></i></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach;
                                    ?>
                                <?php endif; ?>

                            </ul>
                        </div>
                        <div class="row ">

                            <?php if (is_array($file) || is_object($file)) : ?>
                                <?php $x = 0; ?>
                                <?php foreach ($file as $files) :                                ?>
                                    <?php if ($files && $files['status'] != '2') : ?>
                                        <?php $x++; ?>
                                    <?php endif; ?>
                                <?php endforeach;
                                ?>
                                <?php if ($x < 7) : ?>
                                    <a href="#" class="btn btn-info btn-icon-split m-3" data-toggle="modal" data-target="#addUser">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Tambah File</span>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <!-- Modal -->
                            <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH FILE</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>
                                            <?php echo form_open("mahasiswa/insert_to_file_laporan", array('enctype' => 'multipart/form-data')); ?>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="kategori" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Halaman Judul</option>
                                                    <option value="2">Abstak/Intisari & Abstact</option>
                                                    <option value="3">Daftar Isi</option>
                                                    <option value="4">Pendahuluan</option>
                                                    <option value="5">Penutup</option>
                                                    <option value="6">Daftar Pustaka</option>
                                                    <option value="7">Fulltext</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pilih File</label>
                                                <input class="my-1" type="file" name="input_file" class="form-control"></input>
                                            </div>
                                            <input class="btn btn-info" type="submit" name="submit" value="Upload">
                                            <?php echo form_close(); ?>


                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Collapsable Card Example -->
        <div class="widget-timeline-item">
            <div class="widget-timeline-info">
                <div class="widget-timeline-icon bg-warning"><b>4</b></div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard4" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCard4">
                    <h6 class="m-0 font-weight-bold text-info">Unggah File Aplikasi</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCard4" data-parent="#accordion">
                    <div class="row card-body form-inline">
                        <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>
                        <?php echo form_open("mahasiswa/insert_to_file_aplikasi", array('enctype' => 'multipart/form-data')); ?>
                        <input type="file" name="input_file" class="form-control"></input>
                        <input type="submit" name="submit" value="Simpan">
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-timeline-item">
            <div class="widget-timeline-info">
                <div class="widget-timeline-icon bg-info"><b></b></div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>
<!-- End of Main Content -->