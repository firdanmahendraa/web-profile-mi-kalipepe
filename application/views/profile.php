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
            <h1 class="page-title">Profile</h1>
          </div>
        </div>

        <div class="row mb-5">
          <?php foreach ($profile as $p) { ?>
          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
              <img src="<?php echo base_url().'assets/foto/profile/'.$p->gambar_profile ?>" alt="" class="img-fluid">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">
              <h2 class="mb-4 display-4"><?php echo $p->judul_profile ?></h2>

              <p><?php echo $p->deskripsi_profile ?></p>
            </div>
          </div>
        <?php } ?>
        </div>

      </div>
    </section>

    <section class="mb-5 bg-light py-5">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-between align-items-lg-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
          <?php foreach ($visi as $v) { ?>
            <h2 class="mb-4 display-4"><?php echo $v->judul_profile ?></h2>
            <p><?php echo $v->deskripsi_profile ?></p>
          </div>
          <div class="col-lg-6">
            <img src="<?php echo base_url().'assets/foto/profile/'.$v->gambar_profile ?>" alt="" class="img-fluid">
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h2 class="display-4">Struktur Sekolah</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
              </div>
            </div>
          </div>
          <?php foreach ($struktur as $str): ?>
          <div class="col-lg-4 text-center mb-5">
            <img src="<?php echo base_url().'assets/foto/fotostruktur/'.$str->foto_guru ?>" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4><?php echo $str->nama_guru ?></h4>
            <span class="d-block mb-3 text-uppercase"><?php echo $str->nama_jabatan ?></span>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <?php $this->load->view('_template/footer') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('_template/js') ?>
</body>

</html>