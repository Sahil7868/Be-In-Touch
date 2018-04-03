<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from driver_table where driver_id='$id'");

if($res==1)
{
Header('Location:driverdis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


