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
        echo ("<br>Result of addition is: " . ($firstNumber + $secondNumber));
        break;
      case $mathOperation === 'substraction':
        echo ("<br>Result of substratcion is: " . ($firstNumber - $secondNumber));
        break;
      case $mathOperation === 'multiply':
        echo "<br>Result of multiply is: " . ($firstNumber * $secondNumber);
        break;
      case $mathOperation === 'divide':
        if ($secondNumber == 0) {
          echo ("<br>Second number cant be 0");
        } else {
          echo "<br>Result of divide is: " . ($firstNumber / $secondNumber);
        }
        break;
    }
  } else {
    echo ("<br>You must enter numbers");
  }
  ?>
</body>

</html>