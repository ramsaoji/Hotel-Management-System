<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:reservation.php");  
 }  
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/loginstyle.css">
  <title>Ramkishna Admin</title>
</head>
<body>
  <div class="login-wrapper">
    <form  method="post" class="form">
      <img src="img/avatar.png" alt="">
      <h2>Ramkrishna Admin</h2>
      <div class="input-group">
        <input type="text"  name="user" id="loginUser"required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="pass" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input name="sub" type="submit" value="Login" class="submit-btn">
      </form>

    
  </div>
</body>
</html>

<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $myusername;
         
         header("location: reservation.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>
