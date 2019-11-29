<?php
$number = 2510;

for ($i = strlen($number);$i >= 0; $i--) {
	echo substr($number, $i,1);
}
?>