<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>
    Calculator
  </title>
</head>

<body>
  <form action="taskOne.php" method="POST">

    First number: <input type=number name="firstNumber" /><br />
    Second number: <input type=number name="secondNumber" /><br />
    <label>Mathematical operation: </label>
    <select name="mathOperation">
      <option value="addition">+</option>
      <option value="substraction">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select><br />
    <input type="submit" name="run">

  </form>
  <?php
  if (is_numeric($_POST['firstNumber']) && is_numeric($_POST['secondNumber'])) {

    $firstNumber = floatval($_POST['firstNumber']);
    $secondNumber = floatval($_POST['secondNumber']);
    $mathOperation = $_POST['mathOperation'];

    switch ($mathOperation) {
      case $mathOperation === 'addition':
        require 'taskOneFunctions.php';
        addition($firstNumber, $secondNumber);
        break;
      case $mathOperation === 'substraction':
        require 'taskOneFunctions.php';
        substraction($firstNumber, $secondNumber);
      case $mathOperation === 'multiply':
        require 'taskOneFunctions.php';
        multiply($firstNumber, $secondNumber);
      case $mathOperation === 'divide':
        require 'taskOneFunctions.php';
        divide($firstNumber, $secondNumber);
        break;
    }
  } else {
    echo ("<br>You must enter numbers");
  }
  ?>
</body>

</html>