<?php 



$id=$_REQUEST["id"];
require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from car_table where car_id='$id'");

if($res==1)
{
Header('Location:cardis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


