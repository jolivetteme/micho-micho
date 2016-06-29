<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<?php include FCPATH.'admn/components/layout/head-tag.php' ?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <?php include FCPATH.'admn/components/layout/main-header.php' ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include FCPATH.'admn/components/layout/main-sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Our Dashboard
        <small>Let's get started. Here's your summary!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

      <!-- social-profile-widgets -->
      <div class="row">
      <?php 
        
        foreach ($profiles as $key=>$profile) { 
          if ($key == 0 ) {
            include $social_widgets.$profiles[0]['files'];
          }
          if ($key == 1) {
            include $social_widgets.$profiles[1]['files'];
          }
          if ($key !=0 && $key !=1 && $key % 3==0) {
            echo "</div>";
            echo '<div class="row '.$key.'">';
            include $social_widgets.$profile['files'];
          }
           if ($key !=0 && $key !=1 && $key % 3!=0) {
              include $social_widgets.$profile['files'];
           }
        }
        
      ?>
      </div>  
      <!-- /.social-profile-widgets -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include FCPATH.'admn/components/layout/footer.php' ?>

  <!-- Control Sidebar -->
  <?php include FCPATH.'admn/components/layout/control-sidebar.php' ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="<?= $plugins ?>jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= $bootstrap_dir ?>js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $admin_lte ?>dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
