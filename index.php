<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Matrix :: Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
      
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-auto">

                <h1 class="display-5">Matrix Assignment</h1>

                <?php 
                    if (isset($_GET['link']) && ($_GET['link'] == 'diagonalCalculate')) {
                        require_once('diagonalCalculate.php');
                        
                    } elseif (isset($_GET['link']) && ($_GET['link'] == 'diagonalResult')) {
                        require_once('diagonalResult.php');
                        
                    } elseif (isset($_GET['link']) && ($_GET['link'] == 'sumCalculate')) {
                        require_once('sumCalculate.php');
                        
                    } elseif (isset($_GET['link']) && ($_GET['link'] == 'sumProductCalculate')) {
                        require_once('sumProductCalculate.php');
                        
                    } elseif (isset($_GET['link']) && ($_GET['link'] == 'sumProductResult')) {
                        require_once('sumProductResult.php');
                        
                    } else { ?> 
                        <br>
                        <h4 class="display-5">Choose one of the following options</h4>
                        <br>
                        <a class="btn btn-primary" href="?link=diagonalCalculate" role="button">Calculate Diagonals' Sum</a>
                        <a class="btn btn-primary" href="?link=sumProductCalculate" role="button">Calculate Sum and Product</a>
                <?php } ?>
            </div>
        </div>
    </div>

</body>
</html>
