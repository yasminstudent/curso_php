<?php

// Essa é uma função anônima (não possui nome)
$dizimo = function(int $valor){
    return $valor * 0.1 . "<br>";
};

// Para usa-la basta chamar a variável que a recebeu
echo $dizimo(90);

// Podemos passar a função anônima p/ outra variável
$novaVariavel = $dizimo;
echo $novaVariavel(900);

/* Também podemos receber uma função anônima como parâmetro de outra função
    Ex: algumaFuncao(10, function(){
        //algum código
    })
*/
?>