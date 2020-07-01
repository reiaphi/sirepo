
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Mahasiswa</h1>
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
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
          
        <?php foreach($mahasiswa as $mhs) { ?>
        <form action="<?php echo base_url().'mahasiswa/update';?>" method="post" >
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" class="form_control" value="<?php echo $mhs->id?>">
                <input type="text" name="nama" class="form_control" value="<?php echo $mhs->nama?>">
            </div>
            <div class="form-group">
                <label>Nim</label>
                <input type="text" name="nim" class="form_control" value="<?php echo $mhs->nim?>">
            </div>
            <div class="form-group">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form_control" value="<?php echo $mhs->prodi?>">
            </div>
            <div class="form-group">
                <label>Angkatan</label>
                <input type="number" name="angkatan" class="form_control" value="<?php echo $mhs->angkatan?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form_control" value="<?php echo $mhs->password?>">
            </div>
            <button class="reset" class="btn btn-danger">Reset</button>
            <button class="submit" class="btn btn-primary">Simpan</button>
            
        </form>
        <?php } ?>  

        </div>
    </section>
</div>