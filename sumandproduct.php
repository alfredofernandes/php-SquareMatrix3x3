<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Matrix</title>
</head>
<body>

	<?php

		if (validate($_POST['a00']) && validate($_POST['a01']) && validate($_POST['a02']) && 
			validate($_POST['a10']) && validate($_POST['a11']) && validate($_POST['a12']) && 
			validate($_POST['a20']) && validate($_POST['a21']) && validate($_POST['a22']) && 
			validate($_POST['b00']) && validate($_POST['b01']) && validate($_POST['b02']) && 
			validate($_POST['b10']) && validate($_POST['b11']) && validate($_POST['b12']) && 
			validate($_POST['b20']) && validate($_POST['b21']) && validate($_POST['b22'])) {

			$resultSum = 0;
			$resultProduct = 0;

			$firstMatrix = array (
				array($_POST['a00'], $_POST['a01'], $_POST['a02']),
				array($_POST['a10'], $_POST['a11'], $_POST['a12']),
				array($_POST['a20'], $_POST['a21'], $_POST['a22'])
			);

			$secondMatrix = array (
				array($_POST['b00'], $_POST['b01'], $_POST['b02']),
				array($_POST['b10'], $_POST['b11'], $_POST['b12']),
				array($_POST['b20'], $_POST['b21'], $_POST['b22'])
			);
	?>
			<h1 class="display-5">Matrix Assignment</h1>
			<br>
			<h4 class="display-5">Sum Of The Matrices</h4>
			<p>-</p>

			<table class="table table-bordered" style="margin: auto">
				<tbody>
					<tr>
						<td><?php echo $firstMatrix[0][0] + $secondMatrix[0][0] ?></td>
						<td><?php echo $firstMatrix[0][1] + $secondMatrix[0][1] ?></td>
						<td><?php echo $firstMatrix[0][2] + $secondMatrix[0][2] ?></td>
					</tr>
					<tr>
						<td><?php echo $firstMatrix[1][0] + $secondMatrix[1][0] ?></td>
						<td><?php echo $firstMatrix[1][1] + $secondMatrix[1][1] ?></td>
						<td><?php echo $firstMatrix[1][2] + $secondMatrix[1][2] ?></td>
					</tr>
					<tr>
						<td><?php echo $firstMatrix[2][0] + $secondMatrix[2][0] ?></td>
						<td><?php echo $firstMatrix[2][1] + $secondMatrix[2][1] ?></td>
						<td><?php echo $firstMatrix[2][2] + $secondMatrix[2][2] ?></td>
					</tr>
				</tbody>
			</table>
			<br>

			<h4 class="display-5">Product Of The Matrices</h4>
			<p>-</p>

			<table class="table table-bordered" style="margin: auto">
				<tbody>
					<tr>
						<td><?php echo $firstMatrix[0][0] * $secondMatrix[0][0] + $firstMatrix[0][1] * $secondMatrix[1][0] + $firstMatrix[0][2] * $secondMatrix[2][0] ?></td>
						<td><?php echo $firstMatrix[0][0] * $secondMatrix[0][1] + $firstMatrix[0][1] * $secondMatrix[1][1] + $firstMatrix[0][2] * $secondMatrix[2][1] ?></td>
						<td><?php echo $firstMatrix[0][0] * $secondMatrix[0][2] + $firstMatrix[0][1] * $secondMatrix[1][2] + $firstMatrix[0][2] * $secondMatrix[2][2] ?></td>
					</tr>
					<tr>
						<td><?php echo $firstMatrix[1][0] * $secondMatrix[0][0] + $firstMatrix[1][1] * $secondMatrix[1][0] + $firstMatrix[1][2] * $secondMatrix[2][0] ?></td>
						<td><?php echo $firstMatrix[1][0] * $secondMatrix[0][1] + $firstMatrix[1][1] * $secondMatrix[1][1] + $firstMatrix[1][2] * $secondMatrix[2][1] ?></td>
						<td><?php echo $firstMatrix[1][0] * $secondMatrix[0][2] + $firstMatrix[1][1] * $secondMatrix[1][2] + $firstMatrix[1][2] * $secondMatrix[2][2] ?></td>
					</tr>
					<tr>
						<td><?php echo $firstMatrix[2][0] * $secondMatrix[0][0] + $firstMatrix[2][1] * $secondMatrix[1][0] + $firstMatrix[2][2] * $secondMatrix[2][0] ?></td>
						<td><?php echo $firstMatrix[2][0] * $secondMatrix[0][1] + $firstMatrix[2][1] * $secondMatrix[1][1] + $firstMatrix[2][2] * $secondMatrix[2][1] ?></td>
						<td><?php echo $firstMatrix[2][0] * $secondMatrix[0][2] + $firstMatrix[2][1] * $secondMatrix[1][2] + $firstMatrix[2][2] * $secondMatrix[2][2] ?></td>
					</tr>
				</tbody>
			</table>
			<br>

	<?php

		} else { 
	?>
			<h1 class="display-5">Matrix Assignment</h1>
			<h4 class="display-5">Results</h4>
			<p>-</p>
			<div class="alert alert-danger" role="alert" style="width: 390px; margin: auto">
  				<strong>Oh snap!</strong> I guess you let some field in blank :(
			</div>
			<br>

	<?php
	
		}

		// Validate values: fields cannot be null.
		function validate($value) {
			if (isset($value) && $value != null) {
				return true;
			} 
			return false;
		}
	?>

	<a class="btn btn-warning" href="index.html" role="button">Back to Index</a>	

</body>
</html>