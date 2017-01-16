<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<?php include FCPATH.'dashboard_view/components/layout/head-tag.php' ?>
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

<body class="hold-transition <?php echo $color['green'];  ?> sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <?php include FCPATH.'dashboard_view/components/layout/main-header.php' ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include FCPATH.'dashboard_view/components/layout/main-sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Stats
        <small>What are you up to?</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-co"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?= $sales->count ?> </h3>

                    <p>New Sales</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3><?= $sales->count ?></h3>

                    <p>Total Sales</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3><?= $sales->count ?></h3>

                    <p>Total Products</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3><?php echo $transactions->count ?></h3>

                    <p>Unique Transactions</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include FCPATH.'dashboard_view/components/layout/footer.php' ?>

  <!-- Control Sidebar -->
  <?php include FCPATH.'dashboard_view/components/layout/control-sidebar.php' ?>
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
