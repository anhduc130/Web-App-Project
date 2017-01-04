<!DOCTYPE html>
<html lang="en">
<!-- Header Section -->

<head>
	<meta charset="utf-8" />
    <title>Form</title>

    <link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/carouselStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/navBarStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/home-bodyStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/homeStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/aboutUsStyle.css?v=2.0">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/footer.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/form.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body style="background-color: rgb(23,23,56)">
	<!--Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	
	
    <div class="container-fluid">	

        <div class="row banner">
        	<div class="language">Choose your language: 
            	<a href="#"><img src="<?php echo base_url("static/images/header/vnflag.png"); ?>" alt="vn flag" ></a>
            	<a href="#"><img src="<?php echo base_url("static/images/header/UK Flag.png"); ?>" alt="uk flag" ></a>
        	</div>	
			<a href="<?php echo base_url("home");?>"><img src="<?php echo base_url("static/images/header/logo.png"); ?>" alt="logo" style="position: absolute; left:30%"> </a>
        </div>

		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseTarget">
					<span class="glyphicon glyphicon-th"></span>
				</button>				
			</div>
            
			<div class="collapse navbar-collapse" id="collapseTarget"> 
				<ul class="nav navbar-nav nav-pills middle">
					<li style="padding:12px"><span class="glyphicon glyphicon-search"></span><input type="text" placeholder="Search event" class="search-event"></li>
					<li><a href="<?php echo base_url("form"); ?>"><button type="button" class="create-an-event-button">Create an Event</button></a></li>
				</ul> 
 
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url("home");?>" class="hover">HOME</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle hover" data-toggle="dropdown">CATEGORIES</a>
						<ul class="dropdown-menu hover-sub">
							<li><a href="<?php echo base_url("education");?>" class="hover-child">Education</a></li>
							<li><a href="<?php echo base_url("career");?>" class="hover-child">Career</a></li>
							<li><a href="<?php echo base_url("fashion");?>" class="hover-child">Fashion</a></li>
							<li><a href="<?php echo base_url("technology");?>" class="hover-child">Technology</a></li>
						</ul>
					</li>
					<li><a href="#about-section" class="hover">ABOUT US</a></li>
				</ul>
			</div>

		</div>
    </div>
</nav>


<!-- This is our body -->
<div class="container-fluid form">

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<form id="submit-form" method="post" >	
				<div class="row">
					<div class="col-md-4">
						<label for="organizer" class="label">Ban Tổ Chức:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea type="text" id="organizer" name="organizer" cols="40" class="input"></textarea>
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
						<input type="email" id="email" name="email" class="input" >
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="phoneNo" class="label">Số Điện Thoại:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="tel" id="phoneNo" name="phoneNo" class="input">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="date" class="label">Ngày Tổ Chức:</label>
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
						<label for="time" class="label">Thời Gian:</label>
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
						<label for="location" class="label" >Địa Điểm:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea type="text" id="location" name="location" cols="40" class="input"></textarea>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="details" class="label">Thông Tin Về Sự Kiện:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea id="details" name="details" cols="40" rows="5" class="input"></textarea>
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
						<button type="submit" value="Gửi" class="button">Gửi</button>
						<button type="reset" value="Xóa" class="button">Xóa</button>
					</div>
				</div>
				<br>
			</form> 
			</div>
	</div>
</div>

<?php include("_includes/aboutUs.php");?>
<?php include("_includes/footer.php"); ?>

</body>
</html>
