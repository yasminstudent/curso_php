<?php

// array_keys => gera um novo array pegando as chaves do parâmetro passado
// array_values => gera um novo array pegando os valores do parâmetro passado

$array = [
    'nome' => 'Yasmin',
    'idade' => 20,
    'empresa' => 'upLexis',
    'cor' => 'Parda',
    'profissao' => 'Developer',
];

$chaves = array_keys($array); // ['nome', 'idade', 'empresa', 'cor', 'profissao']
print_r($chaves);

echo "<br><br>";

$valores = array_values($array); // ['Yasmin', 20, 'upLexis', 'Parda', 'Developer']
print_r($valores)

?>