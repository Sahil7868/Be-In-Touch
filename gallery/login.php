<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shreeji travels</title>
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
<link href="../Content/bootstrap.css" rel="stylesheet"/>
<script src="../Scripts/jquery-1.9.1.js"></script>
<script src="../Scripts/bootstrap.js"></script>

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

<body>
<div class="row">
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
        
          <li><a href="finalgallery.php">Gallery</a></li>
		  
          <li><a href="#" style="color:#B0C4DE">.</a></li>
          <li><a href="signup.php" style="
    margin-left:150px;
">Signup</a></li>
          <li class="current"><a href="login.php">Login</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>

<br>

 <?php 
if (isset($_POST["btnlogin"]))
{
	$email=$_POST["username"];
	$password=$_POST["gender"];
	$_SESSION["email"]=$email;
	$con=MYSQL_connect('localhost','root','');
MYSQL_select_db('bapa',$con);
$res=MYSQL_query("select * from user_table where email_id='$email' and password='$password'",$con);
while($row=mysql_fetch_array($res)){
	$type=$row["type"];
}
$cnt=mysql_num_rows($res);
	
	echo $cnt;
	if($cnt==1)
	{
		
		if($type=="admin")
		{
					header('location:../admin2/dashboard.php');
		}
		else
		{
			
				header('location:../web/user.php');
		}
		
	}
	else
	{
		echo "<center><h2>You Have Entered Wrong Email Id OR Password</h2></center>";
	}
}


?>


<form action="login.php" enctype="multipart/form-data" method="post" name="form1">
 <div class="row">   
 
	<div class="col-md-6 col-md-offset-3">
<div class="pannel-heading" style="background:lightblue">
<h3 class="panel-heading" style="color:white"><center><b><i>login</i></b></center></h3>

		<div class="panel panel-info">
		
 <table class="table">
 
 

  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue; color:white">Email</span>
  <input type="text" class="form-control" placeholder="Enter Email Id" aria-describedby="sizing-addon1" name="username"  required />
</div>
  </td>
  </tr>
  

 
 
 <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue; color:white">Password</span>
  <input type="password" class="form-control" placeholder="Enter Password" aria-describedby="sizing-addon1" name="gender" required />
</div>
  </td>
  </tr>
  

<tr>
<td>
<center> 
<div class="btn-group">
<input  type="submit" name="btnlogin" class="btn btn-success" style="background:lightblue; color:white; width:300px;" value="LOGIN">
</div>
</td>
</tr>




  
  	



 </table>


 
 </div>
 </div>
 
  
    </div>
  </div>
  </form>
  </div>
  <center>
  
<h2 style=" color:#4169E1;">OR</h2>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-3">
<a href="signup.php"><h2>Create a new account</h2></a>
</div>
<div class="col-md-3">
<a href="forgotpass.php"><h2>Forgot Password</h2></a>
</div>
</div>

  
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

 <div class="bottom_block">
   <div class="container_12">
	
     <div class="grid_2">
         <ul>
          <h1 style="color:#483D8B;">     </h1>
        </ul>
      </div>
	 </div>
    <div class="container_12">
	
     <div class="grid_2">
         <ul>
          Shreeji Travels:<br>
          It is better to travel,<br> Well than to arrive.</a></li>
        </ul>
      </div>
	 </div>
	 <div class="container_12">
      <div class="grid_2">
        <ul>
		Founder of the company<br>
          Nilesh shah.
		 
        </ul>
      </div>
	 </div>
      <div class="grid_2">
        <ul>
          
          Family Travel company<br>
		  Active since 1998.
        </ul>
      </div>
	   <div class="grid_2">
       <h1 style="color:#483D8B;">     </h1>
      </div>
      <div class="grid_2">
	     <ul>
          Contact Us : 9824541639.<br>
          
		  Shreejitravelsnr@yahoo.co.in
        </ul>
      </div>
     
      <div class="clear"></div>
    </div>
 

 

  
 
  

   



</body>
</html>