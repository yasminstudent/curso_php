<?php

/*
    Recurso exclusivo para trabalhar com arrays

    For Each = Para Cada
*/

$ingredientesBolo = [
    'Açúcar',
    'Farinha de Trigo',
    'Ovo',
    'Leite',
    'Fermento em pó'
];

echo "<h2>Ingredientes</h2>";

//Na maioria dos casos usa-se assim
foreach($ingredientesBolo as $ingrediente){
    echo "*" . $ingrediente . "<br>";
}

echo "<br>";

//Mas existem casos em que é necessário usar a chave também
foreach($ingredientesBolo as $indice => $ingrediente){
    echo "Item ". ($indice + 1) .": " . $ingrediente . "<br>";
}

?>