<?php
//mais exemplos em: 02_PHPBasico\03_funcoesEIncludes\12FuncoesNativasArray#1.php e 13FuncoesNativasArray#2.php

$array = [
    "nome" => "Yasmin",
    "idade" => 20,
    "pais" => "Brasil",
    "cargo" => "Developer"
];

// array_keys -> retorna uma array com as chaves do array recebido
$keys = array_keys($array);
print_r($keys) ; //["nome", "idade", "pais", "cargo"]
echo "<br>";


// array_values -> retorna um array com os valores do array recebido
$values = array_values($array);
print_r($values); //["Yasmin", 20, "Brasil", "Developer"]
echo "<br>";

//----------------------------------------------------------

echo "<br>";
// asort -> ordena os valores de um array em ordem crescente
asort($array);
print_r($array); // [20, Brasil, Developer, Yasmin]
echo "<br>";


// arsort -> ordena os valores de um array em ordem decrescente
arsort($array);
print_r($array); // [Yasmin, Developer, Brasil, 20]
echo "<br>";

//----------------------------------------------------------

echo "<br>";
// count -> retorna quantos itens um array possui
echo count($array); //4
echo "<br>";


// in_array -> verifica se existe determinado valor no array recebido
echo in_array("Yasmin", $array) ? "Tem" : "Não tem"; //Tem
echo "<br>";

//----------------------------------------------------------

echo "<br>";
// array_pop -> deleta o último item do array recebido
array_pop($array); 
print_r($array); //[Yasmin, Developer, Brasil]
echo "<br>";


// array_shift -> deleta o primeiro item do array recebido
array_shift($array); 
print_r($array); //[Developer, Brasil]
