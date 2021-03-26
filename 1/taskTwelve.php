<?php
$row = readline('Enter row: ');
$column = readline('Enter column: ');

if ($row > 0 && $column > 0) {

    $matrix = array(array());
    $transposedMatrix = array(array());


    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $column; $j++) {
            $matrix[$i][$j] = rand(5, 15);
        }
    }

    echo "Before transposition: \n";
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $column; $j++) {
            echo "[" . $matrix[$i][$j] . "] ";
        }
        echo "\n";
    }


    echo "After transposition: \n";
    for ($i = 0; $i < $column; $i++) {
        for ($j = 0; $j < $row; $j++) {
            $transposedMatrix[$i][$j] = $matrix[$j][$i];
            echo "[" . $transposedMatrix[$i][$j] . "] ";
        }
        echo "\n";
    }
} else {
    echo "Error";
}
?>