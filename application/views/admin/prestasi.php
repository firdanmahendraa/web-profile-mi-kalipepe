    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Prestasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Prestasi</li>
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
              <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#add_modal"><i class="fas fa-plus"></i> Tambah Prestasi</button>
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
              <table class="table table-sm table-head-fixed text-nowrap table-hover">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="20%">Judul</th>
                    <th width="22%">Isi Post</th>
                    <th width="15%">Tanggal Post</th>
                    <th width="15%">Foto</th>
                    <th width="15%">Author</th>
                    <th width="13%">Aksi</th>
                  </tr>
                </thead>
                <?php $no = 1; 
                foreach ($prestasi as $p) { ?>
                <tbody>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->judul_prestasi ?></td>
                    <td><?php echo substr($p->isi_prestasi,0, 50) ?></td>
                    <td><?php echo $p->tanggal_prestasi ?></td>
                    <td><img src="<?php echo base_url().'assets/foto/fotoprestasi/'.$p->gambar_prestasi ?>" width="50"></td>
                    <td><?php echo $p->author ?></td>
                    <td>
                      <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-prestasi<?php echo $p->id_prestasi; ?>" ><i class="fas fa-edit" style="color: #fff;"></i></button>
                      <a class="btn btn-sm btn-danger" href="<?php echo base_url()?>Dataguru/hapus_guru?>" ><i class="fas fa-trash"></i></a>
                    </td>
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
        <h4 class="modal-title">Buat Postingan Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/prestasiController/tambah_prestasi'); ?>
        <div class="form-group">
          <label>Judul Post</label>
          <input type="text" name="judul_prestasi" class="form-control" placeholder="Masukkan Judul">
          <input type="hidden" name="tanggal_prestasi" value="<?php echo date("Y-m-d"); ?>">
          <input type="hidden" name="author" value="<?php echo $_SESSION['nama'] ?>">
        </div>
        <div class="form-group">
          <label>Gambar Postingan</label>
          <div class="custom-file">
            <input type="file" name="gambar_prestasi" class="custom-file-input" required>
            <label class="custom-file-label" for="foto">choose file</label>
          </div>
        </div>         
        <div class="form-group">
          <label>Isi prestasi</label>
          <textarea class="form-control" id="summernote1" name="isi_prestasi"></textarea>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess">Simpan Post</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End Modal Tambah -->

<!-- Modal Edit -->
<?php foreach ($prestasi as $b) { ?> 
<div class="modal fade" id="edit-prestasi<?php echo $p->id_prestasi; ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit prestasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/prestasiController/edit_prestasi'); ?>
        <div class="form-group">
          <label>Judul Post</label>
          <input type="text" name="judul_prestasi" class="form-control" placeholder="Masukkan Judul" value="<?php echo $b->judul_prestasi ?>" required>
          <input type="hidden" name="tanggal_prestasi" value="<?php echo date("Y-m-d"); ?>">
          <input type="hidden" name="author" value="<?php echo $_SESSION['nama'] ?>">
        </div>
        <div class="form-group">
          <label>Gambar Postingan</label>
          <div class="custom-file">
            <input type="file" name="gambar_prestasi" class="custom-file-input" value="<?php echo $b->gambar_prestasi ?>" required>
            <label class="custom-file-label" for="foto">choose file</label>
          </div>
        </div>         
        <div class="form-group">
          <label>Isi prestasi</label>
          <textarea class="form-control" id="summernote" name="isi_prestasi"  required><?php echo $b->isi_prestasi ?></textarea>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess">Simpan Post</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php } ?> 
<!-- End Modal Tambah -->