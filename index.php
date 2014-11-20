<?php
	require_once('controllers/require/config.php');

	$page_title = 'Showdown Unleased';
	
	include(ROOT_PATH . 'views/include/header.php');
?>

	<div class="homeSlide" id="slide-1"><!-- Parallax markup -->
		<div id="background-img" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -80px;"
	        data-anchor-target="#slide-1"><!-- Parallax markup -->
			
			<div class="container landing-page">	
				<div class="row col-xs-12">
					<img class="cherry-blossoms" src="<?php echo BASE_URL; ?>assets/images/cherry-blossoms-top-left.png" alt="cherry blossoms">
					
					<div id="youtube-player-placeholder"></div><!-- Placeholder -->
					<div id="youtube-player-advanced-settings-placeholder"></div><!-- Placeholder -->
					
					<img class="cherry-blossoms" src="<?php echo BASE_URL; ?>assets/images/cherry-blossoms-bottom-right.png" alt="cherry blossoms">
				</div>
			</div>

		</div><!-- Parallax markup -->
	</div><!-- Parallax markup -->

	<div class="container landing-page">
		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<h1>Most Viewed</h1>
				
				<div class="col-xs-12 col-xs-4">
					<div>
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>

				<div class="col-xs-12 col-xs-4">
					<div>
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>

				<div class="col-xs-12 col-xs-4">
					<div>
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>
			</div>

			<div class="col-xs-12 col-sm-3" id="ranking-container">
				<h1 id="ranking">Ranking</h1>
				
				<div class="row user-stats">
					<h3 class="col-xs-1">#1</h3><!-- Hard-coded placeholder -->
					<h3 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>12,345,678 claps</span><!-- Hard-coded placeholder -->
					</h3>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h3 class="col-xs-1">#2</h3><!-- Hard-coded placeholder -->
					<h3 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>1,234,567 claps</span><!-- Hard-coded placeholder -->
					</h3>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h3 class="col-xs-1">#3</h3><!-- Hard-coded placeholder -->
					<h3 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>123,456 claps</span><!-- Hard-coded placeholder -->
					</h3>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h3 class="col-xs-1">#4</h3><!-- Hard-coded placeholder -->
					<h3 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>12,345 claps</span><!-- Hard-coded placeholder -->
					</h3>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h3 class="col-xs-1">#5</h3><!-- Hard-coded placeholder -->
					<h3 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>1,234 claps</span><!-- Hard-coded placeholder -->
					</h3>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h3 class="col-xs-1">#6</h3><!-- Hard-coded placeholder -->
					<h3 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>123 claps</span><!-- Hard-coded placeholder -->
					</h3>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<div class="col-xs-12 col-xs-4">
					<div class="second-video-row">
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>

				<div class="col-xs-12 col-xs-4">
					<div class="second-video-row">
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>

				<div class="col-xs-12 col-xs-4">
					<div class="second-video-row">
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<div class="col-xs-12 col-xs-4">
					<div class="third-video-row">
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>

				<div class="col-xs-12 col-xs-4">
					<div class="third-video-row">
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>

				<div class="col-xs-12 col-xs-4">
					<div class="third-video-row">
						<div class="video-thumbnail-placeholder"></div><!-- Placeholder -->
					</div>
					<h4 class="video-title">Video Title</h4><!-- Hard-coded placeholder -->
					<h4>Video description...</h4><!-- Hard-coded placeholder -->
				</div>
			</div>
		</div>

	</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>