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
                  <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#modal_form"><i class="fas fa-plus"></i> Tambah Carousel</button>
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
           <!--        <?php $no = 1;
                  foreach ($carousel as $crs): ?>
                <tbody>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $crs->headline ?></td>
                  <td><?php echo $crs->deskripsi ?></td>
                  <td>
                    <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/carousel/'.$crs->gambar ?>">
                      <img src="<?php echo base_url().'assets/foto/carousel/'.$crs->gambar ?>" width="50">
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-carousel<?php echo $crs->id_carousel; ?>" ><i class="fas fa-edit" style="color: #fff;"></i></a>
                    <a class="btn btn-sm btn-danger" href="" ><i class="fas fa-trash"></i></a>
                  </td>
                  <?php endforeach ?> -->
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
                  <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#modal_form"><i class="fas fa-plus"></i> Tambah Carousel</button>
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
           <!--        <?php $no = 1;
                  foreach ($carousel as $crs): ?>
                <tbody>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $crs->headline ?></td>
                  <td><?php echo $crs->deskripsi ?></td>
                  <td>
                    <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/carousel/'.$crs->gambar ?>">
                      <img src="<?php echo base_url().'assets/foto/carousel/'.$crs->gambar ?>" width="50">
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-carousel<?php echo $crs->id_carousel; ?>" ><i class="fas fa-edit" style="color: #fff;"></i></a>
                    <a class="btn btn-sm btn-danger" href="" ><i class="fas fa-trash"></i></a>
                  </td>
                  <?php endforeach ?> -->
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
                    </button>
                  </div>&nbsp;&nbsp;
                  <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#modal_form"><i class="fas fa-plus"></i> Tambah Carousel</button>
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
           <!--        <?php $no = 1;
                  foreach ($carousel as $crs): ?>
                <tbody>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $crs->headline ?></td>
                  <td><?php echo $crs->deskripsi ?></td>
                  <td>
                    <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/carousel/'.$crs->gambar ?>">
                      <img src="<?php echo base_url().'assets/foto/carousel/'.$crs->gambar ?>" width="50">
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-carousel<?php echo $crs->id_carousel; ?>" ><i class="fas fa-edit" style="color: #fff;"></i></a>
                    <a class="btn btn-sm btn-danger" href="" ><i class="fas fa-trash"></i></a>
                  </td>
                  <?php endforeach ?> -->
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


<!-- Modal Tambah -->
<div class="modal fade" id="modal_form">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('backend/tambah_carousel'); ?>
        <div class="form-group">
          <label>Headline</label>
          <input type="text" name="judul_berita" class="form-control" placeholder="Masukkan Judul">
          <input type="hidden" name="tanggal_berita" value="<?php echo date("Y-m-d"); ?>">
          <input type="hidden" name="author" value="<?php echo $_SESSION['nama'] ?>">
        </div>      
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" id="summernote1" name="isi_berita"></textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <div class="custom-file">
            <input type="file" name="gambar_berita" class="custom-file-input" required>
            <label class="custom-file-label" for="foto">choose file</label>
          </div>
        </div>   
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess" id="btnSave">Simpan Carousel</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End Modal Tambah -->

<!-- Modal Edit -->
<!-- <?php foreach ($carousel as $crs) { ?> -->
<div class="modal fade" id="edit-carousel<?php echo $crs->id_carousel; ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Carousel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('backend/edit_carousel'); ?>
        <input type="hidden" name="id" class="form-control">
        <input type="hidden" name="tanggal_post" value="<?php echo date("Y-m-d"); ?>">
        <div class="form-group">
          <label>Gambar Postingan</label>
          <div class="custom-file">
            <input type="file" name="gambar" class="custom-file-input" value="<?php echo $crs->gambar ?>" required>
            <label class="custom-file-label" for="foto">choose file</label>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Headline</label>
              <input type="text" name="headline" class="form-control" placeholder="Masukkan headline" value="<?php echo $crs->headline ?>" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan deskripsi" value="<?php echo $crs->deskripsi ?>" required>
            </div>
          </div>
          <div class="col-sm-1">
            <label>Status</label>
          </div>
          <div class="col-sm-11">
            <div class="form-group">
              <select name="status" type="text" class="custom-select">
                <option value="active">Aktif</option>
                <option value="">Tidak Aktif</option>     
              </select>
              <p> *Nb: Gunakan status aktif untuk postingan pertama pada halaman utama.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default swalDefaultSuccess" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnSave">Simpan Carousel</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- <?php } ?> -->
<!-- End Modal Edit -->