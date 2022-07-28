<?php
ob_start();	
include ('db.php');
?>

<?php

$pid = $_GET['pid'];
$free="Free";
$nul = null;

// $sql ="select * from payment where id = '$pid' ";

// if($pid=="")
// {

$rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where cusid='$pid'";
$delsql= "DELETE FROM `roombook` WHERE id='$pid' ";
$delsql1="DELETE FROM `payment` WHERE id ='$pid'";

if(mysqli_query($con,$rpsql) && mysqli_query($con,$delsql) && mysqli_query($con,$delsql1))
{
	header("Location: payment.php");
}

// }

// else
// {
// 	$rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where cusid='$pid'";
//     $delsql= "DELETE FROM `roombook` WHERE id='$pid' ";
// 	$delsql1="DELETE FROM `payment` WHERE id ='$pid'";

// 	if(mysqli_query($con,$rpsql) && mysqli_query($con,$delsql) && mysqli_query($con,$delsql1))
// 	{
// 		header("Location: payment.php");
// 	}


// }

?>

<?php 

ob_end_flush();

?>