<!DOCTYPE html>
<html lang="en">
<?php echo @$head; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php echo @$navbar; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo @$sidebar; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <?php echo @$content; ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo @$footer; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->load->view('admin/_template/js') ?>
</body>
</html>
