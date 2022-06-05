    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Guru</li>
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
             <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#tambah-guru"><i class="fas fa-plus"></i> Tambah Guru</button>
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
                  <tr align="center">
                    <th width="10">No</th>
                    <th>Nama Lengkap</th>
                    <th>NIP</th>
                    <th width="200">Jabatan</th>
                    <th>Mata Pelajaran</th>
                    <th width="40">Pend. Terakhir</th>
                    <th>Jurusan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  <?php $no=1;
                  foreach ($guru as $g): ?>
                </thead>
                <tbody id="data">
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $g->nama_guru ?></td>
                    <td><?php echo $g->nip_guru ?></td>
                    <td><?php echo $g->nama_jabatan ?></td>
                    <td><?php echo $g->mata_pelajaran ?></td>
                    <td><?php echo $g->jenjang_pendidikan ?></td>
                    <td><?php echo $g->pendidikan_terakhir ?></td>
                    <td><?php echo $g->foto_guru ?></td>
                    <td align="center">
                      <button class="btn btn-warning" data-toggle="modal" data-target="#edit-guru"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
<div class="modal fade modal" id="tambah-guru">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Jabatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('backend/tambah_guru'); ?>
        <form>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_guru" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <select name="id_pendidikan" type="text" class="custom-select">
                  <option>Pilih Jenjang Pendidikan</option>
                  <?php foreach($jenjang as $j): ?>
                  <option value="<?= $j->id_pendidikan ?>"><?php echo $j->jenjang_pendidikan ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <select name="id_jabatan" type="text" class="custom-select">
                  <option>Pilih Jabatan</option>
                  <?php foreach($jabatan as $j): ?>
                  <option value="<?= $j->id_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label>( 4 x 6 )</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nip</label>
                <input type="text" name="nip_guru" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="pendidikan_terakhir" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Mata Pelajaran</label>
                <select name="id_mapel" type="text" class="custom-select">
                  <option>Pilih Mata Pelajaran</option>
                  <option value="">Bukan Pengajar</option>
                  <?php foreach($mapel as $j): ?>
                  <option value="<?= $j->id_mapel ?>"><?php echo $j->mata_pelajaran ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group" id="uplaodForm">
                <label for="exampleInputFile">Foto</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="foto_guru" class="custom-file-input" required>
                    <label class="custom-file-label" for="foto">choose file</label>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Jabatan</button>
            <?php echo form_close();?>
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
<div class="modal fade" id="edit-guru">
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
<!-- /.modal Edit -->