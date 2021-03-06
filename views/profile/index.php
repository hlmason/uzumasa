<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'My Profile';
	
	include(ROOT_PATH . 'views/include/header-logged-in.php');
?>

	<div class="container" id="my-profile-page">
		<div class="row">

			<div class="col-xs-12 col-lg-3" id="events-container">
				<h2 class="row col-xs-12">Events</h2>

				<div class="row col-xs-12">
					<div class="event-placeholder"></div><!-- Placeholder -->
				</div>
				<div class="row col-xs-12">
					<h5 class="event-name">Event Name</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="row col-xs-12">
					<h5 class="event-description">Event description...</h5><!-- Hard-coded placeholder -->
				</div>

				<div class="row col-xs-12">
					<div class="event-placeholder"></div><!-- Placeholder -->
				</div>
				<div class="row col-xs-12">
					<h5 class="event-name">Event Name</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="row col-xs-12">
					<h5 class="event-description">Event description...</h5><!-- Hard-coded placeholder -->
				</div>

				<div class="row col-xs-12">
					<div class="event-placeholder"></div><!-- Placeholder -->
				</div>
				<div class="row col-xs-12">
					<h5 class="event-name">Event Name</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="row col-xs-12">
					<h5 class="event-description">Event description...</h5><!-- Hard-coded placeholder -->
				</div>

				<div class="row col-xs-12">
					<div class="event-placeholder"></div><!-- Placeholder -->
				</div>
				<div class="row col-xs-12">
					<h5 class="event-name">Event Name</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="row col-xs-12">
					<h5 class="event-description">Event description...</h5><!-- Hard-coded placeholder -->
				</div>

			</div>

			<div class="col-xs-12 col-lg-7" id="my-profile-page-nav-section">
				<ul class="nav nav-tabs">
					<li>
						<a class="my-profile-link 
							<?php 
								if ($page_title == "My Profile") { 
									echo "active-nav-tab"; 
								} 
							?>" href="<?php echo BASE_URL; ?>views/profile/">My Profile
						</a>
					</li>
					<li>
						<a class="
							<?php 
								if ($page_title == "My Events") { 
									echo "active-nav-tab"; 
								} 
							?>" href="#">My Events
						</a></li>
					<li>
						<a class="							
							<?php 
								if ($page_title == "Messages") { 
									echo "active-nav-tab"; 
								} 
							?>" href="#">Messages
						</a></li>
					<li>
						<a class="							
							<?php 
								if ($page_title == "Groups") { 
									echo "active-nav-tab"; 
								} 
							?>" href="#">Groups
						</a></li>
					<li>
						<a class="							
							<?php 
								if ($page_title == "Favorites") { 
									echo "active-nav-tab"; 
								} 
							?>" href="#">Favorites
						</a>
					</li>
				</ul>

				<div id="profile-container">
					<div class="row">
						<div class="col-xs-1"></div> 

						<div class="col-xs-3">
							<img class="avatar" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
						</div>

						<div class="col-xs-7">
							<div class="row">
								<div class="col-xs-4">
									<h2 class="h2-username">username</h2>
								</div>

								<div class="col-xs-4"></div>

								<div class="col-xs-4" id="edit-profile-link-container">
									<a>Edit Profile</a>
								</div>
							</div>
						</div>

						<div class="col-xs-1"></div>
					</div>

					<div class="row">
						<div class="col-xs-4"></div> 

						<div class="col-xs-7">
							<div id="profile-details"><!-- Placeholder -->
								<h5>Profile Details</h5><!-- Placeholder -->
							</div>
						</div>

						<div class="col-xs-1"></div>

					</div>

					<div id="projects-container">
						<div class="col-xs-1"></div>

						<h3>My Public Projects</h3>

						<div class="row">
							<div class="col-xs-1"></div>

							<div class="col-xs-5">
								<div class="row">
									<div class="col-xs-6 col-md-5 col-lg-6">
										<div class="project-thumbnail-placeholder"></div><!-- Placeholder -->
									</div>
									<div class="col-xs-6 col-md-7 col-lg-6">
										<h5>Project Name</h5><!-- Hard-coded placeholder -->
										<h5>Project description...</h5><!-- Hard-coded placeholder -->
									</div>
								</div>
							</div>

							<div class="col-xs-5">
								<div class="row">
									<div class="col-xs-6 col-md-5 col-lg-6">
										<div class="project-thumbnail-placeholder"></div><!-- Placeholder -->
									</div>
									<div class="col-xs-6 col-md-7 col-lg-6">
										<h5>Project Name</h5><!-- Hard-coded placeholder -->
										<h5>Project description...</h5><!-- Hard-coded placeholder -->
									</div>
								</div>
							</div>	
						</div>

						<div class="row">
							<div class="col-xs-1"></div>

							<div class="col-xs-5">
								<div class="row">
									<div class="col-xs-6 col-md-5 col-lg-6">
										<div class="project-thumbnail-placeholder"></div><!-- Placeholder -->
									</div>
									<div class="col-xs-6 col-md-7 col-lg-6">
										<h5>Project Name</h5><!-- Hard-coded placeholder -->
										<h5>Project description...</h5><!-- Hard-coded placeholder -->
									</div>
								</div>
							</div>

							<div class="col-xs-5">
								<div class="row">
									<div class="col-xs-6 col-md-5 col-lg-6">
										<div class="project-thumbnail-placeholder"></div><!-- Placeholder -->
									</div>
									<div class="col-xs-6 col-md-7 col-lg-6">
										<h5>Project Name</h5><!-- Hard-coded placeholder -->
										<h5>Project description...</h5><!-- Hard-coded placeholder -->
									</div>
								</div>
							</div>	
						</div>

						<div class="row">
							<div class="col-xs-1"></div>

							<div class="col-xs-5">
								<div class="row">
									<div class="col-xs-6 col-md-5 col-lg-6">
										<div class="project-thumbnail-placeholder"></div><!-- Placeholder -->
									</div>
									<div class="col-xs-6 col-md-7 col-lg-6">
										<h5>Project Name</h5><!-- Hard-coded placeholder -->
										<h5>Project description...</h5><!-- Hard-coded placeholder -->
									</div>
								</div>
							</div>

							<div class="col-xs-5">
								<div class="row">
									<div class="col-xs-6 col-md-5 col-lg-6">
										<div class="project-thumbnail-placeholder"></div><!-- Placeholder -->
									</div>
									<div class="col-xs-6 col-md-7 col-lg-6">
										<h5>Project Name</h5><!-- Hard-coded placeholder -->
										<h5>Project description...</h5><!-- Hard-coded placeholder -->
									</div>
								</div>
							</div>	
						</div>

						<div class="col-xs-1"></div>
					</div>
				</div>

			</div>

			<div class="col-xs-12 col-lg-2 ranking-container">
				<div class="row">
					<h2 class="col-xs-12">Ranking</h2>
				</div>
				
				<div class="row user-stats">
					<h4 class="col-xs-1">#1</h4><!-- Hard-coded placeholder -->
					<h4 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>12,345,678 claps</span><!-- Hard-coded placeholder -->
					</h4>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h4 class="col-xs-1">#2</h4><!-- Hard-coded placeholder -->
					<h4 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>1,234,567 claps</span><!-- Hard-coded placeholder -->
					</h4>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h4 class="col-xs-1">#3</h4><!-- Hard-coded placeholder -->
					<h4 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>123,456 claps</span><!-- Hard-coded placeholder -->
					</h4>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h4 class="col-xs-1">#4</h4><!-- Hard-coded placeholder -->
					<h4 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>12,345 claps</span><!-- Hard-coded placeholder -->
					</h4>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h4 class="col-xs-1">#5</h4><!-- Hard-coded placeholder -->
					<h4 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>1,234 claps</span><!-- Hard-coded placeholder -->
					</h4>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h4 class="col-xs-1">#6</h4><!-- Hard-coded placeholder -->
					<h4 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>123 claps</span><!-- Hard-coded placeholder -->
					</h4>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>

				<div class="row user-stats">
					<h4 class="col-xs-1">#7</h4><!-- Hard-coded placeholder -->
					<h4 class="col-xs-6">username<!-- Hard-coded placeholder -->
						<span>12 claps</span><!-- Hard-coded placeholder -->
					</h4>
					<img class="col-xs-5" src="<?php echo BASE_URL; ?>assets/images/avatar.jpg" alt="avatar">
				</div>
			</div>

		</div>

		<div class="row" id="most-viewed-container">
			<h2 class="row col-xs-12">Most Viewed</h2>

			<div class="row">
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
			</div>

			<div class="row">
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
			</div>

			<div class="row">
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
				<div class="col-xs-3">
					<div class="video-thumbnail-placeholder"><!-- Placeholder -->
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.png" alt="play button">
					</div>
					<h5 class="video-title">Video Title</h5><!-- Hard-coded placeholder -->
					<h5>Video description...</h5><!-- Hard-coded placeholder -->
				</div>
			</div>
		</div>
	</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>