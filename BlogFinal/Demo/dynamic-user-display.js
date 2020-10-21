$(document).ready(function(){
	///Rupesh's profile
	$("#Rupesh77").click(function(){
		$("#container").load("action.php", {
			user_id: "Rupesh77"
		});
	});

	///Akash's profile
	$("#Akash22").click(function(){
		$("#container").load("action.php", {
			user_id: "Akash22"
		});
	});


	///Manoj's profile
	$("#Manoj33").click(function(){
		$("#container").load("action.php", {
			user_id: "Manoj33"
		});
	});

	///Pasang's profile
	$("#Pasang44").click(function(){
		$("#container").load("action.php", {
			user_id: "Pasang44"
		});
	});

	///Ashok's profile
	$("#Ashok55").click(function(){
		$("#container").load("action.php", {
			user_id: "Ashok55"
		});
	});

	$('h6').on('click', function(){
		$('h6').removeClass('active');
		$(this).addClass('active');
	});
});