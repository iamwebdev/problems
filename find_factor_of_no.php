<?php
$number = 30;
echo "Factors of ".$number." are :";
for ($i=1; $i <= $number ; $i++) { 
	if ($number%$i == 0)
	{
		echo " ".$i;
	}
}
?>