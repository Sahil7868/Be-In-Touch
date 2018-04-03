<?php 

if(isset($_POST["add"]))
{
	
	SESSION_start();
	
	$email=$_SESSION["email"];
	$name=$_POST["txtname"];
	$source=$_POST["source"];
	$carnum=$_POST["txtnum"];
	$destination=$_POST["des"];
	//$carid=$_POST["txtid"];
	$driver=$_POST["php1"];
	$mobile=$_POST["mob"];
	$dat=$_POST["dd"];
	$rd=$_POST["rd"];
	$ad=$_POST["ad"];
	$cap=$_POST["txtcap"];
	$capacity=$_SESSION["capacity"];
	$carid=$_SESSION["carid"];
	$_SESSION["dat"]=$dat;

	$flag=0;
	$str="../project/images/"."AS".$_FILES["photo"]["name"];
	$ext=pathinfo($str,PATHINFO_EXTENSION);
	$con=mysql_connect('localhost','root','');
	
mysql_select_db('bapa',$con);
$res=mysql_query("select * from car_customer_table where fk_car_id='$carid'",$con);
$cnt=mysql_num_rows($res);
if($cnt>0)
{
while($row=mysql_fetch_assoc($res))
	{
		
			

			$status=$row["statused"];
	
			$goingdate=$row["date"];
			
			$returndate=$row["return_date"];
	

			
			if($cap>$capacity)
	{
				$flag=1;
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo'<center><h2><b>The capacity of car is '.$capacity.' only</b></h2></center>';
	}	
		else if ($goingdate == $dat && $returndate == $rd )
			{
				
	
				if($status=='booked')
				{
							$flag=1;
							echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
					echo "<center><h2><b>This Date is already Book for this car</b></h2></center>";
				
				}
				
			}
				else if ($goingdate == $dat && $status == "booked")
			{
          
				$flag=1;
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
						echo "<center><h2><b>This Date is already Book for this car</b></h2></center>";
						
						
			}
				else if ($returndate ==$rd && $status == "booked")
			{
					$flag=1;
						echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
						echo "<center><h2><b>This Date is already Book for this car</b></h2></center>";
						
						
			}
			
			
			
			else if ($goingdate == $rd && $returndate == $dat )
			{
				
	
				if($status=='booked')
				{
							$flag=1;
							echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
					echo "<center><h2><b>This Date is already Book for this car</b></h2></center>";
				
				}
				
			}
				else if ($goingdate == $rd && $status == "booked")
			{
          
				$flag=1;
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
						echo "<center><h2><b>This Date is already Book for this car</b></h2></center>";
						
						
			}
				else if ($returndate ==$dat && $status == "booked")
			{
					$flag=1;
						echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
						echo "<center><h2><b>This Date is already Book for this car</b></h2></center>";
						
						
			}
			

			

	
	}
	if($flag==0)
	{
			if($_FILES["photo"]["size"]<30000)
		{
				
				if($ext=="jpg" ||$ext=="png" ||$ext=="jpeg")
				{
							move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
							$con=mysql_connect('localhost','root','');
							mysql_select_db('bapa',$con);
							$NULL="NULL";
							$pending="pending";
							$res=mysql_query("insert into car_customer_table values ('$NULL','$source','$destination','$name','$carnum',2500,'$dat','$rd','$str','$driver','$pending',000,000,'$email','$ad','$carid','$cap','$mobile')",$con);
							if($res==1)
						{
									header('location:payuser.php');
									echo "successfull";
						}
							else
						{
								echo "nathii thayuu";
						}
				}
				else
				{
						echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";										
						echo '<center><h2><b>Image should be in jpg or jpeg or png format</b></h2></center>';
				}
		}
		else
				{
					echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
						echo '<center><h2><b>Image should be less than 30kb</b></h2></center>';
				}
		
	}
}
else
{
				if($cap>$capacity)
	{
				//$flag=1;
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo'<center><h2><b>The capacity of car is '.$capacity.' only</b></h2></center>';
	}
	
				else

	{
				if($_FILES["photo"]["size"]<30000)
		{
					
									
				if($ext=="jpg" ||$ext=="png" ||$ext=="jpeg")
				{
							move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
							$con=mysql_connect('localhost','root','');
							mysql_select_db('bapa',$con);
							$NULL="NULL";
							$pending="pending";
							$res=mysql_query("insert into car_customer_table values ('$NULL','$source','$destination','$name','$carnum',2500,'$dat','$rd','$str','$driver','$pending',000,000,'$email','$ad','$carid','$cap','$mobile')",$con);
							if($res==1)
						{
									header('location:payuser.php');
									echo "successfull";
						}
							else
						{
								echo "nathii thayuu";
						}
				}
						else
				{
						echo"<br>";
						echo"<br>";
						echo"<br>";
						echo"<br>";
						echo '<center><h2><b>Image should be in jpg or jpeg or png format</b></h2></center>';
				}
		}
		else
				{
							echo"<br>";
							echo"<br>";
							echo"<br>";
							echo"<br>";
						echo '<center><h2><b>Image should be less than 30kb</b></h2></center>';
				}
			
	}	
			
}

}
?>