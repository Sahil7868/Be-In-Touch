<?php 

SESSION_start();


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Core CSS - Include with every page -->
	

	<link href="../Content/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="../css/endless.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
	
 
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
	
	
<script src="../js/jquery-1.10.2.min.js"></script>
  <!--<script src="../Scripts/bootstrap.min.js"></script>-->
  <script src='../js/jquery.dataTables.min.js'></script>
  
  
  
   <script>
        $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });
    </script>

	
 
		

   </head>
 <style>  
.glyphicon {
    font-size: 15px;
}
</style>

<body>
    <!--  wrapper --><div id="wrapper" style="background-color:#6495ED;">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar" style="background-color:#6495ED;">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">
                    <img src="assets/img/ff.jpg"  style="height: 300%; width: 80px;"

  alt="" />
                </a>
            </div>
			<!-- end navbar-header -->
            <!-- navbar-top-links -->
			<?php
								$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from user_table where notification='notviewed'",$con);
							$cnt1=mysql_num_rows($res);
			
			?>
            <ul class="nav navbar-top-links navbar-right">
			  <li class="dropdown">
				
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-default" style="background-color:#6495ED;"><?php echo $cnt1 ?></span><i class="fa fa-bell fa-3x"></i>
                    </a>
			 <ul class="dropdown-menu dropdown-messages">
			
			<?php 
				
							$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from user_table where notification='notviewed'",$con);
							$cnt=mysql_num_rows($res);
							while($row=mysql_fetch_assoc($res))
							{
								
								echo'<li>';
								echo'<div>';
								echo'<strong><span style="color:#4682B4;">'.$row["email_id"].'</span></strong>';
								echo'<span class="pull-right text-muted">';
								echo'<em>'.$row["date"].'</em>';
								echo'</span>';
								echo'</div>';
								echo'<div><b>is registered</b>';
								echo'<a href="approve.php?id='.$row["email_id"].'"><button style="background-color:white;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></a>';
								echo'<a href="disapprove.php?id='.$row["email_id"].'"><button style="background-color:white;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>';
								echo'</div>';
								echo'</li>';
								
								
								
							}
				
			
			?>
            </ul>
			</li>
                
              <?php
								
								$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from feedback_table where notification='notviewed'",$con);
							$cnt1=mysql_num_rows($res);
			
			?>
			 <li class="dropdown">
				
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-info" style="background-color:#6495ED;"><?php echo $cnt1 ?></span><i class="fa fa-envelope fa-3x"></i>
                    </a>
			 <ul class="dropdown-menu dropdown-messages">
			
			<?php 
				
							$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from feedback_table where notification='notviewed'",$con);
							$cnt=mysql_num_rows($res);
							while($row=mysql_fetch_assoc($res))
							{
								
								echo'<li>';
								echo'<a href="feedupdate.php">';
								echo'<div>';
								echo'<strong><span style="color:#4682B4;">'.$row["fk_email_id"].'</span></strong>';
								echo'<span class="pull-right text-muted">';
								echo'<em>'.$row["date"].'</em>';
								echo'</span>';
								echo'</div>';
								echo'<div><b>'.$row["description"].'</b>';
					

								echo'</div>';
								 echo'</a>';
								echo'</li>';
								
								
								
							}
				
			
			?>
            </ul>
			</li>
             
               

				<?php
								
								$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from payment_table where status='pending'",$con);
							$cnt1=mysql_num_rows($res);
			
			?>
			 <li class="dropdown">
				
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-info" style="background-color:#6495ED;"><?php echo $cnt1 ?></span><i class="fa fa-money fa-3x"></i>
                    </a>
			 <ul class="dropdown-menu dropdown-messages">
			
			<?php 
				
							$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from payment_table where status='pending'",$con);
							$cnt=mysql_num_rows($res);
							while($row=mysql_fetch_assoc($res))
							{
								
								echo'<li>';
								echo'<a href="dashboard.php">';
								echo'<div>';
								echo'<strong><span style="color:#4682B4;">'.$row["fk_email_id"].'</span></strong>';
								echo'<span class="pull-right text-muted">';
								echo'<em>'.$row["date"].'</em>';
								echo'</span>';
								echo'</div>';
								echo'<div>has not done payment yet</b>';
								echo'</div>';
								 echo'</a>';
								echo'</li>';
								
								
								
							}
				
			
			?>
            </ul>
			</li>
             
                
                



                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                   <ul class="dropdown-menu dropdown-user">
                        <li><a href="signup.php"><i class="fa fa-user fa-fw"></i>Add Admin</a>
                        </li>
                        <li><a href="view.php"><i class="fa fa-eye fa-fw"></i>View Profile</a>
                        </li>
						<li><a href="edit.php"><i class="fa fa-pencil fa-fw"></i>Edit Profile</a>
                        </li>
						<li><a href="changepass.php"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../homepage/homepage.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->
