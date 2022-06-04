    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Jabatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Jabatan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
             <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#tambah-jabatan"><i class="fas fa-plus"></i> Tambah Guru</button>
             <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" id="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div><!--  Search  -->
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th width="10%">No</th>
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <?php $no = 1;
                  foreach($jabatan as $ssw) : ?>
                  <tbody>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $ssw->nama_jabatan ?></td>                    
                      <td>
                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-jabatan<?php echo $ssw->id_jabatan; ?>">
                          <i class="fas fa-edit" style="color: #fff;"></i>
                        </button>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url()?>Backend/hapus_jabatan/<?php echo $ssw->id_jabatan; ?>>">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  <?php endforeach ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Modal Tambah -->
  <div class="modal fade" id="tambah-jabatan">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Jabatan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('backend/tambah_jabatan') ?>" method="post">
            <div class="form-group">
              <label>Posisi Jabatan</label>
              <input type="text" name="nama_jabatan" class="form-control"> 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Jabatan</button>
            </div>
        </div>
          </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal Tambah -->

  <!-- Modal Edit -->
  <?php foreach ($jabatan as $j) { ?>
  <div class="modal fade" id="edit-jabatan<?php echo $j->id_jabatan; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Jabatan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('backend/ubah_jabatan') ?>" method="post">
            <div class="form-group">
              <label>Posisi Jabatan</label>
              <input type="hidden" name="id" value="<?php echo $j->id_jabatan ?>">
              <input type="text" name="nama_jabatan" value="<?php echo $j->nama_jabatan ?>" class="form-control"> 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan Update</button>
            </div>
         </div>
          </form>
       </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <?php } ?>
  <!-- /.modal Tambah -->