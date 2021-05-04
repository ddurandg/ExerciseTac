<?php 

	require_once('Exercise.php');

	$ex = new Exercise;

	echo "*************Execution start*************";
	echo "\n";
	for ($i = 1; $i <= 100; $i++) {
    
	    $val = $ex->getMessageMultiple($i);
	    echo $val;
	    echo "\n";
	}
	echo "*************Execution Finish*************";

 ?>