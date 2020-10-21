
           
  <div class="col-md-9"><!-- col-md-9 Begin -->
     
  <div class="row"><!-- row Begin -->
   <?php 
    if(!isset($_GET['p_cat'])){
    if(!isset($_GET['cat'])){
    $per_page=9; 
    if(isset($_GET['page']))
      $page = $_GET['page'];
    else
      $page=1;

    $start_from = ($page-1) * $per_page;
    $get_products = "SELECT * FROM product ORDER BY 1 DESC LIMIT $start_from,$per_page";
    $run_products = mysqli_query($conn,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){
      $pro_id = $row_products['product_id'];
      $pro_title = $row_products['product_title'];
      $pro_price = $row_products['product_price'];
      $pro_img1 = $row_products['product_img1'];
      $pro_img2 = $row_products['product_img2'];
      $pro_descount = $row_products['discount'];
      $pro_stock = $row_products['stock'];
      $noDis = ($pro_price * $pro_descount)/100;
      $noDis = $pro_price - $noDis;
      echo "";
      } ?>
  </div><!-- row Finish -->

  <center>
    <ul class="pagination"><!-- pagination Begin -->
		<?php
      $query = "SELECT * FROM product";
      $result = mysqli_query($conn,$query);
      $total_records = mysqli_num_rows($result);
      $total_pages = ceil($total_records / $per_page);
      echo "<li><a href='shop.php?page=1'> ".'First Page'." </a></li>";
      for($i=1; $i<=$total_pages; $i++){
      echo "<li><a href='shop.php?page=".$i."'> ".$i." </a></li>";                    
    };
    echo "<li><a href='shop.php?page=$total_pages'> ".'Last Page'." </a></li>";
    }}?>                  
  </ul><!-- pagination Finish -->
  </center>

                    
  </div>    
  </div>
  </div>
   
