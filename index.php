<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Slide - Info Jr</title>
		<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.css">
		<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/app.css">
	</head>
	<body>
		<main>
			<section class="s-slide">
				<div class="owl-carousel">
					<div class="item"><?php include_once("slides/1.inc")?></div>
					<div class="item"><?php include_once("slides/2.inc")?></div>
					<div class="item"><?php include_once("slides/3.inc")?></div>
				</div>
			</section>
		</main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="owlcarousel/owl.carousel.min.js"></script>
		<script>
			var owl = $('.owl-carousel');
			owl.owlCarousel({
				items:1,
				loop:true,
				margin:10,
				autoplay:true,
				autoplayTimeout:7000,
				autoplayHoverPause:true
				
			});
		</script>
	</body>
</html>