<?php
$email=$_SESSION["email"];

$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from user_table where email_id='$email' ",$con);
$cnt=mysql_num_rows($res);
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
	$name=$row["name"];
	$img=$row["photo"];
}	
?>
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu" style="background-color:#6495ED;">
                    <li>
                        <!-- user image section-->
                        <div class="user-section" style="background-color:white;">
                            <div class="user-section-inner">
							
                                <img src="<?php echo $img;?>" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong><?php echo $name; ?></strong></div>
                                <div class="user-text-online" style="color:black;">
                                    <span class="user-circle-online btn btn-success btn-circle"></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    
                    <li class="selected" style="background-color:#6495ED;">
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
					<li>
                        <a href="userdis.php"><i class="fa fa-user fa-fw"></i>User Display</a>
                    </li>
					<li>
                        <a href="payment.php"><i class="fa fa-credit-card fa-fw"></i>Payment Display</a>
                    </li>
					<li>
                        <a href="carcustdis.php"><i class="fa fa-user fa-fw"></i>Car Customers Display</a>
                    </li>
					<li>
                        <a href="cardis.php"><i class="fa fa-table fa-fw"></i>Car Display</a>
                    </li>
					<li>
                        <a href="cartypedisplay.php"><i class="fa fa-table fa-fw"></i>Car Model Display</a>
                    </li>
					<li>
                        <a href="buscustdis.php"><i class="fa fa-user fa-fw"></i>Bus Customers Display</a>
                    </li>
					<li>
                        <a href="busdisplay.php"><i class="fa fa-table fa-fw"></i>Bus Display</a>
                    </li>
					<li>
                        <a href="canceldis.php"><i class="fa fa-table fa-fw"></i>Cancel Display</a>
                    </li>
					<li>
                        <a href="citydis.php"><i class="fa fa-table fa-fw"></i>City Display</a>
                    </li>
					<li>
                        <a href="facilitydis.php"><i class="fa fa-table fa-fw"></i>Facility Display</a>
                    </li>
					<li>
                        <a href="feeddis.php"><i class="fa fa-table fa-fw"></i>Feedbacks Display</a>
                    </li>
					<li>
                        <a href="driverdis.php"><i class="fa fa-table fa-fw"></i>Driver Display</a>
                    </li>
					<li>
                        <a href="gallerydis.php"><i class="fa fa-table fa-fw"></i>Gallery Display</a>
                    </li>
					<li>
                        <a href="sliderdis.php"><i class="fa fa-table fa-fw"></i>Homepage Slider Display</a>
                    </li>
               

                     
                  
                 
                   
                  
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper" style="background-color:white;">



            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                  <center>  <h1 style="background-color:; color:#6495ED;";" class="page-header">Dashboard</h1> </center>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-" style="background-color:white;">
                        <i class="fa fa-folder-open" style="color:#4682B4;"></i><b style="color:#4682B4;">&nbsp;Hello ! Welcome Back </b><b style="color:#4682B4;" ><?php echo $name; ?> </b>
 
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
			
			<br>
			
			


       

            <div class="row">
                <div class="col-lg-8">



                   
                 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i>Booked Car Table
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="carcustdis.php">Show Car Customers Table</a>
                                        </li>
                                         <li><a href="cardis.php">Show Cars Table</a>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" height="200px;">
										  <thead>
                                                <tr>
                                                    <th>Car Name</th>
                                                    <th>Car Number</th>
                                                    <th>Date</th>
                                                    <th>Return Date</th>
                                                </tr>
                                            </thead>
											<tbody>
					<?php 
				
							$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from car_customer_table where statused='booked'",$con);
							$cnt=mysql_num_rows($res);
							while($row=mysql_fetch_assoc($res))
							{
								
								echo'<tr>';
								echo'<td>'.$row["car_name"].'</td>';
								echo'<td>'.$row["car_num"].'</td>';
								echo'<td>'.$row["date"].'</td>';
								echo'<td>'.$row["return_date"].'</td>';
								echo'</tr>';
								
								
								
								
							}
				
			
						?>

                                          


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
					  <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i>Booked Bus Table
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="buscustdis.php">Show Bus Customers Table</a>
                                        </li>
                                         <li><a href="busdisplay.php">Show Bus Table</a>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" height="200px;">
										  <thead>
                                                <tr>
                                                    <th>Car Name</th>
                                                    <th>Car Number</th>
                                                    <th>Date</th>
                                                    <th>Return Date</th>
                                                </tr>
                                            </thead>
											<tbody>
					<?php 
				
							$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from bus_customer_tbl where status='booked'",$con);
							
							while($row=mysql_fetch_assoc($res))
							{
								
								echo'<tr>';
								echo'<td>'.$row["bus_name"].'</td>';
								echo'<td>'.$row["bus_num"].'</td>';
								echo'<td>'.$row["date"].'</td>';
								echo'<td>'.$row["return_date"].'</td>';
								echo'</tr>';
								
								
								
								
							}
				
			
			?>

                                          


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
					
					
					
                    <!--End simple table example -->
					
					    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i>Cancel Booking  Table
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="canceldis.php">Show Cancel Table</a>
                                        </li>
                                        
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" height="200px;">
										  <thead>
                                                <tr>
                                                    <th>Email Id</th>
                                                    <th>Cancel Date</th>
                                                   
                                                </tr>
                                            </thead>
											<tbody>
					<?php 
				
							$con=mysql_connect('localhost','root','');
	
							mysql_select_db('bapa',$con);
							$res=mysql_query("select * from cancel_table",$con);
							$cnt=mysql_num_rows($res);
							while($row=mysql_fetch_assoc($res))
							{
								
								echo'<tr>';
								echo'<td>'.$row["fk_email_id"].'</td>';
								echo'<td>'.$row["cancel_date"].'</td>';
								
								echo'</tr>';
								
								
								
								
							}
				
			
						?>

                                          


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
						</div>

                </div>
 <div class="col-lg-4">
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from user_table where type='user' ",$con);
$cnt2=mysql_num_rows($res);


?>
                
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-user fa-3x"></i>
                            <h3><?php echo $cnt2;?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total User Visits
                            </span>
                        </div>
                    </div>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from car_table  ",$con);
$cnt3=mysql_num_rows($res);


?>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3><?php echo $cnt3;?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Cars
                            </span>
                        </div>
                    </div>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from car_type_table  ",$con);
$cnt4=mysql_num_rows($res);


?>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa fa-floppy-o fa-3x"></i>
                            <h3><?php echo $cnt4;?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Car Models
                            </span>
                        </div>
                    </div>
				
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from bus_table  ",$con);
$cnt5=mysql_num_rows($res);


?>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3><?php echo $cnt5;?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Buses
                            </span>
                        </div>
                    </div>
				
					
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from driver_table",$con);
$cnt6=mysql_num_rows($res);


?>
   				
					   <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-user fa-3x"></i>
                            <h3><?php echo $cnt6;?></h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Drivers
                            </span>
                        </div>
                    </div>


                </div>

            </div>




        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
