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
