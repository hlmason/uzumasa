<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header register">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title" id="registerLabel">Register</h2>
			</div>

			<?php
				include(ROOT_PATH . 'views/include/modals/social-network-login.php');
			?>
			
			<div class="modal-footer register">
				<button id="registerJS" type="button">Register with Email</button>
		    </div>

		</div>
	</div>
</div>
