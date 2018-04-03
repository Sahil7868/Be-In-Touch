<?php 
session_start();
$name1=$_POST["username"];
$mobile=$_POST["mob"];
$gender=$_POST["gender"];
$email=$_SESSION["email"];
$cit=$_POST["city_id"];
$photo1=$_SESSION["photo"];
if($_FILES["txtimg"]["name"]!="")
{
	$photo="../project/images/".$_FILES["txtimg"]["name"];
	$photo1="../project/images/".$_FILES["txtimg"]["name"];
	unlink("../".$_SESSION["photo"]);
	move_uploaded_file($_FILES["txtimg"]["tmp_name"],$photo);
}
	$con=MYSQL_connect('localhost','root','');
MYSQL_select_db('bapa',$con);
$res=MYSQL_query("update user_table set name='$name1',mobile_num='$mobile',gender='$gender',fk_city='$cit', photo='$photo1' where email_id='$email'",$con);
Header("Location:view.php");


?>