<!DOCTYPE html>
<html>
<head>

<script src="../Scripts/jquery-1.9.1.js"></script>
<script src="../Scripts/bootstrap.js"></script>
<link href="../Content/bootstrap.css" rel="stylesheet"/>


</head>

<body>
<div class="row">
<?php
	
		include 'header.php';

?>

</div>



<div class="row">

<div class="col-md-2 col-xs-2" style="background-color:white;">
<div class="list-group">
  <a href="#" class="list-group-item" style=" background-color:#90CAF9;">
    <h4 style="color:white;">Car Type</h4>
  </a>
  <?php
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query('select count(p.car_id)"cnt",c.t_name,p.fk_type_id,c.type_id from car_type_table as c,car_table as p where c.type_id=p.fk_type_id group by(c.t_name)',$con);
//$res=$obj->getdata('select count(p.pro_id)"cnt",c.cat_name,p.fk_cat_id,c.cat_id from cat_tbl as c ,pro_tbl as p where c.cat_id=p.fk_cat_id group by(c.cat_name)');
while($row=mysql_fetch_assoc($res))
{
	
	
	echo '<a href="catsearch.php?id='.$row["type_id"].'" class="list-group-item" style="background-color:; color:#90CAF9;">'.$row["t_name"].'<span class="badge" style="background-color:#90CAF9; color:white;">'.$row["cnt"].'</span></a>';
}
?>
  
</div>

</div>

</div>

<!--<div class="row">
<div class="col-md-2 col-xs-2">
</div>

<div class="col-md-8 col-xs-8" style="background-color:white;">
<div class="panel panel-default" >
  <div class="panel-body" style="background-color:#90CAF9;">
    
  </div>

<div class="row">

<?php 


$obj= new database;
$res=$obj->getdata("select *  from pro_tbl");
while($row=mysql_fetch_assoc($res))
{
	
	echo '<div class="col-md-6 col-xs-6 " >';
	echo '<div class=" w3-container">';
	echo'<div class="thumbnail">';
	echo'<img src="'.$row["pro_img"].'" style="width:30%;cursor:zoom-in"
  onclick="document.getElementById("modal01").style.display="block"" class="w3-hover-opacity">';
	echo'<div id="modal01" class="w3-modal" onclick="this.style.display="none"">';
	echo'<span class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright">&times;</span>';
	echo'<div class="w3-modal-content w3-animate-zoom">';
	echo' <img src="'.$row["pro_img"].'" style="width:100%">';
	echo'</div>';
	echo'</div>';
	echo'</div>';
	echo'</div>';
     
     echo'</div>';  
       
      

	  
	 }


 
   


?>


</div>

</div>

	

</div>

</div>-->


 
  
  



</body>
</html>