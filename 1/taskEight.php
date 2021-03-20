<?php

$a = readline('Enter first number: ');
$b = readline('Enter second number: ');
$c = readline('Enter second number: ');

$a = (int)$a;
$b = (int)$b;
$c = (int)$c;

$list_for_task = array();
$from_max_list = array();
$from_min_list = array();

array_push($list_for_task, $a, $b, $c);
$list_length = count($list_for_task);

for($i=0;$i<$list_length;$i++){
    $max_value = max($list_for_task);
    $list_for_task = array_diff($list_for_task, array($max_value));
    array_push($from_max_list, $max_value);
}

$from_min_list = array_reverse($from_max_list);

foreach ($from_max_list as $arrayItem) {
    echo $arrayItem, ' ';
}
echo "\n";
foreach ($from_min_list as $arrayItem) {
    echo $arrayItem, ' ';
}
?>