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
                    <td><?php echo $g->jabatan_guru ?></td>
                    <td><?php echo $g->mata_pelajaran ?></td>
                    <td><?php echo $g->jenjang_pendidikan ?></td>
                    <td><?php echo $g->pendidikan_terakhir ?></td>
                    <td>
                      <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/fotoguru/'.$g->foto_guru ?>">
                        <img src="<?php echo base_url().'assets/foto/fotoguru/'.$g->foto_guru ?>" width="50">
                      </a>
                    </td>
                    <td align="center">
                      <button class="btn btn-warning" style="color: #ffff" data-toggle="modal" data-target="#edit-guru<?php echo $g->id_guru;?>"><i class="fas fa-edit"></i></button>
                      <a class="btn btn-sm btn-danger" href="<?php echo base_url()?>backend/hapus_guru/<?php echo $g->id_guru; ?>>">
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
<div class="modal fade modal" id="tambah-guru">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Guru</h4>
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
                <input type="text" name="jabatan_guru" class="form-control" value="Guru Pengajar" required readonly>
              </div>
              <div class="form-group" align="right">
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
                  <option>Pilih M2ata Pelajaran</option>
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
            <button type="submit" class="btn btn-primary">Tambah Guru</button>
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
<?php foreach($guru as $ssw) :?>
<div class="modal fade"  id="edit-guru<?php echo $ssw->id_guru;?>" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Guru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('backend/edit_guru'); ?>
        <input type="hidden" name="id" value="<?php echo $ssw->id_guru;?>">
        <form>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_guru" class="form-control" value="<?php echo $ssw->nama_guru;?>" required>
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
                <input type="text" name="jabatan_guru" class="form-control" value="Guru Pengajar" required readonly>
              </div>
              <div class="form-group" align="right">
                <label>( 4 x 6 )</label><br>
                <img src="<?php echo base_url().'assets/foto/fotoguru/'.$ssw->foto_guru  ?>" width="70" >    
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nip</label>
                <input type="text" name="nip_guru" class="form-control" value="<?php echo $ssw->nip_guru;?>" required>
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="pendidikan_terakhir" class="form-control" value="<?php echo $ssw->pendidikan_terakhir;?>" required>
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
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?php echo form_close();?>
          </div>
      </div>
        </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php endforeach;?>
<!-- /.modal Edit -->