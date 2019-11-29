<?php
$num1 = 9;
$num2 = 2;
$total = $num1*$num2;
$num1Array = array();
$num2Array = array();
for ($i=1;$i<=$total;$i++) {
	array_push($num1Array, $i*$num1);
	if ( $i*$num1 >= $total) {
		break;
	}

}
for ($j=1;$j<=$total;$j++) {
	array_push($num2Array, $j*$num2);
	if ( $j*$num2 >= $total) {
		break;
	}

}
$lcm = array_intersect($num1Array,$num2Array);
echo "LCM of ".$num1." and ".$num2." is "."'".reset($lcm)."'";
?>