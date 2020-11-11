<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Tugas Akhir Mahasiswa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data </h6>
        </div>
        <div class="card-body">

            <div class="row">
                <table class="table table-bordered" width="100%">
                    <thead>
                        <tr role="row">
                            <th>Data</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Metadata skripsi/tugas akhir</td>
                            <td><?php if ($metadata) {
                                    if ($metadata->status_id == 3) {
                                        echo "Aproved";
                                    } else {
                                        echo "Declined";
                                    }
                                } else {
                                    echo "Belum ada data";
                                }
                                ?>
                            </td>

                            <td><?php if (empty($metadata)) : ?>
                                    <a href="<?= base_url('mahasiswa/index'); ?>">Upload Ulang</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>File Laporan</td>
                            <td>
                                <?php $x = 0; ?>
                                <?php if ($file_laporan) : ?>
                                    <?php foreach ($file_laporan as $data) : ?>
                                        <?php if ($data['status'] == 3) : ?>
                                            <?php $x++; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <?php if ($x < 7) : ?>
                                    Unggah lagi
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php //if (count($data) < 7) : 
                                ?>
                                <?php if ($x < 7) : ?>
                                    <a href="<?= base_url('mahasiswa/index'); ?>">Unggah</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>File Aplikasi</td>
                            <td><?php if ($file_aplikasi) {
                                    if ($file_aplikasi->status == 3) {
                                        echo "Aproved";
                                    } else {
                                        echo "Declined";
                                    }
                                } else {
                                    echo "Belum ada data";
                                } ?></td>
                            <td><?php if ($file_aplikasi) : ?>
                                    <?php if ($file_aplikasi->status == 3) : ?>
                                        <a href="#">Lihat demo</a>
                                    <?php else : ?>
                                        <a href="#">Unggah Ulang</a>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <a href="#">Unggah Ulang</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>