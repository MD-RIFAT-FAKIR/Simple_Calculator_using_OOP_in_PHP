<?php
  declare(strict_types = 1);
  include 'class_autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
      background: radial-gradient(circle at center, #61eda0ff, #dbec40ff);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 90px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }


  </style>
  <title>Document</title>
</head>
<body>
  <?php
    //upttin user input into variable
    $operator = $_POST['operator'];
    $num1     = $_POST['num1'];
    $num2     = $_POST['num2'];

    //passing user input as parameter while creating objecj
    $calculator = new Calc($operator, (int)$num1, (int)$num2);

    try {
      //calculator object call the claculate method crated in Calc class
      echo $calculator->calculate();
    }catch(ErrorType $e){
      echo "Error: " . $e->getMessage();
    }
  ?>
</body>
</html>