
<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('admin/meta')?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
     <?php $this->load->view('admin/head')?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php $this->load->view('admin/sidebar')?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($dulieu, $this->data);?>
  </div>
  <!-- /.content-wrapper -->
  
  <?php $this->load->view('admin/footer_main');?>

  <?php $this->load->view('admin/sidebar_right');?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
  <?php $this->load->view('admin/footer_js')?>

</body>
</html>
