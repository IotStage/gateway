<?php

	$datte = date("Y-m-d H:i:s");
	$datte = new DateTime($datte);
	echo $datte->format('Y-m-d H:i:s') . "\n";
	$datte->sub(new DateInterval('PT1H10M'));
	echo $datte->format('Y-m-d H:i:s') . "\n";

?>
