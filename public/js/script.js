function login()
{
	/*
	var xhr = new XMLHttpRequest();
	xhr.open('POST', '/login', false);
	xhr.send();
	*/
	var email = $('#InputEmail').val();
	var password = $('#InputPassword').val();
	$.ajax({
		type: 'POST',
		url: 'localhost/login',
		data: {femail: email, fpassword: password}
	}).done(function( result ) 
	{
		$('#msg').html(result);
	});
}
