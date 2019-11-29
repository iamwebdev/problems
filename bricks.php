<!DOCTYPE html>
<html>
<head>
	<title>Bricks</title>
</head>
<body>
<h1 style="text-align: center;">Bricks</h1>

<form style="text-align: center;" action="bricks.php" method="POST">
	<input required="" placeholder="Enter Small Bricks Count" type="number" min="1" name="small"><br><br>
	<input required="" placeholder="Enter Big Bricks Count" type="number" min="1" name="big"><br><br>
	<input required="" placeholder="Enter Length of Row" type="number" min="1" name="length"><br><br>
	<button name="btnBrick" type="submit">Make Row of Bricks</button>
</form>
<?php
	if(isset($_POST['btnBrick'])) {
		$isPossible = true;
		$smallBricksCount = $_POST['small'];
		$bigBricksCount = $_POST['big'];
		$length = $_POST['length'];
		$totalInches = ($smallBricksCount*2)+$bigBricksCount*5;
		echo '<h3 style="text-align:center">Required Inches of Row: '.$length.'</h3>';
		echo '<h3 style="text-align:center">Total Inches of Bricks We Have: '.$totalInches.'</h3>';
		if ($totalInches < $length) {
			$isPossible = false;
		}
		if($isPossible == true) {
			echo '<h3 style="text-align:center">Yes row can be make </h3>';
		} else {
			echo '<h3 style="text-align:center">Row cannot make </h3>';
		}	 
	}
?>
</body>
</html>