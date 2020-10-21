<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>     
</head>
<body>
	<div class="row">
    <div class="col l3" id = "user-name-section">
        <h6 class = "active" id = 'Rupesh77'>Rupesh Dulal</h6>
        <h6 id = 'Akash22'>Akash Gurung</h6>
        <h6 id = 'Manoj33'>Manoj Ghimire</h6>
        <h6 id = 'Pasang44'>Pasang Theeng</h6>
        <h6 id = 'Ashok55'>Ashok Chaudhari</h6>
    </div>
    <div class="col l6" id="container">
    	
      <?php 
		$conn = mysqli_connect('localhost','root','','db_blog');
		$sql = "SELECT * FROM tbl_user_profile where user_id = 'Rupesh77'";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$user_profile = $row['user_profile'];
			$user_description = $row['user_desc'];

			echo "
			<div class='row' id = 'user'>
			<div id='profile'><img src='Images/$user_profile'></div>
			<div id='desc'>$user_description</div>
			</div>
			";

		}
	  ?>

    </div>
    <div class="col l3">
    	
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "dynamic-user-display.js"></script>


<style>
	body{
		margin-top: 50px;
	}
	#user{
		text-align: center;
		font-weight: bold;
		border: 1px solid rgba(0,0,0,0.1);
		padding: 1%;
	}
	#profile img{
		height: 400px;
		width: 100%;
	}
	#desc{
		padding: 10px;
	}
	#user-name-section h6{
		border: 1px solid rgba(0,0,0,0.1);
		color: black;
		padding: 7px;
		line-height: 37px;
		margin: 1%;
		cursor: pointer;
		border-radius: 4px;
		font-weight: 600;
	}
	#user-name-section h6:hover{
		background: rgba(0,0,0,0.1);
	}
	#user-name-section .active, #user-name-section .active:hover{
		background: rgb(168,7,7);
		color: white;
		font-weight: bold;
	}
</style>