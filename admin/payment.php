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
    <title>Payment Ramkrishna</title>
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
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
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
                        <a href="AvailableRoom.php"><i class="fas fa-hotel"></i></i> Available Rooms</a>
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
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                   <!--  <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li> -->
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </li>
                    

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Payment Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
		<form method="post">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Cu.Id</th>
                                            <th>Name</th>
											<th>Room type</th>
                                            <th>Bed Type</th>
                                            <th>Check in</th>
											<th>Check out</th>
											<!-- <th>No of Room</th> -->
											<!-- <th>Meal Type</th> -->
											
                                            <th>Room Rent</th>
                                            <th>Advance</th>
											<!-- <th>Bed Rent</th> -->
											<!-- <th>Meals </th> -->
											<th>Gr.Total</th>
											<th>Print</th>
                                            <th>Delete</th>

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
										$sql="select * from payment";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
                                                    <td>".$row['id']."</td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['troom']."</td>
													<td>".$row['tbed']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													

													<td>".$row['ttot']."</td>
                                                    <td>".$row['advance']."</td>

													<td>".$row['fintot']."</td>

													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                                    <td><a href=deleteroom.php?pid=".$id ." <button class='btn btn-danger'> <i class='fa fa-trash' ></i> Delete</button></td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeC'>
                                                    <td>".$row['id']."</td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['troom']."</td>
													<td>".$row['tbed']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													

													<td>".$row['ttot']."</td>
													<td>".$row['advance']."</td>
													
													<td>".$row['fintot']."</td>

													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>

                                                    <td><a href=deleteroom.php?pid=".$id ." <button class='btn btn-danger'> <i class='fa fa-trash' ></i> Delete</button></td>

                                                    
													</tr>";
											
											}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>

                        </div>

                    <!--End Advanced Tables -->
                    </div>

                </div>
                <!-- /. ROW  -->
            
             </div>
               
        </div>
    </form>
    </div>
             <!-- /. PAGE INNER  -->
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
