<?php 


if(isset($_POST["add"]))
{	
	$id=$_POST["txtid"];
	
				
					$photo2=$_REQUEST["photo2"];
					$p1=$_REQUEST["photo2"];
					
		if($_FILES["photo2"]["size"]>0)
		{	
					$photo2="../project/images/"."AS".$_FILES["photo2"]["name"];
						move_uploaded_file($_FILES["photo2"]["tmp_name"],$photo2);
						unlink($p1);
		}
	
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("update  gallery_table set pic2='$photo2' where pic_id='$id'",$con);
		
	
if($res==1)
{
Header('Location:gallerydis.php');
}
else
{
echo'noooo noooo noooo';
}
		
}





?>