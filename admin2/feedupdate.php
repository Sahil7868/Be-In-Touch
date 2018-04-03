<?php 




$approve='viewed';
	require 'database.php';
$obj=new database();
$res=$obj->getdata("update feedback_table set notification='$approve'");

if($res==1)
{
Header('Location:../admin/feeddis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


