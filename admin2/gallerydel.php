<?php 



$id=$_REQUEST["id"];
	require 'database.php';
$obj=new database();
$res=$obj->getdata("delete from gallery_table where pic_id='$id'");

if($res==1)
{
Header('Location:gallerydis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


