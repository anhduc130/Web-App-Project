<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EventsViet</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/carouselStyle.css?v=2.0">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/navBarStyle.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/home-bodyStyle.css?v=2.0">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/aboutUsStyle.css?v=1.0">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/footer.css">
	<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script> $('#myCarousel').carousel({ interval: 4000 }) </script>	
</head>

<body style="background-color: rgb(23,23,56)">
<?php include("_includes/navBar.php"); ?>
<br>
<?php include("_includes/carousel.php"); ?>

<!-- This is our body -->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			<div class="row">
				<a href="<?php echo base_url("education");?>">
					<div class="col-sm-4 col-xs-4 box" id="edu-box">
						<div class="box-content">EDUCATION</div>
					</div>
				</a>
				<div class="col-sm-4 col-xs-4 image">
					<img src="<?php echo base_url("static/images/meeting.jpg"); ?>" alt="">
				</div>
				<a href="<?php echo base_url("career");?>">
					<div class="col-sm-4 col-xs-4 box" id="career-box">
						<div class="box-content">CAREER</div>
					</div>
				</a>
			</div>

			<div class="row">
				<div class="col-sm-4 col-xs-4 image">
					<img src="<?php echo base_url("static/images/cocktail.jpg"); ?>" alt="">
				</div>
				<a href="<?php echo base_url("fashion");?>">
					<div class="col-sm-4 col-xs-4 box" id="fashion-box">
						<div class="box-content">FASHION</div>
					</div>
				</a>
				<a href="<?php echo base_url("technology");?>">
					<div class="col-sm-4 col-xs-4 box" id="tech-box">
						<div class="box-content">TECHNOLOGY</div>
					</div>
				</a>
			</div>

			<div class="row">
				<div class="col-sm-8 col-xs-8 image">
					<img src="<?php echo base_url("static/images/tech.jpg"); ?>" alt="">
				</div>
				<a href="<?php echo base_url("others");?>">
					<div class="col-sm-4 col-xs-4 box" id="others-box">
						<div class="box-content">OTHERS</div>
					</div>
				</a>
			</div>
		</div>	
	</div>
</div>

<?php include("_includes/aboutUs.php");?>
<?php include("_includes/footer.php"); ?>

<script type="text/javascript">

if($(window).width() > 767){
	$("#carousel-section").css('margin-top','13%');
    $('.logo').css('margin-left','14%');
    $('.logo').css('width','12vw');
}else if($(window).width() > 505){
	$("#carousel-section").css('margin-top','20%');
    $('.logo').css('margin-left','-22%');
    $('.logo').css('width','20vw');
}
else{
	$("#carousel-section").css('margin-top','30%');
	$('.logo').css('margin-left','-22%');
	$('.logo').css('width','25vw');
}

$(window).resize(function(){
    if($(window).width() > 767){
    	$("#carousel-section").css('margin-top','13%')
    	$('.logo').css('margin-left','14%');
    	$('.logo').css('width','12vw');
    }else if($(window).width() > 505){
    	$("#carousel-section").css('margin-top','20%');
        $('.logo').css('margin-left','-22%');
        $('.logo').css('width','20vw');
    }
    else{
		$("#carousel-section").css('margin-top','30%');
		$('.logo').css('margin-left','-22%');
		$('.logo').css('width','25vw');
	}
});
$('#myCarousel').carousel({interval: 4000 });

</script>
</body>
</html>