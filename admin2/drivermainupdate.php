<?php 


if(isset($_POST["btninsert"]))
{	
	$id=$_POST["txtid"];
	$name=$_POST["busname"];
	$mob=$_POST["mobile"];
	
	
	
	
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("update  driver_table set name='$name',
										mobile_num='$mob'
										

										where driver_id='$id'",$con);
		
	
if($res==1)
{
Header('Location:driverdis.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>