	<nav id = "nav2">

    <a href="#" class="sidenav-trigger hide-on-med-and-up" data-target="mobile-nav">
      <i class="material-icons" id = "nav-menu">menu</i>
    </a>

   	<ul class = "hide-on-small-only">
   		<li class = "<?php if($active=='Home') echo"active"; ?>"><a href="index.php">Home</a></li>
   		<li class = "<?php if($active=='About') echo"active"; ?>"><a href="about.php">About</a></li>
   		<li class = "<?php if($active=='News') echo"active"; ?>"><a href="news.php">Updates</a></li>
      <li class = "<?php if($active=='Shop') echo"active"; ?>"><a href="shop.php">Shop</a></li>
   		<li class = "<?php if($active=='Videos') echo"active"; ?>"><a href="videos.php">Videos</a>
      </li>
   		<li class = "<?php if($active=='Reviews') echo"active"; ?>"><a href="reviews.php">Reviews
      </a></li>
   		<li class = "<?php if($active=='Contact') echo"active"; ?>"><a href="contact.php">Contact
      </a></li>
   	</ul>
  </nav>

  <ul class="sidenav" id="mobile-nav">
    <h5>Logo <span class = "right" id = "close-btn">X</span></h5>

    <li class = "<?php if($active=='Home') echo"active"; ?>">
      <a href="index.php"><i class = "fa fa-home"></i>Home</a>
    </li>

    <li class = "<?php if($active=='About') echo"active"; ?>">
      <a href="about.php"><i class = "fa fa-pencil-square-o"></i>About</a>
    </li>

    <li class = "<?php if($active=='Shop') echo"active"; ?>">
      <a href="shop.php"><i class = "fa fa-pencil-square-o"></i>Shop</a>
    </li>

    <li class = "<?php if($active=='News') echo"active"; ?>">
      <a href="news.php"><i class = "fa fa-newspaper-o"></i>News</a>
    </li>

    <li class = "<?php if($active=='Videos') echo"active"; ?>">
      <a href="videos.php"><i class = "fa fa-video-camera"></i>Videos</a>
    </li>

    <li class = "<?php if($active=='Reviews') echo"active"; ?>">
      <a href="reviews.php"><i class = "fa fa-heart"></i>Reviews</a>
    </li>

    <li class = "<?php if($active=='Contact') echo"active"; ?>">
      <a href="contact.php"><i class = "fa fa-phone"></i>Contact</a>
    </li>
  </ul>
<style>
  @media  (min-width: 481px) and (max-width: 600px){
    #nav2{
      margin-top: 20px;
    }
</style>
<script>
  $(document).ready(function(){
  $( "#close-btn" ).click(function() {
    //$( "#mobile-nav" ).css('opacity','0');
  });
});
</script>