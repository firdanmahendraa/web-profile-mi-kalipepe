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

    <section class="mb-5 bg-light py-5">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-between align-items-lg-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
              <h2 class="mb-4 display-4">Mission &amp; Vision</h2>  
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
              <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
          </div>
          <div class="col-lg-6">
              <img src="assets/main/img/post-landscape-1.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


    <?php $this->load->view('_template/footer') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('_template/js') ?>
</body>

</html>