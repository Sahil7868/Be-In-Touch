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
      <h1><a href="index.html"><img src="images/shriji.jpg" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="homepage.php">Home</a></li>
      
          <li><a href="../gallery/finalgallery.php">Gallery</a></li>
		   <li><a href="" style="color:#B0C4DE">.</a></li>
          <li><a href="../gallery/signup.php" style="
    margin-left:150px;
">Signup</a></li>
          <li><a href="../gallery/login.php">Login</a></li>
      
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="main">




  <div class="container_12">
    <div class="grid_12">
      <div class="slider-relative">
        <div class="slider-block">
          <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
            <ul class="items">
			
								<?php 


$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from slider_table",$con);
while($row=mysql_fetch_assoc($res))
{
	


	
	
 
	echo'<li><img src="'.$row["place_img"].'" alt="">'; 
	
	echo'<div class="banner">';
	
	echo'<br>';
 
	echo' <span>'.$row["place_name"].'</span>';
	
	echo'</div>';
	
	echo'</li>';
	



	


	
	  
	 }


 
   


?>

            <!--  <li><img src="images/fst.jpg" alt="">
                <div class="banner">
                  
                  <br>
                  <span> THERE ARE PLENTY OF PLACES</span> </div>
              </li>
              <li><img src="images/udai.jpg" alt="">
			   <div class="banner">
                  
                  <br>
                  <span>Udaipur</span> </div></li>
				     <li><img src="images/laxmii.jpg" alt="">
                <div class="banner">
                  
                  <br>
                  <span>Laxmi Vilas Baroda</span> </div>
              </li>
			  	     <li><img src="images/darji.jpg" alt="">
                <div class="banner">
                  
                  <br>
                  <span>Darjeeling</span> </div>
              </li>
			  	     <li><img src="images/lal.jpg" alt="">
                <div class="banner">
                  
                  <br>
                  <span>Delhi</span> </div>
              </li>
			  	     <li><img src="images/jam.jpg" alt="">
                <div class="banner">
                  
                  <br>
                  <span>Jammu</span> </div>
              </li>
			  	     <li><img src="images/uti.jpg" alt="">
                <div class="banner">
                  
                  <br>
                  <span>Hill Station Ooti</span> </div>
              </li>-->
                    </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h3>Company profile</h3>
      </div>
      <div class="boxes">
        <div class="grid_4">
          <figure>
            <div><img src="images/introji.jpg" alt=""></div>
            <figcaption>
              <h4>Introduction</h4>
              Shreeji Travels is a Travelling company focuses on excellence in 
client satisfaction.
Experience the omnipresent yet kaleidoscopic connectedness	
in our ‘One World’ through ‘Togetherness’.

</figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/act.jpg" alt=""></div>
            <figcaption>
              <h4>Activities</h4>
             Our vision, mission and passion are to provide safe journey
to the customers on which they ‘Discover their Connectedness’
with themselves, life partner, families, work mates as well as 
with the place they are visiting. 
 </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/dett.jpg" alt=""></div>
            <figcaption>
              <h4>Personal Details</h4>
             Company Address:3, Ashirvad Complex,
							 Near Company Petrol Pump,
							 Dharnidhar Derasar Road,
							 Paldi, Ahmedabad-38007.
							 
							 
			 Contact   No     :     9824541639   	
			 
			 E-mail:         shreejitravelsnr@yahoo.co.in                




			 </figcaption>
          </figure>
        </div>
        <div class="clear"></div>
      </div>

      <div class="clear"></div>
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
<!--<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <div class="copy"> Journey &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
    </div>
    <div class="clear"></div>
  </div>
</footer>-->
</body>
</html>