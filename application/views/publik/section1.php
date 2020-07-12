<div class="container">
    <div class="row my-4">
        <div class="col">

            <h3 class="title"><?php echo $tugas_akhir->judul; ?></h3>
            <p><strong><?php echo $tugas_akhir->pembimbing; ?></p>
            2020 | Tugas Akhir | D3 Ilmu Komputer</strong>
        </div>

    </div>
    <br>
    <div class="row ">
        <div class="col-lg-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="abstrak" aria-selected="true">Abstrak</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="file" aria-selected="false">File PDF</a>
                </li>
                <li class="nav-item text-right" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="demo" aria-selected="false">Demo</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p class="text-justify font-weight-light"><?php echo $tugas_akhir->intisari; ?></p>
                    <p class="text-justify font-weight-light"><em><?php echo $tugas_akhir->abstract; ?></em></p>
                    <p class="font-weight-bold">Kata Kunci : <?php echo $tugas_akhir->kata_kunci; ?></p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <ul class="list-group text-left m-3">
                        <?php foreach ($file as $files) :
                        ?>
                            <li class="list-group-item">
                                <?php
                                echo $files['name'];
                                ?>
                                <a href="<?php echo base_url('publik/download/') .  $files['name']; ?>"> <i class=" fas fa-fw fa-download"></i></a>
                            </li>
                        <?php endforeach;
                        ?>
                        <li class="list-group-item">S1-2020-397022-abstract.pdf
                            <i class="fas fa-fw fa-download"></i></li>
                        <li class="list-group-item">S1-2020-397022-title.pdf
                            <i class="fas fa-fw fa-download"></i> </li>
                        <li class="list-group-item">S1-2020-397022-bibliography.pdf
                            <i class="fas fa-fw fa-download"></i>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="mx-auto my-5" style="width: 200px;">
                        <button class="btn btn-danger" href="#">Demo Aplikasi</button>
                    </div>
                </div>
            </div>
        </div>


        </>
    </div>