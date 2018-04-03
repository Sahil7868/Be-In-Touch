<?php 

if(isset($_POST["add"]))
{
	
	$str="../project/images/"."AS".$_FILES["photo1"]["name"];
	
	$ext=pathinfo($str,PATHINFO_EXTENSION);
	
	
	$str1="../project/images/"."AS".$_FILES["photo2"]["name"];
	
	$ext1=pathinfo($str1,PATHINFO_EXTENSION);
	
	
	$str2="../project/images/"."AS".$_FILES["photo3"]["name"];
	
	$ext2=pathinfo($str2,PATHINFO_EXTENSION);
	
	
	if($ext=="jpg" ||$ext=="png" ||$ext=="jpeg" ||$ext1=="jpg" ||$ext1=="png" ||$ext1=="jpeg"  ||$ext2=="jpg" ||$ext2=="png" ||$ext2=="jpeg")
	{
				if(move_uploaded_file($_FILES["photo1"]["tmp_name"],$str))
				{
					
						if(move_uploaded_file($_FILES["photo2"]["tmp_name"],$str1))
					{
					
							if(move_uploaded_file($_FILES["photo3"]["tmp_name"],$str2))
						{
								include 'database.php';
								$obj=new database;
	
								$res=$obj->getdata("insert into gallery_table values (NULL,'$str','$str1','$str2') ");
								if($res==1)
							{
									header('location:gallerydis.php');
									echo "successfull";
							}
								else
							{
								echo "nathii thayuu";
							}
						}
					}
				}
	}
	else
	{
		echo 'something went wrong';
	}
}
?>