<?php
$a = readline('Enter first number: ');
$b = readline('Enter second number: ');

$a = (int)$a;
$b = (int)$b;

$addition = $a + $b;
echo 'Addition is: ', $addition, "\n";
$subtraction = $a - $b;
echo 'Subtraction is: ', $subtraction, "\n";
$multiplication = $a * $b;
echo 'Multiplication is: ', $multiplication, "\n";
if ($b > 0) {
    $modulo = $a % $b;
    echo 'Modulo is: ', $modulo;
} else
    echo 'You cant divide by 0';


?>