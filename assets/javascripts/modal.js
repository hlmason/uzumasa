$(document).ready(function() {

	// Displays password requirement for email registration
	var passwordReq = $('#passwordReq');
	passwordReq.hide();
	$('.glyphiconQuestionSignRegistration').hover(function() {
		passwordReq.fadeIn('slow');
	});


	// Shows "Register", "Email Registration", and "Log In" modals

	$('a.registerJS').on('click', function() {
		$('#registerModal').modal('show');
	});

	$('button#registerJS').on('click', function() {
		$('#emailRegistrationModal').modal('show');
	});

	$('a.loginJS').on('click', function() {
		$('#loginModal').modal('show');
	});

});