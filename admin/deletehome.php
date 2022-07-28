<?php

include ('db.php');

$id=$_GET['did'];
if($id=="")
{

	$view="DELETE FROM `roombook` WHERE id ='$rid'";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Record Remove") </script>' ;
		header("Location: home.php");
	}

// echo '<script>alert("Sorry ! Wrong Entry") </script>' ;
// 		header("Location: home.php");


}

else{
	
	$view="DELETE FROM `roombook` WHERE id ='$id'";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Record Remove") </script>' ;
		header("Location: home.php");
	}


}

?>