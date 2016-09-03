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
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/aboutUsStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/footer.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/form.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<?php include("_includes/navBar.php"); ?>

<!-- This is our body -->
<div class="container-fluid form">
	<br><br><br><br><br><br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<form id="submit-form" method="post" >	
				<div class="row">
					<div class="col-md-4">
						<label for="organizer">Ban Tổ Chức:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea type="text" id="organizer" name="organizer" cols="40"></textarea>
					</div>
				</div>
				<br>
				
				<div class="row">
					<div class="col-md-4">
						<label for="email">Email:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="email" id="email" name="email" >
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="phoneNo">Số Điện Thoại:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="tel" id="phoneNo" name="phoneNo">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="date">Ngày Tổ Chức:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="date" id="date" name="date">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="time">Thời Gian:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="time" id="time" name="time" value="">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="location">Địa Điểm:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea type="text" id="location" name="location" cols="40"></textarea>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="details">Thông Tin Về Sự Kiện:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea id="details" name="details" cols="40" rows="5"></textarea>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-4">
						<label for="image">Choose an image file:</label>
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
						<input type="submit" value="Gửi">
						<input type="reset" value="Xóa"> 
					</div>
				</div>
				<br>
			</form> 
			</div>
	</div>
</div>

<?php include("_includes/aboutUs.php");?>
<!-- Footer Section -->
<?php include("_includes/footer.php"); ?>

</body>
</html>
