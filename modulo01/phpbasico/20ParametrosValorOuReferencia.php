<?php

/*
    $n1 e $n2 são parâmetros onde recebemos o valor
    $total é um parâmetro onde recebemos a referência da variável passada,
    qualquer alteração em $total afetará diretamente a variável que foi passada
    enquanto que alterações em $n1 e $n2 só existirão dentro da função
*/
function somar($n1, $n2, &$total){
    $total = $n1 + $n2;
}

$x = 10;
$y = 17;
$soma = 0;

somar($x, $y, $soma);
echo $soma; //27

// Algumas funções nativas também recebem parâmetro (s) por referência
echo "<br><br>";
$array = [19, 8, 56];

sort($array); //função nativa para ordernar itens de um array

print_r($array); //8, 19, 56

?>