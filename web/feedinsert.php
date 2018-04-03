<?php 

if(isset($_POST["add"]))
{
	
	SESSION_start();
	
	$email=$_SESSION["email"];
	$mob=$_POST["mob"];
	$des=$_POST["des"];
	$date=date('y-m-d');
$approve='notviewed';
	include 'database.php';
	$obj=new database;
	
      $res=$obj->getdata("insert into feedback_table values (Null,'$mob','$des','$date','$email','$approve') ");
if($res==1)
{
	header('location:user.php');
	echo "successfull";
}
else
{
	echo "nathii thayuu";
}
	}

?>