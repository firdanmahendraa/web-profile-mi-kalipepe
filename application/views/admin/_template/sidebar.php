  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('home') ?>" class="brand-link">
      <div class="brand">
        <img src="<?php echo base_url('assets/logo.png') ?>">
        <h1 class="brand-name">MI MUHAMMADIYAH <br>KALIPEPE</h1>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">\
          <li class="nav-item">
            <a href="<?php echo base_url('dashboard') ?>" <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-link active"':'' ?> class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item 
            <?=$this->uri->segment(1) == 'carousel' ||
               $this->uri->segment(1) == 'profile' || 
               $this->uri->segment(1) == 'prestasi' ||
               $this->uri->segment(1) == 'galeri' ||
               $this->uri->segment(1) == 'news' ||
               $this->uri->segment(1) == '' ? 'menu-open':'' ?>">
            <a href="#" class="nav-link
            <?=$this->uri->segment(1) == 'carousel' ||
               $this->uri->segment(1) == 'profile' || 
               $this->uri->segment(1) == 'prestasi' ||
               $this->uri->segment(1) == 'galeri' ||
               $this->uri->segment(1) == 'news' ||
               $this->uri->segment(1) == '' ? 'active':'' ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>Content Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('carousel') ?>" class="nav-link <?=$this->uri->segment(1) == 'carousel' || $this->uri->segment(1) == '' ? 'active':'' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carousel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('profile') ?>" class="nav-link <?=$this->uri->segment(1) == 'profile' || $this->uri->segment(1) == '' ? 'active':'' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('prestasi') ?>" class="nav-link <?=$this->uri->segment(1) == 'prestasi' || $this->uri->segment(1) == '' ? 'active':'' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prestasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('galeri') ?>" class="nav-link <?=$this->uri->segment(1) == 'galeri' || $this->uri->segment(1) == '' ? 'active':'' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('news') ?>" class="nav-link <?=$this->uri->segment(1) == 'news' || $this->uri->segment(1) == '' ? 'active':'' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hot News</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="<?php echo base_url('data-guru') ?>" <?=$this->uri->segment(1) == 'data-guru' || $this->uri->segment(1) == '' ? 'class="nav-link active"':'' ?> class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Guru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('data-mapel') ?>" <?=$this->uri->segment(1) == 'data-mapel' || $this->uri->segment(1) == '' ? 'class="nav-link active"':'' ?> class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Data Mata Pelajaran</p>
            </a>
          </li>
          <li class="nav-item 
            <?=$this->uri->segment(1) == 'data-jabatan' ||
               $this->uri->segment(1) == 'data-jenjang' || 
               $this->uri->segment(1) == '' ? 'menu-open':'' ?>">
            <a href="#" class="nav-link
            <?=$this->uri->segment(1) == 'data-jabatan' ||
               $this->uri->segment(1) == 'data-jenjang' || 
               $this->uri->segment(1) == '' ? 'active':'' ?>">
              <i class="nav-icon fas fa-wrench"></i>
              <p>Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('data-jabatan') ?>" class="nav-link <?=$this->uri->segment(1) == 'data-jabatan' || $this->uri->segment(1) == '' ? 'active':'' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('data-jenjang') ?>" class="nav-link <?=$this->uri->segment(1) == 'data-jenjang' || $this->uri->segment(1) == '' ? 'active':'' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenjang Pendidikan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>