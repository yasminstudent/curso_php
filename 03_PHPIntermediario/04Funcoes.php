<?php

/*
    Regras p/ criar o nome de uma função:
    1. Não pode ter espaços
    2. Não pode ter caracteres especiais
    3. Não pode ser uma palavra reservada do php
    4. Não pode começar com um número   

    Uma função pode receber 0 ou N parâmetros
    Esses parâmetros são passados quando a função é chamada
*/
$variavelEscopoGlobal = [
    "Eu existo fora da função, portanto só posso ser usada fora dela",
    "ah não ser que eu seja um parâmetro",
];

function nomeDaFuncao ($parametro1, $parametro2) {
    $variavelEscopoLocal = "Eu só existo dentro da função, portanto só posso ser usada aqui";

    return $parametro1 + $parametro2;
}

echo nomeDaFuncao(10, 20); //resultado 30, parametro1 = 10 e parametro2 = 20
