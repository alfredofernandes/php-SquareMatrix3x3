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
		validate($_POST['a20']) && validate($_POST['a21']) && validate($_POST['a22'])) {

			$resultMainDiagonal = 0;
			$resultSecondDiagonal = 0;

			$matrix = array (
				array($_POST['a00'], $_POST['a01'], $_POST['a02']),
				array($_POST['a10'], $_POST['a11'], $_POST['a12']),
				array($_POST['a20'], $_POST['a21'], $_POST['a22'])
			);
		
			for ($row = 0; $row < 3; $row++) {
				
				for ($col = 0; $col < 3; $col++) {
	
					if ($row == $col) {
						$resultMainDiagonal += $matrix[$row][$col];
					}
	
					if (($row == 0 && $col == 2) || ($row == 1 && $col == 1) || ($row == 2 && $col == 0)) {
						$resultSecondDiagonal += $matrix[$row][$col];
					}
				}
			}
	?>
			<h1 class="display-5">Matrix Assignment</h1>
			<h4 class="display-5">Results</h4>
			<p>-</p>

	<?php
			print "Main Diagonal: $resultMainDiagonal.<br>";
			print "Second Diagonal: $resultSecondDiagonal.<br><br>";

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