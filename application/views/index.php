<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MI Muhammadiyah Kalipepe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/main/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/main/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/main/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/main/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/main/vendor/aos/aos.css') ?>" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo base_url('assets/main/css/variables.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/main/css/main.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.0.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="brand">
        <img src="assets/logo.png" width="50" height="50">
        <div class="brand-name">
         <h1>MI MUHAMMADIYAH KALIPEPE</h1>
         <h3>Berani beda, selangkah lebih maju</h3>
        </div>
      </div> 

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="single-post.html">Single Post</a></li>
          <li class="dropdown mx-2 js-search-open"><a href="category.html"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="search-result.html">Search Result</a></li>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>

          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-fluid " data-aos="fade-in">
        <div class="row">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/main/img/post-slide-1.jpg');">
                    <div class="img-bg-inner">
                      <h2>PPDB</h2>
                      <p>Simak tata cara pendaftaran nya berikut!.</p>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/main/img/post-slide-2.jpg');">
                    <div class="img-bg-inner">
                      <h2>Size Default</h2>
                      <p></p>
                    </div>
                  </a>
                </div>
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
              <div><a href="category.html" class="more">Lihat Semua Berita</a></div>
            </div>
            <div class="row">
              <div class="col-md-5"><!-- Image -->
                <div class=" post-entry-2">
                  <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                    <img src="assets/main/img/post-landscape-6.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
              <div class="col-md-7"><!-- Deskripsi -->
                <div>
                  <h3><a href="single-post.html">Judul Berita</a></h3>
                  <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                </div>
              </div>
              <div class="col-md-5"><!-- Image -->
                <div class=" post-entry-2">
                  <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                    <img src="assets/main/img/post-landscape-6.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
              <div class="col-md-7"><!-- Deskripsi -->
                <div>
                  <h3><a href="single-post.html">Judul Berita</a></h3>
                  <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                </div>
              </div>
              <div class="col-md-5"><!-- Image -->
                <div class=" post-entry-2">
                  <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                    <img src="assets/main/img/post-landscape-6.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
              <div class="col-md-7"><!-- Deskripsi -->
                <div>
                  <h3><a href="single-post.html">Judul Berita</a></h3>
                  <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="section-header d-flex mb-5 justify-content-between align-items-center">
              <h2>Profile Sekolah</h2>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="post-entry-1 border-bottom">
                  <div class="post-meta">
                    <img src="assets/main/img/post-landscape-6.jpg" alt="" class="img-fluid">
                  </div>
                  <h2 style="text-align: center;">Ahmad Junaedi, S.H</h2>
                  <a href="single-post.html">Ini nanti berisikan sambutan kepala Sekolah. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti? </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Berita Profile Section -->

    <!-- ======= Galeri Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Galeri</h2>
            <div><a href="category.html" class="more">Lihat Semua Prestasi</a></div>
          </div>
        </div>
        <div class="row">
          <div class="gallery-slider swiper">
            <div class="swiper-wrapper align-items-center">
               <!-- <?php foreach ($galeri as $img) { ?> -->
              <div class="swiper-slide">
                <a class="gallery-lightbox" href="assets/img/post-sq-1.jpg">
                  <img src="assets/main/img/post-sq-1.jpg" class="img-fluid" alt="">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="gallery-lightbox" href="assets/img/post-sq-2.jpg">
                  <img src="assets/main/img/post-sq-2.jpg" class="img-fluid" alt="">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="gallery-lightbox" href="assets/img/post-sq-3.jpg">
                  <img src="assets/main/img/post-sq-3.jpg" class="img-fluid" alt="">
                </a>
              </div>
              <div class="swiper-slide">
                <a class="gallery-lightbox" href="assets/img/post-sq-4.jpg">
                  <img src="assets/main/img/post-sq-4.jpg" class="img-fluid" alt="">
                </a>
              </div>
              <!-- <?php } ?>  -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section><!-- End Culture Category Section -->

    <!-- ======= Prestasi Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Prestasi</h2>
            <div><a href="category.html" class="more">Lihat Semua Prestasi</a></div>
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
            <div class="post-meta">
              <span class="date">Culture</span> 
              <span class="mx-1">&bullet;</span> 
              <span>Jul 5th '22</span>
            </div>
            <h3><a href="single-post.html">Judul Prestasi</a></h3>
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
            <div class="post-meta">
              <span class="date">Culture</span> 
              <span class="mx-1">&bullet;</span> 
              <span>Jul 5th '22</span>
            </div>
            <h3><a href="single-post.html">Judul Prestasi</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
          </div>
        </div>
      </div>
    </section><!-- End Culture Category Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <div class="brand">
              <img src="assets/logo.png" width="50" height="50">
              <h3 class="footer-heading">MI MUHAMMADIYAH <br>KALIPEPE</h3>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
            <p><a href="about.html" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-4">
            <h3 class="footer-heading">KONTAK KAMI</h3>
            <p>Jl. Mayjen soekertiyo Gg. Masjid Baiturrahman Kalipepe, kec. Yosowilangun kab. Lumajang - 67382</p>
            <ul class="footer-links list-unstyled">
              <li><i class="fas fa-phone"></i> +62 852-3620-3088</li>
              <li><i class="fas fa-envelope"></i> mimuhammadiyahkalipepe2017@gmail.com</li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigasi</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="index.html"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Categories</a></li>
              <li><a href="single-post.html"><i class="bi bi-chevron-right"></i> Single Post</a></li>
              <li><a href="about.html"><i class="bi bi-chevron-right"></i> About us</a></li>
              <li><a href="contact.html"><i class="bi bi-chevron-right"></i> Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="row justify-content-between">
          <div class="text-center">
            <div class="copyright" >
              <p>Copyright &copy; 2021 - <?php echo date("Y"); ?> Mi Muhammadiyah Kalipepe. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/main/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/main/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/main/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/main/vendor/aos/aos.js') ?>"></script>
  <script src="<?php echo base_url('assets/main/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/main/js/main.js') ?>"></script>

</body>

</html>