<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?>
<?php
include('db.php')
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Ramkrishna</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <!-- <li>
                        <a href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li> -->
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </li>

          </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="update-page-wrapper" >
            <div id="update-page-inner">
                  <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            UPDATE DATA <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <table class="row">
                
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">

            <form method="post">
            <?php 
            if(!isset($_GET["uid"]))
            {
               header("location:index.php");
            }
            else {
                $curdate=date("Y/m/d");
                include ('db.php');
                $id = $_GET['uid'];
                
                
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

            ?>              
            <div class="form-group">
                      <label>Title*</label>
                      <select name="title" class="form-control" required >
                          <option value="<?php  echo $title;?>" ><?php  echo $title;?></option>

                          <option value="Mr.">Mr.</option>
                          <option value="Mrs.">Mrs.</option>
                          <option value="Miss.">Miss.</option>
                          <option value="Dr.">Dr.</option>
                          <option value="Prof.">Prof.</option>
                      </select>
                       </div>
                      <div class="form-group">
                      <label>First Name*</label>
                      <input name="fname" class="form-control" value="<?php  echo $fname;?>" required>
                      </div>

                      <div class="form-group">
                      <label>Last Name*</label>
                      <input name="lname" class="form-control" value="<?php  echo $lname;?>" required>
                      
              </div>
                <div class="form-group">
                      <label>Email*</label>
                      <input name="email" class="form-control" value="<?php  echo $email;?>" required>
                      
               </div>
         <div class="form-group">
                      <label>Phone Number*</label>
                      <input name="phone" type ="text" maxlength="10" class="form-control" value="<?php  echo $Phone;?>" required>
                      
         </div>
                               

                              </div>
                           </div>
                         </div>
                      <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>   
                        <div class="panel-body">

                              <div class="form-group">
                                            <label>Aadhar No.*</label>
                                            <input name="aadhar" type="text" maxlength="12" class="form-control" value="<?php  echo $aadhar;?>" required>
                                   </div>          
                               
                               <div class="form-group">
                                            <label>State*</label>
                                            <input name="state" type="text" maxlength="20" class="form-control" value="<?php  echo $state;?>" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>City*</label>
                                            <input name="city" type="text" maxlength="20" class="form-control" value="<?php  echo $city;?>" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Zip</label>
                                            <input name="zip" type="text" maxlength="20" class="form-control" value="<?php  echo $zip;?>">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Vehicle No.</label>
                                            <input name="vehicle" type ="text" maxlength="8" class="form-control" value="<?php  echo $Vehicle;?>">
                                            
                               </div>
                             </div>
                           </div>
                         </div>

                
                  
            <table class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            BOOKING INFORMATION
                        </div>
                        <div class="panel-body">
                          <!-- <div class="form-group">
                                            <label>Arrival From</label>
                                            <input name="arrival" type="text" class="form-control" value="<?php  echo $arrival;?>">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Going Where</label>
                                            <input name="going" type="text" class="form-control" value="<?php  echo $going;?>">
                                            
                               </div> -->
                            <!-- <div class="form-group">

                                            <label>Already - <?php  echo $troom;?> </label>
                                            <select name="troom"  class="form-control" onchange="mytype(this.value)" data-toggle="tooltip1" required>
                                                <option>Select type for update</option>
                                                <option value="Ac Room">Ac Room</option>
                                                <option value="Non Ac">Non Ac</option>
                   
                                            </select>
                              </div>
    
                            <div class="form-group">
                                            <label>Already - <?php  echo $bed;?></label>
                                            <select id="bed" name="bed" class="form-control" onchange="mybed(this.value)" data-toggle="tooltip" required>
                                                <option>Select bed for update</option>
 
                                            </select>
                            </div> -->
                          
                              
                
                              <!-- <div class="form-group">
                                            <label>No.of Rooms*</label>
                                            <input name="nroom" type="text" maxlength="1" class="form-control" value="<?php  echo $nroom;?>" placeholder="Deafult 1 Selected" required>

                                            </select>
                              </div> -->
                              <!-- <div class="form-group">
                                            <label>Already - <?php  echo $bed;?><</label>
                                            <select id="roomno" name="roomno" class="form-control" value="<?php  echo $roomno;?>" required>
                                                <option>Select room no for update</option>

                                            </select>
                              </div> -->
                            
                               <!-- <div class="form-group">
                                            <label>Advance*</label>
                                            <input name="advance" type="text" value="<?php  echo $advance;?>" class="form-control" placeholder="Default ₹100" required >
                                            
                               </div> -->
               
                              <!-- <div class="form-group">
                                            <label>Check-In*</label>
                                            <input name="cin" type ="date" class="form-control" value="<?php  echo $cin;?>" required>
                                            
                               </div> -->
                                <div class="form-group">
                                            <label>Update Check-Out*</label>
                                            <input name="cout" type ="date" class="form-control" value="<?php  echo $cout;?>" required>
                                            
                               </div>
                       </div>
                        
                    </div>
                </table>
 
            <div class="col-md-6 col-sm-6">
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
              
            </div>

            <?php

            if(isset($_POST['submit']))
              {
                  $title_u = $_POST['title'];
                  $fname_u = $_POST['fname'];
                  $lname_u = $_POST['lname'];
                  $email_u = $_POST['email'];
                  $phone_u = $_POST['phone'];
                  $aadhar_u = $_POST['aadhar'];
                  $state_u = $_POST['state'];
                  $city_u = $_POST['city'];
                  $zip_u = $_POST['zip'];
                  $vehicle_u = $_POST['vehicle'];
                  $cout_u = $_POST['cout'];

                  // $extd_date = $cout_u - $cout;
                  

                  // $new ="Not Confirm";
                  $newUser = "UPDATE `roombook` SET `Title` = '$title_u', `FName` = '$fname_u', `LName` = '$lname_u', `Email` = '$email_u', `Phone` = '$phone_u', `Aadhar` = '$aadhar_u', `State` = '$state_u', `City` = '$city_u', `Zip` = '$zip_u', 
                  `Vehicle No` = '$vehicle_u',`cin`='$cin',`cout` = '$cout_u',`nodays` = datediff('$_POST[cout]','$cin') WHERE id = '$id'";
                  

                $sql ="Select ttot from payment where id = '$id'";
                $re = mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($re))
                {
                  $old = $row['ttot'];
                }
                // echo "<script type='text/javascript'> alert($old)</script>";

              if(mysqli_query($con,$newUser))
              {

                $sql ="Select * from roombook where id = '$id'";
                $re = mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($re))
                {
                  $days_u = $row['nodays'];
                }


                $type_of_room = 0;       
                if($troom=="Ac Room" && $bed=="Double")
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

                $ttot = ($type_of_room + $type_of_bed) * $days_u ;
                $mepr = 0;
                $btot = 0;
                
                $fintot = $ttot + $advance ;


                $psql = "UPDATE `payment` SET `title`='$title_u',`fname`='$fname_u',`lname`='$lname_u',`troom`='$troom',`tbed`='$bed',`cin`='$cin',`cout`='$cout_u',
                  `ttot`='$ttot',`meal`='$meal',`mepr`='$mepr',`btot`='$btot',`fintot`='$fintot',`noofdays`='$days_u',`roomno`='$roomno',`advance`='$advance',`old`='$old' where `id`='$id'";


                // $psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`,`roomno`,`advance`) VALUES ('$id','$title_u','$fname_u','$lname_u','$troom','$bed','$nroom','$cout','$cout_u','$ttot','$meal','$mepr','$btot','$fintot','$days_u','$roomno','$advance')";

                
                if(mysqli_query($con,$psql))
                { 

                  echo '<script type="text/javascript">
                         swal({
                              title: "Record Updated!",
                              icon: "success",
                              type : "success"

                              }).then(function() {
                                    window.location = "home.php";
                            });
                        </script>';


                  // echo "<script type='text/javascript'> alert('Record Updated')</script>";
                  // echo "<script type='text/javascript'> window.location='home.php'</script>";
                  
                }
                
                else
                {
                  echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                  
                }

                $newUser1 = "UPDATE `copy` SET `Title` = '$title_u', `FName` = '$fname_u', `LName` = '$lname_u', `Email` = '$email_u', `Phone` = '$phone_u', `Aadhar` = '$aadhar_u', `State` = '$state_u', `City` = '$city_u', `Zip` = '$zip_u', 
                  `Vehicle No` = '$vehicle_u',`cin`='$cin',`cout` = '$cout_u',`nodays` = datediff('$_POST[cout]','$cin') WHERE id = '$id'";

                mysqli_query($con,$newUser1);

              }

                
            }
            ?>
          </form>

                    <!-- </div>     -->
                <!-- </div>     -->
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
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <script>
        

        function mytype(data) {
            
            const ajaxreq = new XMLHttpRequest();
            ajaxreq.open('GET','http://localhost/Hotel/admin/getroomtype.php?selectac='+data,'TRUE');

            ajaxreq.send();

            ajaxreq.onreadystatechange = function(){
                if(ajaxreq.readyState == 4 && ajaxreq.status == 200){

                    document.getElementById('bed').innerHTML = ajaxreq.responseText;

                }
            }
        }
        $(document).ready(function(){
            $('[data-toggle="tooltip1"]').tooltip();
        });

</script>
<script>
        function mybed(data1) {
            
            const ajaxreq1 = new XMLHttpRequest();
            ajaxreq1.open('GET','http://localhost/Hotel/admin/getdata.php?selectvalue='+data1,'TRUE');

            ajaxreq1.send();

            ajaxreq1.onreadystatechange = function(){
                if(ajaxreq1.readyState == 4 && ajaxreq1.status == 200){

                    document.getElementById('roomno').innerHTML = ajaxreq1.responseText;

                }
            }
        }

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>

</body>
</html>
