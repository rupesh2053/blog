$(document).ready(function(){
	///cata-all
	$("#cata-all").click(function(){
		$("#shop-pro-container").load("shop-product.php", {
			pro_cata: "all"
		});
	});

	///cata-bagpack
	$("#cata-bagpack").click(function(){
		$("#shop-pro-container").load("Shop-Action.php", {
			pro_cata: "Backpack"
		});
	});

	///cata-shoes
	$("#cata-shoes").click(function(){
		$("#shop-pro-container").load("Shop-Action.php", {
			pro_cata: "Shoes"
		});
	});


	///cata-tshirt
	$("#cata-tshirt").click(function(){
		$("#shop-pro-container").load("Shop-Action.php", {
			pro_cata: "T-Shirt"
		});
	});

	///cata-bagpack
	$("#headphone").click(function(){
		$("#shop-pro-container").load("Shop-Action.php", {
			pro_cata: "Headphones"
		});
	});

	$('h6').on('click', function(){
		$('h6').removeClass('active');
		$(this).addClass('active');
	});
});