<?php 



$id=$_REQUEST["id"];
require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from bus_customer_tbl where cust_id='$id'");

if($res==1)
{
Header('Location:buscustdis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


