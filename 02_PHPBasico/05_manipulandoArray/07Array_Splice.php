<?php

$array = [0, 1, 2, 3, 4, 5];
array_splice($array, 2);
//a partir da posição/índice 2 remove todos os itens em diante
//[0, 1]
//print_r($array);

$array = [0, 1, 2, 3, 4, 5];
array_splice($array, 2, 3);
//a partir da posição/índice 2 remove 3 itens
//[0, 1, 5]
//print_r($array);

$array = [0, 1, 2, 3, 4, 5];
array_splice($array, 2, 2, "F");
//a partir da posição/índice 2 remove 2 itens
//e adiciona "F" na posição do primeiro item que foi removido
//[0, 1, 'F', 4, 5]
//print_r($array);

$array = [0, 1, 2, 3, 4, 5];
array_splice($array, 2, 2, ["F", "G"]);
//a partir da posição/índice 2 remove 2 itens
//e adiciona:
//  "F" na posição do primeiro item que foi removido
//  "G" na posição do segundo item que foi removido
//[0, 1, 'F', 'G', 4, 5]
//print_r($array);



$array = [0, 1, 2, 3, 4, 5];
array_splice($array, 2, 2, ["F", "G", "H"]);
//a partir da posição/índice 2 remove 2 itens
//e adiciona:
//  "F" na posição do primeiro item que foi removido
//  "G" na posição do segundo item que foi removido
//  "H" na posição seguinte
//[0, 1, 'F', 'G', 'H', 4, 5]
print_r($array);

?>