<?php 

if(isset($_POST["add"]))
{
	
	SESSION_start();
	
	$email=$_SESSION["email"];
	$name=$_POST["txtname"];
	$source=$_POST["source"];
	$busnum=$_POST["txtnum"];
	$destination=$_POST["des"];
	//$catid=$_POST["txtid"];
	$mobile=$_POST["mob"];
	$dat=$_POST["dd"];
	$rd=$_POST["rd"];
	$ad=$_POST["ad"];
	$cap=$_POST["txtcap"];
	$capacity=$_SESSION["capacity"];
	$busid=$_SESSION["busid"];
	$_SESSION["date"]=$dat;
	
	$flag=0;
	
	$con=mysql_connect('localhost','root','');
	
mysql_select_db('bapa',$con);
$res=mysql_query("select * from bus_customer_tbl where fk_bus_id='$busid'",$con);
$cnt=mysql_num_rows($res);
if($cnt>0)
{
while($row=mysql_fetch_assoc($res))
	{
		
			
			$status=$row["status"];
	
			$goingdate=$row["date"];
			
			$returndate=$row["return_date"];
	if($cap>$capacity)
	{
				$flag=1;
				echo"<br>";
				echo"<br>";
				echo'<center><h2><b>The capacity of bus is '.$capacity.' only</b></h2></center>';
	}
	else if	(10>$cap)	
	{
				$flag=1;
				echo"<br>";
				echo"<br>";
				echo'<center><h2><b>The Minimum Required persons should be 10</b></h2></center>';
	}
	else if ($goingdate == $dat && $returndate == $rd )
			{
				
	
				if($status=='booked')
				{
						$flag=1;
						echo"<br>";
				echo"<br>";
					echo "<center><h2><b>This Date is already Book for this bus</b></h2></center>";
				
				}
				
			}
				else if ($goingdate == $dat && $status == "booked")
			{
          
					$flag=1;
					echo"<br>";
				echo"<br>";
						echo "<center><h2><b>This Date is already Book for this bus</b></h2></center>";
						
						
			}
				else if ($returndate ==$rd && $status == "booked")
			{
					$flag=1;
						echo"<br>";
				echo"<br>";
						echo "<center><h2><b>This Date is already Book for this bus</b></h2></center>";
						
						
			}
			
			else if ($goingdate == $rd && $returndate == $dat )
			{
				
	
				if($status=='booked')
				{
						$flag=1;
						echo"<br>";
				echo"<br>";
					echo "<center><h2><b>This Date is already Book for this bus</b></h2></center>";
				
				}
				
			}
				else if ($goingdate == $rd && $status == "booked")
			{
          
					$flag=1;
					echo"<br>";
				echo"<br>";
						echo "<center><h2><b>This Date is already Book for this bus</b></h2></center>";
						
						
			}
				else if ($returndate ==$dat && $status == "booked")
			{
					$flag=1;
						echo"<br>";
				echo"<br>";
						echo "<center><h2><b>This Date is already Book for this bus</b></h2></center>";
						
						
			}
			

	
	}
	if($flag==0)
	{
			
				
											
							mysql_select_db('bapa',$con);
							$NULL="NULL";
							$pending="pending";
							$res=mysql_query("insert into bus_customer_tbl values ('$NULL','$name','$dat','$rd','2500','$busid','$source','$destination','$ad','$cap','$pending',000,000,'$email','$busnum','$mobile')",$con);
							if($res==1)
						{
									header('location:buspayuser.php');
									echo "successfull";
						}
							else
						{
								echo "nathii thayuu";
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
				echo'<center><h2><b>The capacity of bus is '.$capacity.' only</b></h2></center>';
	}
	else if	(10>$cap)	
	{
				$flag=1;
				echo"<br>";
				echo"<br>";
				echo'<center><h2><b>The Minimum Required persons should be 10</b></h2></center>';
	}
	
			
				
			else
	{
				
			
							$con=mysql_connect('localhost','root','');
							mysql_select_db('bapa',$con);
							$NULL="NULL";
							$pending="pending";
							$res=mysql_query("insert into bus_customer_tbl values ('$NULL','$name','$dat','$rd','2500','$busid','$source','$destination','$ad','$cap','$pending',000,000,'$email','$busnum','$mobile')",$con);
							if($res==1)
						{
									header('location:buspayuser.php');
									echo "successfull";
						}
							else
						{
								echo "nathii thayuu";
						}
				
	}		
			
			
}

}
?>