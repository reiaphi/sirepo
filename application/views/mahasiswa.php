<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
          <button class="btn btn-primary"data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"> Tambah Data Mahasiswa</i></button>
<br> <br>
          <table class="table">
              <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>NIM</th>
                  <th>PRODI</th>
                  <th>ANGKATAN</th>
                  <th>PASSWORD</th>
                  <th colspan="2">AKSI</th>
              </tr>
              <?php
              $no=1;
              foreach($mahasiswa as $mhs):?>
              <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $mhs->nama ?></td>
                  <td><?php echo $mhs->nim ?></td>
                  <td><?php echo $mhs->prodi ?></td>
                  <td><?php echo $mhs->angkatan ?></td>
                  <td><?php echo $mhs->password ?></td>
                  <td onclick="javascript: return confirm('Anda yakin hapus?') "><?php echo anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash "></i></div>') ?></td>
                  <td><?php echo anchor('mahasiswa/edit/'.$mhs->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit "></i></div>') ?></td>

              </tr>
            <?php endforeach;?>
          </table>
      </div>
   </section>
   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'mahasiswa/tambah_aksi'; ?>">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Nim</label>
                <input type="text" name="nim" class="form-control">
            </div>
            <div class="form-group">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form-control">
            </div>
            <div class="form-group">
                <label>Angkatan</label>
                <input type="number" name="angkatan" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Save</button>
    
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

</div>