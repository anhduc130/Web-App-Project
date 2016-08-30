<html>
<head>
	<meta charset="UTF-8">
	<title>EventsViet</title>
	<link rel="stylesheet" href="css/carouselStyle.css">
	<link rel="stylesheet" href="css/navBarStyle.css">
	<link rel="stylesheet" href="css/home-bodyStyle.css">
	<link rel="stylesheet" href="css/homeStyle.css">
	<link rel="stylesheet" href="css/aboutUsStyle.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	
		
	<div class="container">	
		<?php include("_includes/navBar.php") ?>
		<?php include("_includes/carousel.php") ?>
		<?php include("_includes/home-body-cat.php") ?>
		<?php include("_includes/aboutUs.php") ?>
	</div>
		<?php include("_includes/footer.php") ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script> $('#myCarousel').carousel({ interval: 4000 }) </script>	
</body>
</html>