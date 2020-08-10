<div class="container-fluid">
    <section id="main-heading" class="section-page">
        <div class="container">
            <div class="row text-center align-items-center my-3">
                <div class="col-sm-offset-1 col-sm-10">
                    <h2 class="text-info">Electronic Theses &amp; Dissertations </h2>
                    <form class="form" method="post" action="<?= base_url('publik'); ?>">
                        <div class="row my-3">
                            <div class="input-group input-group-lg col-lg-12  search-box">
                                <input type="text" class="form-control" name="keyword" placeholder="Search keyword..">
                                <span class="input-group-btn hidden-xs">
                                    <input class="btn btn-outline-info m-1" name="submit" type="submit" value="search"> </span>
                            </div>
                        </div>
                        <div class="row col-md-4 my-3">
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
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data Tugas Akhir yang ditemukan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($tugas_akhir)) : ?>
                                <tr>
                                    <td>Data tidak ditemukan</td>
                                </tr>
                            <?php endif; ?>
                            <?php
                            $no = 1;
                            foreach ($tugas_akhir as $data) : ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td class="col-md-9">
                                        <div class="info-news info-item">
                                            <article class="post">
                                                <div class="post-content">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="post-title">
                                                                <h3><a href="<?= base_url('publik/section1/' . $data->id); ?>"><?php echo $data->judul; ?></a></h3>
                                                                <div class="entry-content"><i class="fas fa-fw fa-user"></i> <b><?php echo $data->name; ?>,<?= $data->pembimbing; ?></b></div>
                                                            </div>
                                                            <div class="entry-content"><span class="fas fa-fw fa-list-alt"></span> <b><i><?= $data->tahun; ?> | Tugas Akhir | <?= $data->program_studi; ?></i></b></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </td>
                                </tr>
                            <?php $no++;
                            endforeach; ?>
                        </tbody>

                    </table>
                    <?= $this->pagination->create_links(); ?>

                </div>
            </div>
        </div>
    </section>
</div>