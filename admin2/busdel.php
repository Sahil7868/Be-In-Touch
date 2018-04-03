<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from bus_table where bus_id='$id'");

if($res==1)
{
Header('Location:busdisplay.php');
}
else
{
echo'noooo noooo noooo';
}


?>


