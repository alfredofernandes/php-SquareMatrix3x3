<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Square Matrix 3x3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-auto">
                <?php 
                    if (isset($_GET['link']) && ($_GET['link'] == 'diagonalCalculate')) {
                        require_once('diagonalCalculate.php');
                        
                    } elseif (isset($_GET['link']) && ($_GET['link'] == 'sumCalculate')) {
                        require_once('sumCalculate.php');
                        
                    } elseif (isset($_GET['link']) && ($_GET['link'] == 'sumProductCalculate')) {
                        require_once('sumProductCalculate.php');
                        
                    } else { ?> 
                        <br>
                        <a href="?link=diagonalCalculate" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Calculate Diagonal</a>
                        <a href="?link=sumProductCalculate" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Calculate Sum and Product</a>
                <?php } ?>
            </div>
        </div>
    </div>

</body>
</html>
