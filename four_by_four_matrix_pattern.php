<table border="1">
	<?php
	for ($i=1; $i <= 4; $i++)
	{
		echo "<tr>";
		for ($j=1; $j <= 4 ; $j++) { 
			echo "<td>".$j."*".$i."</td>";
		}
		echo "</tr>";
	}
	?>
</table>