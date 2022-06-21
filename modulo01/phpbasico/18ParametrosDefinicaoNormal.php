<?php
/*
    Recebendo valores
*/

function somar($num1, $num2) {
    //variáveis de escopo local (só existe dentro dessa função)
    $totalSoma = $num1 + $num2;
    return $totalSoma;
}

//variáveis de escopo global
$num1 = 10;
$num2 = 5;
$resultadoSoma = somar($num1, $num2);

echo "${num1} + ${num2} = ${resultadoSoma} <br>"; //consigo acessar as variáveis de escopo global
//echo $totalSoma; //não consigo acessar essa variável

$num1 = 20;
$num2 = 4;
$resultadoSoma = somar($num1, $num2);
echo "${num1} + ${num2} = ${resultadoSoma} <br>"; //será que com essa idade eu já vou estar pleno? kk
?>