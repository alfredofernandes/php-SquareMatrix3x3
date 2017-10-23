<?php
    // Validate inputs
    function validadeInput($valueArray) 
    {
        foreach($valueArray as $index => $value) 
        {
            foreach($value as $k => $v) 
            {
                return validade($v);
            }
        }
    }

    function validade($value = null)
    {
        if (isset($value) && ($value == null)) {
            return true;
        }
        return false;
    }
