<?php

include ('db.php');

$id=$_GET['did'];
if($id=="")
{

	$view="DELETE FROM `online` WHERE id ='$rid'";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Record Remove") </script>' ;
		header("Location: onlineapplications.php");
	}

// echo '<script>alert("Sorry ! Wrong Entry") </script>' ;
// 		header("Location: home.php");


}

else{
$view="DELETE FROM `online` WHERE id ='$id'";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Record Remove") </script>' ;
		header("Location: onlineapplications.php");
	}


}

?>