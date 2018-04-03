<?php 


if(isset($_POST["add"]))
{	
	$rno=$_POST["txtid"];
	$name=$_POST["carname"];
		$detail=$_POST["detail"];
			$carnum=$_POST["no"];
				$capacity=$_POST["capu"];
				$fid=$_POST["type_id"];
				$did=$_POST["driver_id"];
				
					$photo=$_REQUEST["photo"];
					$p1=$_REQUEST["photo"];
					
		if($_FILES["photo"]["size"]>0)
		{	
					$photo="../project/images/".$_FILES["photo"]["name"];
						move_uploaded_file($_FILES["photo"]["tmp_name"],$photo);
						unlink($p1);
		}
	
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("update  car_table set car_name='$name',
										fk_type_id='$fid',
										
										car_image_1='$photo',
										car_details='$detail',
										car_num='$carnum',
										capacity='$capacity',
										fk_driver_id='$did'
										where car_id='$rno'",$con);
		
	
if($res==1)
{
Header('Location:cardis.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>