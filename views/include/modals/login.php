<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title" id="loginLabel">Log in</h2>
			</div>

			<div class="modal-body">
				<h3>Login using:</h3>
				<ul>
					<li><a><img class="facebook-icon" src="<?php echo BASE_URL; ?>assets/images/facebook-icon.png" alt="Facebook icon"></a></li>
					<li><a><img class="twitter-icon" src="<?php echo BASE_URL; ?>assets/images/twitter-icon-white.png" alt="White Twitter icon"></a></li>
					<li><a><img class="google-icon" src="<?php echo BASE_URL; ?>assets/images/google-icon.png" alt="Google icon"></a></li>
					<li><a><img id="microsoft-icon" src="<?php echo BASE_URL; ?>assets/images/microsoft-icon.png" alt="Microsoft icon"></a></li>
				</ul>
				<img src="<?php echo BASE_URL; ?>assets/images/dots.png" alt="four dots">
			</div>

			<form action="#" method="post">
				<div class="modal-body" id="username-and-password">
					<input type="text" name="userid" placeholder=" Username">
					<input type="password" name="password" placeholder=" Password">
<!-- 					<div class="error-message">
						<?= (! empty($_SESSION['login_error']) ? $_SESSION['login_error'] : '' ) ?>
					</div> -->
				</div>
				<div class="modal-footer">
					<a>Forgot Password</a>
					<input type="submit" name="login" value="Log in">
			    </div>
			</form>

		</div>
	</div>
</div>
	