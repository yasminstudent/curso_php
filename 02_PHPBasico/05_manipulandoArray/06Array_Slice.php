<?php
$array = [0, 1, 2, 3, 4, 5];

$retorno = array_slice($array, 2);
// retorna um array pegando os valores da posição/índice 2 em diante
// [2, 3, 4, 5]

$retorno = array_slice($array, 0, 3);
// retorna um array com três itens pegando os valores da posição/índice 0 em diante
// [0, 1, 2]

$retorno = array_slice($array, 2, 3);
// retorna um array com três itens pegando os valores da posição/índice 2 em diante
// [2, 3, 4]

$retorno = array_slice($array, -4, 3);
// retorna um array com três itens pegando os valores da posição/índice 2 em diante
// conta da direita p/ a esquerda (do fim ao início) 4 itens, 
// p/ saber a partir de que posição começar a pegar
// [2, 3, 4]

print_r($retorno);

?>