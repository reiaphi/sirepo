<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/data_file_aplikasi') ?>">Data Aplikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <div class="card shadow m-3">

        <div class="card-header">

            <h6 class="m-0 font-weight-bold color-utama">Data Status </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>filename</th>
                            <th>port</th>
                            <th>status</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $file_app->name; ?>
                                <a href="<?php echo base_url('admin/download/') .  $file_app->name; ?>"> <i class=" fas fa-fw fa-download"></i></a>
                            </td>
                            <td><?php echo $file_app->port; ?></td>
                            <td><?php echo $file_app->status; ?></td>
                            <td><?php echo $file_app->notes; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-5">
            <div class="card shadow m-3">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold color-utama">Input Port </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url('admin/update_port_app/') . $file_app->id; ?>">
                        <div class="form-group">
                            <input name="port" class="form-control" type="text" placeholder="input link port">
                        </div>

                        <button class="btn btn-success text-light" type="submit">submit</button>

                    </form>
                </div>
            </div>
            <div class="card shadow m-3">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold color-utama">Notes </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url('admin/update_note_app/') . $file_app->id; ?>">

                        <div class="form-group">
                            <textarea name="note" class="form-control" aria-label="With textarea" style="height: 100px;" placeholder="ketik sesuatu .."></textarea>
                        </div>

                        <button class="btn btn-success text-light" type="submit">submit</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow mr-3 my-3">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold color-utama">Send Email </h6>
                </div>
                <div class="card-body">
                    <form method="POST" href="#">

                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="email">to:</span>
                            </div>
                            <input type="text" class="form-control" placeholder="<?php echo $mahasiswa->email; ?>" aria-label="Username" aria-describedby="email">

                        </div>
                        <div class="form-group">
                            <textarea class="form-control" aria-label="With textarea" style="height: 300px;" placeholder="ketik sesuatu .."></textarea>
                        </div>

                        <a class="btn btn-danger text-light" type="submit">send</a>

                    </form>
                </div>
            </div>
        </div>

    </div>

</div>