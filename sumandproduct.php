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
		
			for ($row = 0; $row < 3; $row++) {
				
				for ($col = 0; $col < 3; $col++) {
	
					if ($row == $col) {
						$resultMainDiagonal += $firstMatrix[$row][$col];
					}
	
					if (($row == 0 && $col == 2) || ($row == 1 && $col == 1) || ($row == 2 && $col == 0)) {
						$resultSecondDiagonal += $firstMatrix[$row][$col];
					}
				}
			}
	?>
			<h1 class="display-5">Matrix Assignment</h1>
			<h4 class="display-5">Results</h4>
			<p>-</p>

	<?php
			print "Main Diagonal: $resultSum.<br>";
			print "Second Diagonal: $resultProduct.<br><br>";

		} else { 
	?>
			<h1 class="display-5">Matrix Assignment</h1>
			<h4 class="display-5">Results</h4>
			<p>-</p>
			<div class="alert alert-danger" role="alert">
  				<strong>Oh snap!</strong>I guess you let some field in blank :(
			</div>

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

	<a class="btn btn-primary" href="index.html" role="button">Back to Index</a>	

</body>
</html>