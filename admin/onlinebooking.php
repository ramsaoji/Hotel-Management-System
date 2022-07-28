<?php
include('db.php')
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation Ramkrishna</title>
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
         <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
          </ul>

            </div>

        </nav>
       
        <div id="page-wrapper1" >
            <div id="page-inner1">
       <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            NEW RESERVATION <small>* Fields Mandatory</small>
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
                                            <input name="nopeople" type="text" maxlength="20" class="form-control" required>
                                            
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
                               <!-- <div class="form-group">
                                            <label>Vehicle No.</label>
                                            <input name="vehicle" type ="text" maxlength="8" class="form-control" placeholder="Optional">
                                            
                               </div> -->
                              <!--  <div class="form-group">
                                            <label>Vehicle No.</label>
                                            <input name="vehicle" type ="text" maxlength="8" class="form-control">
                                            
                               </div> -->
                             </div>
                           </div>
                         </div>

                
      
                               
                 
                    <!--     </div>
                        
                    </div>
                </div> -->
                
                  
            <table class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            BOOKING INFORMATION
                        </div>
                        <div class="panel-body">
                         <!--  <div class="form-group">
                                            <label>Arrival From</label>
                                            <input name="arrival" type="text" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Going Where</label>
                                            <input name="going" type="text" class="form-control">
                                            
                               </div> -->
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
                                                <!-- <option>Single</option>
                                                <option>Double</option>
                                                <option>Triple</option>
                                                <option>Quad</option> -->
                                                
                                            </select>
                            </div>
                          
                              
                
                <!-- <div class="form-group">
                                            <label>No.of Rooms*</label>
                                            <input name="nroom" type="text" maxlength="1" class="form-control" value="1"placeholder="Deafult 1 Selected" required>
                       
                                            </select>
                              </div> -->
                              <!-- <div class="form-group">
                                            <label>All Rooms*</label>
                                            <select id="roomno" name="roomno" class="form-control" required>
                                                <option>Select Room No.</option>

                                            </select>
                              </div> -->
                              <!-- <div class="form-group">
                                            <label>Room No.</label>
                                            <input name="roomno" type="text" class="form-control" required>
                                            
                               </div> -->
                               <!-- <div class="form-group">
                                            <label>Advance*</label>
                                            <input name="advance" type="text" value="100" class="form-control" placeholder="Default ₹100" required >
                                            
                               </div> -->
               
               
               <!--  <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control"required>
                        <option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
                        <option value="Half Board">Half Board</option>
                        <option value="Full Board">Full Board</option>
                        
                                                
                                             
                                            </select>
                              </div> -->
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
            <input id="sub-btn" type="submit" name="submit" class="btn btn-primary">
                    
            <?php
              if(isset($_POST['submit']))
              {
              // $code1=$_POST['code1'];
              // $code=$_POST['code']; 
              // if($code1!="$code")
              // {
              // $msg="Invalide code"; 
              // }
              // else
              // {
              
                  $con=mysqli_connect("localhost:3307","root","","hotel");
                  $check="SELECT * FROM online WHERE email = '$_POST[email]'";
                  $rs = mysqli_query($con,$check);
                  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                  if($data[0] > 1) {
                    
                    echo '<script type="text/javascript">
                           swal({
                                text: "Already reservation application sent!"
                              });
                          </script>';
                  }

                  else
                  {
                    //$new ="Not Confirm";
                    $newUser="INSERT INTO `online`(`Title`, `FName`, `LName`, `Email`,`Phone`,`Nopeople`,`Noperson`,`State`,`City`,`Zip`,`TRoom`, `Bed`,
                    `cin`,`cout`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[nopeople]','$_POST[extperson]','$_POST[state]','$_POST[city]','$_POST[zip]','$_POST[troom]','$_POST[bed]','$_POST[cin]','$_POST[cout]',datediff('$_POST[cout]','$_POST[cin]'))";


                    if (mysqli_multi_query($con,$newUser))
                    {

                        echo '<script type="text/javascript">
                              swal({
                              title: "Booking Application Sent!",
                              text: "You will hear from us about confirmation shortly.\nThank You.",
                              icon: "success",
                              button: "Ok",
                            });
                            </script>';

                        // echo "<script type='text/javascript'> alert('Your Booking application has been sent, you will get message/call about confirmation.')</script>";
                      
                    }
                    else
                    {
                      echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                      
                    }
                  }

              $msg="Your code is correct";
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