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
          <div class="col-12 text-center mb-5">
            <h1 class="page-title">Tenaga Pendidik</h1>
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
              </div>
            </div>
          </div>
          <?php foreach ($guru as $g) {  ?>
          <div class="col-lg-4 text-center mb-5">
            <img src="<?php echo base_url().'assets/foto/fotoguru/'.$g->foto_guru ?>" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4><?php echo $g->nama_guru ?></h4>
            <span class="d-block mb-3 text-uppercase"><?php echo $g->jabatan_guru ?> &#45; <?php echo $g->mata_pelajaran ?></span>
            <span class="d-block mb-3 text-uppercase"><?php echo $g->jenjang_pendidikan ?> &#45; <?php echo $g->pendidikan_terakhir ?></span>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <?php $this->load->view('_template/footer') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('_template/js') ?>
</body>

</html>