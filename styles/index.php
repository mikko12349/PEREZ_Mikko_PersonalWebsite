<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="ma_styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<div class="page">
		<div class="main_container">
			<div class="see_previous"><img src="arrow.png" class="arrow_previous"></div>
			<div class="see_next"><img src="arrow.png" class="arrow_next"></div>
			<div class="long_container">
				<div class="item" id="one"></div>
				<div class="item" id="two"></div>
				<div class="item" id="three"></div>
				<div class="item" id="four"></div>
				<div class="item" id="five"></div>
				<div class="item" id="six"></div>
				<div class="item" id="seven"></div>
				<div class="item" id="eight"></div>
				<div class="item" id="nine"></div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){
		var window_width    = $(window).width();
		var main_width      = $(".main_container").width();
		var long_container  = $(".long_container");
		var item            = $(".item");
		var slide_number    = 0;


		long_container.css("width" , main_width * 3.05);
		item.css("width" , long_container.width() / 9);

		$(".see_next").click(function(){
			if(slide_number < 6){
				slide_number++
			
				if(slide_number == 6){
					$(".see_next").animate({opacity: 0});
				} else {
					$(".see_next").animate({opacity: 1});
				}

				if(slide_number == 0){
					$(".see_previous").animate({opacity: 0});
				} else {
					$(".see_previous").animate({opacity: 1});
				}

				var item_width   = $(".item").width();
				var pixels_moved = item_width * slide_number;

				long_container.animate({
					marginLeft: -pixels_moved
				});
			}
		});




		$(".see_previous").click(function(){
			if(slide_number > 0){
				slide_number--
			
				if(slide_number == 0){
					$(".see_previous").animate({opacity: 0});
				} else {
					$(".see_previous").animate({opacity: 1});
				}

				if(slide_number == 6){
					$(".see_next").animate({opacity: 0});
				} else {
					$(".see_next").animate({opacity: 1});
				}

				var item_width   = $(".item").width();
				var pixels_moved = item_width * slide_number;

				long_container.animate({
					marginLeft: -pixels_moved
				});
			}
		});
	});

	</script>
</body>
</html>