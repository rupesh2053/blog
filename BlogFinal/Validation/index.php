<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action = "mail.php" method = "post">
		<h6 class = "form-message"></h6>
		<input id = "mail-name" type="text" name="name" placeholder="Full name"><br>
		<input id = "mail-email" type="email" name="email" placeholder="E-Mail"><br>
		<select id = "mail-gender" name = "gender">
			<option value = "male">Male</option>
			<option value = "female">Female</option>
		</select><br>
		<textarea id = "mail-message" name = "message" placeholder="Message"></textarea><br>
		<button id = "mail-submit" type = "submit" name = "submit">Send mail</button>
	</form>
<script>
	$(document).ready(function(){
		$("form").submit(function(event){
			event.preventDefault();
			var name = $("#mail-name").val();
			var email = $("#mail-email").val();
			var gender = $("#mail-gender").val();
			var message = $("#mail-message").val();
			var submit = $("#mail-submit").val();
			$('.form-message').load("mail.php", {
				name: name,
				email: email,
				gender: gender,
				message: message,
				submit: submit
			});
		});
	});
</script>
</body>
</html>