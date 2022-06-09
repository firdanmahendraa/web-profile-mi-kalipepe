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
          <div class="section-header d-flex mb-5 justify-content-between align-items-center">
            <h2>Berita</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="post-entry-2">
              <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="assets/main/img/post-landscape-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-md-8">
            <h3><a href="<?php echo base_url('berita-detail') ?>">Judul Prestasi</a></h3>
            <div class="post-meta">
              <span class="date">Culture</span> 
              <span class="mx-1">&bullet;</span> 
              <span>Jul 5th '22</span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
          </div>
          <div class="col-md-4">
            <div class="post-entry-2">
              <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="assets/main/img/post-landscape-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-md-8">
            <h3><a href="single-post.html">Judul Prestasi</a></h3>
            <div class="post-meta">
              <span class="date">Culture</span> 
              <span class="mx-1">&bullet;</span> 
              <span>Jul 5th '22</span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
          </div>
        </div><!-- End Row Berita -->

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

    <?php $this->load->view('_template/footer') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('_template/js') ?>
</body>

</html>