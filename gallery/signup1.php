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
	
	$gender=$_POST["gender"];
	$type="user";
	
	$str="../project/images/"."AS".$_FILES["photo"]["name"];
	$ext=pathinfo($str,PATHINFO_EXTENSION);
	

	
	
	
	
	
	
	
	

	
	
				if($_POST["captcha_code"]==$_SESSION["captcha_code"])
		{
	
			
			
			
	

							if($cnfpassword==$password)
						{
	
										if($ext=="jpg" ||$ext=="png" ||$ext=="jpeg")
									{
												move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
	
												$con=mysql_connect('localhost','root','');
												mysql_select_db('bapa',$con);
												$res=mysql_query("insert into user_table values('$email','$username','$mob','$gender','$city','$password','$str','$type')",$con);
												if ($res==1)
											{
	
													header('location:../homepage/homepage.php');
											}
												else
											{
													//header('location:signup.php');
													echo"<center><h2><b>This Email Id Already Exist</b></h2></center>";
											}	
									}
										else
									{
													//header('location:signup.php');
													echo "<center><h2><b>Your image must be .jpg/png/jpeg</b></h2></center>";
									}
						}

 


							else
						{
										//header('location:signup.php');
										echo "<center><h2><b>Password Wrong Entered</b></h2></center>";
						}
			}
		
				else
		{
				//header('location:signup.php');
				echo "<center><h2><b>Enter Correct Captcha Code</b></h2></center>";
		}
	
}
?>
