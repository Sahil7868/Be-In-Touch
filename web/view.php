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
<title>Shreeji travel</title>
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
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
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
			<script language="Javascript" type="text/javascript">
function checkdelete(){
	return confirm('Car is Booked for this date');
	
	
}
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
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<script type="text/javascript">

function userid_validation(uid,mx,my)
{
	var ul=uid.value.length;
		if(ul==0 || ul>=my || ul<mx)
	{
		alert("username should not be empty/length must be between "+mx+" to "+my);
		uid.focus();
		return false;
	}
	return true;
}
function passid_validation(passid,mx,my)
{
	var pl=passid.value.length;
	if(pl==0 || pl>=my || pl<mx)
	{
		alert("password should not be empty/length must be between "+mx+" to "+my);
		passid.focus();
		return false;
	}
	return true;
}


</script>
<!-- //swipe box js -->
</head>
</body>


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








<div class="container">
<h1 style="background-color:; color:#2F4F4F;"><b><i> Your Profile <i><b></h1>


<?php 

$email=$_SESSION["email"];
$con=mysql_connect('localhost','root','');
     mysql_select_db('bapa',$con);
	$res=mysql_query("select * from user_table where email_id='$email'",$con);
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
		$username=$row["name"];
		$mobile=$row["mobile_num"];
		$gender=$row["gender"];
		$city=$row["fk_city"];
		$photo=$row["photo"];
		$_SESSION["photo"]=$photo;
}

?>

		<div class="container">
<div class="row" >
<div class="col-md-2">
</div>
<div class="col-md-8">

<nav class="navbar navbar-inverse" style="background:#F8F8FF; border-color:#2F4F4F; border-width:2px;">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a  class="navbar-brand" href="edit.php" style="color:black;" >Edit Your Profile</a>
	  <a  class="navbar-brand" href="" style="color:black;" >||</a>
      <a class="navbar-brand" href="changepass.php" style="color:black;"> Change Password  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
 <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
<div class="col-md-2">
</div>
</div>
<form action="#" enctype="multipart/form-data" method="post" name="form1">
 <div class="row">   
 
	<div class="col-md-6 col-md-offset-3">
<div class="pannel-heading" style="background:#2F4F4F">
<h3 class="panel-heading" style="color:white"><center>View User Detail</center></h3>

		<div class="panel panel-info">
		
 <table class="table">
 
 
  <tr>
  <td>
  
       <center> <img src="<?php echo $photo;?>" height="200px" width="200px" > </center>

  </td>
  </tr>
  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:#2F4F4F; color:white">User Name</span>
  <input type="text" class="form-control" placeholder="Enter User name" aria-describedby="sizing-addon1" name="username" value="<?php echo $username; ?>" readonly />
</div>
  </td>
  </tr>
  

 
 
  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:#2F4F4F; color:white">Gender</span>
  <input type="text" class="form-control" placeholder="Enter User name" aria-describedby="sizing-addon1" name="gender" value="<?php echo $gender; ?>" readonly />
</div>
  </td>
  </tr>
  


  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:#2F4F4F; color:white">Mobile Num</span>
  <input type="Number" class="form-control"  aria-describedby="sizing-addon1" name="mob" value="<?php echo $mobile; ?>" readonly />
</div>
  </td>
  </tr>
  
  
  
  
  
  <?php 

$email=$_SESSION["email"];
$con=mysql_connect('localhost','root','');
     mysql_select_db('bapa',$con);
	$res=mysql_query("select p.*,c.* from user_table as p,city as c where p.fk_city=c.city_id and email_id='$email'",$con);
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
		$city=$row["city_name"];
	
}

?>
 
  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:#2F4F4F; color:white">City</span>
  <input type="text" class="form-control" placeholder="Enter User name" aria-describedby="sizing-addon1" name="city" value="<?php echo $city; ?>" readonly />
</div>
  </td>
  </tr>
  
  
  	



 </table>

  
   


</form>


</div>
</div>
</div>

</div>
</div>
</div>
</div>



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
	
</body>
</html>