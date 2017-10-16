<?php
    require_once('functions/validateInput.php');
    require_once('functions/matrixCalculate.php');
    
    if(validate($_POST['a00']) && validate($_POST['a01']) && validate($_POST['a02']) &&
       validate($_POST['a10']) && validate($_POST['a11']) && validate($_POST['a12']) &&
       validate($_POST['a20']) && validate($_POST['a21']) && validate($_POST['a22']) &&
       validate($_POST['b00']) && validate($_POST['b01']) && validate($_POST['b02']) &&
       validate($_POST['b10']) && validate($_POST['b11']) && validate($_POST['b12']) &&
       validate($_POST['b20']) && validate($_POST['b21']) && validate($_POST['b22'])) {

        $matrix = array(
            array($_POST['a00'], $_POST['a01'], $_POST['a02']),
            array($_POST['a10'], $_POST['a11'], $_POST['a12']),
            array($_POST['a20'], $_POST['a21'], $_POST['a22']),
            array($_POST['b00'], $_POST['b01'], $_POST['b02']),
            array($_POST['b10'], $_POST['b11'], $_POST['b12']),
            array($_POST['b20'], $_POST['b21'], $_POST['b22'])
        );
        
        $resultMain = mainDiagonalCalculate($matrix);
        $resultSecond = secondDiagonalCalculate($matrix);
    ?>

    <div class="alert alert-success" role="alert">
        <strong>Sum Result:</strong> <?php echo $resultMain; ?>
    </div>

    <div class="alert alert-success" role="alert">
        <strong>Product Result:</strong> <?php echo $resultSecond; ?>
    </div>

<?php } ?>
