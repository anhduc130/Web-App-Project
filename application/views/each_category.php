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
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/aboutUsStyle.css?v=3.0">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/static/css/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type='text/javascript' src="static/js/_event-cardbase-hover.js"></script>
    <!-- Calendar css + js link -->
    <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

</head>

<body style="background-color: rgb(23,23,56">
    <div class="container-fluid pd-0">
    <!-- to access to this, go: localhost:8888/Web-App-Project/technology -->

    <!-- navBar & Caroisel in Web-App-Project/application/views/_include/....... -->
        <?php include("_includes/navBar.php");?>


        <!--Cardbase in Web-App-Project/static/assets-kienthu/_cardbase.php -->
        <!--Card-based design-->
        <div class="container-fluid">
            <div class="row"><h1 class="text-center" style="margin-top: 150px; color: #fff;"><?php echo $category; ?></h1></div>
            <!--category-content-->
            <div class="col-xs-12 category-display">
              <!--Calender -->
              <div class="col-sm-3 hidden-xs theme-light calendar-model">
                <div class="container-1">
                  <div id="calendar"></div>

                </div>
              </div>
              <!--End Calender  -->
              <!--Category-event-content  -->
              <div class="col-xs-12 col-sm-9 pd-0-xs">

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_0.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_1.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_2.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_3.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_4.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_5.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_6.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_7.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_8.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 category-content">
                  <div class="category-content-frame" style="background: url('<?php echo base_url();?>static/images/each_category/each_9.jpeg') center;">
                    <a class="category-content-intro">
                      <h4>This is intro</h4>
                    </a>
                  </div>
                </div>

              </div>
              <!--End Category-event-content  -->
            </div>
            <!--End category-content-->
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
    $('.logo').css('width','12vw');
}else if($(window).width() > 505){
    $("#carousel-section").css('margin-top','10%');
    $('.logo').css('margin-left','-22%');
    $('.logo').css('width','20vw');
}
else{
    $("#carousel-section").css('margin-top','17%');
    $('.logo').css('margin-left','-22%');
    $('.logo').css('width','25vw');
}
$(window).resize(function(){
    if($(window).width() > 767){
        $("#carousel-section").css('margin-top','7%');
        $('.logo').css('margin-left','14%');
        $('.logo').css('width','12vw');
    }else if($(window).width() > 505){
        $("#carousel-section").css('margin-top','10%');
        $('.logo').css('margin-left','-22%');
        $('.logo').css('width','20vw');
    }
    else{
        $("#carousel-section").css('margin-top','17%');
        $('.logo').css('margin-left','-22%');
        $('.logo').css('width','25vw');
    }
});
</script>
<!-- choosing date js -->
<script type="text/javascript">
  $(function ($) {
      // init the calendar
      $("#calendar").shieldCalendar({
        footer: {
            enabled: true
        },
        min: new Date("1900/1/1"),
        max: new Date("2100/12/31"),
        value: new Date()
      });
      function setCulture() {
        var link = $(this),
            id = link.attr("id");
        // set the Globalize culture
        Globalize.culture(id);
        link.parent().find(".selected").removeClass("selected");
        link.addClass("selected");
        $("#calendar").swidget().refresh();
        return false;
      }
      $(".imagecontainer a").on("click", setCulture);
  });
</script>
<!-- end choosing date js -->

<!-- calendar animate js -->
<script type="text/javascript">
$(function() {

  var $sidebar   = $('.calendar-model .container-1'),
      $window    = $(window),
      offset     = $sidebar.offset(),
      topPadding = $('.navbar').height();

  $window.scroll(function() {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();

      if ($window.scrollTop() > offset.top) {
        if((scrollHeight - scrollPosition) / scrollHeight === 0){
          $sidebar.stop().animate({
              marginTop: $window.scrollTop() - offset.top + topPadding*0.6
          });
        }
        else {
          $sidebar.stop().animate({
              marginTop: $window.scrollTop() - offset.top + topPadding+ 1
          });
        }
      } else {
          $sidebar.stop().animate({
              marginTop: 0
          });
      }
  });

});
</script>
<!-- end calendar animate js -->

</body>
</html>
