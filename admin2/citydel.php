<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from city where city_id='$id'");

if($res==1)
{
Header('Location:citydis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


