<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 

SESSION_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>shreeji travel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hangout  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->

<link href="//fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="../Scripts/jquery-1.9.1.js"></script>
<script src="../Scripts/bootstrap.js"></script>
<link href="../Content/bootstrap.css" rel="stylesheet"/>
<link href="../Content/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="../css/endless.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="../Scripts/bootstrap.min.js"></script>
  <script src='../js/jquery.dataTables.min.js'></script>
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- swipe box js -->
<script language="Javascript" type="text/javascript">
function checkdelete(){
	return confirm('Are you sure you want to cancel ?');
	
	
}
</script>
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->
</head>
<body>
	
	<div class="banner" id="home">
		<div class="header-bottom">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                      <a href=""><h1><i>Journey</i></h1></a>
				   </div>
					<!--//logo-->
					<nav class="navbar navbar-default cl-effect-16" id="cl-effect-16">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div id="navbar" class="navbar-collapse navbar-right collapse hover-effect">
							<ul class="nav navbar-nav">
							<li><a href="user.php">Home</a></li>
								<li><a href="bususer.php" >Bus Booking</a></li>
								<li><a href="feedback.php" >Feedback</a></li>
								<li><a href="view.php" >Manage Profile</a></li>
								<li ><a href="cancar.php">Cancel Booking</a></li>
								<li ><a href="../homepage/homepage.php">Logout</a></li>
							
							</ul>	
						</div>
						</nav>

				 <div class="clearfix"></div>
			 </div>
		</div>
	</div>
		<div class="banner-slider w3layouts">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
					    <li>
						   <div class="banner-info">
							      <h3>To Travel</h3>
								  <p>IS TO LIVE</p>
								     <div class="arrows"><img src="images/border.png" alt="border"/></div>
								 <span>ENJOY THE MOMENT</span>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							    <h3>To Travel</h3>
								 <p>IS TO EXPLORE</p>
								  <div class="arrows"><img src="images/border.png" alt="border"/></div>
								 <span>ENJOY THE MOMENT</span>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							      <h3>To Travel</h3>
								  <p>IS TO DISCOVER</p>
								   <div class="arrows"><img src="images/border.png" alt="border"/></div>
								   <span>ENJOY THE MOMENT</span>
						   </div>
					  </li>
					</ul>
			  </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
		<!--banner Slider starts Here-->
	  	<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	      <!--banner Slider starts Here-->
		 </div>
	</div>
	<br>
	<br>
	 <h1 style="background-color:; color:#2F4F4F;"><b><i>Your Booked Cars</i></b></h1>
	 <br>

	
	
	
	
	
	
	
	<div class="row">


<div class="container">

<table align="left"  class="table table-striped"  style="color:#2F4F4F;  font-size: large;">
<thead >
<tr style=" border-color:#2F4F4F; border-width:2px;">
<th>Email Id</th>
<th>Car Name</th>
<th>Source</th>
<th>Destination</th>
<th>Date</th>
<th>Return Date</th>
<th>Cancel</th>


</tr>
</thead>
<tbody>
<?php 

$email=$_SESSION["email"];

$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from car_customer_table where fk_email_id='$email' and statused='booked' ",$con);

while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
		echo "<tr style='font-size: large; background-color:#F8F8FF; border-color:#2F4F4F; border-width:2px;'>";
	
			echo "<td>".$row['fk_email_id']."</td>";
			echo "<td>".$row['car_name']."</td>";
			echo "<td>".$row['source']."</td>";
			echo "<td>".$row['destination']."</td>";
			echo "<td>".$row['date']."</td>";
			echo "<td>".$row['return_date']."</td>";
		
		
		
		
		echo '<td>

<a href="cancelinsert1.php?id='.$row["cust_id"].'" onclick="return checkdelete()">  <button style="background-color:F8F8FF;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a></td>';

		echo "</tr>";
	
		
	
}

 




?>
</tbody>


</table>
</br>
</br>



</div>
</div>
</div>

</div>


	<!-- //gallery -->
	
	
	<!--// News -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Nunc egestas</h4>
				</div>
				<div class="modal-body">
					<p>Nulla eget lacus sed sapien venenatis laoreet vitae ultricies justo. Mauris hendrerit vulputate gravida. Etiam efficitur tellus sit amet convallis ullamcorper. Ut ultrices, urna ut aliquam vulputate, lacus risus ornare libero, sit amet ullamcorper tortor tortor ut mi.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	
	
	<!--contact-->
	
	<!--//contact-->
	
	<!--map-->
	<!--<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5662242.781648118!2d-2.27915352769371!3d46.13547129362329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sFrance!5e0!3m2!1sen!2sin!4v1457683084562" style="border:0" allowfullscreen> </iframe>
	</div>-->
	<!--//map-->
	
	<!--footer-->
<div class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="col-md-4 ftr-grid">
					<h4>About Us</h4>
					<span class="ftr-line"> </span>
					<p>              Shreeji Travels is a Travelling company focuses on excellence in 
client satisfaction.
Experience the omnipresent yet kaleidoscopic connectedness	
in our ‘One World’ through ‘Togetherness’.</p>
					
				</div>
				<div class="col-md-4 ftr-grid ftr-mid">
					 <h4>Company Address</h4>
					<center> <span class="ftr-line flr"> </span>
					  <p>3, Ashirvad Complex,
							 Near Company Petrol Pump,
							 Dharnidhar Derasar Road,
							 Paldi, Ahmedabad-38007.
							 </p></center>
				</div>
				<div class="col-md-4 ftr-grid ftr-rit">
					 <h4>Contact Us</h4>
					 <span class="ftr-line flr"> </span>
					 <p>To contact us send an email directly to shreejitravelsnr@yahoo.co.in  use this
							 </p>
					<p>Contact   No     :     9824541639</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<!--//footer-->
	
	
</body>
</html>