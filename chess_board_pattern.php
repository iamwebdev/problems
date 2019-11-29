<table BORDER=1>
<?php
  for ($i=1;$i<=8;$i++){
     echo "<tr>";
     for ($j=1;$j<=8;$j++){
		if ($i%2!=0) {
			if ($j%2==0) {
 		        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";

	  		} else {
	     		echo "<td height=30px width=30px bgcolor=#000000></td>";
	  		}
	  	}
  		else {
			if ($j%2==0) {
				echo "<td height=30px width=30px bgcolor=#000000></td>";


			} else {
	     		echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
			}			
		}
	}
	echo "</tr>";
}
?>
</table>

<!-- Logic -->
<!-- <?php
for ($i=1;$i<=8;$i++){
	for ($j=1;$j<=8;$j++){
		if ($i%2!=0) {
			if ($j%2==0) {
				echo "#";
			} else {
				echo "*";
			}
		} else {
			if ($j%2==0) {
				echo "*";
			} else {
				echo "#";
			}			
		}
	}
	echo "<br>";
}
?> -->