<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $bootstrap_dir = base_url()."assets/bootstrap/dist/" ?>
	<?php $jquery_dir = base_url()."assets/jquery/dist/" ?>
	
	<script src="<?= $jquery_dir ?>jquery.min.js"></script>
	<script src="<?= $bootstrap_dir ?>js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="<?= $bootstrap_dir ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $bootstrap_dir ?>css/bootstrap-theme.min.css">

	<title>Welcome to Mich Home</title>

	</head>
<body>

<div id="container">
	<h1>Welcome to Micho FreeNeo Home!</h1>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 jumbotron">
				<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
				
				<p>If you would like to edit this page you'll find it located at:</p>
				<code>application/views/welcome_message.php</code>
				
				<p>The corresponding controller for this page is found at:</p>
				<code>application/controllers/Welcome.php</code>
				
				<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			</div>
		</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>