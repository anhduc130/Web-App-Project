<!DOCTYPE html>
<html lang="en">
<!-- Header Section -->
<?php include 'header.php';?>

<!-- Body Section -->
<div class="container">
	<div class="row">
		<!-- Submit a post form -->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			ĐĂNG KÍ SỰ KIỆN <br>
			<form id="submit-form" method="post" >
				<div class="row">
					<div class="col-md-6">
						<label for="eventName">Tên Sự Kiện:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea type="text" id="eventName" name="eventName" cols="40"></textarea>
					</div>
				</div>
				<br>

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
		<div class="col-md-2"></div>
			<!-- end of form --> 
		</div>
	</div>
</div>
	
<!-- Footer Section -->
<?php include 'footer.php';?>
</html>
