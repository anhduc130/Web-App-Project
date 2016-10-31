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
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/each_categoryStyle.css">
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
    <div class="container-fluid">
<!-- to access to this, go: localhost:8888/Web-App-Project/technology -->

<!-- navBar & Caroisel in Web-App-Project/application/views/_include/....... -->
        <?php include("_includes/navBar.php");?>


<!--Cardbase in Web-App-Project/static/assets-kienthu/_cardbase.php -->
<!--Card-based design-->
        <div class="container">
            <div class="row"><h1 class="text-center" style="margin-top: 12%"><?php echo $category; ?></h1></div>
            <div class="row row-margin">
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_0.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_1.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row row-margin">
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_0.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_1.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row row-margin">
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_0.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_1.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row row-margin">
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_0.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_1.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row row-margin">
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_0.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="events-card-0">
                            <img src="<?php echo base_url(); ?>static/images/each_category/card_1.jpg" class="img-responsive" alt="">
                            <p class="event-content"><span class="eventName">Event 1</span></br>
                                <small>Size 585x200. Location. Date. Category.</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!--End card-based-->

        <?php include("_includes/aboutUs.php");?>
        <?php include("_includes/footer.php");?>
    </div>
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