<?php 

if(isset($_POST["add"]))
{
	$name=$_POST["carname"];

	include 'database.php';
	$obj=new database;
	
      $res=$obj->getdata("insert into facility_table values ('null','$name') ");
if($res==1)
{
	header('location:facilitydis.php');
	echo "successfull";
}
else
{
	echo "nathii thayuu";
}
	}

?>