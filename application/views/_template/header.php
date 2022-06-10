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
          <li><a href="<?php echo base_url('home') ?>">Home</a></li>
          <input type="hidden" class=" js-search-open" name="">
          <li class="dropdown mx-2"><a href=""><span>Profile</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo base_url('profile') ?>">Profile Sekolah</a></li>
              <li><a href="<?php echo base_url('tenaga-pendidik') ?>">Tenaga Pendidik</a></li>
              <li><a href="<?php echo base_url('ekskul') ?>">Ekstra Kulikuler</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('berita') ?>">Berita</a></li>
          <li><a href="<?php echo base_url('galeri') ?>">Galeri</a></li>
          <li><a href="<?php echo base_url('prestasi') ?>">Prestasi</a></li>
          <li><a href="<?php echo base_url('kontak') ?>">Contact</a></li>
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