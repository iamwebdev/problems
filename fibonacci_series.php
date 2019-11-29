<?php
$number = 10;
$temp = 0;
$temp1 = 1;
$temp2 = 0;
echo "Fibonacci Series : "; 
for ($i = 1; $i<= $number; $i++)
{
	echo " ".$temp;
	$temp = $temp1+$temp2;
	$temp1 = $temp2;
	$temp2 = $temp;
}
