<?php 

if(isset($_POST["add"]))
{
	$name=$_POST["carname"];
	$num=$_POST["h"];
	$capacity=$_POST["c"];
	$detail=$_POST["deatail"];
	$tid=$_POST["type"];
	$did=$_POST["driver_id"];
	$str="../project/images/"."AS".$_FILES["photo"]["name"];
	
	$ext=pathinfo($str,PATHINFO_EXTENSION);
	if($ext=="jpg" ||$ext=="png" ||$ext=="jpeg")
	{
					move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
					include 'database.php';
					$obj=new database;
	
				$res=$obj->getdata("insert into car_table values (NULL,'$name','$tid','$str','$detail','$num','$capacity','$did') ");
			if($res==1)
		{
						header('location:cardis.php');
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