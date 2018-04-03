<?php 


if(isset($_POST["btninsert"]))
{	
	$rno=$_POST["txtid"];
	$name=$_POST["busname"];

					
	
	
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("update  city set city_name='$name'
									
										where city_id='$rno'",$con);
		
	
if($res==1)
{
Header('Location:citydis.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>