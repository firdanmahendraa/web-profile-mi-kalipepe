<!DOCTYPE html>
<html>
<?php $this->load->view('_template/head') ?>
<body>
<?php $this->load->view('_template/navbar') ?>

  <div class="container">
    <div class="title-guru">
      <h2>Galeri Sekolah</h2>
    </div>
    <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
      <?php foreach ($galeri as $img) {  ?>
      <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
        <a href="<?php echo base_url('p-galeri') ?>" class="gallery-lightbox">
          <img class="img-fluid" src="<?php echo base_url().'assets/foto/fotogaleri/'.$img->gambar ?>">
        </a>
      </div>
      <?php } ?>
    </div>
  </div>

  <?php $this->load->view('_template/footer') ?>

  <?php $this->load->view('_template/js') ?>
</body>
</html>