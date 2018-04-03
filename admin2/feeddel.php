<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from feedback_table where f_id='$id'");

if($res==1)
{
Header('Location:feeddis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


