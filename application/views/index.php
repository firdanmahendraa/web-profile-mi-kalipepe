<!DOCTYPE html>
<html>
<?php $this->load->view('_template/head') ?>
<body>
  <nav class="navbar sticky-md-top navbar-expand-lg navbar-light nav-primary" id="topbar">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="brand">
                <img src="<?php echo base_url('assets/main/logo.png') ?>" width="50" height="50">
                <div class="brand-name">
                 <h1>MI MUHAMMADIYAH KALIPEPE</h1>
                 <h3>Berani beda, selangkah lebih maju</h3>
                </div>
              </div> 
            </div>
            <div class="col-md-6">
              <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="#hero">Home</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a class="nav-link" href="#profile">Profile</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#tenaga">Tenaga Pendidik</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#prestasi">Prestasi</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sarana & Prasarana</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a class="nav-link" href="#">Sarana Infratuktur</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">Sarana Pembelajaran</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
              </ul>
            </div>
          </div><!-- ./row -->
        </div>
      </div>
    </div>
  </nav><!-- Nav -->

    <!-- ======= About Us Section ======= -->
    <div id="hero" class="carousel carousel-dark slide section-body" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <?php foreach ($carousel as $crs): ?>
        <div class="carousel-item <?php echo $crs->status ?>" data-bs-interval="3000">
          <img src="<?php echo base_url().'assets/foto/carousel/'.$crs->gambar ?>" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $crs->headline ?></h5>
            <p><i><?php echo $crs->deskripsi ?></i></p>
          </div>
        </div>
        <?php endforeach ?>
      <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
    </div>

    <!-- ======= About Us Section ======= -->
    <section id="profile" >
      <div class="container">
        <div class="section-title">
          <h2>Profile Sekolah</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/rZmATFSqC38" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content section-body">
            <h3>Judul Profile.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Prestasi Section ======= -->
    <section id="prestasi">
      <div class="container">
        <div class="section-title">
          <h2>Prestasi</h2>
        </div>
          <div class="card-group">
  <!--           <?php foreach ($prestasi as $pres) { 
            ?>
            <div class="card">
              <img src="<?php echo base_url().'assets/foto/fotoprestasi/'.$pres->foto_post ?>"class="card-img-top card-picture" alt="...">
              <div class="card-body">
                <h5 class="card-title"><strong><?php echo $pres->judul_post ?></strong></h5>
                <p class="card-text">
                  <?php echo substr($pres->isi_post,0, 150) ?>
                  <a href="">Baca Selengkapnya</a> 
                </p>
                <p class="card-text"><small class="text-muted"><?php echo $pres->tanggal_post ?></small></p>
              </div>
            </div>
            <?php } ?>
          </div> -->
        <div class="more-button">
          <a href="" class="btn btn-more" type="button">Lihat Prestasi Lain</a>
        </div>  
      </div>
    </section><!-- End Prestasi Section -->

  <!-- ======= Tenaga Pendidik Section ======= -->
  <section id="tenaga">
    <div class="container">
      <div class="section-title">
        <h2>Tenaga Pendidik</h2>
      </div>
      <div class="row">
  <!--       <?php foreach ($guru as $g) { ?>
        <div class="col-md-4">
          <div class="teacher">
            <img src="<?php echo base_url().'assets/foto/fotoguru/'.$g->foto_guru ?>" class="teacher-img" alt="...">
            <h1><?php echo $g->nama_guru ?></h1>
            <p><?php echo $g->posisi_jabatan ?></p>
          </div>
        </div>
        <?php } ?> -->
      </div> 
      <div class="more-button">
        <!-- button halaman tenaga pendidik -->
        <a href="<?php echo base_url('tenaga-pendidik'); ?>" class="btn btn-more" type="button">Lihat Tenaga Pendidik</a>
      </div>  
    </div>
  </section>

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Galerry</h2>
      </div>
      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
           <?php foreach ($galeri as $img) { ?>
          <div class="swiper-slide">
            <a class="gallery-lightbox" href="<?php echo base_url().'assets/foto/fotogaleri/'.$img->gambar ?>">
              <img src="<?php echo base_url().'assets/foto/fotogaleri/'.$img->gambar ?>" class="img-fluid" alt="">
            </a>
          </div>
          <?php } ?> 
        </div>
        <div class="swiper-pagination"></div>
        <div class="more-button">
    <!-- button halaman galeri -->
    <a href="<?php echo base_url('p-galeri'); ?>" class="btn btn-more" type="button">Lihat Gallery</a>
  </div> 
      </div>

    </div>
  </section><!-- End Gallery Section -->


  <!-- ======= Berita Section ======= -->
  <section id="berita">
    <div class="container">
      <div class="section-title">
        <h2>Berita</h2>
      </div>
  <!--     <?php foreach ($berita as $news): ?>
      <div class="card mb-3" style="max-width: 1080px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo base_url().'assets/foto/fotopost/'.$news->foto_post ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><strong><?php echo $news->judul_post ?></strong></h5>
              <p class="card-text">
                <?php echo substr($news->isi_post,0,250) ?>
                <a href="">Baca Selengkapnya</a>    
              </p>
              <p class="card-text"><small class="text-muted"><?php echo $news->tanggal_post ?></small></p>
            </div>
          </div>
        </div>
      </div>      
      <?php endforeach ?> -->
      <div class="more-button">
        <a href="" class="btn btn-more" type="button">Lihat Berita Lain</a>
      </div>
    </div>
  </section>

  <footer>
    <section id="kontak">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="brand">
              <img src="<?php echo base_url('assets/main/logo.png') ?>" width="50" height="50">
              <h1 class="brand-name">MI MUHAMMADIYAH <br>KALIPEPE</h1>
            </div>
            <div class="submenu">
              <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="menu">
              <h1>Kontak Kami</h1>
              <div class="submenu">
                <p>Jl. Mayjen soekertiyo Gg. Masjid Baiturrahman Kalipepe, kec. Yosowilangun kab. Lumajang - 67382</p>
                <ul>
                  <li><i class="fas fa-phone"></i> +62 852-3620-3088</li>
                  <li><i class="fas fa-envelope"></i> mimuhammadiyahkalipepe2017@gmail.com</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="menu">
              <h1>Navigasi</h1>
              <div class="submenu">
                <ul>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Visi dan Misi</a></li>
                  <li><a href="#">Struktur Organisasi</a></li>
                  <li><a href="#">Pendaftaran PPDB</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </section>
  </footer>

    <div class="copyright" >
      <p>Copyright &copy; 2021 - <?php echo date("Y"); ?> Mi Muhammadiyah Kalipepe. All rights reserved.
    </div>

  <?php $this->load->view('_template/js') ?>

</body>
</html>