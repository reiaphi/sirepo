<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laman Upload</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         
          <form action="<?php echo base_url().'Admin/uploadFile'; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul </label>
                <input type="text" name="judul" class="form-control">
            </div>
            <div class="form-group">
                <label>Penulis </label>
                <input type="text" name="penulis" class="form-control">
            </div>
            <div class="form-group">
                <label>Pembimbing </label>
                <input type="text" name="pembimbing" class="form-control">
            </div>
            <div class="form-group">
                <label>File Upload </label>
                <input type="file" name="file" class="form-control">
            </div>
            <button>Submit</button>
          </form>
      </div>
   </section>
   <!-- Button trigger modal -->




</div>