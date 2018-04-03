<html>
<?php
session_start();
?>
<head>
<link href=".../Content/bootstrap.css" rel="stylesheet"/>
<script src="../Scripts/jquery-1.9.1.js"></script>
<script src="../Scripts/bootstrap.js"></script>
</head>
<body>

  <form action="login.php" enctype="multipart/form-data" method="post" name="form1">
  <div class="row">   
 
	<div class="col-md-6 col-md-offset-3">


		<div class="panel panel-info">
		<div class="panel-heading" style="background:blue">
		<h3 class="panel-title" style="color:white">Login</h3>
		</div>
 <table class="table">

   <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue" style=" color:white">Email</span>
   <input name="email" type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required />
</div>
  </td>
  </tr>
 
    <tr>
  <td>
  <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1" style="background:lightblue" style=" color:white">Password</span>
   <input type="password" class="form-control" name="password" placeholder="Password" onblur="return passid_validation(document.form1.password,5,12);" required />
</div>
  </td>
  </tr>
  
<tr>
<td>
<center> 
<div class="btn-group">
<input  type="submit" name="btnsubmit" class="btn btn-success" value="Login" style="width:300px">
</div>
</td>
</tr>
  
</table>
</form>
</div>
</div>
 
      </div>

	  <?php 
if (isset($_POST["btnlogin"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	$_SESSION["email"]=$email;
	$con=MYSQL_connect('localhost','root','');
MYSQL_select_db('bapa',$con);
$res=MYSQL_query("select * from user_table where email_id='$email' and password='$password'",$con);
while($row=mysql_fetch_array($res)){
	$type=$row["type"];
}
$cnt=mysql_num_rows($res);
	
	echo $cnt;
	if($cnt==1)
	{
		
		if($type=="admin")
		{
	echo "ok";
		}
		else
		{
			
			echo "user";
		}
		
	}
	else
	{
		echo "something went wrong";
	}
}


?>
</body>
</html>