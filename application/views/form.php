<!DOCTYPE html>
<html lang="en">
<!-- Header Section -->

<head>
	<meta charset="utf-8" />
    <title>Form</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/carouselStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/navBarStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/home-bodyStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/homeStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/aboutUsStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/footer.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/form.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/navBarStyle.css">
</head>

<body style="background-color: rgb(23,23,56)">
<?php include("_includes/navBar.php"); ?>

<!-- This is our body -->
<div class="container-fluid form">

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form id="submit-form" method="post" class="formpos">	
				<div class="row">
					<div class="col-md-4">
						<label for="organizer" class="label">Organizer:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea type="text" id="organizer" name="organizer" cols="60" rows="3" class="input"></textarea>
					</div>
				</div>
				<br>
				
				<div class="row">
					<div class="col-md-4">
						<label for="email" class="label">Email:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="email" id="email" name="email" class="input" size="50">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="phoneNo" class="label">Phone number:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="tel" id="phoneNo" name="phoneNo" class="input" size="30">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="date" class="label">Date:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="date" id="date" name="date" class="input">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="time" class="label">Time:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="time" id="time" name="time" value="" class="input">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="location" class="label" >Location:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea type="text" id="location" name="location" cols="60" rows="2" class="input"></textarea>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="details" class="label">Event information:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea id="details" name="details" cols="80" rows="30" class="input"></textarea>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="image" class="label">Choose an image file:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="file" id="image" name="submit">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-3">
						<button type="submit" value="send" class="button button1">SEND</button>
						<button type="reset" value="delete" class="button button1">DELETE</button>
					</div>
				</div>
				<br>
			</form> 
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<script type="text/javascript">
if($(window).width() > 1000){
    $('.logo').css('margin-left','14%');
    $('.logo').css('width','12vw');
}else if($(window).width() > 505){
    $('.logo').css('margin-left','-22%');
    $('.logo').css('width','20vw');
    $('.formpos').css('margin-top', '10%');
}
else{
	$('.logo').css('margin-left','-22%');
	$('.logo').css('width','25vw');
	$('.formpos').css('margin-top', '13%');
}

$(window).resize(function(){
	if($(window).width() > 1000){
		$('.logo').css('margin-left','14%');
		$('.logo').css('width','12vw');
		$('.formpos').css('margin-top', '0%');
	}else if($(window).width() > 505){
	    $('.logo').css('margin-left','-22%');
	    $('.logo').css('width','20vw');
	    $('.formpos').css('margin-top', '10%');
	}
	else{
		$('.logo').css('margin-left','-22%');
		$('.logo').css('width','25vw');
		$('.formpos').css('margin-top', '13%');
	}
});
</script>>

<?php include("_includes/aboutUs.php");?>
<?php include("_includes/footer.php"); ?>

</body>
</html>
