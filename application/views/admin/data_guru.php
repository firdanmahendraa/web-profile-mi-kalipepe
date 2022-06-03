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
                    <th width="40">Pend. Terakhir</th>
                    <th>Jurusan</th>
                    <th>Foto</th>
                  </tr>
                </thead>
                <tbody id="data">
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
  fetch("http://localhost/web-profile-mi-kalipepe/api")
  .then(function(response) {
    return response.json();
  }).then(function(data) {
    // console.log(data); 
    for (var i = 0; i < data.length; i++) {
      document.getElementById("data").innerHTML += 
      `<tr>
        <td>b data[i].id_guru</td>
      </tr>`;
    }
  })
</script>