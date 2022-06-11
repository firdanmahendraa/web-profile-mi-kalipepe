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

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <?php foreach ($berita as $bb) { ?>
              <h1 class="mb-2 my-4"><?php echo $bb->judul_berita ?></h1>
              <div class="post-meta"><span class="date"><?php echo $bb->author ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $bb->tanggal_berita ?></span></div>

              <figure class="my-4">
                <img src="<?php echo base_url().'assets/foto/fotoberita/'.$bb->gambar_berita ?>" alt="" class="img-fluid">
                <figcaption><?php echo $bb->judul_berita ?></figcaption>
              </figure>
              <p><?php echo $bb->isi_berita ?></p>
              <?php } ?>
            </div><!-- End Single Post Content -->

            <!-- ======= Comments Form ======= -->
            <div class="row justify-content-center mt-5">

              <div class="col-lg-12">
                <h5 class="comment-title">Leave a Comment</h5>
                <div class="row">
                  <div class="col-lg-6 mb-3">
                    <label for="comment-name">Name</label>
                    <input type="text" class="form-control" id="comment-name" placeholder="Enter your name">
                  </div>
                  <div class="col-lg-6 mb-3">
                    <label for="comment-email">Email</label>
                    <input type="text" class="form-control" id="comment-email" placeholder="Enter your email">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="comment-message">Message</label>

                    <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                  </div>
                  <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Post comment">
                  </div>
                </div>
              </div>
            </div><!-- End Comments Form -->

          </div>
          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">
              <ul class="nav nav-pills custom-tab-nav mb-4 mt-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Berita Terbaru</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">
                <!-- Popular -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <?php foreach ($beritaside as $news) { ?>
                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="<?php echo base_url('berita-detail/'.$news->id_berita) ?>"><?php echo $news->judul_berita ?></a></h2>
                    <div class="post-meta"><span class="author mb-3 "><?php echo $news->author ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $news->tanggal_berita ?></span></div>
                    <p><?php echo substr($news->isi_berita,0, 100 ) ?></p>
                  </div>
                  <?php } ?>
                </div> <!-- End Popular -->
              </div>
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