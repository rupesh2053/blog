<?php 
  include 'Connection/db_conn.php';
  $news_cata = $_POST['news_cata'];
  $sql = "SELECT * FROM btl_updates where news_cata = '$news_cata'";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $news_img = $row['image'];
    $news_desc = $row['short_desc'];

    echo "
      <div class='row' id = 'new-id'>
      <div class='col l3 m6 s6' id = 'news-img'><img src='Images/$news_img'></div>
      <div class='col l4 m6 s6' id = 'news-contents'><h5>Newly arrived</h5><hr>
      <p>$news_desc</p>
      <a href='#'><button class = 'right' id = 'btn-more-news'>more?</button></a>
      </div>
      </div><hr class = 'hide-on-small-only'>";
  }
?>