



<!DOCTYPE html>
<html lang="en">
<head>
<title>shreeji travels</title>
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
function allnumeric(uzip)
{ 
		var numbers=/^[0-9]+$/;
		if(uzip.value.match(numbers))
		{
			return true;
		}
		else
		{
				alert(' numeric only')
				document.form1.txt_mob.value="";
		document.form1.txt_mob.focus();
				
				return false;
				
		}
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
function phone_number(passid,mx,my)
{
	var pl=passid.value.length;
	if(pl==0 || pl>my || pl<mx)
	{
		alert("Mobile Number should 10 digit only ");
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




<body class="page1">
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
          <li ><a href="../homepage/homepage.php">Home</a></li>
        
          <li><a href="finalgallery.php">Gallery</a></li>
		  
          <li><a href="#" style="color:#B0C4DE">.</a></li>
          <li class="current"><a href="signup.php" style="
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
<?php 
if(isset($_POST["add"]))
{
	
		SESSION_start();

	$email=$_POST["email1"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$cnfpassword=$_POST["confirmpassword"];
	$mob=$_POST["mobile"];
	$city=$_POST["city"];
	$date=date('d-m-y');
	$gender=$_POST["gender"];
	$type="user";
	
	$str="../project/images/"."AS".$_FILES["photo"]["name"];
	$ext=pathinfo($str,PATHINFO_EXTENSION);
	
$con=mysql_connect('localhost','root','');
     mysql_select_db('bapa',$con);
	$res=mysql_query("select * from user_table ",$con);
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
			$vvd=$row['email_id'];
	
	}
	
	
	
	
	
	

	
	
				if($_POST["captcha_code"]==$_SESSION["captcha_code"])
		{
	
					if($email==$vvd)
			{
						echo "<center><h2><b>This Email Id Already Exists</b></h2></center>";
						
						
			}
				else
			{
	

							if($cnfpassword==$password)
						{
	
										if($ext=="jpg" ||$ext=="png" ||$ext=="jpeg")
									{
												move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
	
												$con=mysql_connect('localhost','root','');
												mysql_select_db('bapa',$con);
												$res=mysql_query("insert into user_table values('$email','$username','$mob','$gender','$city','$password','$str','$type','$date','notviewed')",$con);
												if ($res==1)
											{
	
													header('location:../homepage/homepage.php');
											}
												else
											{
												
													echo"<center><h2><b>This Email Id Already Exists</b></h2></center>";
											}	
									}
										else
									{
													
													echo "<center><h2><b>Your image must be .jpg/png/jpeg</b></h2></center>";
									}
						}

 


							else
						{
										
										echo "<center><h2><b>Password Wrong Entered</b></h2></center>";
						}
			}
		}
				else
		{
				
				echo "<center><h2><b>Enter Correct Captcha Code</b></h2></center>";
		}
}
?>


<form action="signup.php" enctype="multipart/form-data" method="post" name="form1">
 <div class="row">   
 
	<div class="col-md-6 col-md-offset-3">
<div class="pannel-heading" style="background:lightblue">
<h3 class="panel-heading" style="color:white"><center><b><i>Sign Up</i></b></center></h3>

		<div class="panel panel-info">
		
 <table class="table">
  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue; color:white">User Name</span>
  <input type="text" class="form-control" placeholder="Enter User name" aria-describedby="sizing-addon1" name="username" onblur="return userid_validation(document.form1.username,5,12);" required />
</div>
  </td>
  </tr>
 
 
 <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" for="exampleInputEmail1" style="background:lightblue; color:white">Email address</span>
  <input type="email" class="form-control" placeholder="Enter Email Address" aria-describedby="sizing-addon1" name="email1" required />
</div>
  </td>
  </tr>
  

 <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue; color:white">Password</span>
  <input type="password" class="form-control" placeholder="Enter Password" aria-describedby="sizing-addon1" name="password" onblur="return passid_validation(document.form1.password,5,12);"  required />
</div>
  </td>
  </tr>
  
 <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue;color:white">Confirm Password</span>
  <input type="password" class="form-control" placeholder="Confirm Password" aria-describedby="sizing-addon1" name="confirmpassword" onblur="return passid_validation(document.form1.password,5,12);"  required />
</div>
  </td>
  </tr>
  
  
  	
	  
 <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue;color:white">Mobile Number</span>
  <input type="text" class="form-control" placeholder="Enter Mobile Number" aria-describedby="sizing-addon1" name="mobile" onblur="return phone_number(document.form1.password,10,10);" onkeypress="return event.charCode >= 48 && event.charCode <= 57;" onblur="return allnumeric(document.form1.txt_mob);" required />
</div>
  </td>
  </tr>
 
  
  	  

  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue;color:white">City </span>
  <select name="city" aria-describedby="sizing-addon1">
<?php 

$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from city",$con);
 while($row=mysql_fetch_array($res,MYSQL_ASSOC))
 {
	 
	echo '"<option value="'.$row["city_id"].'">'.$row["city_name"].'</option>"';
	
	 
	 
 }




?>
</select>

</div>
  </td>
  </tr>
  

  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue;color:white">Gender</span>
   <br>
        <input type="radio" name="gender" value="male" checked>Male
      <input type="radio" name="gender" value="female">Female
</div>
  </td>
  </tr>
 
  
 <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue;color:white">Profile Photo</span>
 <input type="file" class="form-control" aria-describedby="sizing-addon3"  name="photo"></div>
  </td>
  </tr>
  
  
      	 
 <tr>
  <td>
  <div class="input-group input-group-lg">
  <input type="text" class="form-control" name="captcha_code" placeholder="Captcha Code" required /><br>
	<img src="captcha_code.php" />
  </td>
  </tr>
  
  
  
   <tr>
  <td>
  <div class="input-group input-group-lg">
    <label>
      <input type="checkbox"> Remember Me
    </label>
  </td>
  </tr>
  

<tr>
<td>
<center> 
<div class="btn-group">
<input  type="submit" name="add" class="btn btn-success" style="background:lightblue;color:white; width:300px;" value="SIGN IN" >
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