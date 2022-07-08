<?php

/*
    Alguns operadores lógicos do php:
    && / AND -> Operador E: $a && $b -> Verdadeiro se tanto $a quanto $b são verdadeiros.
    || / OR -> Operador OU: $a || $b -> Verdadeiro se $a ou $b são verdadeiros.
    ! -> OPERADOR NÃO: !$a -> Verdadeiro se $a não é verdadeiro.
*/

$nome = "Yasmin";
$idade = 20;

if($nome == "Yasmin" && $idade == 20){
    echo "Os dados estão corretos";
} else{
    echo "Os dados NÃO estão corretos";
}

?>