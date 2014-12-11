// Scrolls first slide up after 'slide down' button is clicked
var slide_1 = $('#slide-1'); // Background image
var nav = $('nav');

$('.glyphicon-chevron-down').click(function () {
	$('#youtube-player-placeholder, #slide-down-button, #youtube-player-advanced-settings, .cherry-blossoms').hide(); // So that YouTube player does not visibly move downward
	slide_1.slideUp('slow');
	nav.removeClass('navbar-fixed-top'); // So that slide 2 does not go above navbar
});
$('.glyphicon-chevron-up').click(function () {
	nav.addClass('navbar-fixed-top');
	slide_1.slideDown('slow');
	$('#youtube-player-placeholder, #slide-down-button, #youtube-player-advanced-settings, .cherry-blossoms').show();
});