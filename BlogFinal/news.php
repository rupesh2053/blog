<?php 
  include 'header.php';
  $active = "News";
  include 'navbar.php';
?>

<br>
<div class="container">
  <div class="row">
  <h3 id = "news-header">Current news</h3><hr>

    <div class="col l3 m4 s12">
      <div id = "news-cata-list">
          <h6 class = "active" id = "game"><i class = "fa fa-home"></i> Games</h6>
          <h6 id = "iphone"><i i class = "fa fa-info-circle"></i> iPhones</h6>
          <h6 id = "android"><i class = "fa fa-pencil"></i> Androids</h6>
          <h6 id = "laptop"><i class =  "fa fa-video-camera"></i> Laptops</h6>
          <h6 id = "pc"><i class = "fa fa-heart"></i> PCs</h6>
          <h6 id = "ipad"><i class = "fa fa-phone"></i> iPads</h6>
      </div>
    </div>

  <div class="col l9 m8 s12" id = 'contents'> <!-- for news -->
  <?php 
    $sql = "SELECT * FROM btl_updates where news_cata = 'game'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $news_img = $row['image'];
      $news_desc = $row['short_desc'];

      echo "
        <div class='row' id = 'new-id'>
        <div class='col l3 m6 s6' id = 'news-img'><img src='Images/$news_img'></div>
        <div class='col l4 m6 s6' id = 'news-contents'><h5>Newly arrived</h5><hr>
        <p>$news_desc</p>
        <a href='#'><button id = 'btn-more-news'>more?</button></a>
        </div>
        </div><hr class = 'hide-on-small-only'>";
    }
  ?>
  </div>
  </div><br>
</div>
<?php include 'footer.php'; ?>
<script src = "JS/dynamic-news-display.js"></script>
