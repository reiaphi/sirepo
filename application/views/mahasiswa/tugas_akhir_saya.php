<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tugas Akhir Saya</h1>

    </div>
    <div class="container border">

        <div class="row border text-left m-3">
            <div class="col col-md-2 ">
                <strong>
                    <p>Penulis</p>
                    <p>Pembimbing</p>
                </strong>
            </div>
            <div class="col ">
                <p><?= $penulis->name; ?></p>
                <p><?= $ta_saya->pembimbing; ?></p>
            </div>
        </div>
        <div class="row text-center m-3">
            <div class="col ">
                <h2><?= $ta_saya->judul; ?></h2>
            </div>
        </div>
        <div class="row text-center font-weight-bold m-3">
            <div class="col "><?= $penulis->tahun; ?> | <?= $penulis->program_studi; ?></div>

        </div>
        <div class="row text-center m-3">
            <h6 class="col font-weight-bold ">Abstract </h6>
        </div>
        <div class="row text-justify m-3">
            <h6 class="col">
                <p><?= $ta_saya->intisari; ?> </p>
                <p> <?= $ta_saya->abstract; ?></p>
            </h6>
        </div>
        <div class="row text-justify m-3">
            <h6 class="col">
                <p><b>Kata Kunci :</b> <?= $ta_saya->kata_kunci; ?></p>
            </h6>
        </div>
        <div class="row text-center m-3">
            <div class="col">
                <ul class="list-group text-left m-3">
                    <?php foreach ($file as $files) :
                    ?>
                        <li class="list-group-item">
                            <?php
                            echo $files['name'];
                            ?>
                        </li>
                    <?php endforeach;
                    ?>
                </ul>
            </div>
            <div class="col align-items-end">
                <div class="card-body align-items-center">
                    <a href="#" class="btn btn-info btn-icon-split">
                        <span class="text">Demo Aplikasi</span>
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>


            </div>

        </div>
    </div>