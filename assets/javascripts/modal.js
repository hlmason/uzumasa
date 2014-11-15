$(document).ready(function() {

	// Shows Log In and Sign Up modals

	$('a.loginJS').on('click', function() {
		$('#loginModal').modal('show');
	});

	$('a.signUp').on('click', function() {
		$('#signUpModal').modal('show');
	});

});