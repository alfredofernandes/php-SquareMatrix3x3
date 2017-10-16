<?php
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
