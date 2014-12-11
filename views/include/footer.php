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
	<script src="<?php echo BASE_URL; ?>assets/javascripts/imagesloaded.js"></script><!-- Preloads background image and resizes each 'slide' to be 100% of the browser viewport (for parallax scrolling) / Needs to be above skrollr.min.js and _main.js to work -->
    <script src="<?php echo BASE_URL; ?>assets/javascripts/skrollr.min.js"></script><!-- "Stand-alone parallax scrolling library for mobile (Android + iOS) and desktop" in vanilla JavaScript -->
    <script src="<?php echo BASE_URL; ?>assets/javascripts/_main.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/javascripts/index.js"></script>

</body>
</html>