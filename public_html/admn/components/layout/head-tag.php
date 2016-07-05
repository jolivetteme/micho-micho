<head>

  <?php $bootstrap_dir = base_url()."assets/bootstrap/dist/" ?>
  <?php $jquery_dir = base_url()."assets/jquery/dist/" ?>
  <?php $admin_lte = base_url()."assets/admin-lte/" ?>
  <?php $plugins = base_url()."assets/admin-lte/plugins/" ?>
  <?php $images = $admin_lte."dist/img/" ?>
  <?php $components = "admn/dashboard/components/" ?>
  <?php $social_widgets = $components."social_widgets/" ?>
  <?php $shoyanet_dir = base_url()."assets/shoyanet/" ?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $site_title ?> | <?= $page_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= $bootstrap_dir ?>css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $admin_lte ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" id="switchable-stylesheet" href="<?= $admin_lte ?>dist/css/skins/skin-yellow.min.css">
  <!-- Select2 Plugin -->
  <link rel="stylesheet" href="<?= $plugins ?>select2/select2.min.css">
  <!-- Custom Shoyanet Stylesheets -->
  <link rel="stylesheet" href="<?= $shoyanet_dir ?>/css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>