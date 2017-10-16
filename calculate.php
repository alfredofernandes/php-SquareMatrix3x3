<?php
    if(validate($_POST['a0']) && validate($_POST['a1']) && validate($_POST['a2']) &&
       validate($_POST['b0']) && validate($_POST['b1']) && validate($_POST['b2']) &&
       validate($_POST['c0']) && validate($_POST['c1']) && validate($_POST['c2'])) {

        echo $_POST['a0'] . ' - ' . $_POST['a1'] . ' - ' . $_POST['a2'] . '<br>';
        echo $_POST['b0'] . ' - ' . $_POST['b1'] . ' - ' . $_POST['b2'] . '<br>';
        echo $_POST['c0'] . ' - ' . $_POST['c1'] . ' - ' . $_POST['c2'] . '<br>';

    } else {

        echo "Enter with the valid numbers!";
    }


    // Validate inputs
    function validate($value) 
    {
        if(isset($value) && ($value != null)) {
            return true;
        }

        return false;
    }
