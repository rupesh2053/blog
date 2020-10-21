<?php 
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$message = $_POST['message'];
		
		$errorEmpty = false;
		$errorEmail = false;

		if(empty($name) || empty($email) || empty($message)){
			echo "<span class = 'form-error'> Fill in all fields!</span>";
			$errorEmpty = true;
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<span class = 'form-error'> Write a valid email!</span>";
			$errorEmail = true;
		}
		else{
			//database code goes here
			$conn = mysqli_connect('localhost','root','','testing');
			$query = "INSERT INTO tbl_message(name,password) values('rupesh','rupesh123');";
			if ($conn->query($query) === TRUE) {
			    echo "<span class = 'form-success'>New record created successfully.</span>";
			} else {
			    echo "Error: " . $query . "<br>" . $conn->error;
			}

			$conn->close();
		}
	}
else{
	echo "There was an error";
}
?>

<script>
	$("#mail-name, #mail-email, #mail-message, #mail-gender").removeClass("input-error");
	var errorEmpty = "<?php echo $errorEmpty; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";
	if(errorEmpty == true){
		$("#mail-name, #mail-email, #mail-message").addClass("input-error");
	}
	if(errorEmail == true){
		$("#mail-email").addClass("input-error");
	}
	if(errorEmpty == false && errorMail == false){
		$("#mail-name, #mail-email, #mail-message").val("");
	}
</script>