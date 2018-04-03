<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from facility_table where facility_id='$id'");

if($res==1)
{
Header('Location:facilitydis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


