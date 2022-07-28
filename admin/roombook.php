<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
include ('db.php');
?> 

<?php
		if(!isset($_GET["rid"]))
		{
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from roombook where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$title = $row['Title'];
					$fname = $row['FName'];
					$lname = $row['LName'];
					$email = $row['Email'];
					$aadhar = $row['Aadhar'];
					$state = $row['State'];
					$city = $row['City'];
					$zip = $row['Zip'];
					$Phone = $row['Phone'];
                    $Nopeople = $row['Nopeople'];
                    $Extperson = $row['Noperson'];
					$Vehicle = $row['Vehicle No'];
					$arrival = $row['Arrival'];
					$going = $row['Going'];
					$troom = $row['TRoom'];
					// $nroom = $row['NRoom'];
					$roomno = $row['RoomNo'];
					$advance = $row['Advance'];
					$bed = $row['Bed'];
					$non = $row['NRoom'];
					$meal = $row['Meal'];
					$cin = $row['cin'];
					$cout = $row['cout'];
					$sta = $row['stat'];
					$days = $row['nodays'];

				}

			}

			$sql1 ="Select * from room where roomid = '$roomno'";
			$ro = mysqli_query($con,$sql1);
			while($row=mysqli_fetch_array($ro))
			{
				$place = $row['place'];

			}
	
?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
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
                        <a href="AvailableRoom.php"><i class="fas fa-tachometer-alt"></i></i> Available Rooms</a>
                    </li>

                    <li>
                        <a href="home.php"><i class="fas fa-hotel"></i></i> Status</a>
                    </li>

                    <li>
                        <a href="onlineapplications.php"><i class="fa fa-desktop"></i> Online Applications</a>
                    </li>
                    
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> Enquiry Panel</a>
                    </li>
          			<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </li>

          </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking Confirmation
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $title.$fname; ?> <?php echo $lname; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Extra Persons Name</th>
                                            <th><?php echo $Extperson; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Phone No </th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Aadhar No</th>
                                            <th><?php echo $aadhar; ?> </th>
                                            
                                        </tr>
										<!-- <tr>
                                            <th>Nationality </th>
                                            <th><?php echo $nat; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Country </th>
                                            <th><?php echo $country;  ?></th>
                                            
                                        </tr> -->
										<tr>
                                            <th>State </th>
                                            <th><?php echo $state; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>City </th>
                                            <th><?php echo $city; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Zip </th>
                                            <th><?php echo $zip; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>No of People </th>
                                            <th><?php echo $Nopeople; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Vehicle No </th>
                                            <th><?php echo $Vehicle; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Arrival From </th>
                                            <th><?php echo $arrival; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Going Where </th>
                                            <th><?php echo $going; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Type Of the Room </th>
                                            <th><?php echo $troom; ?></th>
                                            
                                        </tr>
										<!-- <tr>
                                            <th>No Of the Room </th>
                                            <th><?php echo $nroom; ?></th>
                                            
                                        </tr> -->
                                        <tr>
                                            <th>Room No. </th>
                                            <th><?php echo $roomno; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Advance </th>
                                            <th><?php echo $advance; ?></th>
                                            
                                        </tr>
										<!-- <tr>
                                            <th>Meal Plan </th>
                                            <th><?php echo $meal; ?></th>
                                            
                                        </tr> -->
										<tr>
                                            <th>Bedding </th>
                                            <th><?php echo $bed; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-in Date </th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-out Date</th>
                                            <th><?php echo $cout; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No of days</th>
                                            <th><?php echo $days; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Status Level</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<!-- <div class="form-group">
														<label>Select the Conformation</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Conform">Conform</option>
															
															
														</select>
										 </div> -->
							<button type="submit" name="co" value="Confirm" class="btn btn-primary"><i class='fa fa-check' ></i> Confirm</button>
						
							<button type ="submit" name="del" value="Delete" class='btn btn-danger'><i class='fa fa-trash' ></i> Not Confirm</button>
							
							</form>
                        </div>
                    </div>
					</div>
					
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
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Available Room Details
                        </div>
                        <div class="panel-body">
						<table width="200px">
							
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
								<td> <button type="button" class="btn btn-danger btn-circle"><?php 
								
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
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
		if(isset($_POST['co']))
		{	
			$st = $_POST['co'];
			
			
			if($st=="Confirm")
			{
				$urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";
				$copystat = "UPDATE `copy` SET `stat`='$st' WHERE id = '$id'";
		
				if($f1=="NO" && $troom=="Ac Room" )
				{
                    echo '<script type="text/javascript">
                           swal({
                                text: "Sorry! Not Available AC Room!"
                              });
                          </script>';
					// echo "<script type='text/javascript'> alert('Sorry! Not Available AC Room ')</script>";
				}
				else if($f2 =="NO" && $troom=="Non Ac")
				{
					echo '<script type="text/javascript">
                           swal({
                                text: "Sorry! Not Available Non AC Room!"
                              });
                          </script>';
					
				}
				
						
				else if(mysqli_query($con,$urb) && mysqli_query($con,$copystat))
					{	
								//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
								//echo "<script type='text/javascript'> window.location='home.php'</script>";
								$type_of_room = 0;       
								if($troom=="Ac Room")
								{
									$type_of_room = 600;
								
								}
								else if($troom=="Non Ac")
								{
									$type_of_room = 300;
								}
								
								
								if($bed=="Single")
								{
									$type_of_bed = $type_of_room * 0/100;
								}
								else if($bed=="Double")
								{
									$type_of_bed = 200;
								}
								else if($bed=="Triple")
								{
									$type_of_bed = 300;
								}
								else if($bed=="Quad")
								{
									$type_of_bed = 400;
								}
								else if($bed=="None")
								{
									$type_of_bed = $type_of_room * 0/100;
								}
								
								
								$ttot = ($type_of_room + $type_of_bed) * $days ;
								$mepr = 0;
								$btot = 0;
								
								$fintot = $ttot + $advance ;
									
									// echo "<script type='text/javascript'> alert('$count_date')</script>";
								$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `cin`, `cout`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`,`roomno`,`advance`) VALUES ('$id','$title','$fname','$lname','$troom','$bed','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days','$roomno','$advance')";

								
								if(mysqli_query($con,$psql))
								{	$notfree="NotFree";
									$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$bed' and type='$troom' and roomid='$roomno' ";
									if(mysqli_query($con,$rpsql))
									{
                                        echo '<script type="text/javascript">
                                                 swal({
                                                      title: "Booking Confirmed!",
                                                      icon: "success",
                                                      type : "success"

                                                      }).then(function() {
                                                            window.location = "payment.php";
                                                    });
                                                </script>';
									// echo "<script type='text/javascript'> alert('Booking Confirm')</script>";
									// echo "<script type='text/javascript'> window.location='payment.php'</script>";
									}
									
									
								}		
								
					}

		                                        
			}

	
	    }
			
									
?>
<?php
if(isset($_POST['del']))
{   
	$d = $_POST['del'];


	if($d=="Delete")
	{

	    $delsql= "DELETE FROM `roombook` WHERE id='$id' ";
	    // $delsql1= "DELETE FROM `payment` WHERE id='$id' ";

	}
	if(mysqli_query($con,$delsql))
	{
         echo '<script type="text/javascript">
                 swal({
                      title: "User Deleted!",
                      type : "success"

                      }).then(function() {
                            window.location = "home.php";
                    });
                </script>';
	    // echo "<script type='text/javascript'> alert('Record Deleted')</script>";
	    // echo "<script type='text/javascript'> window.location='home.php'</script>";
	}

}
?>