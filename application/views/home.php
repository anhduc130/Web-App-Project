<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EventsViet</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/carouselStyle.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/home-bodyStyle.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/aboutUsStyle.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/footer.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/navBarStyle.css">
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

if($(window).width() > 1000){
	$("#carousel-section").css('margin-top','13%');
    $('.logo').css('margin-left','14%');
    $('.logo').css('width','12vw');
}else if($(window).width() > 550){
	$("#carousel-section").css('margin-top','20%');
    $('.logo').css('margin-left','-22%');
    $('.logo').css('width','16vw');
}
else{
	$("#carousel-section").css('margin-top','30%');
	$('.logo').css('margin-left','-22%');
	$('.logo').css('width','25vw');
}

$(window).resize(function(){
    if($(window).width() > 1000){
    	$("#carousel-section").css('margin-top','13%')
    	$('.logo').css('margin-left','14%');
    	$('.logo').css('width','12vw');
    }else if($(window).width() > 550){
    	$("#carousel-section").css('margin-top','20%');
        $('.logo').css('margin-left','-22%');
        $('.logo').css('width','16vw');
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