  	<div class = "row">
	   <?php 
	   include 'Connection/db_conn.php';
	    if(!isset($_GET['p_cat'])){
	    if(!isset($_GET['cat'])){
	    $per_page=16; 
	    if(isset($_GET['page']))
	      $page = $_GET['page'];
	    else
	      $page=1;

	    $start_from = ($page-1) * $per_page;
	    $get_products = "SELECT * FROM product ORDER BY 1 DESC LIMIT $start_from,$per_page";
	    $run_products = mysqli_query($conn,$get_products);
	    while($row_products=mysqli_fetch_array($run_products)){
	      $pro_title = $row_products['product_title'];
	      $pro_price = $row_products['product_price'];
	      $pro_img1 = $row_products['product_img1'];
	      $pro_discount = $row_products['discount'];
	      echo "
	        <div class = 'center'>
	        <div class='col l3' id = 'shop-pro'>
	        <img src='Product_Images/$pro_img1'/>
	        <div id='pro-name'>
	          <h5>$pro_title</h5>
	        <h5>Price: $$pro_price</h5>
	        </div>
	        <button>View</button>
	        <button>Buy</button>
	        </div></div>
	      ";
	  	}?>
	</div>
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