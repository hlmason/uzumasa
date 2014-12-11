	<footer>
		<?php
			$date = date_default_timezone_set('America/Los_Angeles'); // Required to use PHP date() function below
		?>
		&copy; <?php echo date('Y'); ?> Musiclaps Media, Inc., All Rights Reserved
	</footer>

	<!-- [if lt IE 9]> -->
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- [endif] -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/javascripts/customized.bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/modal.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/imagesloaded.js"></script><!-- Preloads background image and resizes each 'slide' to be 100% of the browser viewport (for parallax scrolling) / Needs to be above skrollr.js and _main.js to work -->
    <script src="<?php echo BASE_URL; ?>assets/javascripts/skrollr.js"></script><!-- Stand-alone parallax scrolling (vanilla JS) library for desktop and mobile -->
    <script src="<?php echo BASE_URL; ?>assets/javascripts/_main.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/javascripts/index.js"></script>

</body>
</html>