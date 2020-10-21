<div class = "container">
<div class="row center" id = "landing-page-body">

  <div class="col l2 m4 s12" id = "landing-page-cata">
  	<h5>Catagories</h5><hr>
  	<h6 class = "active">RAM<i class = "material-icons right">keyboard_arrow_right</i>
  	</h6>

  	<h6>ROM<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>Hard Drive<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>SSD Drive<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>CPU<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>Motherboard<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>SATA Cable<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>Processor<i class = "material-icons right">keyboard_arrow_right</i></h6>
  </div>

  <div class="col l8 m8 s12 slider-main">
  	<div class="slider-area">
  	<h4><i>Best RAM Collection 2020</i></h4>
  	<h4 id = "price">$100</h4>
  	<a href="#"><button>view more</button></a><br>
  	<a href="#"><button id = "amazon-link">amazon.com</button></a>
  	</div>
  	<div class="sider-no">
  		<ul>
  			<li><</li>
  			<li>></li>
  		</ul>
  	</div><br>
  	<div class="bottom-product">
  		<div class="row">
  			<div class="col l3 m4 s6" id = "btm-pro-area">
  				<img src="Images/profile1.jpg" height = "180px" width = "100%">
  				<h6>Lorem ipsum dolor sit amet.</h6>
  				<button>Learn more</button>
  			</div>
  			<div class="col l3 m4 s6" id = "btm-pro-area">
  				<img src="Images/profile1.jpg" height = "180px" width = "100%">
  				<h6>Lorem ipsum dolor sit amet.</h6>
  				<button>Learn more</button>
  			</div>
  			<div class="col l3 m4 s6" id = "btm-pro-area">
  				<img src="Images/profile1.jpg" height = "180px" width = "100%">
  				<h6>Lorem ipsum dolor sit amet.</h6>
  				<button>Learn more</button>
  			</div>
  			<div class="col l3 m4 s6" id = "btm-pro-area">
  				<img src="Images/profile1.jpg" height = "180px" width = "100%">
  				<h6>Lorem ipsum dolor sit amet.</h6>
  				<button>Learn more</button>
  			</div>
  		</div><br>
  		
  	</div>
  </div>

  <div class="col l2 m3 s12 hide-on-med-and-down" id = "landing-page-cata">
  	<h5>Catagories</h5><hr>
  	<h6 class = "active">RAM<i class = "material-icons right">keyboard_arrow_right</i>
  	</h6>

  	<h6>ROM<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>Hard Drive<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>SSD Drive<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>CPU<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>Motherboard<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>SATA Cable<i class = "material-icons right">keyboard_arrow_right</i></h6>
  	<h6>Processor<i class = "material-icons right">keyboard_arrow_right</i></h6>
  </div>
</div>
</div>

<style>
	#landing-page-body button{
		border: none;
		background: black;
		color: white;
		padding: 10px;
		font-size: 20px;
		font-weight: bold;
		border-radius: 5px;
		cursor: pointer;
		margin: 1%;
	}
	#landing-page-body #amazon-link{
		background: orange;
	}
	.slider-area{
		background-image: url('Images/profile1.jpg'); 
		height: 400px; 
		filter: brightness(90%); 
		border-radius: 4px 4px 0px 0px;
		padding: 5px;
	}
	.slider-area #price{
		color: red;
	}
	.sider-no,
	.bottom-product{
		background: rgba(0,0,0,0.6);
		color: white;
		padding: 10px;
		border-radius: 0px 0px 4px 4px;
		cursor: pointer;
	}
	.sider-no ul li{
		display: inline;
		background: black;
		padding: 10px 15px;
		border-radius: 50%;
		font-weight: bold;
	}
	.sider-no ul li:hover{
		background: white;
		color: black;
	}
	.bottom-product{
		background: #fff;
	}
	.bottom-product #btm-pro-area{
		background: rgba(0,0,0,0.4);
		padding: 5px;
		border-radius: 5px;
	}
	.bottom-product #btm-pro-area img{
		border-radius: 5px;
		filter: brightness(80%);
	}
	.bottom-product #btm-pro-area img:hover{
		filter: brightness(90%);
	}
	.bottom-product #btm-pro-area button{
		font-size: 16px;
		padding: 7px;
		background: red;
		width: 100%;
		margin: 0;
	}
	.row #landing-page-cata{
		border: 1px solid rgba(0,0,0,0.1);
		border-radius: 4px;
	}

	#landing-page-cata h5{
		background: rgba(0,0,0,0.5);
		color: white;
		padding: 7px;
		border-radius: 4px
	}
	#landing-page-cata h6{
		padding: 15px;
		border: 1px solid rgba(0,0,0,0.1);
		border-radius: 5px;
		cursor: pointer;
		text-align: left;
		transition: .3s ease;
	}
	#landing-page-cata h6:hover{
		background: rgba(0,0,0,0.2);
	}
	#landing-page-cata .active,
	#landing-page-cata .active:hover{
		background: red;
		color: white;
	}
	@media (min-width: 1001px){
		.bottom-product #btm-pro-area{
			width: 24%;
			margin: 0 2px;
		}
	}
	@media (max-width: 1000px){
		.bottom-product #btm-pro-area{
			width: 32%;
			margin: 2px;
		}
	}
	@media (max-width: 600px){
		.bottom-product #btm-pro-area{
			width: 47%;
		}
		.slider-area{
			margin-top: 5px;
		}
	}
</style>

<script>
$(document).ready(function(){
  $('h6').on('click', function(){
	$('h6').removeClass('active');
	$(this).addClass('active');
  });
});
</script>