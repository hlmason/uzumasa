<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">

			<div class="modal-header" id="login">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title" id="loginLabel">Log in</h2>
			</div>

			<?php
				include(ROOT_PATH . 'views/include/modals/social-network-login.php');
			?>

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
	