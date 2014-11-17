<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Showdown Unleased">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<title>Musiclaps | <?php echo $page_title; ?></title>
	<!-- [if lt IE 9]> -->
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- [endif] -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/javascripts/customized.bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/modal.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand">
					<form action="#" method="get">
						<input type="text" name="search" placeholder=" Search"><!-- The space before "Search" leaves space between "Search" and the search box -->
						<span id="glyphicon-search-container">
							<span class="glyphicon glyphicon-search"></span>
						</span>
					</form>
					
					<a href="https://www.musiclaps.com/" target="blank">
						<img id="musiclaps-logo" src="<?php echo BASE_URL; ?>assets/images/musiclaps-logo.png" alt="Musiclaps logo">
					</a>
					
					<img id="sword-slash" src="<?php echo BASE_URL; ?>assets/images/sword-slash.png" alt="sword slash">
					
					<a href="http://www.uzumasalimelight.com/" target="blank">
						<img id="uzumasa-limelight-logo" src="<?php echo BASE_URL; ?>assets/images/uzumasa-limelight-logo.png" alt="Uzumasa Limelight logo">
					</a>
				</a>
			</div>
			
			<ul class="nav navbar-nav navbar-right" id="logged-out">
				<li><a class="loginJS" id="login">Log In</a></li>
				<li><a class="signUp" id="sign-up">Sign Up</a></li>
			</ul>
		</div>
	</nav>

	<!-- "Log In" modal -->
	<?php
		include(ROOT_PATH . 'views/include/modals/login.php');
	?>
	<!-- End of login modal -->


	<!-- "Sign Up" modal -->
	<?php
		include(ROOT_PATH . 'views/include/modals/signup.php');
	?>
	<!-- End of register modal -->