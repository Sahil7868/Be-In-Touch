<!DOCTYPE html>
<html lang="en">
<head>
<title>Shreeji Travel</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="fonts/HelveticaNeue/font.css">
<link href="style.css" rel="stylesheet" media="screen">	
<link href="responsive.css" rel="stylesheet" media="screen">	
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'random',
        pagination: false, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    });
    $("#tabs").tabs();
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
	<div></div>
      <h1><a href="index.html"><img src="images/shriji.jpg" alt=""></a></h1>
	  
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li><a href="../homepage/homepage.php">Home</a></li>
        
          <li class="current"><a href="finalgallery.php">Gallery</a></li>
		  
          <li><a href="#" style="color:#B0C4DE">.</a></li>
          <li><a href="signup.php" style="
    margin-left:150px;
">Signup</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="row">
<div class="col-md-3 col-xs-3">
</div>
<center>
<div class="col-md-6 col-xs-6">
<div class="fix slider_area">
						<div class="fix slider_top_border"></div>
						<div class="slider">
						<div id="slider1_container" style="position: relative; width: 880px;height: 620px;">
						<div u="loading" style="position: absolute; top: 0px; left: 0px;">
								<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
									background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
								</div>
								<div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;
									top: 0px; left: 0px;width: 100%;height:100%;">
								</div>
							</div>
						<div id="myslides" u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 960px; height: 600px;overflow: hidden;">
						<?php 


$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from gallery_table",$con);
while($row=mysql_fetch_assoc($res))
{
	


	
	
 
	echo'<div>
									<a href="login.php"><img u="image" src="'.$row["pic1"].'"/></a>
									<img u="thumb" src="'.$row["pic1"].'" />
								</div>'; 
	
	echo'<div>
									<a href="login.php"><img u="image" src="'.$row["pic2"].'"/></a>
									<img u="thumb" src="'.$row["pic2"].'" />
								</div>';
	
	echo'<div>
									<a href="login.php"><img u="image" src="'.$row["pic3"].'"/></a>
									<img u="thumb" src="'.$row["pic3"].'" />
								</div>';
 
	



	


	
	  
	 }


 
   


?>

								</div>

						<div u="thumbnavigator" class="jssort07">
								<div style="border-radius:5px;background-color: #fff; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
								<!-- Thumbnail Item Skin Begin -->

								<div u="slides" style="cursor: move;">
									<div u="prototype" class="p" style="POSITION: absolute; WIDTH: 99px; HEIGHT: 66px; TOP: 0; LEFT: 0;">
										<thumbnailtemplate class="i" style="position:absolute;"></thumbnailtemplate>
										<div class="o">
										</div>
									</div>
								</div>
								<!-- Thumbnail Item Skin End -->
								<!-- Arrow Navigator Skin Begin -->
								<!-- Arrow Left -->
								<span u="arrowleft" class="jssora11l" style="width: 22px; height: 64px; top: 20px; left: 8px;">
								</span>
								<!-- Arrow Right -->
								<span u="arrowright" class="jssora11r" style="width: 22px; height: 64px; top: 20px; right: 8px">
								</span>
								<!-- Arrow Navigator Skin End -->
							</div>

						</div>
							
						</div>
						<div class="fix slider_bottom_border"></div>
					</div>
				
				
					
					
					
			<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Jessor slider Start-->
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 2,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 204,                          //[Optional] The offset position to park thumbnail,

                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
		<!-- Jessor slider End-->
		<script type="text/javascript" src="js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
			selectnav('nav2', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
			

		</script>	
		<script type="text/javascript">

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
		</script>		
		
<!--

This Template is designed by WpFreeware.com Team, You are allowed to change anything you like.
Find out More Awesome template at http://www.WpFreeware.com.

-->
</div>
</center>
<div class="col-md-3 col-xs-3">
</div>
</div>
  <div class="bottom_block">
    <div class="container_12">
     <div class="grid_2 prefix_2">
        <ul>
          Shreeji travels:<br>
          It is better to travel,<br> Well than to arrive.</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
		Founder of the company<br>
          Nilesh shah.
		 
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          
          Family Travel company<br>
		  Active since 1998.
        </ul>
      </div>
      <div class="grid_2">
	     <ul>
          Contact Us : 9824541639.<br>
          
		  Shreejitravelsnr@yahoo.co.in
        </ul>
         </div>
      <div class="clear"></div>
    </div>
  </div>
  </div>

</body>
</html>