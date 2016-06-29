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
        Add new users / employee.
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
        <div class="register-box-body">
          <p class="login-box-msg">Use the form below to create a new user.</p>

          <form id="add_users" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" id="first_name" placeholder="First name">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" id="last_name" placeholder="Last name">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" id="username" placeholder="Username">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="email" class="form-control" id="email" placeholder="Email">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" id="pwd" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" id="repwd" placeholder="Retype password">
              <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
              <button class="btn btn-lg btn-success" type="submit" >Next <span class="fa fa-arrow-right"></span></button>
          </form>
          <div class="row">
            <div id="result"></div>
          </div>
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

<script>

    $("button").click(function(){

      var first_name = $('#first_name').val();
      var last_name = $('#last_name').val();
      var username = $('#username').val();
      var pwd = $('#pwd').val();
      data = {"first_name":first_name,"last_name":last_name,"username":username, "pwd":pwd}
      // alert(data);
      // alert(first_name);
      $('.register-box-body').load('/admin/user/create/', data);
      return false;
    });
    
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
