<?php 
  include 'header.php';
  $active = "Shop";
  include 'navbar.php';
?><br>

<div class="container">
  <div class="row">

   <div class="col l3 m4 s5" id = "shop-pro-cata">
	    <h5>Catagories</h5>

	    <h6 id = "cata-all" class = "active">All 
	      <i class = "material-icons right">keyboard_arrow_right</i>
	    </h6>

	    <h6 id = "cata-bagpack">Bagpacks 
	      <i class = "material-icons right">keyboard_arrow_right</i>
	    </h6>

	    <h6 id = "cata-shoes">Shoes 
	      <i class = "material-icons right">keyboard_arrow_right</i>
	    </h6>

	    <h6 id = "cata-tshirt">T-Shirts 
	      <i class = "material-icons right">keyboard_arrow_right</i>
	    </h6>

	    <h6 id = "headphone">Electronics 
	      <i class = "material-icons right">keyboard_arrow_right</i>
	    </h6>

	    <h5>Filter</h5>
	    <div id = "pro-color">
	      <ul>
	        <li style = "background: red"></li>
	        <li style = "background: green"></li>
	        <li style = "background: blue"></li>
	        <li style = "background: yellow"></li>
	        <li style = "background: black"></li>
	        <li style = "background: grey"></li>
	      </ul>
	    </div>
   </div>

  	<div class="col l9 m8 s7" id = "shop-pro-container">
  		<?php include 'shop-product.php'; ?>
	</div>
  </div>
</div>
<br>
<?php include 'footer.php'; ?>
<script src = "JS/shop-page-record-fetch.js"></script>
<style>
  .row #shop-pro-cata{
    border-radius: 5px;
    padding: 7px;
    border: 1px solid rgba(127,255,0,.6);
  }
  .row #shop-pro-cata h5{
    padding: 7px;
    border-radius: 5px;
    font-size: 20px;
    line-height: 30px;
    background: red;
    color: white;
  }
  .row #shop-pro-cata h6{
    background: white;
    border-radius: 5px;
    transition: .3s ease;
    padding: 15px 7px;
    border: 1px solid rgba(127,255,0,.5);
  }
  .row #shop-pro-cata h6:hover{
    background: rgba(0,0,0,.1);
    color: white;
    cursor: pointer;
  }
  .row #shop-pro-cata .active,
  .row #shop-pro-cata .active:hover{
    background: #76ff03;
    color: white;
  }
  .row #shop-pro{
    background: rgba(127,255,0,.2);
    height: 330px; 
    border-radius: 5px;
    width: 24%;
    margin: 0 4px;
    margin-bottom: 4px;
    padding: 0px;
    border: 1px solid #76ff03;
  }
  .row #shop-pro img{
    height: 200px;
    width: 100%;
    border-radius: 5px 5px 0 0px;
  }
  .pagination li{
    background: #76ff03;
    margin: 0 1%;
  }
  .pagination li a{
    font-weight: bold;
    color: #fff;
  }
  .row #shop-pro button{
    border: none;
    background: #76ff03;
    color: white;
    padding: 4px 10%;
    border-radius: 3px;
    font-weight: bold;
    cursor: pointer;
  }
  .row #shop-pro button:hover,
  .pagination li:hover{
    background: green;
  }
  .row #shop-pro h5{
    font-size: 18px;
    color: grey;
  }
  .row #shop-pro-cata #pro-color li{
    height: 40px;
    width: 40px;
    display: inline-block;
    margin-right: 1px;
    border-radius: 50%;
    border: 2px solid #fff;
    cursor: pointer;
  }
  @media (max-width: 1080px){
  	.row #shop-pro{
  		width: 31%;
  	}
  	.container{
  		width: 100%;
  	}
  }
  @media (max-width: 639px){
  	.row #shop-pro{
  		width: 47%;
  	}
  }
  @media (max-width: 500px){
  	.row #shop-pro{
  		width: 95%;
  	}
  }
</style>