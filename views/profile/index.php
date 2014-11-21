<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'My Profile';
	
	include(ROOT_PATH . 'views/include/header-logged-in.php');
?>

	<div class="container" id="my-profile-page">
		<div class="row">

			<div class="col-xs-12 col-sm-3" id="events-container">
				<h2>Events</h2>

				<div class="row col-xs-12">
					<div class="event-placeholder"></div>
				</div>
				<div class="row col-xs-12">
					<h5 class="event-name">Event Name</h5>
				</div>
				<div class="row col-xs-12">
					<h5 class="event-description">Event Description...</h5>
				</div>

				<div class="row col-xs-12">
					<div class="event-placeholder"></div>
				</div>
				<div class="row col-xs-12">
					<h5 class="event-name">Event Name</h5>
				</div>
				<div class="row col-xs-12">
					<h5 class="event-description">Event Description...</h5>
				</div>

				<div class="row col-xs-12">
					<div class="event-placeholder"></div>
				</div>
				<div class="row col-xs-12">
					<h5 class="event-name">Event Name</h5>
				</div>
				<div class="row col-xs-12">
					<h5 class="event-description">Event Description...</h5>
				</div>

				<div class="row col-xs-12">
					<div class="event-placeholder"></div>
				</div>
				<div class="row col-xs-12">
					<h5 class="event-name">Event Name</h5>
				</div>
				<div class="row col-xs-12">
					<h5 class="event-description">Event Description...</h5>
				</div>

			</div>

			<div class="col-xs-12 col-sm-7">
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
				<div id="edit-profile-container">
				</div>
			</div>

			<div class="col-xs-12 col-sm-2 ranking-container">
				<h2>Ranking</h2>
				
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
	</div>

<?php
	include(ROOT_PATH . 'views/include/footer.php');
?>