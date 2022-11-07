<?php

$numbers = [1,2,1,10,8,4,6];
$countNumbers = count($numbers);
$stringNumbers = "";

for ($i = 0; $i < $countNumbers; $i++) {
    $stringNumbers .= $numbers[$i] . ",";
}

//remove a última vírgula
$stringNumbers = substr($stringNumbers, 0, -1);
$biggerNumber = max($numbers);

echo "<p>".$stringNumbers."</p>";
echo "<p>MAIOR: ". $biggerNumber . "</p>";
