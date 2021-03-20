<?php
$a = readline('Enter first number: ');
$b = readline('Enter second number: ');
$c = readline('Enter second number: ');

$a = (int)$a;
$b = (int)$b;
$c = (int)$c;

if ($a > 0&&$b > 0&&$c > 0){
    if ($a+$b>$c && $a+$c>$b && $b+$c>$a)
        echo 'Triangle can be built';
    else
        echo 'Error';
}
else
    echo 'Number must be greater than 0';

?>