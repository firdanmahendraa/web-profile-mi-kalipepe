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
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/web-profile-mi-kalipepe">Home</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a class="nav-link" href="<?php echo base_url('p-profile') ?>">Profile</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="<?php echo base_url('p-tenaga-pendidik') ?>">Tenaga Pendidik</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('p-prestasi') ?>">Prestasi</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sarana & Prasarana</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a class="nav-link" href="#">Sarana Infratuktur</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">Sarana Pembelajaran</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('p-galeri') ?>">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('p-berita') ?>">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('p-kontak') ?>">Kontak</a></li>
              </ul>
            </div>
          </div><!-- ./row -->
        </div>
      </div>
    </div>
  </nav><!-- Nav -->