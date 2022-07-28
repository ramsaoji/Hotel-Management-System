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
                        <a class="active-menu" href="reservation.php"><i class="fas fa-arrow-circle-right"></i> Book New Room</a>
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
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW BOOKING <small></small>
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

            <form name="form" method="post">
                             
                             <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
                                                <option value selected ></option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Prof.">Prof.</option>
                                            </select>
                              </div>
                                            <div class="form-group">
                                            <label>First Name*</label>
                                            <input name="fname" class="form-control" required>
                                            </div>
                                    <div class="form-group">
                                            <label>Last Name*</label>
                                            <input name="lname" class="form-control" required>
                                            
                                    </div>
                                      <div class="form-group">
                                            <label>Email*</label>
                                            <input name="email" class="form-control" required>
                                            
                                     </div>
                               <div class="form-group">
                                            <label>Phone Number*</label>
                                            <input name="phone" type ="text" maxlength="10" class="form-control" required>
                                            
                               </div>

                                <div class="form-group">
                                            <label>Aadhar No.*</label>
                                            <input name="aadhar" type="text" maxlength="12" class="form-control" required>
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
                                            <label>No of People*</label>
                                            <input name="nopeople" type="text" maxlength="1" class="form-control" required>
                                            
                               </div> 

                               <div class="form-group">
                                            <label>Extra Persons Name*</label>
                                            <input name="extperson" type="text" maxlength="50" class="form-control" placeholder="If No - Enter None/Enter Full Name" required>
                                            
                               </div>       
                               
                               <div class="form-group">
                                            <label>State*</label>
                                            <input name="state" type="text" maxlength="20" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>City*</label>
                                            <input name="city" type="text" maxlength="20" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Zip</label>
                                            <input name="zip" type="text" maxlength="6" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Vehicle No.</label>
                                            <input name="vehicle" type ="text" maxlength="8" class="form-control">
                                            
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
                          <div class="form-group">
                                            <label>Arrival From</label>
                                            <input name="arrival" type="text" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Going Where</label>
                                            <input name="going" type="text" class="form-control">
                                            
                               </div>
                <div class="form-group">

                                            <label>Type Of Room*</label>
                                            <select name="troom"  class="form-control" onchange="mytype(this.value)" data-toggle="tooltip1" required>
                        <option>Select Type</option>
                                                <option value="Ac Room">AC ROOM</option>
                                                <option value="Non Ac">NON AC ROOM</option>
                        <!-- <option value="Guest House">GUEST HOUSE</option>
                        <option value="Single Room">SINGLE ROOM</option> -->
                                            </select>
                              </div>
    
                            <div class="form-group">
                                            <label>Bedding Type*</label>
                                            <select id="bed" name="bed" class="form-control" onchange="mybed(this.value)" data-toggle="tooltip" required>
                                                <option>Select Bed</option>
                                               
                                                
                                            </select>
                            </div>
                          
                              
                
                               <!-- <div class="form-group">
                                            <label>No.of Rooms*</label>
                                            <input name="nroom" type="text" maxlength="1" class="form-control" value="1"placeholder="Deafult 1 Selected" required>
                   
                                            </select>
                              </div> -->
                              <div class="form-group">
                                            <label>All Rooms*</label>
                                            <select id="roomno" name="roomno" class="form-control" required>
                                                <option>Select Room No.</option>

                                            </select>
                              </div>
                             
                               <div class="form-group">
                                            <label>Advance*</label>
                                            <input name="advance" type="text" value="100" class="form-control" placeholder="Default ₹100" required >
                                            
                               </div>
               
               
              
                <div class="form-group">
                                            <label>Check-In*</label>
                                            <input name="cin" type ="date" class="form-control" required>
                                            
                               </div>
                 <div class="form-group">
                                            <label>Check-Out*</label>
                                            <input name="cout" type ="date" class="form-control" required>
                                            
                               </div>
                       </div>
                        
                    </div>
                </table>
        
        
                <!-- <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
            <p>Enter the random code<br /></p>
              <input  type="text" name="code1" title="random code" />
              <input type="hidden" name="code" value="<?php echo $Random_code; ?>" /> -->
    
            <div class="col-md-12 col-sm-12">

            <input id="sub-btn" type="submit" name="submit" class="btn btn-primary"/>
                    
            <?php
              if(isset($_POST['submit']))
              {

                  $con=mysqli_connect("localhost:3307","root","","hotel");
                  $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
                  $rs = mysqli_query($con,$check);
                  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                  if($data[0] > 1) {
                    echo '<script type="text/javascript">
                           swal({
                                title: "User Already in Exists!"
                              });
                          </script>';
                    
                  }

                  else
                  {


                     $new ="Not Confirm";
                       $newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Aadhar`,`State`,`City`,`Zip`,`Phone`,`Nopeople`,`Noperson`,`Vehicle No`,`Arrival`,`Going`, `TRoom`, `Bed`, `RoomNo`, `Advance`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[aadhar]','$_POST[state]','$_POST[city]','$_POST[zip]','$_POST[phone]','$_POST[nopeople]',
                       '$_POST[extperson]','$_POST[vehicle]','$_POST[arrival]','$_POST[going]','$_POST[troom]','$_POST[bed]','$_POST[roomno]','$_POST[advance]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";



                        if (mysqli_query($con,$newUser))
                        {
                          
                          $sql ="SELECT * from roombook where Phone = '$_POST[phone]'";
                          $re = mysqli_query($con,$sql);
                          while($row=mysqli_fetch_array($re))
                          {
                            $ramid = $row['id'];
                          }
                          // echo "<script type='text/javascript'> alert($ramid)</script>";
                    

                          // echo "<script type='text/javascript'> alert('Submitted, Check Status for Confirmation.')</script>";

                        }
                        else
                        {
                          echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                          
                        }

                        $newUser1 = "INSERT INTO `copy`(`Title`, `FName`, `LName`, `Email`, `Aadhar`,`State`,`City`,`Zip`,`Phone`,`Nopeople`,`Noperson`, `Vehicle No`,`Arrival`,`Going`, `TRoom`, `Bed`, `RoomNo`, `Advance`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[aadhar]','$_POST[state]','$_POST[city]','$_POST[zip]','$_POST[phone]',
                        '$_POST[nopeople]','$_POST[extperson]','$_POST[vehicle]','$_POST[arrival]','$_POST[going]','$_POST[troom]','$_POST[bed]','$_POST[roomno]','$_POST[advance]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";

                          mysqli_query($con,$newUser1);

                        ?>
                        <script type="text/javascript">
                        window.location = "roombook.php?rid=<?php echo $ramid; ?>";
                        </script>      
                        <?php
                    

                  }

              }   
                   
             ?>
             
              </form>
              
                    </div>

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
