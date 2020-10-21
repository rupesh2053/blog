<?php
include 'Connection/db_conn.php';
	$pro_cata = $_POST['pro_cata'];
	$get_products = "SELECT * FROM product WHERE product_catagories = '$pro_cata'  ORDER BY 1 DESC LIMIT 40";
	$run_products = mysqli_query($conn,$get_products);
	while($row_products=mysqli_fetch_array($run_products)){
	    $pro_title = $row_products['product_title'];
	    $pro_price = $row_products['product_price'];
	    $pro_img1 = $row_products['product_img1'];
	    $pro_discount = $row_products['discount'];
	    echo "
	    	<div class = 'center'>
			<div class='col l3 m4 s6' id = 'shop-pro'>
			<img src='Product_Images/$pro_img1'/>
			<div id='pro-name'>
			<h5>$pro_title</h5>
			<h5>Price: $$pro_price</h5>
			</div>
			<button>View</button>
			<button>Buy</button>
		 </div></div>
	    ";
}
?>
