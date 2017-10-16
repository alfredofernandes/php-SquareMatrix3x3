<?php
    // Validate inputs
    function validate($value) 
    {
        if(isset($value) && ($value != null))
        {
            return true;
        }
        return false;
    }
