<?php 

if(isset($_POST["add"]))
{
	$placename=$_POST["placename"];
	
	$str="../project/images/"."AS".$_FILES["photo"]["name"];
	
	$ext=pathinfo($str,PATHINFO_EXTENSION);
	if($ext=="jpg" ||$ext=="png" ||$ext=="jpeg")
	{
					move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
					include 'database.php';
					$obj=new database;
	
				$res=$obj->getdata("insert into slider_table values (NULL,'$placename','$str') ");
			if($res==1)
		{
						header('location:sliderdis.php');
						echo "successfull";
		}
			else
		{
					echo "nathii thayuu";
		}
	}
	else
	{
		echo 'something went wrong';
	}
}
?>