<?php 
	//include 'Connection/db_conn.php';
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$errorName = false;
		$errorEmail = false;
		$errorSubject = false;
		$errorMessage = false;

		if(empty($name)){
			echo "<p class = 'form-error'> *Name must required !</p>";
			$errorName = true;
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<p class = 'form-error'> *Write a valid email !</p>";
			$errorEmail = true;
		}
		else if(empty($subject)){
			echo "<p class = 'form-error'> *Subject must required !</p>";
			$errorSubject = true;
		}
		else if(empty($message)){
			echo "<p class = 'form-error'> *Message must required !</p>";
			$errorMessage = true;
		}
		else{
			echo "<p class = 'form-success'>Message has been sent!!</p>";
		}
	}
else{
	echo "There was an error";
}
?>

<script>
	$("#name, #email, #message, #subject").removeClass("input-error");
	var errorName = "<?php echo $errorName; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";
	var errorSubject = "<?php echo $errorSubject; ?>";
	var errorMessage = "<?php echo $errorMessage; ?>";

	if(errorName == true){
		$("#name").addClass("input-error");
	}
	if(errorEmail == true){
		$("#email").addClass("input-error");
	}
	if(errorSubject == true){
		$("#subject").addClass("input-error");
	}
	if(errorMessage == true){
		$("#message").addClass("input-error");
	}
	if(errorName == false && errorEmail == false && errorSubject == false && errorMessage == false){
		$("#name, #email, #message, #subject").val("");
	}
</script>