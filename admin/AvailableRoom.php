<?php
include('db.php')
?>
<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Available Rooms Ramkrishna</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
</head>
<body>
	<!-- <?php
	ob_start();	
	include ('db.php');

	$fid = $_GET['sid'];
	
	
	
	$sql ="select * from room where id = '$fid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$place = $row['place'];
		$roomid = $roomid['roomid'];		
	
	}
	
									
	?> -->
    <div id="wrapper">
    	   <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                  	<li>
                        <a href="reservation.php"><i class="fas fa-arrow-circle-right"></i> Book New Room</a>
                    </li>

                    <li>
                        <a class="active-menu" href="AvailableRoom.php"><i class="fas fa-hotel"></i></i> Available Rooms</a>
                    </li>

                    <li>
                        <a href="home.php"><i class="fas fa-tachometer-alt"></i></i> Status</a>
                    </li>
                    <li>
                        <a href="onlineapplications.php"><i class="fa fa-desktop"></i> Online Applications</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-envelope"></i> Enquiry Panel</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <!-- <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li> -->
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </li>

          </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h1 class="page-header">
                            Available Rooms <small></small>
                        </h1>
                    </div>
                </div> 
                 
			<!--  <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header" color="white">
                           Available Room Details<small> </small>
                        </h1>
                    </div>
                </div>  -->
                 <!-- /. ROW  -->
                 <?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;

						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Ac Room" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="Non Ac")
							{
								$gh = $gh + 1;
							}
							// if($s=="Single Room" )
							// {
							// 	$sr = $sr + 1;
							// }
							// if($s=="Deluxe Room" )
							// {
							// 	$dr = $dr + 1;
							// }
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['troom'];
							
							if($cs=="Ac Room"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="Non Ac" )
							{
								$cgh = $cgh + 1;
							}
							// if($cs=="Single Room" )
							// {
							// 	$csr = $csr + 1;
							// }
							// if($cs=="Deluxe Room" )
							// {
							// 	$cdr = $cdr + 1;
							// }
							
						
						}
				
					?>

				 <div class="col-md-5 col-sm-5" >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Details
                        </div>
                        <div class="panel-body">
						<table width="100%">
							
							<tr>
								<td><b>AC Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php  
									$f1 =$sc - $csc;
									if($f1 <=0 )
									{	$f1 = "NO";
										echo $f1;
									}
									else{
											echo $f1;
									}
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Non Ac Room</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								$f2 =  $gh -$cgh;
								if($f2 <=0 )
									{	$f2 = "NO";
										echo $f2;
									}
									else{
											echo $f2;
									}

								?> </button></td> 
							</tr>
							<tr> 
								<td><b>Total Rooms	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle">
								<?php 
								
								$f5 =$r-$cr; 
								if($f5 <=0 )
									{	$f5 = "NO";
										echo $f5;
									}
									else{
										echo $f5;
									}
								 ?> </button></td> 
							</tr>
						</table>

						</div>
                        <div class="panel-footer">    
                        </div>
                <!-- /. ROW  -->			
                </div>
             </div>

   
 
             <!-- /. PAGE INNER  -->

 			<div class="row">
                <div class="col-md-6 col-sm-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                        				<tr>
                        				<th><span >#</span></th>
										<th><span >Room No.s</span></th>
										<th><span >Bedding</span></th>
										<th><span >Availabality</span></th>
										</tr>
                                    	<tbody>
                                    	<?php
										include ('db.php');
										$sql="select * from room";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 1 == 0 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['id']."</td>
													<td>".$row['roomid']."</td>
													<td>".$row['bedding']."</td>
													<td>".$row['place']."</td>
													</tr>";
											}
										}
										?>

                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
