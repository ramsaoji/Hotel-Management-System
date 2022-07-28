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
    <title>Online Applications Ramkrishna</title>
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
                        <a class="active-menu" href="onlineapplications.php"><i class="fa fa-desktop"></i> Online Applications</a>
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

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Online Booking </small>
                        </h1>
                    </div>
                </div>

                <?php
                        include ('db.php');
                        $sql = "select * from online";
                        $re = mysqli_query($con,$sql);
                        $c =0;
                        while($row=mysqli_fetch_array($re) )
                        {
                                
                             $c = $c + 1;
                        
                        }
                        
    
                ?>

                <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                            
                            <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <button class="btn btn-default" type="button">
                                                 Online Bookings Pending <span class="badge"><?php echo $c ; ?></span>
                                            </button>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th> 
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <!-- <th>Country</th> -->
                                            <th>Room</th>
                                            <th>Bedding</th>
                                            <th>State</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>

                                            <th>More</th>
                                            <th>Remove</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                    $tsql = "select * from online";
                                    $tre = mysqli_query($con,$tsql);
                                    while($trow=mysqli_fetch_array($tre) )
                                    {   
                                        // $co =$trow['stat']; 
                                        // if($co=="Not Confirm")
                                        
                                            echo"<tr>
                                                <th>".$trow['id']."</th>
                                                <th>".$trow['FName']." ".$trow['LName']."</th>
                                                <th>".$trow['Phone']."</th>
                                                <th>".$trow['Email']."</th>                         
                                                <th>".$trow['TRoom']."</th>
                                                <th>".$trow['Bed']."</th>
                                                <th>".$trow['State']."</th>
                                                <th>".$trow['cin']."</th>
                                                <th>".$trow['cout']."</th>
                                                
                                                
                                                <th><a href='onlineroom.php?rid=".$trow['id']." ' class='btn btn-primary'>Action</a>

                                                <th><a href='deleteonlineapp.php?did=".$trow['id']."' class='btn btn-danger'>Delete</a>

                                                </tr>";

                                    }
                                    ?>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  --> 
                                        </div>
                                    </div>
                                </div>



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


</body>
</html>
