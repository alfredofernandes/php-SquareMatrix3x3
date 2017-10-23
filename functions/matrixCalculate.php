<?php
    // Calculate Main Diagonal
    function mainDiagonalCalculate($matrix)
    {
        $num = count($matrix);
        $result = 0;
        
        for ($row = 0; $row < $num; $row++) {
            $result += $matrix[$row][$row];
        }
        return $result;
    }

    // Calculate Second Diagonal
    function secondDiagonalCalculate($matrix)
    {
        $num = count($matrix);
        $result = 0;

        for ($row = 0; $row < $num; $row++) {
            $result += $matrix[$row][$num - $row - 1];
        }

        return $result;
    }
