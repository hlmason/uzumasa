// Initialize Skrollr
var s = skrollr.init({
    forceHeight: false // Gets rid of ending black slide
});
// Refresh Skrollr after resizing our sections
s.refresh($('.homeSlide'));


// Scrolls first slide up after 'slide down' button is clicked
var slide_1 = $('#slide-1'); // Background image
var nav = $('nav');

$('img#slide-down-button').click(function () {
	slide_1.slideUp('slow');
	nav.removeClass('navbar-fixed-top'); // So that slide 2 does not go above navbar
});
$('img#slide-up-button').click(function () {
	slide_1.slideDown('slow');
	nav.addClass('navbar-fixed-top');
});