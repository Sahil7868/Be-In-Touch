<?php 



$id=$_REQUEST["id"];

$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("delete from user_table where email_id='$id'",$con);


if($res==1)
{
Header('Location:userdis.php');
}
else
{
echo'noooo noooo noooo';
}


?>


