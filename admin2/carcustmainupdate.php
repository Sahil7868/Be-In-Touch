<?php 


if(isset($_POST["btninsert"]))
{	
$id=$_POST["txtid"];
	$start_km=$_POST["starting_km"];
	$end_km=$_POST["ending_km"];

					
	
	
	require 'database.php';
$obj=new database();
$res=$obj->getdata("update  car_customer_table set starting_km='$start_km',ending_km='$end_km'
									
										where cust_id='$id'");
		
		
	
if($res==1)
{
Header('Location:carcustdis.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>