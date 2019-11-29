<?php
// Your code here!
$z = 4;
$a = 1;
for($i=0;$i<5;$i++)
  {
    for($j=0;$j<9;$j++) 
    {
      if($z == $j) 
      {
          for($l=0;$l<$a;$l++) {
           echo '*';   
          }
      } 
      else 
      {
            echo ' ';
      }   
    }
    $z--;
    $a+=2;
    echo "\n";
  }
?>
