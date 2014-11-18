<?php
	require_once('controllers/require/config.php');

	$page_title = 'Showdown Unleased';
	
	include(ROOT_PATH . 'views/include/header.php');
?>

	<div class="container" id="landing-page">
		
		<div class="row col-xs-12">
			<img class="cherry-blossoms" src="<?php echo BASE_URL; ?>assets/images/cherry-blossoms-top-left.png" alt="cherry blossoms">
			
			<div id="youtube-player-placeholder"></div><!-- Placeholder -->
			<div id="youtube-player-advanced-placeholder"></div><!-- Placeholder -->
			
			<img class="cherry-blossoms" src="<?php echo BASE_URL; ?>assets/images/cherry-blossoms-bottom-right.png" alt="cherry blossoms">
		</div>

		<div class="row col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<h1>Most Viewed</h1>
					
					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container first-video-row">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>

					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container first-video-row">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>

					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container first-video-row">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>
				</div>

				<div class="col-xs-12 col-sm-3">
					<h1 id="ranking">Ranking</h1>
					
					<div class="row">
						<h2>#1</h2>
						<img src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>

					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>

					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>

					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>

					<div class="col-xs-12 col-xs-4">
						<div class="video-thumbnail-container">
							<div class="video-thumbnail-placeholder"></div>
						</div><!-- Placeholder -->
						<h4 class="video-title">Video Title</h4>
						<h4>Video description...</h4>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>