<?php
/*
    Recebendo parâmetros mas
        -> definindo o tipo esperado
        -> definindo um valor padrão caso nenhum parâmetro seja enviado p/ a função
*/

//o valor padrão de $num2 e $num3 é zero
function somar(int $num1, int $num2 = 0, int $num3 = 0) { 
    return $num1 + $num2 + $num3;
}

echo somar(18) . "<br>";
echo somar(18, 2) . "<br>";
echo somar(18, 2, 4) . "<br>";
echo somar("isso daqui gera um erro, pois espera-se um inteiro") . "<br>";
?>