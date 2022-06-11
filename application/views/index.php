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
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-fluid " data-aos="fade-in">
        <div class="row">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <?php foreach ($carousel as $crs) { ?>
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?php echo base_url().'assets/foto/carousel/'.$crs->gambar ?>');">
                    <div class="img-bg-inner">
                      <h2><?php echo $crs->headline ?></h2>
                      <p><?php echo $crs->deskripsi ?></p>
                    </div>
                  </a>
                </div>
                <?php } ?>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>
              <div class="swiper-pagination"></div>
            </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Berita Profile Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-9 col-sm-12">
            <div class="section-header d-flex mb-5 justify-content-between align-items-center">
              <h2>Berita</h2>
              <div><a href="<?php echo base_url('berita') ?>" class="more">Lihat Semua Berita</a></div>
            </div>
            <div class="row">
              <?php foreach ($berita as $b) { ?>
              <div class="col-md-5"><!-- Image -->
                <div class=" post-entry-2">
                  <a href="<?php echo base_url('berita-detail/'.$b->id_berita) ?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="<?php echo base_url().'assets/foto/fotoberita/'.$b->gambar_berita ?>" alt="" class="img-fluid">
              </a>
                </div>
              </div>
              <div class="col-md-7"><!-- Deskripsi -->
                <h3><a href="<?php echo base_url('berita-detail/'.$b->id_berita) ?>"><?php echo $b->judul_berita ?></a></h3>
                <div class="post-meta">
                  <span class="date"><?php echo $b->author ?></span> 
                  <span class="mx-1">&bullet;</span> 
                  <span><?php echo $b->tanggal_berita ?></span>
                </div>
                <p><?php echo substr($b->isi_berita,0, 200) ?> <a href="<?php echo base_url('berita-detail/'.$b->id_berita) ?>">... Baca Selengkapnya >></a></p>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="section-header d-flex mb-5 justify-content-between align-items-center">
              <h2>Profile Sekolah</h2>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="post-entry-1 border-bottom">
              <?php foreach ($profile as $prfl) { ?>
                  <div class="post-meta">
                    <img src="<?php echo base_url().'assets/foto/profile/'.$prfl->gambar_profile ?>" alt="" class="img-fluid">
                  </div>
                  <h2 style="text-align: center;">Ahmad Junaedi, S.H</h2>
                  <a href="<?php echo base_url('profile') ?>"><?php echo substr($prfl->deskripsi_profile, 0,306) ?></a>
              <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Berita Profile Section -->

    <!-- ======= Galeri Section ======= -->
    <section class="gallery">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Galeri</h2>
            <div><a href="<?php echo base_url('galeri') ?>" class="more">Lihat Galeri</a></div>
          </div>
        </div>
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <?php foreach ($galeri as $gl) { ?>
            <div class="swiper-slide">
              <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/fotogaleri/'.$gl->gambar ?>">
                <img src="<?php echo base_url().'assets/foto/fotogaleri/'.$gl->gambar ?>" class="img-fluid" alt="">
              </a>
            </div>
            <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </diwv>
    </section><!-- End Culture Category Section -->

    <!-- ======= Prestasi Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Prestasi</h2>
              <div><a href="<?php echo base_url('prestasi') ?>" class="more">Lihat Semua Berita</a></div>
            </div>
            <div class="row">
              <?php foreach ($prestasi as $b) { ?>
              <div class="col-md-5"><!-- Image -->
                <div class=" post-entry-2">
                  <a href="<?php echo base_url('prestasi-detail/'.$b->id_prestasi) ?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="<?php echo base_url().'assets/foto/fotoprestasi/'.$b->gambar_prestasi ?>" alt="" class="img-fluid">
              </a>
                </div>
              </div>
              <div class="col-md-7"><!-- Deskripsi -->
                <h3><a href="<?php echo base_url('prestasi-detail/'.$b->id_prestasi) ?>"><?php echo $b->judul_prestasi ?></a></h3>
                <div class="post-meta">
                  <span class="date"><?php echo $b->author ?></span> 
                  <span class="mx-1">&bullet;</span> 
                  <span><?php echo $b->tanggal_prestasi ?></span>
                </div>
                <p><?php echo substr($b->isi_prestasi,0, 200) ?> <a href="<?php echo base_url('prestasi-detail/'.$b->id_prestasi) ?>">... Baca Selengkapnya >></a></p>
              </div>
              <?php } ?>
        </div>
      </div>
    </section><!-- End Culture Category Section -->

  </main><!-- End #main -->


  <?php $this->load->view('_template/footer') ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('_template/js') ?>
</body>

</html>