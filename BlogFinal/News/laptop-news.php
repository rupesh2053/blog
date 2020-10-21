<?php 
  $conn = mysqli_connect('localhost','root','','db_blog');
  $user_id = $_POST['user_id'];
  $sql = "SELECT * FROM tbl_user_profile where user_id = '$user_id'";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $user_profile = $row['user_profile'];
    $user_description = $row['user_desc'];

    echo "
          <div id='profile'><img src='Images/$user_profile'></div>
          <div id='desc'>$user_description</div>
    ";
  }
?>
