<?php
$array = [10,80,20,54,-56,-12,5,6,-60];

$temp = 0;
for($i=0; $i<count($array)-1;$i++) {
	for($j=0;$j<count($array)-1;$j++) {
		if ($array[$i] > $array[$j]) {
			$temp = $array[$i];
			$array[$i] = $array[$j];
			$array[$j] = $temp;
		}
	}
}
print_r($array[2]);
?>