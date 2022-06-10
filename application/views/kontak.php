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
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Contact us</h1>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Jl. Mayjen soekertiyo Gg. Masjid Baiturrahman Kalipepe, kec. Yosowilangun kab. Lumajang - 67382</address>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item info-item-borders">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+62 852-3620-3088</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">mimuhammadiyahkalipepe2017@gmail.com</a></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="form mt-5">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </section>

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
              <li><i class="bi bi-phone"></i> +62 852-3620-3088</li>
              <li><i class="bi bi-envelope"></i> mimuhammadiyahkalipepe2017@gmail.com</li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigasi</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="<?php echo base_url('home') ?>"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="<?php echo base_url('profile') ?>"><i class="bi bi-chevron-right"></i> Profile Sekolah</a></li>
              <li><a href="<?php echo base_url('tenaga-pendidik') ?>"><i class="bi bi-chevron-right"></i> Tenaga Pendidik</a></li>
              <li><a href="<?php echo base_url('prestasi') ?>"><i class="bi bi-chevron-right"></i> Prestasi</a></li>
              <li><a href="<?php echo base_url('berita') ?>"><i class="bi bi-chevron-right"></i> Berita</a></li>
              <li><a href="<?php echo base_url('kontak') ?>"><i class="bi bi-chevron-right"></i> Contact</a></li>
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

  <?php $this->load->view('_template/js') ?>
</body>

</html>