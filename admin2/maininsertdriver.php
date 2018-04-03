<?php 

if(isset($_POST["add"]))
{
	$drivername=$_POST["drivername"];
	$mob=$_POST["mobile"];
	

	include 'database.php';
	$obj=new database;
	
      $res=$obj->getdata("insert into driver_table values ('null','$drivername','$mob') ");
if($res==1)
{
	header('location:driverdis.php');
	echo "successfull";
}
else
{
	echo "nathii thayuu";
}
	}

?>