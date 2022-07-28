<?php
	ob_start();	
	include ('db.php');

	$id = $_GET['pid'];

	$sql="select * from room where id = '$id'";
	$se = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($se))
	{
		$roomid = ($row['roomid']);
	}	
	

	$sqls="select * from roombook where id = '$id'";
	$se1 = mysqli_query($con,$sqls);
	while($row1=mysqli_fetch_array($se1))
	{
		$roomno = ($row1['RoomNo']);
	}
	

	$free="Free";
	$nul = null;


	if($id=="")
	{   
        $rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where roomid='$roomno'";
        $delsql= "DELETE FROM `roombook` WHERE id='$id' ";
        $delsql1= "DELETE FROM `payment` WHERE id='$id' ";

        if(mysqli_query($con,$rpsql) && mysqli_query($con,$delsql) && mysqli_query($con,$delsql1))
		{
			echo '<script>alert("Record Remove") </script>' ;
			header("Location: payment.php");
		}
    }
	
    else(mysqli_query($con,$rpsql) && mysqli_query($con,$delsql) && mysqli_query($con,$delsql1))
    {
        $rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where roomid='$roomno'";
        // $delsql= "DELETE FROM `roombook` WHERE id='$id' ";
        // $delsql1= "DELETE FROM `payment` WHERE id='$id' ";

        if(mysqli_query($con,$rpsql) && mysqli_query($con,$delsql) && mysqli_query($con,$delsql1))
		{
			echo '<script>alert("Record Remove") </script>' ;
			header("Location: payment.php");
		}
    }

	
?>