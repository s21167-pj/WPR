<?php
do {
    $n = (int)readline("Podaj n ");
}while($n<0);

for($i=1; $i<=$n; $i++) {
    for($j=1; $j<=$i; $j++)
    { echo '*';}
    echo "\n";
}
for($i=1; $i<=$n; $i++) {
    for($j=$n; $j>=$i; $j--)
    {echo '*';}
    echo "\n";
}
for($i=1; $i<=$n; $i++) {
    for($j=2; $j<=$i; $j++)
    {echo " ";}
    for($k=$n; $k>=$i; $k--)
    {echo '*';}
    echo "\n";
}
for($i=1; $i<=$n; $i++) {
    for($j=$n-1; $j>=$i; $j--)
    {echo " ";}
    for($k=1; $k<=$i; $k++)
    {echo '*';}
    echo "\n";
}
?>