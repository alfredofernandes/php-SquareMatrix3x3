<?php
    require_once('functions/validateInput.php');
    require_once('functions/matrixCalculate.php');
    
    if(validate($_POST['a0']) && validate($_POST['a1']) && validate($_POST['a2']) &&
       validate($_POST['b0']) && validate($_POST['b1']) && validate($_POST['b2']) &&
       validate($_POST['c0']) && validate($_POST['c1']) && validate($_POST['c2'])) {

        $matrix = array(
            array($_POST['a0'], $_POST['a1'], $_POST['a2']),
            array($_POST['b0'], $_POST['b1'], $_POST['b2']),
            array($_POST['c0'], $_POST['c1'], $_POST['c2'])
        );
        
        $resultMain = mainDiagonalCalculate($matrix);
        $resultSecond = secondDiagonalCalculate($matrix);
    ?>

    <div class="alert alert-success" role="alert">
        <strong>Main Diagonal Result:</strong> <?php echo $resultMain; ?>
    </div>

    <div class="alert alert-success" role="alert">
        <strong>Second Diagonal Result:</strong> <?php echo $resultSecond; ?>
    </div>

<?php } ?>
