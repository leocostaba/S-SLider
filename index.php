<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Slide - Info Jr</title>
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
					<div class="owl-controls">
						<div class="owl-dots">
							<div class="owl-dot active"><span></span></div>
							<div class="owl-dot"><span></span></div>
							<div class="owl-dot"><span></span></div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="owlcarousel/owl.carousel.min.js"></script>
		<script>
			$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
		</script>
	</body>
</html>