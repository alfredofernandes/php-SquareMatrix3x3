<?php
    if(validate($_POST['a0']) && validate($_POST['a1']) && validate($_POST['a2']) &&
       validate($_POST['b0']) && validate($_POST['b1']) && validate($_POST['b2']) &&
       validate($_POST['c0']) && validate($_POST['c1']) && validate($_POST['c2'])) {

        $matrix = array(
            array($_POST['a0'], $_POST['a1'], $_POST['a2']),
            array($_POST['b0'], $_POST['b1'], $_POST['b2']),
            array($_POST['c0'], $_POST['c1'], $_POST['c2']),
        );
        
        $resultMain = mainDiagonalCalculate($matrix);
        echo "Main Diagonal Result " . $resultMain . "<br>";
        
        $resultSecond = secondDiagonalCalculate($matrix);
        echo "Second Diagonal Result: " . $resultSecond . "<br>";

    } else {

        echo "Enter with the valid numbers!";
    }


    // Validate inputs
    function validate($value) 
    {
        if(isset($value) && ($value != null))
        {
            return true;
        }
        return false;
    }

    // Calculate Main Diagonal
    function mainDiagonalCalculate($matrix) 
    {
        $result = 0;

        for ($row = 0; $row < 3; $row++) 
        {
            for ($col = 0; $col < 3; $col++) 
            {
                if (($row == 0 && $col == 0) || ($row == 1 && $col == 1) || ($row == 2 && $col == 2)) 
                {
                    $result += $matrix[$row][$col];
                }
            }
        }
        return $result;
    }

    // Calculate Second Diagonal
    function secondDiagonalCalculate($matrix) 
    {
        $result = 0;

        for ($row = 0; $row < 3; $row++) 
        {
            for ($col = 0; $col < 3; $col++) 
            {
                if (($row == 0 && $col == 2) || ($row == 1 && $col == 1) || ($row == 2 && $col == 0)) 
                {
                    $result += $matrix[$row][$col];
                }
            }
        }
        return $result;
    }
