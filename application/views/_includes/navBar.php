<!--Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	
	
    <div class="container-fluid">	

        <div class="row banner">
        	<div class="language">Choose your language: 
            	<a href="#"><img src="<?php echo base_url("static/images/header/vnflag.png"); ?>" alt="vn flag" ></a>
            	<a href="#"><img src="<?php echo base_url("static/images/header/UK Flag.png"); ?>" alt="uk flag" ></a>
        	</div>	
			<a href="<?php echo base_url("home");?>"><img src="<?php echo base_url("static/images/header/logo.png"); ?>" alt="logo" class="logo"> </a>
        </div>
        <nav>
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseTarget">
					<span class="glyphicon glyphicon-th"></span>
				</button>				
			</div>
            
			<div class="collapse navbar-collapse" id="collapseTarget"> 
				<form class="navbar-form navbar-left">
      				<div class="input-group">
        				<input style="background-color: black;" type="text" class="form-control" placeholder="Search">
	        			<div class="input-group-btn">
	          				<button class="btn btn-default" type="submit">
	            				<i class="glyphicon glyphicon-search"></i>
	          				</button>
	        			</div>
      				</div>
    			</form>
    			<form action="<?php echo base_url("form");?>" class="navbar-form navbar-left">
      				<button style="background-color: red" type="submit" class="btn">Create an event</button>
    			</form>
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
		</nav>
    </div>
</nav>
