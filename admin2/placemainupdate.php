<?php 


if(isset($_POST["add"]))
{	
	$id=$_POST["txtid"];
	$name=$_POST["placename"];
	
				
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
$res=mysql_query("update  slider_table set place_name='$name',
										
										
										place_img='$photo'
										
										where place_id='$id'",$con);
		
	
if($res==1)
{
Header('Location:sliderdis.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>