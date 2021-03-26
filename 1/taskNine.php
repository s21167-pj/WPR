<?php
$arrayOneLength = readline('Enter arrayOne length: ');
$arrayTwoLength = readline('Enter arrayTwo length: ');

if ($arrayOneLength > 0 && $arrayTwoLength > 0) {

    $arrayOne = array();
    $arrayTwo = array();

    if ($arrayOneLength == $arrayTwoLength) {
        $vectorMultiplication = 0;
        for ($i = 0; $i < $arrayOneLength; $i++) {
            $arrayOne[$i] = rand(5, 15);
            $arrayTwo[$i] = rand(5, 15);
            $vectorMultiplication += $arrayOne[$i] * $arrayTwo[$i];
        }
        echo "Array one is: \n";
        print_r($arrayOne);
        echo "\n";
        echo "Array two is: \n";
        print_r($arrayTwo);
        echo "\n";
        echo("Scalar product equals: " . $vectorMultiplication);
        echo "\n";
    } else
        echo 'Vectors are not the same length cant calculate scalar product';
}