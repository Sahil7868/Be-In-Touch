<?php 

if(isset($_POST["add"]))
{
	$name=$_POST["carname"];

	include 'database.php';
	$obj=new database;
	
      $res=$obj->getdata("insert into car_type_table values ('null','$name') ");
if($res==1)
{
	header('location:cartypedis.php');
	echo "successfull";
}
else
{
	echo "nathii thayuu";
}
	}

?>