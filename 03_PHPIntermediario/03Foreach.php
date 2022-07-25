<?php

/*
    mais exemplos em:
    02_PHPBasico/02_condicionaisELoops/07LoopForeach.php
    02_PHPBasico/05_manipulandoArray/04ExercicioTabelaVertical.php
    02_PHPBasico/05_manipulandoArray/05ExercicioTabelaHorizontal.php

    for each -> para cada
    percorre por cada item do array
*/

$ingredientes = ["farinha de trigo", "óleo", "água", "chocolate em pó", "ovo"];

foreach ($ingredientes as $indice => $ingrediente) {
    echo "Item " . ($indice + 1) . ": " . $ingrediente. "<br>";
}
