<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-info">Berkembangan Proses Tugas Akhir</h1>
    <!-- Basic Card Example -->
    <div id="accordion">
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
                    <div class="collapse" id="collapseCardOne" data-parent="#accordion">
                        <div class="card-body">
                            <form action="<?= base_url() . 'mahasiswa/insert_to_mahasiswa'; ?>" method="POST">
                                <div class="form-group row">
                                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
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
                                            <option value="Sekolah Vokasi">Sekolah Vokasi</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="program_studi" class="col-sm-2 col-form-label">Program Studi</label>
                                    <div class="col-sm-10">

                                        <select class="custom-select mr-sm-2" id="program_studi" name="program_studi">
                                            <option selected>Choose...</option>
                                            <option value="D3 Komputer dan Sistem Informasi">Komputer dan Sistem Informasi</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="08xxxxxxxx">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="2020">
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
                    <div class="collapse" id="collapseCardTwo" data-parent="#accordion">
                        <div class="card-body">
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
                    <div class="collapse" id="collapseCardThree" data-parent="#accordion">
                        <div class="row card-body form-inline">
                            <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>
                            <?php echo form_open("mahasiswa/insert_to_file_laporan", array('enctype' => 'multipart/form-data')); ?>
                            <input type="file" name="input_file" class="form-control"></input>
                            <input type="submit" name="submit" value="Simpan">
                            <?php echo form_close(); ?>
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
                    <div class="collapse" id="collapseCard4" data-parent="#accordion">
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
        </div>

    </div>
</div>

</div>





<!-- End of Main Content -->