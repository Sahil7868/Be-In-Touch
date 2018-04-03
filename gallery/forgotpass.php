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
<script language="Javascript" type="text/javascript">
function checkdelete(){
	return confirm('The OTP has been send to your Email id');
	
	
}
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
	$_SESSION["maily"]=$email;
	$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 10);
$_SESSION["otp"] = $captcha_code;
$con=MYSQL_connect('localhost','root','');
MYSQL_select_db('bapa',$con);
$res=MYSQL_query("select * from user_table  where email_id='$email'",$con);
$cnt=mysql_num_rows($res);

if($cnt>0)
{

//$random_alpha = md5(rand());
//$captcha_code = substr($random_alpha, 0, 6);

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";


//$captcha_code="demo1.brainoorja.com/x.php?id=".$captcha_code;

$message = "Your one time password  ".$captcha_code;
        
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'maildemo254@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'maildemo1234';

// add a subject line
$mail->Subject = '  one time OTP  ';

// Sender email address and name
$mail->SetFrom('sahilsurani84@yahoo.in', 'Shreeji Travels');

//$email1=$_POST["txtemail"];
// reciever address, person you want to send
$mail->AddAddress($email);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	
    $mail->Send();
   // $msg = "Mail send successfully";
	header('location:otp.php');

	//echo $msg;
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
	echo $msg.'in 1';
} catch (Exception $e) {
    $msg = $e->getMessage();
	echo $msg.'in 2';
}





					



}
else
{
	echo"<h2><center><b>This email id is not registered yet</b></center></h2>";
}

}


?>


<form action="forgotpass.php" enctype="multipart/form-data" method="post" name="form1">
 <div class="row">   
 
	<div class="col-md-6 col-md-offset-3">
<div class="pannel-heading" style="background:lightblue">
<h3 class="panel-heading" style="color:white"><center><b><i>Forgot Password</i></b></center></h3>

		<div class="panel panel-info">
		
 <table class="table">
 
 

  <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue; color:white">Enter your Email</span>
  <input type="text" class="form-control" placeholder="Enter Email Id" aria-describedby="sizing-addon1" name="username"  required />
</div>
  </td>
  </tr>
  

 
 
 

<tr>
<td>
<center> 
<div class="btn-group">
<input  type="submit" name="btnlogin" class="btn btn-success" onclick="return checkdelete()" style="background:lightblue; color:white; width:300px;" value="OK">
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
	     <ul>
          Contact Us : 9824541639.<br>
          
		  Shreejitravelsnr@yahoo.co.in
        </ul>
      </div>
     
      <div class="clear"></div>
    </div>
 

 

  
 
  

   



</body>
</html>