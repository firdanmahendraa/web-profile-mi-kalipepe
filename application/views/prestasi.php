<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MI Muhammadiyah Kalipepe - Prestasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php $this->load->view('_template/head') ?>
</head>

<body>
  <?php $this->load->view('_template/header') ?>

  <main id="main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Prestasi</h1>
          </div>
        </div>
        <div class="row">
          <?php foreach ($prestasi as $p) { ?>
          <div class="col-md-4">
            <div class="post-entry-2">
              <a href="<?php echo base_url('prestasi-detail/'.$p->id_prestasi) ?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="<?php echo base_url().'assets/foto/fotoprestasi/'.$p->gambar_prestasi ?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-md-8">
            <h3><a href="<?php echo base_url('prestasi-detail/'.$p->id_prestasi) ?>"><?php echo $p->judul_prestasi ?></a></h3>
            <div class="post-meta">
              <span class="date"><?php echo $p->author ?></span> 
              <span class="mx-1">&bullet;</span> 
              <span><?php echo $p->tanggal_prestasi ?></span>
            </div>
            <p><?php echo substr($p->isi_prestasi,0, 200) ?> <a href="<?php echo base_url('prestasi-detail/'.$p->id_prestasi) ?>">... Baca Selengkapnya >></a></p>
          </div>
          <?php } ?>
        </div><!-- End Row prestasi -->

        <div class="d-md-flex post-entry-2 half">
          <div class="col-md-8"></div>
          <div class="text-start py-4">
            <div class="custom-pagination">
              <a href="#" class="prev">Prevous</a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

    <?php $this->load->view('_template/copyright') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('_template/js') ?>
</body>

</html>