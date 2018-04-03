<?php 


if(isset($_POST["btninsert"]))
{	
	$rno=$_POST["txtid"];
	$name=$_POST["busname"];

					
	
	
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("update  car_type_table set t_name='$name'
									
										where type_id='$rno'",$con);
		
	
if($res==1)
{
Header('Location:cartypedis.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>