<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Tugas Akhir</h1>

    </div>
    <div class="container border">

        <div class="row text-center m-3">
            <div class="col ">
                <h2><?= $ta->judul; ?></h2>
            </div>
        </div>
        <div class="row text-center m-3">
            <!-- ini nanti ganti get nama mahasiswa -->
            <div class="col ">
                NAMA PENULIS,<?= $ta->pembimbing; ?></div>
        </div>
        <div class="row text-center font-weight-bold m-3">
            <!-- ini juga ngambil dari tabel mahasiswa -->
            <div class="col ">2020 | D3 Komputer dan Sistem Informasi</div>

        </div>
        <div class="row text-center m-3">
            <h6 class="col font-weight-bold ">Abstract </h6>
        </div>
        <div class="row text-justify m-3">
            <h6 class="col">
                <p><?= $ta->intisari; ?></p>
                <p><?= $ta->abstract; ?></p>
            </h6>
        </div>
        <div class="row text-justify m-3">
            <h6 class="col">
                <p><b>Kata Kunci :</b><?= $ta->kata_kunci; ?></p>
            </h6>
        </div>
        <div class="row text-center m-3">
            <div class="col">
                <div class="card">
                    <a href="#" class="btn btn-info btn-icon-split">
                        File Pdf
                    </a>
                </div>
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
                    <li class="list-group-item">S1-2020-397022-tableofcontent.pdf </li>
                    <li class="list-group-item">S1-2020-397022-abstract.pdf</li>
                    <li class="list-group-item">S1-2020-397022-title.pdf</li>
                    <li class="list-group-item">S1-2020-397022-bibliography.pdf </li>
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