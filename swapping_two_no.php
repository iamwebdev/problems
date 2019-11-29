<?php
$a = 4;
$b = 5;
echo "Swap 2 without using 3rd variable <br>";
echo "Before swapping a: ".$a.","."b: ".$b."<br>";
$a = $a+$b;
$b = $a-$b;
$a = $a-$b;
echo "Before swapping a: ".$a.","."b: ".$b."<br><br>";
?>


<?php
$a = 4;
$b = 5;
echo "Swap 2 with using 3rd variable <br>";
echo "Before swapping a: ".$a.","."b: ".$b."<br>";
$temp = $a;
$a = $b;
$b = $temp;
echo "Before swapping a: ".$a.","."b: ".$b."<br>";
?>