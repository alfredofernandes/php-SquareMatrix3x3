<h1>Calculate Sum and Product</h1>

<div class="col-12 col-md-auto">

    <form id="form1" action="index.php?link=sumProductCalculate" method="post">

        <br>
        <h5 class="display-5 font-weight-normal">First matrix:</h5>
        <br>

        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="a00">
                <input class="form-control" type="number" id="example-number-input" name="a01">
                <input class="form-control" type="number" id="example-number-input" name="a02">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="a10">
                <input class="form-control" type="number" id="example-number-input" name="a11">
                <input class="form-control" type="number" id="example-number-input" name="a12">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="a20">
                <input class="form-control" type="number" id="example-number-input" name="a21">
                <input class="form-control" type="number" id="example-number-input" name="a22">
            </div>
        </div>

        <br>
        <h5 class="display-5 font-weight-normal">Second matrix:</h5>
        <br>

        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="b00">
                <input class="form-control" type="number" id="example-number-input" name="b01">
                <input class="form-control" type="number" id="example-number-input" name="b02">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="b10">
                <input class="form-control" type="number" id="example-number-input" name="b11">
                <input class="form-control" type="number" id="example-number-input" name="b12">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="b20">
                <input class="form-control" type="number" id="example-number-input" name="b21">
                <input class="form-control" type="number" id="example-number-input" name="b22">
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
