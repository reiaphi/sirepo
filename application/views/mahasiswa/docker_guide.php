<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-info">Panduan Mendeploy Aplikasi dengan docker </h1>

    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header text-primary">
                    <h5>Docker Container</h5>
                </div>
                <div class="card-body">
                    <p>
                        Docker adalah sebuah aplikasi open source yang berfungsi sebagai wadah/container untuk mengepak/mengisolasi sebuah software secara lengkap beserta semua hal lainnya yang dibutuhkan oleh software tersebut agar dapat berfungsi.
                        <a target="#" href="<?= prep_url('docker.com') ?>"><i class="fas fa-fw fa-external-link-alt"></i></a>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header text-primary">
                    <h5>Status</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nama Aplikasi/Sistem</th>
                                <th scope="col">Nama File Aplikasi</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Link Docker Registry</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><?php if (!empty($file_aplikasi)) {
                                        echo $file_aplikasi->name;
                                    } else {
                                        echo "Belum Upload";
                                    }; ?></td>
                                <td><?php if (!empty($file_aplikasi)) {
                                        echo $file_aplikasi->name;
                                    } else {
                                        echo "Belum Upload";
                                    }; ?></td>
                                <td><a class="btn btn-info text-light">Download</a></td>
                                <td><?php if (!empty($file_aplikasi)) {
                                        echo $file_aplikasi->file;
                                    } else {
                                        echo "Lakukan Konfigurasi";
                                    }; ?></td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header text-primary">
                    <h5>Konfigurasi</h5>
                </div>
                <div class="card-body justify-content-center">
                    <a href="#" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Konfigurasi docker</span>
                    </a>

                </div>
            </div>

        </div>

    </div>
</div>