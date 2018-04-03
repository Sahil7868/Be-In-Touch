<?php 

if(isset($_POST["add"]))
{
	$name=$_POST["busname"];
	$carnum=$_POST["num"];
	$capacity=$_POST["capacity"];
	$detail=$_POST["detail"];
	$fid=$_POST["type"];
	$did=$_POST["driver_id"];
	$str="../project/images/"."AS".$_FILES["photo"]["name"];
	
	$ext=pathinfo($str,PATHINFO_EXTENSION);
	if($ext=="jpg" ||$ext=="png" ||$ext=="jpeg")
	{
					move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
					include 'database.php';
					$obj=new database;
	
				$res=$obj->getdata("insert into bus_table values (NULL,'$name','$str','$capacity','$num','$fid','$detail','$did') ");
			if($res==1)
		{
						header('location:busdisplay.php');
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