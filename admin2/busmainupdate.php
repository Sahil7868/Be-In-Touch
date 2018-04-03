<?php 


if(isset($_POST["add"]))
{	
	$rno=$_POST["txtid"];
	$name=$_POST["busname"];
		$detail=$_POST["detail"];
			$busnum=$_POST["no"];
				$capacity=$_POST["capacity"];
				$fid=$_POST["facility_id"];
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
$res=mysql_query("update  bus_table set bus_name='$name',
										fk_facility_id='$fid',
										
										bus_img='$photo',
										bus_detail='$detail',
										bus_num='$busnum',
										capacity='$capacity',
										fk_driver_id='$did'
										where bus_id='$rno'",$con);
		
	
if($res==1)
{
Header('Location:busdisplay.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>