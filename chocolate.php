<!DOCTYPE html>
<html>
<head>
	<title>Chocolate</title>
</head>
<body>
<h1 style="text-align: center;">Find Chocolate Count by Rupee</h1>

<form style="text-align: center;" action="chocolate.php" method="POST">
	<input required="" type="number" min="1" name="amount"><br><br>
	<button name="btnChocolate" type="submit">Get Chocolate</button>
</form>
<?php
	if(isset($_POST['btnChocolate'])) {
		$amount = $_POST['amount'];
		$chocolatePerRupee = 4;
		$noOfChocosByAmount = $amount*$chocolatePerRupee;
		$noOfChocosByWrappers = floor($noOfChocosByAmount/3);
		$totalChocosCount = $noOfChocosByAmount+$noOfChocosByWrappers;
		echo '<h3 style="text-align:center">Amount Entered: '.$amount.'</h3>';
		echo '<h3 style="text-align:center">Total Chocos by Amount: '.$noOfChocosByAmount.'</h3>';
		echo '<h3 style="text-align:center">Total Chocos by Wrapper: '.$noOfChocosByWrappers.'</h3>';
		echo '<h3 style="text-align:center">Total Chocos: '.$totalChocosCount.'</h3>';
	}
?>
</body>
</html>