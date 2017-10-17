<?php
    require_once('functions/validateInput.php');
    require_once('functions/matrixCalculate.php');
    
    if (validate($_POST['a00']) && validate($_POST['a01']) && validate($_POST['a02']) && 
        validate($_POST['a10']) && validate($_POST['a11']) && validate($_POST['a12']) && 
        validate($_POST['a20']) && validate($_POST['a21']) && validate($_POST['a22']) && 
        validate($_POST['b00']) && validate($_POST['b01']) && validate($_POST['b02']) && 
        validate($_POST['b10']) && validate($_POST['b11']) && validate($_POST['b12']) && 
        validate($_POST['b20']) && validate($_POST['b21']) && validate($_POST['b22'])) {
            
        $resultSum = 0;
        $resultProduct = 0;
        
        $matrixA = array(
            array($_POST['a00'], $_POST['a01'], $_POST['a02']),
            array($_POST['a10'], $_POST['a11'], $_POST['a12']),
            array($_POST['a20'], $_POST['a21'], $_POST['a22'])
        );

        $matrixB = array(
            array($_POST['b00'], $_POST['b01'], $_POST['b02']),
            array($_POST['b10'], $_POST['b11'], $_POST['b12']),
            array($_POST['b20'], $_POST['b21'], $_POST['b22'])
        );
    ?>

    <h1 class="display-5">Matrix Assignment</h1>
    <br>
    
    <p>-</p>
    <div class="alert alert-success" role="alert">
        <strong>Sum Of The Matrices</strong>
    </div>

    <table class="table table-bordered" style="margin: auto">
        <tbody>
            <tr>
                <td><?php echo $matrixA[0][0] + $matrixB[0][0] ?></td>
                <td><?php echo $matrixA[0][1] + $matrixB[0][1] ?></td>
                <td><?php echo $matrixA[0][2] + $matrixB[0][2] ?></td>
            </tr>
            <tr>
                <td><?php echo $matrixA[1][0] + $matrixB[1][0] ?></td>
                <td><?php echo $matrixA[1][1] + $matrixB[1][1] ?></td>
                <td><?php echo $matrixA[1][2] + $matrixB[1][2] ?></td>
            </tr>
            <tr>
                <td><?php echo $matrixA[2][0] + $matrixB[2][0] ?></td>
                <td><?php echo $matrixA[2][1] + $matrixB[2][1] ?></td>
                <td><?php echo $matrixA[2][2] + $matrixB[2][2] ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    
    <p>-</p>
    <div class="alert alert-success" role="alert">
        <strong>Product Of The Matrices</strong>
    </div>

    <table class="table table-bordered" style="margin: auto">
        <tbody>
            <tr>
                <td><?php echo $matrixA[0][0] * $matrixB[0][0] + $matrixA[0][1] * $matrixB[1][0] + $matrixA[0][2] * $matrixB[2][0] ?></td>
                <td><?php echo $matrixA[0][0] * $matrixB[0][1] + $matrixA[0][1] * $matrixB[1][1] + $matrixA[0][2] * $matrixB[2][1] ?></td>
                <td><?php echo $matrixA[0][0] * $matrixB[0][2] + $matrixA[0][1] * $matrixB[1][2] + $matrixA[0][2] * $matrixB[2][2] ?></td>
            </tr>
            <tr>
                <td><?php echo $matrixA[1][0] * $matrixB[0][0] + $matrixA[1][1] * $matrixB[1][0] + $matrixA[1][2] * $matrixB[2][0] ?></td>
                <td><?php echo $matrixA[1][0] * $matrixB[0][1] + $matrixA[1][1] * $matrixB[1][1] + $matrixA[1][2] * $matrixB[2][1] ?></td>
                <td><?php echo $matrixA[1][0] * $matrixB[0][2] + $matrixA[1][1] * $matrixB[1][2] + $matrixA[1][2] * $matrixB[2][2] ?></td>
            </tr>
            <tr>
                <td><?php echo $matrixA[2][0] * $matrixB[0][0] + $matrixA[2][1] * $matrixB[1][0] + $matrixA[2][2] * $matrixB[2][0] ?></td>
                <td><?php echo $matrixA[2][0] * $matrixB[0][1] + $matrixA[2][1] * $matrixB[1][1] + $matrixA[2][2] * $matrixB[2][1] ?></td>
                <td><?php echo $matrixA[2][0] * $matrixB[0][2] + $matrixA[2][1] * $matrixB[1][2] + $matrixA[2][2] * $matrixB[2][2] ?></td>
            </tr>
        </tbody>
    </table>
    <br>

<?php } ?>
