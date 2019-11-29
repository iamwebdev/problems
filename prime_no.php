<?php
function primeCheck($number) {
	if($number == 1) {
		return false;
	}
	for ($i=2; $i <= $number/2 ; $i++) { 
		if ($number % $i == 0) {
			return false;
		}
	}
	return true;
}

$flag = primeCheck(1);
if($flag == true) {
	echo "Prime";
} else {
	echo "not";
}
?>