<div id="comments">
	<?php 
		$conn = mysqli_connect('localhost','root','','testing');
		$sql = "SELECT * FROM comment LIMIT 2";
		$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result)){
				echo "<p>";
				echo $row['author'];
				echo "<br>";
				echo $row['comment'];
				echo "<p>";
			}
	 ?>
</div>
<button id = "btn1">Show more data</button>
<button id = "btn2">Show more data</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		var commentCount = 2;
		$("#btn1").click(function(){
			commentCount = commentCount+2;
			$("#comments").load("load-comments.php", {
				commentNewCount: commentCount
			});
		});
		$("#btn2").click(function(){
			commentCount = commentCount+1;
			$("#comments").load("load-comments.php", {
				commentNewCount: commentCount
			});
		});
	});
</script>