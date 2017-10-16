<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Matrix</title>
</head>
<body>

	<h1 class="display-5 text-center">Matrix Assignment</h1>
	
	<br>
	<h5 class="display-5 text-center font-weight-normal">Enter the numbers on the first matrix</h5>
	<br>

	<div class="center">
		<table class="table">
			<tbody>
				<tr>
					<td><input type="number" class="form-control" id="a01" name="a01"/></td>
					<td><input type="number" class="form-control" id="a02" name="a02"/></td>
					<td><input type="number" class="form-control" id="a03" name="a03"/></td>
				</tr>
				<tr>
					<td><input type="number" class="form-control" id="a11" name="a11"/></td>
					<td><input type="number" class="form-control" id="a12" name="a12"/></td>
					<td><input type="number" class="form-control" id="a13" name="a13"/></td>
				</tr>
				<tr>
					<td><input type="number" class="form-control" id="a21" name="a21"/></td>
					<td><input type="number" class="form-control" id="a22" name="a22"/></td>
					<td><input type="number" class="form-control" id="a23" name="a23"/></td>
				</tr>
			</tbody>
		</table>
	</div>

	<h5 class="display-5 text-center font-weight-normal">Enter the numbers on the second matrix</h5>
	<br>

	<div class="center">
		<table class="table">
			<tbody>
				<tr>
					<td><input type="number" class="form-control" id="b01" name="b01"/></td>
					<td><input type="number" class="form-control" id="b02" name="b02"/></td>
					<td><input type="number" class="form-control" id="b03" name="b03"/></td>
				</tr>
				<tr>
					<td><input type="number" class="form-control" id="b11" name="b11"/></td>
					<td><input type="number" class="form-control" id="b12" name="b12"/></td>
					<td><input type="number" class="form-control" id="b13" name="b13"/></td>
				</tr>
				<tr>
					<td><input type="number" class="form-control" id="b21" name="b21"/></td>
					<td><input type="number" class="form-control" id="b22" name="b22"/></td>
					<td><input type="number" class="form-control" id="b23" name="b23"/></td>
				</tr>
			</tbody>
			</table>
		</div>
	<?php

		$resultMainDiagonal = 0;
		$resultSecondDiagonal = 0;

		$firstMatrix = array (
  			array($_POST['a01'], 4, 5),
  			array(10, 1, 5),
  			array(4, 8, 10),
		);
		  
		$secondMatrix = array (
			array(3, 4, 5),
			array(10, 1, 5),
			array(4, 8, 10),
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

		print "Main Diagonal: $resultMainDiagonal.<br>";
		print "Second Diagonal: $resultSecondDiagonal.";
    ?>
    
</body>
</html>