<?php
$array = ["Yasmin", 20, "café", "vermelha"];

list ($nome, $idade, $bebida, $cor) = $array;
/*
    o list fará isso aqui:
    $nome = $array[0];
    $idade = $array[1];
    $bebida = $array[2];
    $cor = $array[3];
*/

echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." com a cor ".$cor;

?>