<?php
	require_once('controllers/require/config.php');

	$page_title = 'Showdown Unleased';
	
	include(ROOT_PATH . 'views/include/header.php');
?>

	<div id="wrapper">

		<div class="container">
			<div class="row col-xs-12">
				<img class="cherry-blossoms" src="<?php echo BASE_URL; ?>assets/images/cherry-blossoms-top-left.png" alt="cherry blossoms">
				
				<div id="youtube-player-placeholder"></div><!-- Placeholder -->
				
				<img class="cherry-blossoms" src="<?php echo BASE_URL; ?>assets/images/cherry-blossoms-bottom-right.png" alt="cherry blossoms">
			</div>
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>