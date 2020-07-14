<div class="container-fluid">
    <section id="main-heading" class="section-page">
        <div class="container">
            <div class="row text-center align-items-center" style="padding: 100px">
                <div class="col-sm-offset-1 col-sm-10">
                    <h2 class="text-info">Electronic Theses &amp; Dissertations </h2>
                    <form class="form-inline" method="post" action="#" autocomplete="off">
                        <div class="input-group input-group-lg col-lg-12  search-box">
                            <input type="text" class="form-control" name="keyword" placeholder="Search" required="">
                            <span class="input-group-btn hidden-xs">
                                <button class="btn btn-outline-info m-1" type="submit"> <i class=" fas fa-fw fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Sort</label>
                        </div>
                        <select class="custom-select md-3">
                            <option selected>Choose...</option>
                            <option value="1">dari yang terbaru</option>
                            <option value="2">dari yang terlama</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4 no-footer">

                            <div class="row">
                                <table class="table dataTable no-footer" id="example" width="100%" cellspacing="0" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">#</th>
                                            <th rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Data yang ditemukan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tugas_akhir as $data) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td>
                                                    <div class="info-news info-item">
                                                        <article class="post">
                                                            <div class="post-content">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="post-title">

                                                                            <h3><a href="<?= base_url('publik/section1/' . $data->id); ?>"><?php echo $data->judul ?></a></h3>
                                                                            <div class="entry-content"><i class="fas fa-fw fa-user"></i> <b><?php echo $data->pembimbing ?></b></div>
                                                                        </div>
                                                                        <div class="entry-content"><span class="fas fa-fw fa-list-alt"></span> <b><i>2020 | Skripsi | S1 Ilmu KOmputer</i></b></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>