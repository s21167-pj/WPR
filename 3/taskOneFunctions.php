<?php
function addition($firstNumber, $secondNumber) {
    echo ("<br>Result of addition is: " . ($firstNumber + $secondNumber));
}

function substraction($firstNumber, $secondNumber) {
    echo ("<br>Result of substratcion is: " . ($firstNumber - $secondNumber));
}

function multiply($firstNumber, $secondNumber) {
    echo "<br>Result of multiply is: " . ($firstNumber * $secondNumber);
}

function divide($firstNumber, $secondNumber) {
    if ($secondNumber == 0) {
        echo ("<br>Second number cant be 0");
      } else {
        echo "<br>Result of divide is: " . ($firstNumber / $secondNumber);
      }
}