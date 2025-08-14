<?php
  declare(strict_types = 1);
  include 'includes/class_autoload.inc.php';
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
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  /* Form container */
  form {
    background-color: #85c18dff;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 2 5 15px rgba(98, 189, 197, 0.1);
    text-align: center;
  }

  /* Title */
  form p {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #8bf13eff;
  }

  /* Inputs and select styling */
  input[type="number"], select {
    padding: 10px;
    margin: 0 10px 20px 10px;
    width: 150px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  /* Button styling */
  button {
    padding: 10px 20px;
    background-color: #8bf13eff;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #21b963ff;
  }
</style>

  <title>Calculator</title>
</head>
<body>
    <form action="includes/result.inc.php" method="post">
      <p>MY OWN CALCULATOR</p>
      <input type="number" name="num1" placeholder="Enter First Number">
      <select name="operator" >
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
      </select>
      <input type="number" name="num2" placeholder="Enter Second Number">
      <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>