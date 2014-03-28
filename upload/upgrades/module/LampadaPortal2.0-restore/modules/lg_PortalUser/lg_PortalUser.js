window.onload = function() {
	var form = document.getElementById('EditView');
	if(form && form.old_password && form.old_password.value == '') {
		addToValidate('EditView', 'password', 'verified', true, 'Password is required');
	}
	addToValidateComparison('EditView', 'confirm_password', 'comparison', false, 'The passwords do not match.', 'password');
};