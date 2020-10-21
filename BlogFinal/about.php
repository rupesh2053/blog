<?php 
  include 'header.php';
  $active = "About";
  include 'navbar.php';
?>
<br>
<div class="container">
<div class="row">
  <div class="col l3 m3 s12" id = "team-member">
    <h4>Our Team</h4><hr>
      <h6 class = "active" id = 'Rupesh77'>Rupesh Dulal</h6>
      <h6 id = 'Akash22'>Akash Gurung</h6>
      <h6 id = 'Manoj33'>Manoj Ghimire</h6>
      <h6 id = 'Pasang44'>Pasang Theeng</h6>
      <h6 id = 'Ashok55'>Ashok Chaudhari</h6>
  </div>
  <div class="col l6 m6 s12" id = "team-members-profile">
      <?php 
        $sql = "SELECT * FROM tbl_user_profile where user_id = 'Rupesh77'";
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
  </div>
  <div class="col l3 m3 s12" id = "about-social-links">
    <h4 id = "social-link-title">Share this on</h4><hr>
    <h5><i class = "fa fa-facebook-f"></i> Facebook</h5>
    <h5><i class = "fa fa-twitter"></i> Twitter</h5>
    <h5><i class = "material-icons email">email</i> Email</h5>

    <h4 id = "social-link-title">Follow us on</h4><hr>
    <h5><i class = "fa fa-facebook-f"></i> Facebook</h5>
    <h5><i class = "fa fa-twitter"></i> Twitter</h5>
    <h5><i class = "fa fa-youtube-play"></i> Youtube</h5>
    <h5><i class = "fa fa-instagram"></i> Instagram</h5>
    <h5><i class = "material-icons email">email</i> Email</h5>
  </div>
  </div>
</div>
<br>
<?php include 'footer.php'; ?>
<script src = 'JS/dynamic-user-display.js'></script>
<style>
  #about-social-links h5{
    font-size: 18px;
  }
</style>