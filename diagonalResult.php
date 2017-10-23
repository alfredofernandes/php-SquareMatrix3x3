<?php
    require_once('functions/validateInput.php');
    require_once('functions/matrixCalculate.php');
    
    $matrix = array(
        array($_POST['r0c0'], $_POST['r0c1'], $_POST['r0c2']),
        array($_POST['r1c0'], $_POST['r1c1'], $_POST['r1c2']),
        array($_POST['r2c0'], $_POST['r2c1'], $_POST['r2c2'])
    );
    
    if(validadeInput($matrix)) {
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
