<?php
//key_exists ou array_key_exists verifica se uma chave existe em determinado array

$array = [
    'nome' => 'Yasmin',
    'idade' => 20,
    'empresa' => 'upLexis',
    'cor' => 'Parda',
    'profissao' => 'Developer',
];

if (key_exists('idade', $array)) {
    echo $array['idade'] . " anos";
} else {
    echo "Não tem idade.";
}

?>