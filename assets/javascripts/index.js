// Initialize Skrollr
var s = skrollr.init({
    forceHeight: false // Gets rid of ending black slide
});
// Refresh Skrollr after resizing our sections
s.refresh($('.homeSlide'));


// Scrolls first slide up after 'slide down' button is clicked
var slide_1 = $('#slide-1'); // Background image

$('img#slide-down-button').click(function () {
	slide_1.slideUp('slow');
});
$('img#slide-up-button').click(function () {
	slide_1.slideDown('slow');
});