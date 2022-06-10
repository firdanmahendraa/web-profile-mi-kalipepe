<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MI Muhammadiyah Kalipepe - Berita</title>
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
            <h1 class="page-title">Galeri</h1>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <!-- <?php foreach ($galeri as $img) {  ?> -->
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="<?php echo base_url('p-galeri') ?>" class="gallery-lightbox">
              <img class="img-fluid" src="<?php echo base_url().'assets/foto/fotogaleri/'.$img->gambar ?>">
            </a>
          </div>
          <!-- <?php } ?> -->
        </div>
      </div>
    </section>
  </main><!-- End #main -->

    <?php $this->load->view('_template/copyright') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('_template/js') ?>
</body>
