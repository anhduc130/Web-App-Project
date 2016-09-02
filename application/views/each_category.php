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

    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/static/assets-kienthu/events.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/static/css/carouselStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/static/css/navBarStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/static/css/home-bodyStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/static/css/homeStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/static/css/aboutUsStyle.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/static/css/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type='text/javascript' src="static/assets-kienthu/_event-cardbase-hover.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- to access to this, go: localhost:8888/Web-App-Project/technology>
    
    <!-- navBar & Caroisel in Web-App-Project/application/views/_include/....... -->
    <div class="container">
        <?php include("/application/views/_includes/navBar.php");?>
        <?php include("/application/views/_includes/carousel.php");?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $('#myCarousel').carousel({
            interval: 4000
        })
    </script>

    <!--Cardbase in Web-App-Project/static/assets-kienthu/_cardbase.php -->
    <?php include("/static/assets-kienthu/_cardbase.php");?>

    <!--Footer Section-->
    <footer>
        <div class="container-fluid">
            <h5 class=text-center> Web App Project | All Rights Reserved</h5>
        </div>
    </footer>
</body>

</html>