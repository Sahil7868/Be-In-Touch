<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from cancel_table where cancel_id='$id'");

if($res==1)
{
Header('Location:canceldis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


