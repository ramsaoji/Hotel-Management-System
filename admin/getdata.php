<?php
include ('db.php');
$sqls="select roomid from room where place ='Free' AND bedding = 'Single'";
$se = mysqli_query($con,$sqls);

$sqld="select roomid from room where place ='Free' AND bedding = 'Double'";
$de = mysqli_query($con,$sqld);

$sqlt="select roomid from room where place ='Free' AND bedding = 'Triple'";
$te = mysqli_query($con,$sqlt);

$sqlq="select roomid from room where place ='Free' AND bedding = 'Quad'";
$qe = mysqli_query($con,$sqlq);

$val = $_GET['selectvalue'];

// $s1 = array('','101','102','103','104','105','106','107','108','110');
// $d1 = array('','201','202','203','204','501-AC','502-AC');
// $t1 = array('','301','302','303');
// $q1 = array('','401');


switch ($val) {
	case 'Single': while($rows = mysqli_fetch_array($se)){
					
		$sroom = ($rows['roomid']);
		echo "<option> $sroom </option>";
	}
	break;

	case 'Double': while($rowd = mysqli_fetch_array($de)){
					
		$droom = ($rowd['roomid']);
		echo "<option> $droom </option>";
	}
	break;

	case 'Triple': while($rowt = mysqli_fetch_array($te)){
					
		$troom = ($rowt['roomid']);
		echo "<option> $troom </option>";
	}
	break;

	case 'Quad': while($rowq = mysqli_fetch_array($qe)){
					
		$qroom = ($rowq['roomid']);
		echo "<option> $qroom </option>";
	}
	break;
	
	default: echo "No Room is selected.";
	break;
}

?>