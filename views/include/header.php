<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Musiclaps Presents">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_title; ?></title>
<!-- 	<link rel="icon" href="<?php echo BASE_URL; ?>favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="228x228" href="<?php echo BASE_URL; ?>favicon-228.png">
	<link rel="apple-touch-icon-precomposed" sizes="195x195" href="<?php echo BASE_URL; ?>favicon-195.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo BASE_URL; ?>favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASE_URL; ?>favicon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?php echo BASE_URL; ?>favicon-128.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo BASE_URL; ?>favicon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASE_URL; ?>favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="96x96" href="<?php echo BASE_URL; ?>favicon-96.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASE_URL; ?>favicon-72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo BASE_URL; ?>favicon-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="48x48" href="<?php echo BASE_URL; ?>favicon-48.png"> -->
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/stylesheets/application.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button id="navbarToggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
	            </button>

				<a class="navbar-brand">
					<form action="#" method="get">
						<input type="text" name="search" placeholder=" Search"><!-- The space before "Search" leaves space between "Search" and the search box -->
						<span id="glyphicon-search-container">
							<span class="glyphicon glyphicon-search"></span>
						</span>
					</form>
					
					<a href="https://www.musiclaps.com/" target="_blank">
						<img id="musiclaps-logo" src="<?php echo BASE_URL; ?>assets/images/header/musiclaps-logo.png" alt="Musiclaps logo">
					</a>
					
					<img id="sword-slash" src="<?php echo BASE_URL; ?>assets/images/header/sword-slash.png" alt="sword slash">
					
					<a href="http://www.uzumasalimelight.com/" target="_blank">
						<img id="uzumasa-limelight-logo" src="<?php echo BASE_URL; ?>assets/images/header/uzumasa-limelight-logo.png" alt="Uzumasa Limelight logo">
					</a>
				</a>
			</div>
			
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="login" id="loginJS">Log In</a></li>
					<li><a class="register" id="registerJS">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- "Register" modal -->
	<?php
		include(ROOT_PATH . 'views/include/modals/register.php');
	?>
	<!-- End of "Register" modal -->


	<!-- "Email Registration" modal -->
	<?php
		include(ROOT_PATH . 'views/include/modals/email-registration.php');
	?>
	<!-- End of "Email Registration" modal -->


	<!-- "Log in" modal -->
	<?php
		include(ROOT_PATH . 'views/include/modals/login.php');
	?>
	<!-- End of "Log in" modal -->