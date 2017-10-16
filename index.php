<!DOCTYPE html>
<html>
<head>
	<title>Matrix</title>
</head>
<body>
	<?php

		$resultMainDiagonal = 0;
		$resultSecondDiagonal = 0;

		$numbers = array (
  			array(3, 4, 5),
  			array(10, 1, 5),
  			array(4, 8, 10),
  		);

  		for ($row = 0; $row < 3; $row++) {
			  
				for ($col = 0; $col < 3; $col++) {

		    		if ($row == $col) {
						$resultMainDiagonal += $numbers[$row][$col];
		    		}

		    		if (($row == 0 && $col == 2) || ($row == 1 && $col == 1) || ($row == 2 && $col == 0)) {
						$resultSecondDiagonal += $numbers[$row][$col];
		    		}

				}
		}

		print "Main Diagonal: $resultMainDiagonal.<br>";
		print "Second Diagonal: $resultSecondDiagonal.";
	?>
</body>
</html>