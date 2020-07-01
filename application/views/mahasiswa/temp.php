<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Berkembangan Proses Tugas Akhir</h1>
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 25%;">
            Step 1 of 5
        </div>
    </div>
    <div class="my-3">
        <a class="btn btn-primary" type="button" data-toggle="tab" data-target="#step1" data-step="1">Toggle both 1</a>
        <a class="btn btn-primary" type="button" data-toggle="tab" data-target="#collapseCardTwo" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2" data-step="2">Toggle both 2</a>
        <a class="btn btn-primary" type="button" data-toggle="tab" data-target="#collapseCardThree" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both 3</a>
    </div>
    <!-- Basic Card Example -->

    <!-- Collapsable Card Example -->
    <div id="step1" class="card shadow mb-4 active">
        <!-- Card Header - Accordion -->
        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        <!-- Card Content - Collapse -->
        <div class="tab">
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNama" placeholder="Nama lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNim" placeholder="NIM Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputProdi" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputProdi" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTelepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTelepon" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <a href="#" class="btn btn-success btn-icon-split align-right">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Simpan dan Lanjutkan</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Karya Tulis Ilmiah -->
        <div class="row">
            <div class="col">
                <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardTwo" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardTwo">
                        <h6 class="m-0 font-weight-bold text-primary">Karya Tulis Akhir</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="collapseCardTwo" data-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Judul</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control"></input>
                                        </div>
                                    </div>

                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Abstrak/Intisari</span>
                                            </div>
                                        </div>
                                        <div class="col">

                                            <textarea class="form-control" aria-label="With textarea" style="height: 300px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Abstract</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <textarea class="form-control" aria-label="With textarea" style="height: 300px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Pembimbing</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control"></input>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Kata Kunci</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control"></input>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="col col-lg-2">
                                            <div class="input-group-prepend">
                                                <span class="text">Tahun</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control"></input>
                                        </div>
                                    </div>
                                    <div class="form-group row m-3 ">
                                        <a href="#" class="btn btn-success btn-icon-split align-right">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Simpan dan Lanjutkan</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardThree" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardThree">
                <h6 class="m-0 font-weight-bold text-primary">Unggah File</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" id="collapseCardThree" data-parent="#accordion">
                <div class="row card-body">
                    <div class="col border">
                        <p>Unggah Laporan</p>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="file-upload-wrapper">
                                    <input type="file" id="input-file-now" class="file-upload" />
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="file-upload-wrapper">
                                    <input type="file" id="input-file-now" class="file-upload" />
                                </div>
                            </li>
                            <li class="list-group-item">

                                <div class="file-upload-wrapper">
                                    <input type="file" id="input-file-now" class="file-upload" />
                                </div>

                            </li>
                            <li class="list-group-item">
                                <div class="file-upload-wrapper">
                                    <input type="file" id="input-file-now" class="file-upload" />
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col border">Unggah Aplikasi</div>
                </div>
            </div>
        </div>

    </div>
</div>




<!-- End of Main Content -->
</div>