<?php 
  include 'CSS/links.php';
  include 'Connection/db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  <link rel="stylesheet" href="CSS/IndexStyle.css">
</head>
<body>

<div class="navbar-fixed">
  <nav id = "nav1">
    <div class="nav-wrapper">

      <a href = "index.php" class="nav-link hide-on-med-only" id = "logo">Best<span id = "shop">Shop</span>
        <span id = "check">
        </span>
      </a>

      <ul id="nav-mobile" class="right hide-on-small-only">
        <li id = "social-links"> <a class = "fa fa-facebook-f"></a></li>
    	  <li id = "social-links"> <a class = "fa fa-twitter"></a></li>
    	  <li id = "social-links"> <a class = "fa fa-instagram"></a></li>
    	  <li id = "social-links"> <a class = "fa fa-whatsapp"></a></li>
        <li><input type="text" name="search-box" id = "search-box" placeholder="Search...">
        </li>
        <li><a href="#" class = "fa fa-search"></a></li>
        <li><button id = "btn-signin">Sign in</button></li>
      </ul>
      
    </div>
  </nav>
</div>

<script src = "JS/side-nav.js"></script>

<script>
  $(document).ready(function(){
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if(scroll > 50){
        $('#nav1').css("background","rgba(209,86,86,1)");
        $('.fa-search').css("background","rgba(209,86,86,.1)");
      }else{
        $('#nav1').css("background","rgb(209,84,84)");
        $('.fa-search').css("background","rgb(209,86,86)");
      }
    });
  });
  
</script>
<style>
  @media (max-height: 800px) and (min-width: 600px){
  #nav1 ul{
      margin-left: -35px;
    }
  }
</style>