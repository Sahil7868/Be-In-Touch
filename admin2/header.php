<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Core CSS - Include with every page -->
	

	
 
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
	
	

   </head>
 <style>  
.glyphicon {
    font-size: 15px;
}
</style>

<body>
    <!--  wrapper -->
   
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar" style="background-color:#000080;">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
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
                        <span class="top-label label label-default" style="background-color:#4682B4;"><?php echo $cnt1 ?></span><i class="fa fa-bell fa-3x"></i>
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
								echo'<a href="approve.php?id='.$row["email_id"].'"><button style="background-color:;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></a>';
								echo'<a href="disapprove.php?id='.$row["email_id"].'"><button style="background-color:;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>';
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
                        <span class="top-label label label-info" style="background-color:#4682B4;"><?php echo $cnt1 ?></span><i class="fa fa-envelope fa-3x"></i>
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
                        <span class="top-label label label-info" style="background-color:#4682B4;"><?php echo $cnt1 ?></span><i class="fa fa-money fa-3x"></i>
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu" style="background-color:#000080;">
                    <li>
                        <!-- user image section-->
                        <div class="user-section" style="background-color:white;">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online" style="color:black;">
                                    <span class="user-circle-online btn btn-success btn-circle"></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    
                    <li class="selected" style="background-color:#000080;">
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li >
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris Charts</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="timeline.html"><i class="fa fa-flask fa-fw"></i>Timeline</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- third-level-items -->
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
     

    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
   <!-- <script src="assets/plugins/jquery-1.10.2.js"></script>-->
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
