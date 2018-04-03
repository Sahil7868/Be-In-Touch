<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from payment_table where pay_id='$id'");

if($res==1)
{
Header('Location:payment.php');
}
else
{
echo'noooo noooo noooo';
}


?>


