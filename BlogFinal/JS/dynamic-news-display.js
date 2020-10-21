$(document).ready(function(){
	///game's update
	$("#game").click(function(){
		$("#contents").load("news-action.php", {
			news_cata: "game"
		});
	});

	///iphone's update
	$("#iphone").click(function(){
		$("#contents").load("news-action.php", {
			news_cata: "iphone"
		});
	});


	///android's update
	$("#ipad").click(function(){
		$("#contents").load("news-action.php", {
			news_cata: "ipad"
		});
	});

	///laptop's update
	$("#pc").click(function(){
		$("#contents").load("news-action.php", {
			news_cata: "pc"
		});
	});

	///pc's update
	$("#laptop").click(function(){
		$("#contents").load("news-action.php", {
			news_cata: "laptop"
		});
	});

	///ipads's update
	$("#android").click(function(){
		$("#contents").load("news-action.php", {
			news_cata: "android"
		});
	});

	$('h6').on('click', function(){
		$('h6').removeClass('active');
		$(this).addClass('active');
	});
});