<?php

$ingredientes = ["farinha de trigo", "óleo", "água", "chocolate em pó", "ovo"];

/*
    1º item: $x = 1 -> declaração inicial do contador
    2º item: $x <= count($ingredientes) -> condição para o laço executar
    3º item: $x++ -> incrementação, executada no fim de cada laço
*/
for ($x = 1; $x <= count($ingredientes); $x++) {
    $indice = $x - 1; //para começar do zero
    echo "Item " . $x . ": " . $ingredientes[$indice] . "<br>";
}
