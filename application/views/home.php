<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EventsViet</title>
	<link rel="stylesheet" href="../static/css/carouselStyle.css">
	<link rel="stylesheet" href="../static/css/navBarStyle.css">
	<link rel="stylesheet" href="../static/css/home-bodyStyle.css">
	<link rel="stylesheet" href="../static/css/homeStyle.css">
	<link rel="stylesheet" href="../static/css/aboutUsStyle.css">
	<link rel="stylesheet" href="../static/css/footer.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script> $('#myCarousel').carousel({ interval: 4000 }) </script>	
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<?php include("_includes/navBar.php"); ?>
<?php include("_includes/carousel.php"); ?>

<!-- This is our body -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>

		<div class="col-md-8">

			<div class="row">
				<a href="<?php echo base_url("education");?>">
					<div class="col-md-4 box" id="edu-box">
						<div class="box-content">EDUCATION</div>
					</div>
				</a>
				<div class="col-md-4 image">
					<img src="<?php echo base_url("static/images/meeting.jpg"); ?>" alt="">
				</div>
				<a href="<?php echo base_url("career");?>">
					<div class="col-md-4 box" id="career-box">
						<div class="box-content">CAREER</div>
					</div>
				</a>
			</div>

			<div class="row">
				<div class="col-md-4 image">
					<img src="<?php echo base_url("static/images/cocktail.jpg"); ?>" alt="">
				</div>
				<a href="<?php echo base_url("fashion");?>">
					<div class="col-md-4 box" id="fashion-box">
						<div class="box-content">FASHION</div>
					</div>
				</a>
				<a href="<?php echo base_url("technology");?>">
					<div class="col-md-4 box" id="tech-box">
						<div class="box-content">TECHNOLOGY</div>
					</div>
				</a>
			</div>

			<div class="row">
				<div class="col-md-8 image">
					<img src="<?php echo base_url("static/images/tech.jpg"); ?>" alt="">
				</div>
				<a href="<?php echo base_url("others");?>">
					<div class="col-md-4 box" id="others-box">
						<div class="box-content">OTHERS</div>
					</div>
				</a>
			</div>

		</div>		
	</div>
</div>

<?php include("_includes/aboutUs.php");?>
<?php include("_includes/footer.php"); ?>

</body>
</html>