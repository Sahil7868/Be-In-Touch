<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from car_customer_table where cust_id='$id'");

if($res==1)
{
Header('Location:carcustdis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


