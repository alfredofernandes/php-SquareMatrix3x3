<?php
    require_once('functions/validateInput.php');
    require_once('functions/matrixCalculate.php');
    
    $matrixA = array(
        array($_POST['m1r0c0'], $_POST['m1r0c1'], $_POST['m1r0c2']),
        array($_POST['m1r1c0'], $_POST['m1r1c1'], $_POST['m1r1c2']),
        array($_POST['m1r2c0'], $_POST['m1r2c1'], $_POST['m1r2c2'])
    );

    $matrixB = array(
        array($_POST['m2r0c0'], $_POST['m2r0c1'], $_POST['m2r0c2']),
        array($_POST['m2r1c0'], $_POST['m2r1c1'], $_POST['m2r1c2']),
        array($_POST['m2r2c0'], $_POST['m2r2c1'], $_POST['m2r2c2'])
    );
    
    if(validadeInput($matrixA) && validadeInput($matrixB)) 
    {
        $resultSum = 0;
        $resultProduct = 0;
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
                <td><?php echo ($matrixA[0][0] * $matrixB[0][0]) + ($matrixA[0][1] * $matrixB[1][0]) + ($matrixA[0][2] * $matrixB[2][0]); ?></td>
                <td><?php echo ($matrixA[0][0] * $matrixB[0][1]) + ($matrixA[0][1] * $matrixB[1][1]) + ($matrixA[0][2] * $matrixB[2][1]); ?></td>
                <td><?php echo ($matrixA[0][0] * $matrixB[0][2]) + ($matrixA[0][1] * $matrixB[1][2]) + ($matrixA[0][2] * $matrixB[2][2]); ?></td>
            </tr>
            <tr>
                <td><?php echo ($matrixA[1][0] * $matrixB[0][0]) + ($matrixA[1][1] * $matrixB[1][0]) + ($matrixA[1][2] * $matrixB[2][0]); ?></td>
                <td><?php echo ($matrixA[1][0] * $matrixB[0][1]) + ($matrixA[1][1] * $matrixB[1][1]) + ($matrixA[1][2] * $matrixB[2][1]); ?></td>
                <td><?php echo ($matrixA[1][0] * $matrixB[0][2]) + ($matrixA[1][1] * $matrixB[1][2]) + ($matrixA[1][2] * $matrixB[2][2]); ?></td>
            </tr>
            <tr>
                <td><?php echo ($matrixA[2][0] * $matrixB[0][0]) + ($matrixA[2][1] * $matrixB[1][0]) + ($matrixA[2][2] * $matrixB[2][0]); ?></td>
                <td><?php echo ($matrixA[2][0] * $matrixB[0][1]) + ($matrixA[2][1] * $matrixB[1][1]) + ($matrixA[2][2] * $matrixB[2][1]); ?></td>
                <td><?php echo ($matrixA[2][0] * $matrixB[0][2]) + ($matrixA[2][1] * $matrixB[1][2]) + ($matrixA[2][2] * $matrixB[2][2]); ?></td>
            </tr>
        </tbody>
    </table>
    <br>

<?php } ?>
