    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mapel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Mapel</li>
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
             <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#tambah-jenjang"><i class="fas fa-plus"></i> Tambah Jenjang</button>
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
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <?php $no = 1;
                  foreach($mapel as $ssw) : ?>
                  <tbody>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $ssw->mata_pelajaran ?></td>                    
                      <td>
                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-mapel<?php echo $ssw->id_mapel; ?>">
                          <i class="fas fa-edit" style="color: #fff;"></i>
                        </button>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url()?>admin/MapelController/hapus_mapel/<?php echo $ssw->id_mapel; ?>>">
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
  <div class="modal fade" id="tambah-jenjang">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Mata Pelajaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/MapelController/tambah_mapel') ?>" method="post">
            <div class="form-group">
              <label>Mata Pelajaran</label>
              <input type="text" name="mata_pelajaran" class="form-control"> 
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
  <?php foreach ($mapel as $j) { ?>
  <div class="modal fade" id="edit-mapel<?php echo $j->id_mapel; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Mata Pelajaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/MapelController/ubah_mapel') ?>" method="post">
            <div class="form-group">
              <label>Mata Pelajaran</label>
              <input type="hidden" name="id" value="<?php echo $j->id_mapel ?>">
              <input type="text" name="mata_pelajaran" value="<?php echo $j->mata_pelajaran ?>" class="form-control"> 
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