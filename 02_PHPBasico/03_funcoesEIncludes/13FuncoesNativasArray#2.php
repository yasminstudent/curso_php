<?php

function br(){
    echo "<br>";
}

$numeros = [0, 10, 20, 30, 40, 50, 60];

// ----- ARRAY_POP -----
array_pop($numeros); //remove o último item de um array
print_r($numeros);
br();

// ----- ARRAY_SHIFT -----
array_shift($numeros); //remove o primeiro item de um array
print_r($numeros);
br();

// ----- IN_ARRAY -----
if(in_array(15, $numeros)){ //verifica se um item existe em um array
    echo "Existe";
} else{
    echo "Não Existe!";
}
br();

// ----- ARRAY_SEARCH -----
echo array_search(30, $numeros); 
//verifica se um item existe em um array e retorna a posição/índice desse item
br();

// ----- SORT -----
$numerosNovos = [9, 826, 635, 76, 47, 23];
sort($numerosNovos); //ordena os itens de um array em ordem crescente
print_r($numerosNovos);
br();

// ----- RSORT -----
rsort($numerosNovos); //ordena os itens de um array em ordem decrescente
print_r($numerosNovos);
br();

// ----- ASORT -----
$numerosNovos = [9, 826, 635, 19, 76, 47, 23];
sort($numerosNovos); //9, 19, 23, 47, 76, 635, 826
echo "A chave 3 é: ".$numerosNovos[3]; //47
br();


$numerosNovos = [9, 826, 635, 19, 76, 47, 23];
//ordena os itens de um array em ordem crescente, mas mantém a chave antiga
asort($numerosNovos); //9, 19, 23, 47, 76, 635, 826
echo "A chave 3 é: ".$numerosNovos[3]; //19
br();
br();
print_r($numerosNovos);
br();

//para ter o mesmo efeito mas ordernar em ordem decrescente: arsort

// ----- IMPLODE -----
//transforma um array em uma string
$nomes = ["pedro", "thiago", "joão"];
echo implode(', ', $nomes); //pedro, thiago, joão

?>