<div id="carousel-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo base_url("static/images/2s.jpg"); ?>" alt="first-slide" class="img-responsive">
						</div>
						<div class="item">
							<img src="<?php echo base_url("static/images/1s.jpg"); ?>" alt="second-slide" class="img-responsive">
						</div>
						<div class="item">
							<img src="<?php echo base_url("static/images/0s.jpg"); ?>" alt="third-slide" class="img-responsive">
						</div>
					</div>
					<a href="#myCarousel" class="carousel-control left" data-slide="prev">
						<span class="icon-prev"></span>
					</a>
					<a href="#myCarousel" class="carousel-control right" data-slide="next">
						<span class="icon-next"></span>
					</a>
				</div> <!-- /carousel -->
			</div> <!-- /col-md-8-->
		</div>
	</div>
</div>