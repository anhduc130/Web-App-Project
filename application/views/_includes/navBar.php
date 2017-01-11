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
	        			<input type="text" class="form-control" placeholder="Search">
        				<div class="input-group-btn">
	          				<button class="btn btn-customized" type="submit">
	            				<span class="glyphicon glyphicon-search"></span>
	          				</button>
	        			</div>
      				</div>
    			</form>
    			<form action="<?php echo base_url("form");?>" class="navbar-form navbar-left">
      				<button type="submit" class="btn create-an-event-button">CREATE AN EVENT</button>
    			</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url("home");?>" class="hover">HOME</a></li>
					<li><a href="#" class="dropdown-toggle hover" data-toggle="dropdown">CATEGORIES
						<ul class="dropdown-menu">
							<a href="<?php echo base_url("education");?>" class="hover"><li class="menu-1">Education</a></li>
							<a href="<?php echo base_url("career");?>" class="hover"><li class="menu-2">Career</a></li>
							<a href="<?php echo base_url("fashion");?>" class="hover"><li class="menu-3">Fashion</a></li>
							<a href="<?php echo base_url("technology");?>" class="hover"><li class="menu-4">Technology</a></li>
						</ul>
					</a></li>
					<li><a href="#about-section" class="hover">ABOUT US</a></li>
				</ul>
			</div>
		</div>
		</nav>
    </div>
</nav>

