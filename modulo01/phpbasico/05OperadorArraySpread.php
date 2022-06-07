<?php

//Recurso disponível a partir do php 7.4

$baseBolo = [
    'acuçar',
    'farinha de trigo',
    'ovo',
    'fermento em pó'
];

$boloChocolate = [
    'chocolate em pó',
    ...$baseBolo,
    'óleo',
    'água fervida'
];

$boloMorango  = [
    'morangos',
    'leite',
    'corante',
    ...$baseBolo
];

echo $boloMorango[3]; //acuçar

?>