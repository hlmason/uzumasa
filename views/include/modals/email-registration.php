<div class="modal fade" id="emailRegistrationModal" tabindex="-1" role="dialog" aria-labelledby="emailRegistrationLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header email-registration">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title" id="emailRegistrationLabel">Email Registration</h2>
			</div>
			
			<form action="<?php echo BASE_URL; ?>controllers/registration-controller.php" method="post">
				<div class="modal-body email-registration">
					<img src="<?php echo BASE_URL; ?>assets/images/modals/dots.png" alt="four dots">

					<div>
						<label class="email" for="email">Email Address</label>
						<input id="email" type="email" name="email">
					</div>
					
					<div>
						<label for="username">Username</label>
						<input id="username" type="text" name="username">
					</div>
					
					<div>
						<label for="password">Password 
							<span class="glyphicon glyphicon-question-sign glyphiconQuestionSignRegistration">
							</span>
						</label>
						<div class="password-req" id="passwordReq">Passwords must contain 6 to 12 characters and at least 1 letter and 1 number</div>
						<input id="password" type="password" name="password">
					</div>
					
					<div>
						<label for="confirm_password">Confirm Password</label>
						<input id="confirm_password" type="password" name="confirm_password">
					</div>


					<!-- Birth date form -->
						<?php
							include(ROOT_PATH . 'views/include/modals/birth-date-form.php');
						?>
					<!-- End of birth date form -->


					<div>
						<label class="gender">Gender</label>
						<select name="gender">
							<option value=""></option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					</div>
					
					<div>
						<label for="zip_or_postal_code">Zip/Postal Code</label>
						<input id="zip_or_postal_code" type="text" name="zip_or_postal_code">
					</div>
					
					<div class="captcha">
						<img src="<?php echo BASE_URL; ?>assets/images/modals/captcha.png" alt="captcha"><!-- Hard-coded placeholder -->
						<label for="captcha">Please type in the above text</label>
						<input id="captcha" type="text" name="captcha">
					</div>
					
					<div id="checkbox-agree">
						<input type="checkbox" value="agree">&nbsp; <span>I agree to the Musiclaps</span> <a href="<?php echo BASE_URL; ?>views/terms/" target="_blank">Terms of Service</a> <span>and</span> <a href="<?php echo BASE_URL; ?>views/privacy/" target="_blank">Privacy Policy</a>.
					</div>
				</div>
				
				<div class="modal-footer" id="email-registration">
					<input type="submit" value="Register">
					<input type="hidden" name="register" value="register">
				</div>
			</form>
		</div>
	</div>
</div>
