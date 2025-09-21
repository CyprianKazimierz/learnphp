<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
      <h1 class="text-center">My Calculator</h1>

  <form action="calculator_view.php" method="get" class="col-4 mx-auto border p-2">  
  <div class="mb-3">
    <label for="" class="form-label">Number1:</label>
    <input type="text" class="form-control" name="numberOne" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Number2:</label>
    <input type="text" class="form-control" name="numberTwo">
  </div>
  <button type="submit" class="btn btn-primary" name="operation" value="+">+</button>
  <button type="submit" class="btn btn-primary" name="operation" value="-">-</button>
  <button type="submit" class="btn btn-primary" name="operation" value="*">*</button>
 <button type="submit" class="btn btn-primary" name="operation" value="/">/</button>
  <button type="submit" class="btn btn-primary" name="operation" value="%">%</button>
  <?php 
  include_once("calculator_model.php");
  echo "<br>";
  if(isset($resultCalc)){
    echo "the result is:  <strong>$resultCalc</strong> "; 
  }
  ?>
</form>
</body>
</html>