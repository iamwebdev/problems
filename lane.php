<?php
session_start();
if(isset($_POST['btnSubmit'])) {
	$vehicleNo = $_POST['vehicle_no'];
	$arrivalTime = $_POST['arrival_time'];
	$vehicleType = $_POST['vehicle_type'];
	if ($vehicleType == 'normal') {
		if (isset($_SESSION['queue']['lane1']) && !empty($_SESSION['queue']['lane1'])) {
			$lane1Count = count($_SESSION['queue']['lane1']);
		} else {
			$lane1Count = 0;
		}
		if (isset($_SESSION['queue']['lane2']) && !empty($_SESSION['queue']['lane2'])) {
			$lane2Count = count($_SESSION['queue']['lane2']);
		} else {
			$lane2Count = 0;
		}
		if (isset($_SESSION['queue']['lane3']) && !empty($_SESSION['queue']['lane3'])) {
			$lane3Count = count($_SESSION['queue']['lane3']);
		} else {	
			$lane3Count = 0;
		}
		if (isset($_SESSION['queue']['lane4']) && !empty($_SESSION['queue']['lane4'])) {
			$lane4Count = count($_SESSION['queue']['lane4']);
		} else {
			$lane4Count = 0;
		}
		$vehiclesArray = array('lane1' => $lane1Count, 'lane2' => $lane2Count, 'lane3' => $lane3Count, 'lane4' => $lane4Count);
		asort($vehiclesArray);
		reset($vehiclesArray);
		$lane = key($vehiclesArray);
		if (empty($_SESSION['queue'][$lane])) {
			$depatureTime = strtotime("+1 minutes", strtotime($arrivalTime));
			$_SESSION['queue'][$lane][0] = array($vehicleNo, $arrivalTime, date('h:i:s', $depatureTime));
		} else {
			$queueCount = count($_SESSION['queue'][$lane])+1;
			$depatureTime = strtotime("+".$queueCount." minutes", strtotime($arrivalTime));
			array_push($_SESSION['queue'][$lane], array($vehicleNo, $arrivalTime,date('h:i:s', $depatureTime)));
		}
	} else {
		if (empty($_SESSION['queue']['vip'])) {
			$depatureTime = strtotime("+1 minutes", strtotime($arrivalTime));
			$_SESSION['queue']['vip'][0] = array($vehicleNo, $arrivalTime, date('h:i:s', $depatureTime));
		} else {
			$queueCount = count($_SESSION['queue']['vip'])+1;
			$depatureTime = strtotime("+".$queueCount." minutes", strtotime($arrivalTime));
			array_push($_SESSION['queue']['vip'], array($vehicleNo, $arrivalTime,date('h:i:s', $depatureTime)));
		}
	}
}
// session_destroy();
// echo '<pre>';
// print_r($_SESSION['queue']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Toll Plaza</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<style>
		body{background-color: beige;}
		h5{text-transform: uppercase;}
		.card{border-radius: 35px;}
		.card-header{background-color: black;color: white;}
	</style>
</head>
<body>
	<!-- <h3 style="text-align: center;"></h3>
	<form action="lane.php" method="POST">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-md-4">
					<input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle No">
				</div>
				<div class="col-md-4">
					<input type="time" name="arrival_time" class="form-control" placeholder="Arrival Time">
				</div>
				<div class="col-md-4">
					<select class="form-control" name="vehicle_type" required="">
						<option value="normal">Normal</option>
						<option value="vip">VIP</option>
					</select>
				</div>
				<div class="col-md-4">
					<button name="btnSubmit" class="btn btn-success">Submit</button>
				</div>	
			</div>
		</div>
	</form>
	<div class="col-md-12">
		<div class="row">
			<table class="table table-bordered">
				<thead>
					<th>Vehicle No</th>
					<th>Arrival Time</th>
					<th>Departure Time</th>
					<th>Lane No</th>
				</thead>
				<tbody>
					<?php
						if (isset($_SESSION['queue'])) {
							$queue = $_SESSION['queue'];
						} 
						if(isset($queue)) {
							foreach ($queue as $key => $value) {
								for ($i = 0; $i < count($queue[$key]); $i++) {
									echo '<tr>
									<td>'.$queue[$key][$i][0].'</td>
									<td>'.$queue[$key][$i][1].'</td>
									<td>'.$queue[$key][$i][2].'</td>
									<td>'.$key.'</td>
									</tr>';	
								} 
							}
						}
					?>
				</tbody>
			</table>

			<table class="table table-bordered">
				<thead>
					<th>Lane1</th>
					<th>Lane 2</th>
					<th>Lane 3</th>
					<th>Lane 4</th>
					<th>VIP</th>
				</thead>
				<tbody>
					<?php
						if (isset($_SESSION['queue'])) {
							$queue = $_SESSION['queue'];
						} 
						if(isset($queue)) {
							for ($i = 0; $i < count($queue['lane1']); $i++) {
								echo '<tr>
								<td>'.$queue['lane1'][$i][0].'</td>
								</tr>';	
							} 
						}
						if(isset($queue)) {
							for ($j = 0; $j < count($queue['lane3']); $j++) {
								echo '<tr>
								<td>'.$queue['lane3'][$j][0].'</td>
								</tr>';	
							} 
						}
						
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html> -->

<div class="container">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 mx-auto">
				<div class="card mt-5">
					<div class="card-header text-center p-3">
						<h5>Vehicle Input</h5>
					</div>
					<div class="card-body">
						<form action="lane.php" method="POST">
							<div class="col-md-12-col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-md-4">
										<label for="">Vehicle No</label>
										<input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle No">
									</div>
									<div class="col-md-4">
										<label for="">Arrival Time</label>
										<input type="time" name="arrival_time" class="form-control" placeholder="Arrival Time">
									</div>
									<div class="col-md-4">
										<label for="">Type of Vehicle</label>
										<select class="form-control" name="vehicle_type" required="">
											<option value="normal">Normal</option>
											<option value="vip">VIP</option>
										</select>
									</div>
								</div>
								<div class="row mt-5">
									<div class="col-md-4 mx-auto">
										<button name="btnSubmit" class="btn btn-success btn-md">Submit</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="card mt-5">
					<div class="card-header text-center p-3">
						<h5>Vehicle Details</h5>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead align="center">
								<th>Vehicle No</th>
								<th>Arrival Time</th>
								<th>Departure Time</th>
								<th>Lane No</th>
							</thead>
							<tbody>
								<?php
									if (isset($_SESSION['queue'])) {
										$queue = $_SESSION['queue'];
									} 
									if(isset($queue)) {
										foreach ($queue as $key => $value) {
											for ($i = 0; $i < count($queue[$key]); $i++) {
												echo '<tr align="center">
												<td>'.$queue[$key][$i][0].'</td>
												<td>'.$queue[$key][$i][1].'</td>
												<td>'.$queue[$key][$i][2].'</td>
												<td>'.$key.'</td>
												</tr>';	
											} 
										}
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>