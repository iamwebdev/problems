<?php
	$string = 'A+B-C*D';
	$temp = "";
	for($i = 0; $i < strlen($string); $i++) {
		$subPart = substr($string, $i,1);
		if ($i%2 == 0) {
			$temp .= $subPart.'.';
		}
	}
	$finalString = rtrim($temp,'.');
	echo $finalString;
?>