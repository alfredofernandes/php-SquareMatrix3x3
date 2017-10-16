<h1>Calculate Product</h1>

<div class="col-12 col-md-auto">

    <form id="form1" action="index.php?link=productCalculate" method="post">

        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="a0">
                <input class="form-control" type="number" id="example-number-input" name="a1">
                <input class="form-control" type="number" id="example-number-input" name="a2">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="b0">
                <input class="form-control" type="number" id="example-number-input" name="b1">
                <input class="form-control" type="number" id="example-number-input" name="b2">
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="col-12">
                <input class="form-control" type="number" id="example-number-input" name="c0">
                <input class="form-control" type="number" id="example-number-input" name="c1">
                <input class="form-control" type="number" id="example-number-input" name="c2">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button>
    </form>
        
        <br>
        <?php require_once('productResult.php'); ?>
</div>

<br>
<div class="col-12">
    <a href="?link=home" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
</div>
