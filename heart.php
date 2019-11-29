<?php
echo "<pre>";
$num = 10;
for($i=$num/2; $i<=$num; $i+=2)
{
    for($j=1; $j<$num-$i; $j+=2)
    {
        echo "&nbsp;";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    for($j=1; $j<=$num-$i; $j++)
    {
        echo "&nbsp;";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    echo "<br/>";
}
  
for($i=$num; $i>=1; $i--)
{
    for($j=$i; $j<$num; $j++)
    {
        echo "&nbsp;";
    }
    for($j=1; $j<=($i*2)-1; $j++)
    {
        echo "*";
    }
    echo "<br/>";
}
echo "</pre>";
?>