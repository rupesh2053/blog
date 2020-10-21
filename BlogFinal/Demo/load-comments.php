<?php 
$conn = mysqli_connect('localhost','root','','testing');
	$commentNewCount = $_POST['commentNewCount'];

	$sql = "SELECT * FROM comment LIMIT $commentNewCount";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "<p>";
		echo $row['author'];
		echo "<br>";
		echo $row['comment'];
		echo "</p>";
	}
?>