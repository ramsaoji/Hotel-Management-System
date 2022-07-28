<?php 

$val1 = $_GET['selectac'];

$ac = array('','Double');
$nonac = array('','Single','Double','Triple','Quad');

switch ($val1) {
	case 'Ac Room': foreach ($ac as $acval) {
		echo "<option> $acval </option>";
	}
	break;

	case 'Non Ac': foreach ($nonac as $nonacval) {
		echo "<option> $nonacval </option>";
	}
	break;
	default: echo "No Type selected.";
	break;

}

?>