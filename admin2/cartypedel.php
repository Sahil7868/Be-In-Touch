<?php 



$id=$_REQUEST["id"];
require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from car_type_table where type_id='$id'");

if($res==1)
{
Header('Location:cartypedisplay.php');
}


else
{
echo'noooo noooo noooo';
}


?>


