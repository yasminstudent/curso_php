<?php

$x = 0;
$ingredientes = ["farinha de trigo", "óleo", "água", "chocolate em pó", "ovo"];

while ($x < count($ingredientes)) {
    $ingrediente = $ingredientes[$x];
    echo "Item " . ++$x . ": " . $ingrediente . "<br>";
    
    //++$x -> incrementa primeiro, dps exibe na tela
    //$x++ -> exibe na tela e dps incrementa
}
