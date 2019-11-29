<?php
// Your code here!
for($i=1;$i<=8;$i++){
    for($j=1;$j<=8;$j++){
        if ($j==$i){
            echo $j;
        } else {
            echo " ";
        }
    }
   echo "\n";
}


// Your code here!
for($i=1;$i<=8;$i++){
    for($j=1;$j<$i;$j++){
        echo " ";
    }
    echo $i;
    echo "\n";
}
?>

