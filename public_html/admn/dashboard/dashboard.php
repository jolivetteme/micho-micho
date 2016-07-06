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
<?php

$color = array(
  'blue'=>'skin-blue',
  'black'=>'skin-black',
  'purple'=>'skin-purple',
  'yellow'=>'skin-yellow',
  'red'=>'skin-red',
  'green'=>'skin-green'
);
?>

<body class="hold-transition skin-yellow sidebar-mini">
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
        Our Employees
        <small>What are they up to?</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Your Page Content Here -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Choose your theme color</label>
            <select class="color-select form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <?php foreach($color as $key=>$value): ?>
              <option data-theme="<?= $value ?>.css"><?= ucwords($key) ?></option>
            <?php endforeach; ?>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
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
<script src="<?= $plugins ?>select2/select2.full.min.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<script>
  $(function() {
    
    theme_select = $("select.color-select").select2();
    theme_select.change(function(){
      // selected_option = $(this).add("option:selected").text();
      theme_selected = $("select.color-select option:selected").text().toLowerCase();
      // console.log(theme_selected);
      stylesheet_url = "<?= $admin_lte ?>dist/css/skins/skin-" +theme_selected+ ".min.css";
      // console.log(stylesheet_url);
      
      stylesheet = $('#switchable-stylesheet').attr("href","<?php echo $admin_lte ?>dist/css/skins/skin-"+ theme_selected + ".min.css");
      //Remove body tag with skin-color and replace with stylesheet value
      $('body').removeClass (function (index, css) {
        return (css.match (/(^|\s)skin-\S+/g) || []).join('');
      });

      $('body').addClass("skin-"+theme_selected);
    });
  });
</script>
</body>
</html>
