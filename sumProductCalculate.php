<h1>Calculate Sum and Product</h1>

<div class="col-12 col-md-auto">

    <form id="form1" action="index.php?link=sumProductCalculate" method="post">

        <br>
        <h5 class="display-5 font-weight-normal">First matrix:</h5>
        <br>

        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="m1r0c0">
                <input class="form-control" type="number" id="example-number-input" name="m1r0c1">
                <input class="form-control" type="number" id="example-number-input" name="m1r0c2">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="m1r1c0">
                <input class="form-control" type="number" id="example-number-input" name="m1r1c1">
                <input class="form-control" type="number" id="example-number-input" name="m1r1c2">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="m1r2c0">
                <input class="form-control" type="number" id="example-number-input" name="m1r2c1">
                <input class="form-control" type="number" id="example-number-input" name="m1r2c2">
            </div>
        </div>

        <br>
        <h5 class="display-5 font-weight-normal">Second matrix:</h5>
        <br>

        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="m2r0c0">
                <input class="form-control" type="number" id="example-number-input" name="m2r0c1">
                <input class="form-control" type="number" id="example-number-input" name="m2r0c2">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="m2r1c0">
                <input class="form-control" type="number" id="example-number-input" name="m2r1c1">
                <input class="form-control" type="number" id="example-number-input" name="m2r1c2">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="m2r2c0">
                <input class="form-control" type="number" id="example-number-input" name="m2r2c1">
                <input class="form-control" type="number" id="example-number-input" name="m2r2c2">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button>
    </form>
        
    <br>
    <?php require_once('sumProductResult.php'); ?>
</div>

<br>
<div class="col-12">
    <a href="?link=home" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
</div>
