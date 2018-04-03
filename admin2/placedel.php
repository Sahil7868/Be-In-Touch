<?php 



$id=$_REQUEST["id"];
require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from slider_table where place_id='$id'");

if($res==1)
{
Header('Location:sliderdis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


