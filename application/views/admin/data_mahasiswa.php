<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
        </ol>
    </nav>
    <h3 class="mb-2 color-utama">Data Tugas Akhir Mahasiswa</h3>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold color-utama">Data </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 64px;">NIM</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81px;">Nama</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 56px;">Judul Tugas Akhir</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">NIM</th>
                                    <th rowspan="1" colspan="1">Nama Mahaiswa</th>
                                    <th rowspan="1" colspan="1">Judul Tugas Akhir</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $no = 1;
                                if (!empty($ta_mhs)) {
                                    foreach ($ta_mhs as $data) : ?>

                                        <tr>
                                            <td><?php echo $data->nim; ?></td>
                                            <td><?php echo $data->name; ?></td>
                                            <td><?php echo $data->judul; ?></td>
                                            <td><?php if ($data->status_id === '1') : ?>
                                                    <!-- Approve -->
                                                    <p>Upload</p>

                                                <?php elseif ($data->status_id === '2') : ?>
                                                    <!-- tidak di aprove -->
                                                    <p>Pending</p>

                                                <?php else : ?>
                                                    <p>Publish</p>
                                                <?php endif; ?>
                                            </td>
                                            <td>

                                                <a href="<?= base_url('admin/get_detail/' . $data->user_id); ?>" class="btn btn-info p-1">

                                                    <span class="text">Detail</span>
                                                </a>

                                            </td>

                                        </tr>
                                <?php endforeach;
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>