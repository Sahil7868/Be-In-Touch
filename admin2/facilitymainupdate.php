<?php 


if(isset($_POST["btninsert"]))
{	
	$rno=$_POST["txtid"];
	$name=$_POST["busname"];

					
	
	
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("update  facility_table set facility_name='$name'
									
										where facility_id='$rno'",$con);
		
	
if($res==1)
{
Header('Location:facilitydis.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>