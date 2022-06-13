<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MI Muhammadiyah Kalipepe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php $this->load->view('_template/head') ?>
</head>

<body>
  <?php $this->load->view('_template/header') ?>

  <main id="main">
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Ekstra Kulikuler</h1>
          </div>
        </div>
        <?php foreach ($ekskul as $eks) { ?>
        <div class="row mb-5">
          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
              <img src="<?php echo base_url('assets/foto/profile/'.$eks->gambar_profile) ?>" alt="" class="img-fluid">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">
              <h2 class="mb-4 display-4"><?php echo $eks->judul_profile ?></h2>
              <p><?php echo $eks->deskripsi_profile ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </section>

  </main><!-- End #main -->


    <?php $this->load->view('_template/footer') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('_template/js') ?>
</body>

</html>