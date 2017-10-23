<?php
    // Validate inputs
    function validadeInput($valueArray) 
    {
        $status = true;
        foreach($valueArray as $index => $value) 
        {
            foreach($value as $k => $v) 
            {
                if (!isset($v) || ($v == null)) {
                    $status = false;
                    break;
                }
            }

            if ($status == false) {
                break;
            }
        }
        return $status;
    }
    