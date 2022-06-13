    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Galeri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Galeri</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#add_modal"><i class="fas fa-plus"></i> Tambah Dokumentasi</button>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" id="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0 text-center" style="height: 300px;">
              <table class="table table-sm table-head-fixed text-nowrap table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="20%">Judul</th>
                    <!-- <th width="22%">Isi Post</th> -->
                    <th width="15%">Tanggal Post</th>
                    <th width="15%">Foto</th>
                    <th width="13%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $no = 1; 
                foreach ($galeri as $p) { ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->judul ?></td>
                    <!-- <td><?php echo substr($p->isi_post,0, 50) ?></td> -->
                    <td><?php echo $p->tanggal_gl ?></td>
                    <td><img src="<?php echo base_url().'assets/foto/fotogaleri/'.$p->gambar ?>" width="100"></td>
                    <td>
                      <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-guru<?php echo $p->id_galeri; ?>" ><i class="fas fa-edit" style="color: #fff;"></i></button>
                      <a class="btn btn-sm btn-danger" href="<?php echo base_url()?>admin/GaleriController/hapus_galeri/<?php echo $p->id_galeri; ?>>">
                        <i class="fas fa-trash"></i>
                      </a>
                  </tr>
                </tbody>
                <?php } ?> 
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Modal Tambah -->
<div class="modal fade" id="add_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Galeri</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/GaleriController/tambah_galeri'); ?>
          <div class="form-group">
            <label>Judul Gambar</label>
            <input type="text" name="judul_gl" class="form-control" placeholder="Masukkan Judul">
            <input type="hidden" name="tanggal_gl" value="<?php echo date("Y-m-d"); ?>">
            <!-- <input type="hidden" name="id_kategori" value="2"> -->
          </div>
          <div class="form-group">
            <label>Gambar </label>
            <div class="custom-file">
              <input type="file" name="gambar" class="custom-file-input" required>
              <label class="custom-file-label" for="gambar">choose file</label>
            </div>
          </div>         
          <!-- <div class="form-group">
            <label>Isi Prestasi</label>
            <textarea class="form-control" id="ckeditor" name="isi_post"></textarea>
          </div> -->
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default swalDefaultSuccess" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnSave">Simpan</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End Modal Tambah -->