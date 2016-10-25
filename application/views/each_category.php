<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <title>Category</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/each_categoryStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/carouselStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/navBarStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/home-bodyStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/homeStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/aboutUsStyle.css?v=2.0">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type='text/javascript' src="static/js/_event-cardbase-hover.js"></script>
</head>
<body>

<!-- to access to this, go: localhost:8888/Web-App-Project/technology -->

<!-- navBar & Caroisel in Web-App-Project/application/views/_include/....... -->
<?php include("_includes/navBar.php");?>
<?php include("_includes/carousel.php");?>

<div class="containter-fluid text-center">
    <h1><?php echo $category;?></h1>
</div>

<!--Cardbase in Web-App-Project/static/assets-kienthu/_cardbase.php -->
<!--Card-based design-->
<div class="container">
    <!--Start row-->
    <div class="row">
        <a>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="events-card-0 event-card-0">
                    <p class="event-content"><span class="eventName">Event 1</span> <br>
                        <small>Size 585x200. Location. Date. Category.</small>
                    </p>
                </div>
            </div>
        </a>
        <a>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="events-card-0 event-card-1">
                    <p class="event-content"><span class="eventName">Event 2</span> <br>
                        <small>Size 585x200. Location. Date. Category.</small>
                    </p>
                </div>
            </div>
        </a>
    </div>
    <!--End row-->

    <!--Start row-->
    <div class="row">
        <a>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="events-card-0 event-card-3">
                    <p class="event-content"><span class="eventName">Event 3</span> <br>
                        <small>Size 585x200. Location. Date. Category.</small>
                    </p>
                </div>
            </div>
        </a>
        <a>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="events-card-0 event-card-4">
                    <p class="event-content"><span class="eventName">Event 4</span> <br>
                        <small>Size 585x200. Location. Date. Category.</small>
                    </p>
                </div>
            </div>
        </a>
    </div>
    <!--End row-->  
</div>
<!--End card-based-->

<?php include("_includes/aboutUs.php");?>
<?php include("_includes/footer.php");?>
   
<!--Here is for javascript-->
<script>
    $('#myCarousel').carousel({
        interval: 4000
    })
</script>
<script type="text/javascript">
if($(window).width() > 767){
    $("#carousel-section").css('margin-top','7%');
    $('.logo').css('margin-left','14%');
}else if($(window).width() > 505){
    $("#carousel-section").css('margin-top','10%');
    $('.logo').css('margin-left','-22%');
}
else{
    $("#carousel-section").css('margin-top','17%');
    $('.logo').css('margin-left','-22%');
}
$(window).resize(function(){
    if($(window).width() > 767){
        $("#carousel-section").css('margin-top','7%');
        $('.logo').css('margin-left','14%');
    }else if($(window).width() > 505){
        $("#carousel-section").css('margin-top','10%');
        $('.logo').css('margin-left','-22%');
    }
    else{
        $("#carousel-section").css('margin-top','17%');
        $('.logo').css('margin-left','-22%');
    }
});
</script>
</body>
</html>