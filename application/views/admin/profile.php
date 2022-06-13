    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
              <h3 class="card-title">Profile Sekolah</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" id="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>&nbsp;&nbsp;
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 150px;">
              <table class="table table-head-fixed table-hover table-sm">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Headline</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <?php $no = 1;
                  foreach ($profile as $crs): ?>
                <tbody>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $crs->judul_profile ?></td>
                  <td><?php echo substr($crs->deskripsi_profile,0,150) ?></td>
                  <td>
                    <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/profile/'.$crs->gambar_profile ?>">
                      <img src="<?php echo base_url().'assets/foto/profile/'.$crs->gambar_profile ?>" width="50">
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#profile<?php echo $crs->id_profile;?>" ><i class="fas fa-edit" style="color: #fff;"></i></a>
                  </td>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Visi & Misi</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" id="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>&nbsp;&nbsp;
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 150px;">
              <table class="table table-head-fixed table-hover table-sm">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Headline</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <?php $no = 1;
                  foreach ($visi as $crs): ?>
                <tbody>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $crs->judul_profile ?></td>
                  <td><?php echo substr($crs->deskripsi_profile,0,150) ?></td>
                  <td>
                    <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/profile/'.$crs->gambar_profile ?>">
                      <img src="<?php echo base_url().'assets/foto/profile/'.$crs->gambar_profile ?>" width="50">
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#visi<?php echo $crs->id_profile;?>" ><i class="fas fa-edit" style="color: #fff;"></i></a>
                  </td>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ekstra Kulikuler</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" id="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>&nbsp;&nbsp;
                  <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#tambah-ekskul"><i class="fas fa-plus"></i> Tambah Ekskul</button>
                  </div>&nbsp;&nbsp;
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 250px;">
              <table class="table table-head-fixed table-hover table-sm">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Headline</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                 <?php $no = 1;
                  foreach ($ekskul as $crs): ?>
                <tbody>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $crs->judul_profile ?></td>
                  <td><?php echo substr($crs->deskripsi_profile,0,150) ?></td>
                  <td>
                    <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/profile/'.$crs->gambar_profile ?>">
                      <img src="<?php echo base_url().'assets/foto/profile/'.$crs->gambar_profile ?>" width="50">
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ekstra<?php echo $crs->id_profile;?>" >
                      <i class="fas fa-edit" style="color: #fff;"></i>
                    </a>
                    <a class="btn btn-sm btn-danger" href="<?php echo base_url()?>admin/ProfileController/hapus_profile/<?php echo $crs->id_profile; ?>>">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                  <?php endforeach ?>
                </tbody>
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

<!-- Edit Profile -->
<?php foreach ($profile as $p) { ?>
<div class="modal fade" id="profile<?php echo $p->id_profile;?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/ProfileController/edit_profile'); ?>
        <input type="hidden" value="<?php echo $p->id_profile;?>" name="id_kategori">
        <div class="form-group">
          <label>Headline</label>
          <input type="text" name="judul_profile" class="form-control" placeholder="Masukkan Judul" value="<?php echo $p->judul_profile;?>" required>
        </div>      
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" id="summernote" name="deskripsi_profile"><?php echo $p->deskripsi_profile;?></textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <div class="custom-file">
            <input type="file" name="gambar_profile" class="custom-file-input" value="<?php echo $p->gambar_profile;?>">
            <label class="custom-file-label" for="foto">choose file</label>
          </div>
        </div>   
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess" id="btnSave">Simpan Profile</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- End Edit Profile -->

<!-- Edit Visi dan Misi -->
<?php foreach ($visi as $v) { ?>
<div class="modal fade" id="visi<?php echo $v->id_profile;?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Visi & Misi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/ProfileController/edit_profile'); ?>
        <input type="hidden" value="<?php echo $v->id_kategori;?>" name="id_kategori">
        <div class="form-group">
          <label>Headline</label>
          <input type="text" name="judul_profile" class="form-control" placeholder="Masukkan Judul" value="<?php echo $v->judul_profile;?>" required>
        </div>      
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" id="summernote1" name="deskripsi_profile"><?php echo $v->deskripsi_profile;?></textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <div class="custom-file">
            <input type="file" name="gambar_profile" class="custom-file-input" value="<?php echo $v->gambar_profile;?>">
            <label class="custom-file-label" for="foto">choose file</label>
          </div>
        </div>   
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess" id="btnSave">Simpan</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- End Visi dan Misi -->

<!-- Tambah Ekskul -->
<div class="modal fade" id="tambah-ekskul">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Ekstra Kulikuler</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/ProfileController/tambah_profile'); ?>
        <input type="hidden" value="3" name="id_kategori">
        <div class="form-group">
          <label>Headline</label>
          <input type="text" name="judul_profile" class="form-control" placeholder="Masukkan Judul" required>
        </div>      
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" id="summernote2" name="deskripsi_profile" required></textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <div class="custom-file">
            <input type="file" name="gambar_profile" class="custom-file-input" required>
            <label class="custom-file-label" for="foto">choose file</label>
          </div>
        </div>   
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess" id="btnSave">Simpan Ekskul</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End TambahEkskul -->

<!-- Edit Ekskul -->
<?php foreach ($ekskul as $ex) { ?>
<div class="modal fade" id="ekstra<?php echo $ex->id_profile;?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Ekstra Kulikuler</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/ProfileController/edit_profile'); ?>
        <input type="hidden" value="<?php echo $ex->id_kategori;?>" name="id_kategori">
        <div class="form-group">
          <label>Headline</label>
          <input type="text" name="judul_profile" class="form-control" placeholder="Masukkan Judul" value="<?php echo $ex->judul_profile;?>" required>
        </div>      
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" id="summernote3" name="deskripsi_profile" required><?php echo $ex->deskripsi_profile;?></textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <div class="custom-file">
            <input type="file" name="gambar_profile" class="custom-file-input" value="<?php echo $ex->gambar_profile;?>">
            <label class="custom-file-label" for="foto">choose file</label>
          </div>
        </div>   
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess" id="btnSave">Simpan</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- End Ekskul -->