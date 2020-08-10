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

                    <div class="card-body ">
                        <div class="alert alert-success" role="alert">
                            Anda telah mengisi form ini!
                        </div>

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

                    <div class="card-body ">
                        <div class="alert alert-success" role="alert">
                            Anda telah mengisi form ini!
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </form>

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
                            <div class="alert alert-success" role="alert">
                                Anda Sudah mengupload file laporan
                            </div>
                        </div>
                        <div class="row">
                            <ul class="list-group text-left m-3">
                                <p>File yang sudah terupload:</p>
                                <?php foreach ($file as $files) :
                                ?>
                                    <li class="list-group-item">
                                        <?php
                                        echo $files['name'];
                                        ?>
                                        <a href="<?php echo base_url('publik/download/') .  $files['name']; ?>"> <i class=" fas fa-fw fa-eye"></i></a>

                                    <?php endforeach;
                                    ?>
                            </ul>
                        </div>

                    </div>
                    <!-- <div class="row card-body form-inline">
                        <div style="color: red;"><?php // echo (isset($message)) ? $message : ""; 
                                                    ?></div>
                        <?php // echo form_open("mahasiswa/insert_to_file_laporan", array('enctype' => 'multipart/form-data')); 
                        ?>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="input_file[]" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="input_file[]" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="input_file[]" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <input type="submit" name="submit" value="Simpan">
                        <?php// echo form_close(); ?>
                    </div> -->

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
                        <div class="alert alert-success" role="alert">
                            Anda Sudah mengupload file Aplikasi
                        </div>
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