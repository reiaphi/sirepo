<div class="container">
    <div class="row my-4">
        <div class="col">
            <h3 class="title color-utama"><?php echo $tugas_akhir[0]['judul']; ?></h3>
            <p><strong><?php echo $tugas_akhir[0]['name']; ?>,<?php echo $tugas_akhir[0]['pembimbing']; ?> </p>
            <?php echo $tugas_akhir[0]['tahun']; ?>| <?php echo $tugas_akhir[0]['program_studi']; ?></strong>
        </div>

    </div>
    <br>
    <div class="row ">
        <div class="col-lg-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link color-utama active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="abstrak" aria-selected="true">Abstrak</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link color-utama" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="file" aria-selected="false">File PDF</a>
                </li>
                <li class="nav-item text-right" role="presentation">
                    <a class="nav-link color-utama" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="demo" aria-selected="false">Demo</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p class="text-justify font-weight-light"><?php echo $tugas_akhir[0]['intisari']; ?></p>
                    <p class="text-justify font-weight-light"><em><?php echo $tugas_akhir[0]['abstract']; ?></em></p>
                    <p class="font-weight-bold">Kata Kunci : <?php echo $tugas_akhir[0]['kata_kunci']; ?></p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <ul class="list-group text-left m-3">

                        <?php foreach ($file as $files) :
                        ?>
                            <li class="list-group-item">

                                <?php echo $files['name']; ?>
                                <a href="<?php echo base_url('publik/preview/') .  $files['id']; ?>" target="_blank"> <i class=" fas fa-fw fa-eye color-sekunder"></i></a>
                                <a href="<?php echo base_url('publik/download/') .  $files['name']; ?>"> <i class=" fas fa-fw fa-download color-sekunder"></i></a>

                            </li>
                        <?php endforeach;
                        ?>

                    </ul>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="mx-auto my-5" style="width: 200px;">
                        <?= $tugas_akhir[0]['id'] ?>
                        <a class="btn btn-danger" target="_blank" href="<?= base_url('publik/demo/') . $tugas_akhir[0]['ta_id']; ?>">Demo Aplikasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>